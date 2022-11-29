<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{

    // move to signup and login page
    public function create()
    {
        return view('user.register');
    }


    // store new user data
    public function store(Request $request)
    {
        // dd($request->all());
        $formFields = $request->validate(
            [
                'first_name' => ['required', 'min:3'],
                'last_name' => ['required', 'min:3'],
                'email' => ['required', 'email', Rule::unique('users', 'email')],
                'password' => 'required|confirmed|regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/',
            ],
            [
                'password.regex' => 'The password should have minimum eight characters,
            at least one letter, one number and one special character'
            ]
        );


        // Hash Password
        $formFields['password'] = Hash::make($formFields['password']);

        // Create user
        $user = new User();
        $user->name = ucfirst(strtolower($formFields['first_name'])) . ' ' . ucfirst(strtolower($formFields['last_name']));
        $user->email = strtolower($formFields['email']);
        $user->password = $formFields['password'];
        $user->save();

        // Create a Registration Event for Email Verification
        // event(new Registered($user));

        // Login
        auth()->login($user);

        return redirect()->intended('/')->with('success', 'account created successfully');
        // return redirect('/email/verify');
    }

    // logout controller
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->intended('/')->with('success', 'loged out successfully');
    }

    // login controller
    public function authenticate(Request $request)
    {
        $formFields = $request->validate(
            [
                'email' => ['required', 'email'],
                'password' => 'required'
            ]
        );

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();
            $user = auth()->user();
            return redirect()->intended('/')->with("Welcome $user->name");
        }
        return back()->withErrors(['email' => 'invalid email or password'])->onlyInput('password');
    }

    // return my profile page
    public  function Profile($id = null)
    {
        if ($id) {
            return view('user.profile', ['user' => User::findOrFail($id)]);
        }
        $user = Auth::user();
        return view('user.profile', ['user' => $user]);
    }

    // update my profile
    public  function updateProfile(Request $request)
    {
        $user = Auth::user();
        // in case of profile picture update
        if ($request->hasFile('image')) {
            $this->validate($request, ['file' => 'image']);
            $user->image = $request->file('image')->store('logos', 'public');
            $user->save();
            return back()->with('success', 'Profile picture updated successfully');
        }
        // in case of profile cover update
        else if ($request->hasFile('cover')) {
            $this->validate($request, ['file' => 'image']);
            $user->cover = $request->file('cover')->store('logos', 'public');
            $user->save();
            return back()->with('success', 'Profile cover was updated successfully');
        } else {
            return back()->with('error', 'Bad request');
        }
    }
}
