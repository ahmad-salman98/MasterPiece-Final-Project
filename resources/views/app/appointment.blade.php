@extends('app.master')

@section('title','Appointment')

@section('content')

{{-- Google Maps --}}
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<style type="text/css">
    #map {
        height: 400px;
    }
</style>

{{-- Breadcrumb --}}

<section class="section-30 section-md-40 section-lg-66 section-xl-bottom-90 bg-gray-dark page-title-wrap"
    style="background-image: url(images/banner2.jpg);">
    <div class="container">
        <div class="page-title">
            <h2>Appointment</h2>
        </div>
    </div>
</section>

{{-- Content --}}
<section class="bg-whisper" style="margin: 10rem 0 ">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 d-none d-xl-block">
                <div style="height:100%"><img style="height:100%; max-width:100%; object-fit:cover"
                        src="images/banner1.jpg" alt="" width="472" height="753" />
                </div>
            </div>
            <div class="col-md-10 col-lg-9 col-xl-7">
                <div class="section-50 section-md-75 section-xl-100">
                    <h3>Book an appointment </h3>
                    <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact"
                        method="post" action="bat/rd-mailform.php">
                        <div class="row row-30">
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <input class="form-input" id="request-form-name" type="text" name="name"
                                        data-constraints="">
                                    <label class="form-label" for="request-form-name">Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <input class="form-input" id="request-form-phone" type="text" name="phone"
                                        data-constraints="">
                                    <label class="form-label" for="request-form-phone">Phone</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <input class="form-input" id="request-form-email" type="email" name="email"
                                        data-constraints="">
                                    <label class="form-label" for="request-form-email">Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-wrap form-wrap-outside">
                                    <!--Select 2-->
                                    <select class="form-input select-filter" id="request-form-select"
                                        data-minimum-results-for-search="Infinity">
                                        <option disabled selected>Choose a studio</option>
                                        <option value="Family Law">Zarqa - Russiefeh</option>
                                        <option value="Business Law">Amman - khalda</option>
                                        <option value="Civil Litigation">Amman - down town</option>
                                    </select>
                                </div>
                            </div>



                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <!--Select 2-->
                                    <select class="form-input select-filter" id="request-form-select"
                                        data-minimum-results-for-search="Infinity">
                                        <option disabled selected>Time start</option>
                                        <option value="#">8:00 am</option>
                                        <option value="#">9:00 am</option>
                                        <option value="#">10:00 am</option>
                                        <option value="#">11:00 am</option>
                                        <option value="#">12:00 pm</option>
                                        <option value="#">1:00 pm</option>
                                        <option value="#">2:00 pm</option>
                                        <option value="#">3:00 pm</option>
                                        <option value="#">4:00 pm</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <!--Select 2-->
                                    <select class="form-input select-filter" id="request-form-select"
                                        data-minimum-results-for-search="Infinity">
                                        <option disabled selected>Time end</option>
                                        <option value="#">9:00 am</option>
                                        <option value="#">10:00 am</option>
                                        <option value="#">11:00 am</option>
                                        <option value="#">12:00 pm</option>
                                        <option value="#">1:00 pm</option>
                                        <option value="#">2:00 pm</option>
                                        <option value="#">3:00 pm</option>
                                        <option value="#">4:00 pm</option>
                                        <option value="#">5:00 pm</option>

                                    </select>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <input class="form-input bg-white" id="balance" disabled type="text"
                                        data-constraints="">
                                    <label class="form-label" for="balance">Remaining Balance : 32 hour</label>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <input class="form-input bg-white" id="cost" disabled type="text"
                                        data-constraints="">
                                    <label class="form-label" for="cost">Booking Cost : 3 hours</label>
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="row">
                                    <div class=" offset-6 col-md-6">
                                        <a href="/checkout " class="button button-block button-primary" type="submit">
                                            Proceed to checkout
                                            <i class="fa-solid fa-circle-chevron-right ml-3"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>


@endsection
