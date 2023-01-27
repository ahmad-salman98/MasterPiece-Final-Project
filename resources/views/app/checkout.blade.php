@extends('app.master')
@section('title','Checkout')

@section('content')

<section>
    <div class=" container p-5 h-100 my-5">
        <h4>Appointment details</h4>

        {{-- details --}}

        <div class="checkout-details row">

            <div class="appointment-services col-md-6">
                <h5>Choose the services you want to include</h5>
                <p class="mt-0 pb-2 border-bottom">10 Points per hour for each service</p>
                <div class="mt-3 services ">
                    <form id="services">
                        @csrf
                        <div class="row">
                            <div class="form-check col-lg-6 ">
                                <input class="form-check-input" type="checkbox" value="" id="studioRental" checked
                                    disabled>
                                <label class="form-check-label d-flex" for="studioRental">
                                    <h6 id="studioRentalLabel"> Studio rental </h6>
                                </label>
                            </div>
                            <div class="form-check col-lg-6">
                                <input class="form-check-input" type="checkbox" value="" id="contentWriting">
                                <label class="form-check-label" for="contentWriting">
                                    <h6 id="contentWritingLabel"> Content writing </h6>
                                </label>
                            </div>
                        </div>
                        <div class="row mt-0">
                            <div class="form-check col-lg-6 ">
                                <input class="form-check-input" type="checkbox" value="" id="liveProduction">
                                <label class="form-check-label d-flex" for="liveProduction">
                                    <h6 id="liveProductionLabel"> Live production </h6>
                                </label>
                            </div>
                            <div class="form-check col-lg-6">
                                <input class="form-check-input" type="checkbox" value="" id="videoMaking">
                                <label class="form-check-label" for="videoMaking">
                                    <h6 id="videoMakingLabel"> Video making </h6>
                                </label>
                            </div>
                        </div>

                        <div class="row mt-0 ">
                            <div class="form-check col-lg-6">
                                <input class="form-check-input" type="checkbox" value="" id="digitalMarkiting">
                                <label class="form-check-label" for="digitalMarkiting">
                                    <h6 id="digitalMarkitingLabel"> Digital markiting </h6>
                                </label>
                            </div>
                            <div class="form-check col-lg-6 ">
                                <input class="form-check-input" type="checkbox" value="" id="photography">
                                <label class="form-check-label" for="photography">
                                    <h6 id="photographyLabel"> Photography services </h6>
                                </label>
                            </div>
                        </div>

                        <div class="mt-4" id="noBalance">
                            <h6 class="text-danger">You can't add more services,recharge from
                                <a style="color:#0000EE" href="/#h6lans"> Here</a>
                            </h6>
                        </div>
                    </form>
                </div>

                <div class="balance mt-4 row">
                    <h6 class="col-lg-6">
                        <i class="fa-solid fa-coins" style="width:20px"></i>
                        Total cost:
                        <span class="red" id="totalCost">250</span>
                        Point
                    </h6>
                    <h6 class="col-lg-6 mt-4 mt-lg-0">
                        <i class="fa-solid fa-sack-dollar fa-lg" style="width:20px"></i>
                        Your balance:
                        <span class="red" id="userBalance"> {{Auth::user()->coins}} </span>
                        Point
                    </h6>
                </div>

            </div>

            <div class="bill col-md-6 ">
                <h5>Appointment summary</h5>
                <p class="mt-0 pb-2 border-bottom">After confirmatin, your balance will be deducted automatically
                </p>
                <ul>

                    <div class=" row mt-3">
                        <li class="col-lg-6">
                            <h6>
                                <span class="red">Name:</span> {{Auth::user()->name}}
                            </h6>
                        </li>
                        <li class="col-lg-6">
                            <h6>
                                <span class="red">Phone:</span> {{$phone}}
                            </h6>
                        </li>
                    </div>


                    <div class=" row mt-0">
                        <li class="col-lg-6">
                            <h6>
                                <span class="red">Studio:</span> {{$studio->location}}
                            </h6>

                        </li>
                        <li class="col-lg-6">
                            <h6>
                                <span class="red">Date:</span> {{$date}}
                            </h6>
                        </li>

                    </div>

                    <div class=" row mt-0">
                        <li class="col-lg-6">
                            <h6>
                                <span class="red">Duration:</span> {{$duration}} hour
                            </h6>
                        </li>
                        <li class="col-lg-6">
                            <h6>
                                <span class="red">Start time:</span> {{$timeStart > 12 ? $timeStart-12 .":00 pm" :
                                "$timeStart:00 am"}}
                            </h6>
                        </li>
                    </div>

                </ul>

                <div class="balance mt-4 mx-2 row">
                    <p>
                        <i class="fa-solid fa-circle-exclamation" style="width:20px"></i>
                        Note: in case you choose content writing, please contact us 24h befor appointment to
                        make the content according to your needs.
                    </p>
                </div>

            </div>
        </div>


        <div class="row d-flex align-items-stretch h-100 map-div">
            {{-- studio location --}}
            <div class="col-12  maps my-5">
                <div>
                    <div id="map" style="height: 450px;"></div>
                    <p>Studio location</p>
                </div>

                <script type="text/javascript">
                    function initMap() {
                              const myLatLng = { lat: {{$studio->lat}}, lng: {{$studio->long}} };
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
        </div>


        <div class="col-12 d-flex justify-content-between align-items-center my-5 pl-0 ">

            <a href="/appointment" class="button button-block button-primary m-0">
                <i class="fa-solid fa-circle-chevron-left mr-3"></i> Back
            </a>

            <form action="/confirm-appointment" method="post" class="ml-auto">
                @csrf
                <input type="hidden" name="timeStart" value="{{$timeStart}}">
                <input type="hidden" name="timeEnd" value="{{$timeStart + $duration}}">
                <input type="hidden" name="date" value="{{$date}}">
                <input type="hidden" name="name" value="{{$name}}">
                <input type="hidden" name="phone" value="{{$phone}}">
                <input type="hidden" name="studio" value="{{$studio->id}}">
                <input type="hidden" id="formCost" name="cost">

                <button class="button button-block button-primary m-0" type="submit">
                    Confirm checkout
                    <i class="fa-solid fa-circle-chevron-right ml-3"></i>
                </button>
            </form>
        </div>
    </div>

    <script>
        //form and cost
        const totalCost = document.getElementById('totalCost');
        const services = document.getElementById('services');
        const formCost = document.getElementById('formCost');

        //services checkboxes
        const studioRental = document.getElementById('studioRental');
        const liveProduction = document.getElementById('liveProduction');
        const contentWriting = document.getElementById('contentWriting');
        const videoMaking = document.getElementById('videoMaking');
        const digitalMarkiting = document.getElementById('digitalMarkiting');
        const photography = document.getElementById('photography');

        // services labels
        const studioRentalLabel = document.getElementById('studioRentalLabel');
        const liveProductionLabel = document.getElementById('liveProductionLabel');
        const contentWritingLabel = document.getElementById('contentWritingLabel');
        const videoMakingLabel = document.getElementById('videoMakingLabel');
        const digitalMarkitingLabel = document.getElementById('digitalMarkitingLabel');
        const photographyLabel = document.getElementById('photographyLabel');

        //user balance
        const userBalance = document.getElementById('userBalance');

        //no balance error
        const noBalance = document.getElementById('noBalance');
        noBalance.style.display='none';

        //duration and initial cost
        const duration = {{$duration}}
        let cost = duration*10;




        function checkBalance() {

            cost = duration*10;
            noBalance.style.display='none';
            undisableAll();

            if(liveProduction.checked==true) {
                cost+=duration*10;
            }

            if(contentWriting.checked==true){
                cost+=duration*10;
            }

            if(videoMaking.checked==true){
                cost+=duration*10;
            }

            if(digitalMarkiting.checked==true){
                cost+=duration*10;
            }

            if(photography.checked==true){
                cost+=duration*10;
            }



            if (Number(userBalance.innerText) < cost + duration*10){
            noBalance.style.display='block';

            if(liveProduction.checked==false) {
            liveProduction.disabled = true;
            liveProductionLabel.classList.add('text-muted');
            }

            if(contentWriting.checked==false){
            contentWriting.disabled = true;
            contentWritingLabel.classList.add('text-muted');
            }

            if(videoMaking.checked==false){
            videoMaking.disabled = true;
            videoMakingLabel.classList.add('text-muted');
            }

            if(digitalMarkiting.checked==false){
            digitalMarkiting.disabled = true;
            digitalMarkitingLabel.classList.add('text-muted');
            }

            if(photography.checked==false){
            photography.disabled = true;
            photographyLabel.classList.add('text-muted');
            }
            }

            totalCost.innerText=cost;
            formCost.value = cost;
        }

        function undisableAll(){
            liveProduction.disabled = false;
            liveProductionLabel.classList.remove('text-muted');

            contentWriting.disabled = false;
            contentWritingLabel.classList.remove('text-muted');

            videoMaking.disabled = false;
            videoMakingLabel.classList.remove('text-muted');

            digitalMarkiting.disabled = false;
            digitalMarkitingLabel.classList.remove('text-muted');

            photography.disabled = false;
            photographyLabel.classList.remove('text-muted');
        }

        checkBalance();

        services.onchange = ()=>{
            checkBalance();
        }
    </script>

</section>
@endsection
