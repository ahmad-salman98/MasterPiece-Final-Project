@extends('app.master')
@section('profile-style')
<link rel="stylesheet" href="css/profile.css">
@endsection
@section('title','Profile')

@section('content')
<div class="container mx-auto" style="margin: 10rem 0">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-content">

                <!-- ***** Banner Start ***** -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-profile ">
                            <div class="row">
                                <div class="col-lg-4">
                                    <img src="images/profile.jpg" alt="" style="border-radius: 23px;">
                                </div>
                                <div class="col-lg-4 align-self-center">
                                    <div class="main-info header-text">
                                        <h4 class="my-auto mr-5 m-0 dark">Ahmad Salman </h4>

                                        <div class="button-wrap ">
                                            <a style="background-color:#cca876"
                                                class=" button button-responsive button-medium button-primary-outline-v2"
                                                href="/appointment">Join
                                                Us For Free</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-4 align-self-center">
                                    <ul>
                                        <li>Games Downloaded <span>3</span></li>
                                        <li>Friends Online <span>16</span></li>
                                        <li>Live Streams <span>None</span></li>
                                        <li>Clips <span>29</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="clips">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="heading-section">
                                                    <h4><em>Your Most Popular</em> Clips</h4>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <div class="item">
                                                    <div class="thumb">
                                                        <img src="assets/images/clip-01.jpg" alt="" class="clip">
                                                        <a href="https://www.youtube.com/watch?v=r1b03uKWk_M"
                                                            target="_blank"><i class="fa fa-play"></i></a>
                                                    </div>
                                                    <div class="down-content">
                                                        <h4>First Clip</h4>
                                                        <span><i class="fa fa-eye"></i> 250</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <div class="item">
                                                    <div class="thumb">
                                                        <img src="images/banner2.jpg" alt="" class="clip">
                                                        <a href="https://www.youtube.com/watch?v=r1b03uKWk_M"
                                                            target="_blank"><i class="fa fa-play"></i></a>
                                                    </div>
                                                    <div class="down-content">
                                                        <h4>Second Clip</h4>
                                                        <span><i class="fa fa-eye"></i> 183</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <div class="item">
                                                    <div class="thumb">
                                                        <img src="images/banner3.jpg" alt="" class="clip">
                                                        <a href="https://www.youtube.com/watch?v=r1b03uKWk_M"
                                                            target="_blank"><i class="fa fa-play"></i></a>
                                                    </div>
                                                    <div class="down-content">
                                                        <h4>Third Clip</h4>
                                                        <span><i class="fa fa-eye"></i> 141</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <div class="item">
                                                    <div class="thumb">
                                                        <img src="images/banner1.jpg" alt="" class="clip">
                                                        <a href="https://www.youtube.com/watch?v=r1b03uKWk_M"
                                                            target="_blank"><i class="fa fa-play"></i></a>
                                                    </div>
                                                    <div class="down-content">
                                                        <h4>Fourth Clip</h4>
                                                        <span><i class="fa fa-eye"></i> 91</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="main-button">
                                                    <a href="#">Load More Clips</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Banner End ***** -->

                <!-- ***** Gaming Library Start ***** -->
                <div class="gaming-library profile-library">
                    <div class="col-lg-12">
                        <div class="heading-section">
                            <h4><em>Your Gaming</em> Library</h4>
                        </div>
                        <div class="item">
                            <ul>
                                <li><img src="images/banner1.jpg" alt="" class="templatemo-item"></li>
                                <li>
                                    <h4>Dota 2</h4><span>Sandbox</span>
                                </li>
                                <li>
                                    <h4>Date Added</h4><span>24/08/2036</span>
                                </li>
                                <li>
                                    <h4>Hours Played</h4><span>634 H 22 Mins</span>
                                </li>
                                <li>
                                    <h4>Currently</h4><span>Downloaded</span>
                                </li>
                                <li>
                                    <div class="main-border-button border-no-active"><a href="#">Donwloaded</a></div>
                                </li>
                            </ul>
                        </div>
                        <div class="item">
                            <ul>
                                <li><img src="assets/images/game-02.jpg" alt="" class="templatemo-item"></li>
                                <li>
                                    <h4>Fortnite</h4><span>Sandbox</span>
                                </li>
                                <li>
                                    <h4>Date Added</h4><span>22/06/2036</span>
                                </li>
                                <li>
                                    <h4>Hours Played</h4><span>745 H 22 Mins</span>
                                </li>
                                <li>
                                    <h4>Currently</h4><span>Downloaded</span>
                                </li>
                                <li>
                                    <div class="main-border-button border-no-active"><a href="#">Donwloaded</a></div>
                                </li>
                            </ul>
                        </div>
                        <div class="item last-item">
                            <ul>
                                <li><img src="assets/images/game-03.jpg" alt="" class="templatemo-item"></li>
                                <li>
                                    <h4>CS-GO</h4><span>Sandbox</span>
                                </li>
                                <li>
                                    <h4>Date Added</h4><span>21/04/2022</span>
                                </li>
                                <li>
                                    <h4>Hours Played</h4><span>632 H 46 Mins</span>
                                </li>
                                <li>
                                    <h4>Currently</h4><span>Downloaded</span>
                                </li>
                                <li>
                                    <div class="main-border-button border-no-active"><a href="#">Donwloaded</a></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ***** Gaming Library End ***** -->
            </div>
        </div>
    </div>
</div>


@endsection