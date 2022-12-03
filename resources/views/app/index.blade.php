@extends('app.master')
@section('title','Home')
@section('content')

{{-- Swiper Section start --}}
<section class="max-width">
    <div class="swiper-container swiper-slider swiper-variant-1 bg-black" data-loop="false" data-autoplay="5500"
        data-simulate-touch="true">
        <div class="swiper-wrapper text-center">

            {{-- 1st slide swiper start --}}
            <div class="swiper-slide" data-slide-bg="images/banner1.jpg">
                <div class="swiper-slide-caption text-center">
                    <div class="container">
                        <div class="row justify-content-md-center">
                            <div class="col-md-11 col-lg-10 col-xl-9">
                                <div class="header-decorated" data-caption-animate="fadeInUp" data-caption-delay="0s">
                                    <h3 class="medium text-primary">With Us</h3>
                                </div>
                                <h2 class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="150">You
                                    Are Always
                                    One Step Ahead</h2>
                                <p class="text-bigger slider-text" data-caption-animate="fadeInUp"
                                    data-caption-delay="250">
                                    Strategies of our attorneys will help you solve very complex legal issues.</p>
                                <div class="button-block" data-caption-animate="fadeInUp" data-caption-delay="400"><a
                                        class="button button-lg button-primary-outline-v2" href="#">Request a Free
                                        Consultation</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- 1st slide swiper end --}}


            {{-- 2nd slide swiper start --}}
            <div class="swiper-slide" data-slide-bg="images/banner2.jpg">
                <div class="swiper-slide-caption text-center">
                    <div class="container">
                        <div class="row justify-content-md-center">
                            <div class="col-md-11 col-lg-10 col-xl-9">
                                <div class="header-decorated" data-caption-animate="fadeInUp" data-caption-delay="0s">
                                    <h3 class="medium text-primary">We Offer</h3>
                                </div>
                                <h2 class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="150">
                                    Affordable and
                                    Effective Legal Help</h2>
                                <p class="text-bigger slider-text" data-caption-animate="fadeInUp"
                                    data-caption-delay="250">Our
                                    expert team of attorneys and consultants will be glad to provide necessary legal
                                    assistance.</p>
                                <div class="button-block" data-caption-animate="fadeInUp" data-caption-delay="400"><a
                                        class="button button-lg button-primary-outline-v2" href="#">Request a Free
                                        Consultation</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- 2nd slide swiper end --}}

            {{-- 3rd slide swiper start--}}
            <div class="swiper-slide" data-slide-bg="images/banner3.jpg">
                <div class="swiper-slide-caption text-center">
                    <div class="container">
                        <div class="row justify-content-md-center">
                            <div class="col-md-11 col-lg-10 col-xl-9">
                                <div class="header-decorated" data-caption-animate="fadeInUp" data-caption-delay="0s">
                                    <h3 class="medium text-primary">With Our Services</h3>
                                </div>
                                <h2 class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="150">You
                                    Will Get
                                    Extensive Legal Support</h2>
                                <p class="text-bigger slider-text" data-caption-animate="fadeInUp"
                                    data-caption-delay="250">We
                                    have years of experience in providing legal help in various spheres of law.</p>
                                <div class="button-block" data-caption-animate="fadeInUp" data-caption-delay="400"><a
                                        class="button button-lg button-primary-outline-v2" href="#">Request a Free
                                        Consultation</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- 3rd slide swiper end--}}

        </div>

        {{-- Swiper Controllers start --}}
        <div class="swiper-scrollbar d-lg-none"></div>
        <div class="swiper-nav-wrap">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        {{-- Swiper Controllers end --}}
    </div>
</section>
{{-- Swiper Section end --}}


{{-- What we Offer Start --}}
<section class="section-50 section-md-75 section-lg-100">
    <div class="container">
        <h3 class="text-center">What Do We Offer</h3>
        <div class="row px-5 d-flex justify-content-between">

            {{-- 1st offer start --}}
            <div class="col-md-6 col-lg-4 height-fill">
                <article class="icon-box">
                    <div class="box-top">
                        <div class="box-icon"><span
                                class="novi-icon icon icon-primary icon-lg mercury-icon-lightbulb-gears"></span>
                        </div>
                        <div class="box-header">
                            <h5><a href="#">Creativity</a></h5>
                        </div>
                    </div>
                    <div class="divider bg-accent"></div>
                    <div class="box-body">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere neque temporibus iure
                            inventore
                        </p>
                    </div>
                </article>
            </div>
            {{-- 1st offer end --}}

            {{-- 2nd offer start --}}
            <div class="col-md-6 col-lg-4 height-fill">
                <article class="icon-box">
                    <div class="box-top">
                        <div class="box-icon"><span
                                class="novi-icon icon icon-primary icon-lg mercury-icon-partners"></span>
                        </div>
                        <div class="box-header">
                            <h5><a href="#">Partnership</a></h5>
                        </div>
                    </div>
                    <div class="divider bg-accent"></div>
                    <div class="box-body">
                        <p>Lorem ipsum dolor sit, amet consectetur Lorem ipsum dolor sit. adipisicing elit. Aperiam,
                            sequi.
                        </p>
                    </div>
                </article>
            </div>
            {{-- 2nd offer end --}}

            {{-- 3rd offer start --}}
            <div class="col-md-6 col-lg-4 height-fill">
                <article class="icon-box">
                    <div class="box-top">
                        <div class="box-icon"><span
                                class="novi-icon icon icon-primary icon-lg mercury-icon-chart-up-2"></span>
                        </div>
                        <div class=" box-header">
                            <h5><a href="#">Social Marketing</a></h5>
                        </div>
                    </div>
                    <div class="divider bg-accent"></div>
                    <div class="box-body">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore quaerat eaque cumque..</p>
                    </div>
                </article>
            </div>
            {{-- 3rd offer end --}}

        </div>
    </div>
</section>
{{-- what we offer end --}}

{{-- About us start --}}

<section class="bg-displaced-wrap" style="margin-bottom:10rem; background: #F0F4F8">
    <div class="bg-displaced-body">
        <div class="container">
            <div class="px-5 ">
                <article class="box-cart bg-ebony-clay">
                    <div class="box-cart-image"><img class="ahmad-salman-img" src="images/ahmad-salman.jpeg" alt=""
                            width="342" height="338" />
                    </div>
                    <div class="box-cart-body">
                        <blockquote class="blockquote-complex blockquote-complex-inverse">
                            <h3>About Us</h3>
                            <p>
                                <q>When you place your career in the hands of our crew, you are placing your career
                                    in the hands of professionals who are committed to achieving the best possible
                                    outcome.</q>
                            </p>
                            <div class="quote-footer">
                                <cite>Ahmad Salman</cite><small>CEO at Onliners</small>
                            </div>
                        </blockquote>
                        <div class="button-wrap inset-md-left-70"><a
                                class="button button-responsive button-medium button-primary-outline-v2"
                                href="/appointment">Join
                                Us For Free</a></div>
                    </div>
                </article>
            </div>
        </div>
    </div>
    <div class="bg-displaced bg-image" style="background-image: url(ima);"></div>
</section>
{{-- About us end --}}


{{-- Statistics Section start --}}

<section class="section parallax-container bg-black mt-5 " data-parallax-img="images/banner1.jpg">
    <div class="parallax-content">
        <div class="section-50 section-md-90">
            <div class="container">
                <div class="row row-40">
                    <div class="col-sm-6 col-md-3">
                        <div class="box-counter box-counter-inverse">
                            <span class="novi-icon icon icon-lg icon-primary">
                                <i class="fa-solid fa-users" style="color:white"></i>
                            </span>
                            <div class="text-large counter">{{count($users)}}</div>
                            <p class="box-header"> Active Users</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="box-counter box-counter-inverse">
                            <span class="novi-icon icon icon-lg-smaller icon-primary ">
                                <i class="fa-solid fa-calendar-check" style="color:white"></i>
                            </span>
                            <div class="text-large counter">23</div>
                            <p class="box-header">Years of Experience</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="box-counter box-counter-inverse">
                            <span class="novi-icon icon icon-lg-smaller icon-primary">
                                <i class="fa-solid fa-handshake" style="color:white"></i>
                            </span>
                            <div class="text-large counter ">15</div>
                            <p class="box-header"> Partner Institution</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="box-counter box-counter-inverse">
                            <span class="novi-icon icon icon-lg icon-primary">
                                <i class="fa-solid fa-clapperboard" style="color:white"></i>
                            </span>
                            <div class="text-large counter">45</div>
                            <p class="box-header">Show Production</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Statistics Section end --}}



{{-- Gallery start --}}

<section class="section section-sm section-top-0 section-fluid section-relative bg-gray-4"
    style="background: #F0F4F8; margin:10rem 0">
    <div class="container py-5 my-5">
        <h3 class="text-center">Our Top Streamers</h3>
        <!-- Owl Carousel-->
        <div class="owl-carousel owl-classic owl-dots-secondary " data-items="1" data-sm-items="1" data-md-items="2"
            data-lg-items="3" data-xl-items="4" data-xxl-items="5" data-stage-padding="15" data-xxl-stage-padding="0"
            data-margin="30" data-autoplay="true" data-nav="true" data-dots="true">

            @foreach($topStreamers as $user)
            <div class="thumbnail thumbnail-variant-2 ">
                <figure class="thumbnail-image">
                    <img style="max-width:100%; height:350px; object-fit:cover" src="{{asset('storage/'.$user->image)}}"
                        alt="" />
                </figure>
                <div class="thumbnail-inner">
                    <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary"></span>
                        {{-- material-icons-local_phone --}}
                        {{-- <a class="link-white" href="tel:+962778086352">+962 (77) 808–6352</a> --}}
                    </div>
                    <div class="link-group">
                        <span class="novi-icon icon icon-xxs icon-primary  ">
                            <i class="fa-regular fa-envelope" style="color:#FF4B2B"></i>

                        </span>
                        <a class="link-white" href="mailto:{{$user->email}}">{{$user->email}}</a>
                    </div>
                </div>
                <div class="thumbnail-caption">
                    <p class="text-header"><a href="profile/{{$user->id}}">{{$user->name}}</a></p>
                    <div class="divider divider-md bg-teak"></div>
                    <p class="text-caption">{{$user->rank}}</p>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

{{-- Gallery end --}}



{{-- Teatmonials start --}}

<section class="section-66 section-md-90 section-xl-bottom-100">
    <div class="container">
        <h3 class="text-center">Testimonials</h3>
        <div class="owl-carousel owl-spacing-1 owl-nav-classic owl-style-minimal" data-autoplay="true" data-items="1"
            data-md-items="2" data-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="true"
            data-nav="true" data-dots="false" data-dots-each="1">
            <div class="item">
                <blockquote class="quote-bordered">
                    <div class="quote-body">
                        <div class="quote-open">
                            <svg version="1.1" baseprofile="tiny" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="37px" height="27px"
                                viewbox="0 0 21 15" preserveAspectRatio="none">
                                <path
                                    d="M9.597,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.349,1.316                    c-1.287,0-2.414-0.44-3.382-1.316C0.482,12.811,0,11.758,0,10.535c0-1.226,0.58-2.716,1.739-4.473L5.603,0H9.34L6.956,6.37                    C8.716,7.145,9.597,8.493,9.597,10.412z M20.987,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.35,1.316                    c-1.288,0-2.415-0.44-3.381-1.316c-0.966-0.879-1.45-1.931-1.45-3.154c0-1.226,0.582-2.716,1.74-4.473L16.994,0h3.734l-2.382,6.37                    C20.106,7.145,20.987,8.493,20.987,10.412z">
                                </path>
                            </svg>
                        </div>
                        <div class="quote-body-inner">
                            <h6>One of The Most Ethical Lawyers I’ve Ever Known...</h6>
                            <p>
                                <q>I’ve never known another lawyer more prepared or focused. John has the ability to
                                    dissect a
                                    case much like a skilled surgeon, with absolute calm. Nothing seems to distract him
                                    from his
                                    goal on a case, which of course, makes him extremely tough to beat.</q>
                            </p>
                        </div>
                    </div>
                    <div class="quote-footer">
                        <div class="unit unit-horizontal unit-spacing-sm align-items-center">
                            <div class="unit-left"><img class="img-circle" src="images/clients-testimonials-1-68x68.jpg"
                                    alt="" width="68" height="68" />
                            </div>
                            <div class="unit-body">
                                <cite>Mark Wilson</cite>
                                <p class="text-primary">CFO, Wilson Ltd.</p>
                            </div>
                        </div>
                    </div>
                </blockquote>
            </div>
            <div class="item">
                <blockquote class="quote-bordered">
                    <div class="quote-body">
                        <div class="quote-open">
                            <svg version="1.1" baseprofile="tiny" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="37px" height="27px"
                                viewbox="0 0 21 15" preserveAspectRatio="none">
                                <path
                                    d="M9.597,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.349,1.316                    c-1.287,0-2.414-0.44-3.382-1.316C0.482,12.811,0,11.758,0,10.535c0-1.226,0.58-2.716,1.739-4.473L5.603,0H9.34L6.956,6.37                    C8.716,7.145,9.597,8.493,9.597,10.412z M20.987,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.35,1.316                    c-1.288,0-2.415-0.44-3.381-1.316c-0.966-0.879-1.45-1.931-1.45-3.154c0-1.226,0.582-2.716,1.74-4.473L16.994,0h3.734l-2.382,6.37                    C20.106,7.145,20.987,8.493,20.987,10.412z">
                                </path>
                            </svg>
                        </div>
                        <div class="quote-body-inner">
                            <h6>LawExpert is One of The Best...</h6>
                            <p>
                                <q>John Doe is one of those attorneys who has it all-talent and skill, compassion for
                                    his clients,
                                    and the ability to communicate well with anyone he meets. This is one of the best
                                    combinations
                                    for a trial attorney and he is one of the best.</q>
                            </p>
                        </div>
                    </div>
                    <div class="quote-footer">
                        <div class="unit unit-horizontal unit-spacing-sm align-items-center">
                            <div class="unit-left"><img class="img-circle" src="images/clients-testimonials-2-68x68.jpg"
                                    alt="" width="68" height="68" />
                            </div>
                            <div class="unit-body">
                                <cite>Amanda Eberson</cite>
                                <p class="text-primary">CEO, Eberson Co.</p>
                            </div>
                        </div>
                    </div>
                </blockquote>
            </div>
        </div>
    </div>
</section>
{{-- Teatmonials end --}}


{{-- Pricing start --}}


<section class="py-5" style="background: #F0F4F8; margin:10rem 0 ;">
    <div class="section  py-5">
        <div class="container">
            <div class="row items">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h3 class="mb-5">Pricing</h3>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 item">
                    <!-- Begin pricing item -->
                    <div class="pricing-item item-style">
                        <header class="pricing-item-header">
                            <div class="pricing-item-heading">Basic</div>
                            <div class="pricing-item-price"><small>from</small> 50$</div>
                        </header>
                        <div class="pricing-item-h ">
                            <div class="pricing-item-content">
                                <ul class="pricing-item-list pricing-1">
                                    <li class="active">
                                        <i class="fa-solid fa-check"></i>
                                        Concept development
                                    </li>
                                    <li class="active">
                                        <i class="fa-solid fa-check"></i>
                                        UI/UX design
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Configuration management
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Software quality assurance
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        App integration
                                    </li>
                                </ul>
                            </div>
                            <footer class="pricing-item-footer">
                                <a href="#!" class="btn btn-large btn-with-icon btn-wide ripple" id="basicPlane">
                                    <span>Get Starter</span>
                                    <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                                        <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                                    </svg>
                                    <span class="el-ripple-circle" style="left: 272.4px; top: 61px;"></span>
                                </a>
                            </footer>
                        </div>
                    </div><!-- End pricing item -->
                </div>


                <div class="col-lg-4 col-md-6 col-12 item">
                    <!-- Begin pricing item -->
                    <div class="pricing-item item-style">
                        <div class="pricing-item-badge">Best Deal</div>
                        <header class="pricing-item-header">
                            <div class="pricing-item-heading">Optimal</div>
                            <div class="pricing-item-price"><small>from</small> 100$</div>
                        </header>
                        <div class="pricing-item-h pricing-2">
                            <div class="pricing-item-content">
                                <ul class="pricing-item-list">
                                    <li class="active">
                                        <i class="fa-solid fa-check"></i>
                                        Concept development
                                    </li>
                                    <li class="active">
                                        <i class="fa-solid fa-check"></i>
                                        UI/UX design
                                    </li>
                                    <li class="active">
                                        <i class="fa-solid fa-check"></i>
                                        Configuration management
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Software quality assurance
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        App integration
                                    </li>
                                </ul>
                            </div>
                            <footer class="pricing-item-footer">
                                <a href="#!" class="btn btn-border btn-large btn-with-icon btn-wide ripple"
                                    id="obtimalPlane">
                                    <span>Get Starter</span>
                                    <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                                        <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                                    </svg>
                                    <span class="el-ripple-circle" style="left: 359.412px; top: 49px;"></span>
                                </a>
                            </footer>
                        </div>
                    </div><!-- End pricing item -->
                </div>
                <div class="col-lg-4 col-md-12 col-12 item">
                    <!-- Begin pricing item -->
                    <div class="pricing-item item-style">
                        <header class="pricing-item-header">
                            <div class="pricing-item-heading">Ultimate</div>
                            <div class="pricing-item-price"><small>from</small> 200$</div>
                        </header>
                        <div class="pricing-item-h pricing-3">
                            <div class="pricing-item-content">
                                <ul class="pricing-item-list">
                                    <li class="active">
                                        <i class="fa-solid fa-check"></i>
                                        Concept development
                                    </li>
                                    <li class="active">
                                        <i class="fa-solid fa-check"></i>
                                        UI/UX design
                                    </li>
                                    <li class="active">
                                        <i class="fa-solid fa-check"></i>
                                        Configuration management
                                    </li>
                                    <li class="active">
                                        <i class="fa-solid fa-check"></i>
                                        Software quality assurance
                                    </li>
                                    <li class="active">
                                        <i class="fa-solid fa-check"></i>
                                        App integration
                                    </li>
                                    <li class="active">
                                        <i class="fa-solid fa-check"></i>
                                        Custom settings
                                    </li>
                                </ul>
                            </div>
                            <footer class="pricing-item-footer">
                                <a href="#!" class="btn btn-large btn-with-icon btn-wide ripple" id="ultimatePlane">
                                    <span>Get Starter</span>
                                    <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                                        <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                                    </svg>
                                    <span class="el-ripple-circle" style="left: 180.425px; top: -108px;"></span>
                                </a>
                            </footer>
                        </div>
                    </div><!-- End pricing item -->
                </div>
            </div>
        </div>
    </div>

    {{-- modal setup --}}

    <button type="button" class="btn text-success bg-transparent" style="box-shadow: none;" data-toggle="modal"
        onclick="focus()" data-target="#joinModal" autofocus id="modalTrigger">Inschrijven
    </button>

    <div class="modal" id="joinModal" tabindex="0" role="dialog" aria-labelledby="joinModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle"> </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="payment" method="post" onsubmit="triggerAlert()">
                        @csrf
                        <input type="hidden" name="plan" id="paymentPlan">
                        <div class="form-group">
                            <label for="fullName">Full Name</label>
                            <input type="text" class="form-control" id="fullName" name="name" placeholder="John Doe"
                                autofocus value="{{Auth::user()->name}}" disabled>
                        </div>

                        <div class=" form-group">
                            <label for="phoneNumber">Phone Number</label>
                            <input type="text" class="form-control" id="phoneNumber" name="phone"
                                placeholder="enter your phone number started with 07" required minlength="7">
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address </label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="john-doe@email.com" value="{{Auth::user()->email}} " disabled>
                        </div>

                        <div class="form-group">
                            <label for="studio">Choose a studio location to pay at</label>
                            <select class="form-control" id="studio" name="studio_id" required>
                                @foreach($studios as $studio)
                                <option value="{{$studio->id}}">{{$studio->location}}</option>
                                @endforeach
                            </select>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="confirmPayment">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>


@auth
<script>
    const modalBtn = document.getElementById('modalTrigger');
    modalBtn.style.display = 'none';
    const basicPlane = document.getElementById('basicPlane');
    const obtimalPlane = document.getElementById('obtimalPlane');
    const ultimatePlane = document.getElementById('ultimatePlane');
    const modalTitle = document.getElementById('modalTitle');
    const paymentPlan = document.getElementById('paymentPlan');


    // for basic plan
    basicPlane.addEventListener('click', ()=>{
        modalBtn.click();
modalTitle.innerText ="Complete payment - Basic plane";
paymentPlan.value='basic';
    });


    // for obtimal plan
    obtimalPlane.addEventListener('click', ()=>{
        modalBtn.click();
modalTitle.innerText ="Complete payment - Obtimal plane";
paymentPlan.value='obtimal';
    });


    // for ultimate plan
    ultimatePlane.addEventListener('click', ()=>{
        modalBtn.click();
modalTitle.innerText ="Complete payment - Ultimate plane";
paymentPlan.value='ultimate';
    });

    // alert when confirm payment

    const triggerAlert = ()=>{

        Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Your request has been sent',
        showConfirmButton: false,
        timer: 1500,
        customClass:'swal-alert'
        })
    };
</script>
@endauth

@guest
<script>
    const basicPlane = document.getElementById('basicPlane');
    const obtimalPlane = document.getElementById('obtimalPlane');
    const ultimatePlane = document.getElementById('ultimatePlane');

    basicPlane.addEventListener('click', ()=>{
Swal.fire({
icon: 'info',
title: 'Authorization Failed',
text: 'Please login first!',
footer: '<a href="/register">Login from here</a>',
customClass: 'swal-alert'
})
  });

    obtimalPlane.addEventListener('click', ()=>{
Swal.fire({
icon: 'info',
title: 'Authorization Failed',
text: 'Please login first!',
footer: '<a href="/register">Login from here</a>',
customClass: 'swal-alert'
})
  });

    ultimatePlane.addEventListener('click', ()=>{
Swal.fire({
icon: 'info',
title: 'Authorization Failed',
text: 'Please login first!',
footer: '<a href="/register">Login from here</a>',
customClass: 'swal-alert'
})
  });
</script>

@endguest

@endsection
