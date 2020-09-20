@extends('layouts.app') @section('content')
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClh7C3CGqKEHJaoaCufnpe2K-xO34jU9w&callback=initMap"
    defer></script>
    <link href="/css/map.css" rel="stylesheet" />
<!-- <h1>Show</h1>
<h1>{{$property->name}}</h1> -->

<?php
$images= json_decode($property->filenames); ?>
<section class="page-section">
    <div class="container">
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach($images as $image)
                    <li data-target="carouselExampleCaptions" data-slide-to="{{ $loop->index }}"
                        class="{{ $loop->first ? 'active' : '' }}"></li>
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    @foreach( $images as $image )
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <img src="/files/{{ $image }} " class="d-block w-100" alt="..." height="500" width="350" />
                        <div class="carousel-caption d-none d-md-block"></div>
                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 single-list-page">
                <div class="single-list-slider owl-carousel" id="sl-slider">
                    <div class="sl-item set-bg"
                        data-setbg="https://image.shutterstock.com/image-photo/mountains-during-sunset-beautiful-natural-260nw-407021107.jpg">
                        <div class="sale-notic">FOR SALE</div>
                    </div>
                    <div class="sl-item set-bg" data-setbg="img/single-list-slider/2.jpg">
                        <div class="rent-notic">FOR Rent</div>
                    </div>
                    <div class="sl-item set-bg" data-setbg="img/single-list-slider/3.jpg">
                        <div class="sale-notic">FOR SALE</div>
                    </div>
                    <div class="sl-item set-bg" data-setbg="img/single-list-slider/4.jpg">
                        <div class="rent-notic">FOR Rent</div>
                    </div>
                    <div class="sl-item set-bg" data-setbg="img/single-list-slider/5.jpg">
                        <div class="sale-notic">FOR SALE</div>
                    </div>
                </div>
                <div class="owl-carousel sl-thumb-slider" id="sl-slider-thumb">
                    <div class="sl-thumb set-bg" data-setbg="img/single-list-slider/1.jpg"></div>
                    <div class="sl-thumb set-bg" data-setbg="img/single-list-slider/2.jpg"></div>
                    <div class="sl-thumb set-bg" data-setbg="img/single-list-slider/3.jpg"></div>
                    <div class="sl-thumb set-bg" data-setbg="img/single-list-slider/4.jpg"></div>
                    <div class="sl-thumb set-bg" data-setbg="img/single-list-slider/5.jpg"></div>
                </div>
                <div class="single-list-content">
                    <div class="row">
                        <div class="col-xl-8 sl-title">
                            <h2>{{$property->name}}</h2>
                            <p>
                                <i class="fa fa-map-marker"></i> {{$property->address_address}}
                            </p>
                        </div>
                        <div class="col-xl-4">
                            <a href="#" class="price-btn">{{$property->price}}</a>
                        </div>
                    </div>
                    <h3 class="sl-sp-title">Property Details</h3>
                    <div class="row property-details-list">
                        <div class="col-md-4 col-sm-6">
                            <p>
                                <i class="fa fa-th-large"></i>
                                {{$property->size}} Square foot
                            </p>
                            <p>
                                <i class="fa fa-bed"></i>
                                {{$property->bed}} Bedrooms
                            </p>

                        </div>

                        <div class="col-md-4">
                            <p>
                                <i class="fa fa-bath"></i>
                                {{$property->bath}} Bathrooms
                            </p>
                            <!-- <p><i class="fa fa-trophy"></i> 5 years age</p> -->
                        </div>
                    </div>
                    <h3 class="sl-sp-title">Description</h3>
                    <div class="description">
                        <p>{{$property->additional_info}}</p>
                    </div>
                    <h3 class="sl-sp-title">Property Details</h3>
                    <div class="row property-details-list">
                        <div class="col-md-4 col-sm-6">
                            <p>
                                <i class="fa fa-check-circle-o"></i> Air
                                conditioning
                            </p>
                            <p>
                                <i class="fa fa-check-circle-o"></i> Telephone
                            </p>
                            <p>
                                <i class="fa fa-check-circle-o"></i> Laundry
                                Room
                            </p>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <p>
                                <i class="fa fa-check-circle-o"></i> Central
                                Heating
                            </p>
                            <p>
                                <i class="fa fa-check-circle-o"></i> Family
                                Villa
                            </p>
                            <p>
                                <i class="fa fa-check-circle-o"></i> Metro
                                Central
                            </p>
                        </div>
                        <div class="col-md-4">
                            <p>
                                <i class="fa fa-check-circle-o"></i> City views
                            </p>
                            <p><i class="fa fa-check-circle-o"></i> Internet</p>
                            <p>
                                <i class="fa fa-check-circle-o"></i> Electric
                                Range
                            </p>
                        </div>
                    </div>


                    <h3 class="sl-sp-title bd-no">Video</h3>
                    <div class="perview-video">
                        <img src="img/video.jpg" alt="" />
                        <a href="https://www.youtube.com/watch?v=v13nSVp6m5I" class="video-link"><img
                                src="img/video-btn.png" alt="" /></a>
                    </div>
                    <h3 class="sl-sp-title bd-no">Location</h3>
                    <div id="map"></div>
                    <input type="hidden" name="latitude" id="latitude" value={{$property->address_latitude}} />
                    <input type="hidden" name="longitude" id="longitude" value={{$property->address_longitude}} />
                </div>
            </div>
            <!-- sidebar -->

    </div>
</section>
<footer class="footer-section set-bg" data-setbg="img/footer-bg.jpg" style="background-image: url(&quot;img/footer-bg.jpg&quot;);">
    <div class="container">
        <div class="row">
            <div  class="col-lg-3 col-md-6 footer-widget">
                <h3 style="color: white;">KADAMATI</h3>

                <div class="social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 footer-widget">
                <div class="contact-widget">
                    <h5 class="fw-title">CONTACT US</h5>
                    <p><i class="fa fa-map-marker"></i>Dhaka, Bangladesh </p>
                    <p><i class="fa fa-phone"></i>(+88) 666 121 4321</p>
                    <p><i class="fa fa-envelope"></i>info.kadamati@gmail.com</p>
                    <p><i class="fa fa-clock-o"></i>Mon - Sat, 08 AM - 06 PM</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 footer-widget">
                <div class="double-menu-widget">
                    <h5 class="fw-title">POPULAR PLACES</h5>
                    <ul>
                        <li><a href="">Khulna</a></li>
                        <li><a href="">Noakhali</a></li>
                        <li><a href="">Barisal</a></li>
                        <li><a href="">Jashore</a></li>
                        <li><a href="">Chittagong</a></li>
                    </ul>

                </div>
            </div>

        </div>

    </div>
</footer>
<script>
    var $image = $("#image");

    $image.viewer({
        inline: true,
        viewed: function () {
            $image.viewer("zoomTo", 1);
        }
    });

    // Get the Viewer.js instance after initialized
    var viewer = $image.data("viewer");

    // View a list of images
    $("#images").viewer();
</script>

<script src="{{ asset('js/pages/map.js') }}"></script>
@endsection
