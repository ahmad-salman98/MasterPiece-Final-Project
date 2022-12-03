<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Video;
use App\Models\Studio;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //show main page
    public function index()
    {
        $usersList = User::all();
        $videos = Video::all();

        // order users by their videos views sum
        $videosViews = Video::selectRaw('sum(views)')
            ->whereColumn('user_id', 'users.id')
            ->getQuery();

        $users = User::select('users.*')
            ->selectSub($videosViews, 'videos_views')
            ->orderBy('videos_views', 'DESC')
            ->get();

        $studios = Studio::all();

        return view('app.index', ['users' => $usersList, 'videos' => $videos, 'topStreamers' => $users, 'studios' => $studios]);
    }

    // view checkout page
    public function checkout()
    {
        return view('app.checkout');
    }


    // view about page

    public function about()
    {
        return view('app.about');
    }

    public function payment(Request $request)
    {
        // dd($request);
        $user = Auth::user();
        $payment = new Payment;
        $payment->user_id = $user->id;
        $payment->plan = $request->plan;
        $payment->studio_id = $request->studio_id;
        $payment->phone = $request->phone;
        $payment->save();
        return redirect()->back();
    }
}
