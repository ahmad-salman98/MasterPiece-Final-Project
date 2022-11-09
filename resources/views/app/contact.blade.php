@extends('app.master')
@section('title','Contact')

@section('content')
<section class="section-30 section-md-40 section-lg-66 section-xl-bottom-90 bg-gray-dark page-title-wrap"
    style="background-image: url(images/banner2.jpg);">
    <div class="container">
        <div class="page-title">
            <h2>Contact us</h2>
        </div>
    </div>
</section>

<!-- Contact information-->
<section class="section section-sm section-first bg-default" style="margin: 10rem 0">
    <div class="container">
        <div class="row row-30 justify-content-center">
            <div class="col-sm-8 col-md-6 col-lg-4">
                <article class="box-contacts">
                    <div class="box-contacts-body">
                        <div class="box-contacts-icon "><i class="fa-solid fa-phone fa-sm"></i></i></i></div>
                        <div class="box-contacts-decor"></div>
                        <p class="box-contacts-link"><a href="tel:#">+1 323-913-4688</a></p>
                        <p class="box-contacts-link"><a href="tel:#">+1 323-888-4554</a></p>
                    </div>
                </article>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-4">
                <article class="box-contacts">
                    <div class="box-contacts-body">
                        <div class="box-contacts-icon"><i class="fa-solid fa-house fa-sm"></i></div>
                        <div class="box-contacts-decor"></div>
                        <p class="box-contacts-link"><a href="#">4730 Crystal Springs Dr, Los Angeles, CA 90027</a></p>
                    </div>
                </article>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-4">
                <article class="box-contacts">
                    <div class="box-contacts-body">
                        <div class="box-contacts-icon"> <i class="fa-regular fa-comment-dots fa-sm"></i> </div>
                        <div class="box-contacts-decor"></div>
                        <p class="box-contacts-link"><a href="mailto:#">mail@demolink.org</a></p>
                        <p class="box-contacts-link"><a href="mailto:#">info@demolink.org</a></p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form-->

<section class="bg-whisper section section-sm section-last text-left " style="margin: 10rem 0; padding : 5rem 0">
    <div class="container">
        <article class="title-classic">
            <div class="title-classic-title">
                <h3>Get in touch</h3>
            </div>
            <div class="title-classic-text">
                <p style="margin : 3rem 0; color: #2b2b2b">If you have any questions, just fill in the contact form, and we
                    will answer you shortly.</p>
            </div>
        </article>
        <form class="rd-form rd-form-variant-2 rd-mailform" data-form-output="form-output-global"
            data-form-type="contact" method="post" action="bat/rd-mailform.php">
            <div class="row row-14 gutters-14">
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input" id="contact-your-name-2" type="text" name="name" data-constraints="">
                        <label class="form-label" for="contact-your-name-2">Your Name</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input" id="contact-email-2" type="email" name="email" data-constraints="">
                        <label class="form-label" for="contact-email-2">E-mail</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input" id="contact-phone-2" type="text" name="phone" data-constraints="">
                        <label class="form-label" for="contact-phone-2">Phone</label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-wrap">
                        <label class="form-label" for="contact-message-2">Message</label>
                        <textarea class="form-input textarea-lg" id="contact-message-2" name="message"
                            data-constraints=""></textarea>
                    </div>
                </div>
            </div>
            <button class="button button-primary button-pipaluk" type="submit">Send Message</button>
        </form>
    </div>
</section>@endsection
