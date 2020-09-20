@extends('layouts.app') @section('content')
<h1>About Us</h1>
<div class="container-fluid">
    <img src="/img/about-img.JPG" alt="" width="100%">
</div>
<br>
<br>
<section id="bod">
    <div class="container">
        <h1 class="bodHead" style="text-align: center;">About KADAMATI<sup>®</sup></h1>
        <hr class="rdLine">
        <p>
            For years, millions of home shoppers have turned to&nbsp;KADAMATI<sup>®</sup> to find their dream home. Operated by Move, Inc.,&nbsp;realtor.com<sup>®</sup> offers a comprehensive list of for-sale properties, as well as the information and tools to make informed real estate decisions. Today, more than ever,&nbsp;realtor.com<sup>®</sup> is The Home of Home Search<sup class="mySm">℠</sup>.
        </p>
        <p>
            KADAMATI<sup>®</sup> also offers homeowners a bevy of useful tools and resources through the My Home<sup class="mySm">℠</sup> dashboard. My Home<sup class="mySm">℠</sup> dashboard allows property owners to manage their home like the important investment it is by tracking their home’s value over time, researching and managing home improvements, and scouting other similar properties in the neighborhood.
        </p>
    </div><!-- .container -->
</section>









<section class="services-section spad set-bg" data-setbg="img/service-bg.jpg" style="background-image: url(&quot;img/service-bg.jpg&quot;);">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="img/service.jpg" alt="">
            </div>
            <div class="col-lg-5 offset-lg-1 pl-lg-0">
                <div class="section-title text-white">
                    <h3>OUR SERVICES</h3>
                    <p>We provide the perfect service for </p>
                </div>
                <div class="services">
                    <div class="service-item">
                        <i class="fa fa-comments"></i>
                        <div class="service-text">
                            <h5>Consultant Service</h5>
                            <p></p>
                        </div>
                    </div>
                    <div class="service-item">
                        <i class="fa fa-home"></i>
                        <div class="service-text">
                            <h5>Properties Management</h5>
                            <p></p>
                        </div>
                    </div>
                    <div class="service-item">
                        <i class="fa fa-briefcase"></i>
                        <div class="service-text">
                            <h5>Renting and Selling</h5>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                    <!-- <ul>
                        <li><a href="">St Louis</a></li>
                        <li><a href="">Jacksonville</a></li>
                        <li><a href="">San Jose</a></li>
                        <li><a href="">San Diego</a></li>
                        <li><a href="">Houston</a></li>
                    </ul> -->
                </div>
            </div>

        </div>

    </div>
</footer>
@endsection
