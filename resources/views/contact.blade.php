@php
    $public='';
    if(App::environment('production'))
    $public ='public';
@endphp
@extends('layouts.app')
@section('title',$title)
@section('content')
    <!-- Main Content -->
    <div class="careerfy-main-content">

        <!-- Main Section -->
        <div class="careerfy-main-section map-full">
            <div class="container-fluid">
                <div class="row">

                    <div id="map"></div>

                </div>
            </div>
        </div>

        <!-- Main Section -->

        <!-- Main Section -->
        <div class="careerfy-main-section careerfy-contact-form-full-section">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <div class="careerfy-contact-info-sec">
                            <h2>Contact Information</h2>
                            <p>Ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos...</p>
                            <ul class="careerfy-contact-info-list">
                                <li><i class="careerfy-icon careerfy-placeholder"></i> Nwaniba Road Uyo.
                                </li>
                                <li><i class="careerfy-icon careerfy-mail"></i> <a href="#">Email: info@touchinglivesskills.xyz</a>
                                </li>
                                <li><i class="careerfy-icon careerfy-technology"></i> Call: +2349069911327, +2348035929609</li>
                            </ul>
                            <div class="careerfy-contact-media">
                                <a href="https://facebook.com/projectproduceabakinitiative/" class="careerfy-icon careerfy-facebook-logo"></a>
                                <a href="https://instagram.com/touchinglivesskills/" class="careerfy-icon careerfy-instagram-logo"></a>
{{--
                                <a href="#" class="careerfy-icon careerfy-twitter-logo"></a>
                                <a href="#" class="careerfy-icon careerfy-linkedin-button"></a>
                                <a href="#" class="careerfy-icon careerfy-dribbble-logo"></a>
--}}
                            </div>
                        </div>
                        <div class="careerfy-contact-form">
                            <h2>We want to hear form you!</h2>
                            <form>
                                <ul>
                                    <li>
                                        <input value="Enter Your Name"
                                               onblur="if(this.value == '') { this.value ='Enter Your Name'; }"
                                               onfocus="if(this.value =='Enter Your Name') { this.value = ''; }"
                                               type="text">
                                        <i class="careerfy-icon careerfy-user"></i>
                                    </li>
                                    <li>
                                        <input value="Subject" onblur="if(this.value == '') { this.value ='Subject'; }"
                                               onfocus="if(this.value =='Subject') { this.value = ''; }" type="text">
                                        <i class="careerfy-icon careerfy-user"></i>
                                    </li>
                                    <li>
                                        <input value="Enter Your Email Address"
                                               onblur="if(this.value == '') { this.value ='Enter Your Email Address'; }"
                                               onfocus="if(this.value =='Enter Your Email Address') { this.value = ''; }"
                                               type="text">
                                        <i class="careerfy-icon careerfy-mail"></i>
                                    </li>
                                    <li>
                                        <input value="Enter Your Phone Number"
                                               onblur="if(this.value == '') { this.value ='Enter Your Phone Number'; }"
                                               onfocus="if(this.value =='Enter Your Phone Number') { this.value = ''; }"
                                               type="text">
                                        <i class="careerfy-icon careerfy-technology"></i>
                                    </li>
                                    <li class="careerfy-contact-form-full">
                                        <textarea>Track your results on the local or global market , depending on your needs. You can track everything in the most popular search engines - Google, Bing, Yahoo and Yandex. Improve your search performance and increase traffic with our turn-key. Positionly is the only solution on the market that provides a simple and transparent way to monitor.the effectiveness.</textarea>
                                    </li>
                                    <li><input type="submit" value="Submit"></li>
                                </ul>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Main Section -->

        <!-- Main Section -->
        <!-- Main Section -->
        <div class="careerfy-main-section contact-service-full">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <div class="contact-service">
                            <ul class="row">
                                <li class="col-md-4">
                                    <h2>Want to join us?</h2>
                                    <i class="careerfy-icon careerfy-user-2"></i>
                                    <a href="{{url('criteria')}}">Hiring Criteria</a>
                                </li>
                                <li class="col-md-4">
                                    <h2>Search our openings</h2>
                                    <i class="careerfy-icon careerfy-newspaper"></i>
                                    <a href="{{url('openings')}}">Openings</a>
                                </li>
                                <li class="col-md-4">
                                    <h2>Have questions?</h2>
                                    <i class="careerfy-icon careerfy-discuss-issue"></i>
                                    <a href="{{url('application')}}">How To Apply</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Main Section -->

    </div>
    <!-- Main Content -->
@endsection

@section('scripts')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJRdF8oMTWsiE-532dlZINEg-EmRxH0Hc"></script>
    <script>
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 11,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(5.028778,7.940222), // New York

                // How you would like to style the map.
                // This is where you would paste any style found on Snazzy Maps.
                styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}]
            };

            // Get the HTML DOM element that will contain your map
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('map');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(5.028778,7.940222),
                map: map,
                title: 'Snazzy!'
            });
        }

    </script>
@endsection