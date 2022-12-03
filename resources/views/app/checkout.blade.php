@extends('app.master')
@section('title','Checkout')

@section('content')

<section>

    <div class=" container p-5 h-100 my-5">
        <h4>Appointment details</h4>
        <div class="row d-flex align-items-stretch h-100">

            {{-- studio location --}}
            <div class="col-md-6  col-12  maps my-5">
                <div>
                    <div id="map" style="height: 450px;"></div>
                    <p>Studio location</p>
                </div>

                <script type="text/javascript">
                    function initMap() {
                              const myLatLng = { lat: 22.2734719, lng: 70.7512559 };
                              const map = new google.maps.Map(document.getElementById("map"), {
                                zoom: 15,
                                center: myLatLng,
                              });

                              new google.maps.Marker({
                                position: myLatLng,
                                map,
                                title: "Our studio location!",
                              });
                            }

                            window.initMap = initMap;
                </script>

                <script type="text/javascript"
                    src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap"></script>
            </div>


            {{-- Bill details --}}
            <div class=" my-5 offset-md-1 col-md-5 col-12 align-self-center summary ">
                <h4 class="" style="background: # FF4B2B">Summary</h4>
                <div class="w-100 mt-0 ">
                    <ul>
                        <li>Name <span>Ahmad Salman</span></li>
                        <li>Studio location <span>Zarqa - Russiefeh</span></li>
                        <li>Date <span>24 / 11 / 2022</span></li>
                        <li>Time Start <span>9:00 am</span></li>
                        <li>Time End <span>12:00 pm</span></li>
                        <li>Total cost <span>3 credits</span></li>
                    </ul>
                </div>
            </div>



            <div class="col-12 d-flex justify-content-between align-items-center my-5 ">
                <form action="" class="mr-auto">
                    <input type="hidden">
                    <input type="hidden">
                    <input type="hidden">
                    <input type="hidden">
                    <input type="hidden">

                    <a href="# " class="button button-block button-primary m-0" type="submit">
                        <i class="fa-solid fa-circle-chevron-left mr-3"></i> Back
                    </a>
                </form>
                <form action="" class="ml-auto">
                    <input type="hidden">
                    <input type="hidden">
                    <input type="hidden">
                    <input type="hidden">
                    <input type="hidden">

                    <a href="# " class="button button-block button-primary m-0" type="submit">
                        Confirm checkout
                        <i class="fa-solid fa-circle-chevron-right ml-3"></i>
                    </a>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
