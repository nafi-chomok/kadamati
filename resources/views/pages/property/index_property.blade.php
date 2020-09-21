@extends('layouts.app')

@section('content')


<!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Search By Location</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="width: 1000;">
            @livewire('search')
        </div>

      </div>
    </div>
  </div>


<section class="page-section categories-page">
    <div class="container">
        <a type="button" class="" data-toggle="modal" data-target="#exampleModal">
            <img src="https://img.icons8.com/pastel-glyph/2x/search--v2.png" height="50" width="50" alt="">
            Search By Location
          </a>
        <div class="row">

            @foreach ($properties as $property)
<?php $images= json_decode($property->filenames);?>
            <div class="col-lg-4 col-md-6">
                <!-- feature -->
                <div class="feature-item">
                    <div class="feature-pic set-bg" data-setbg="/img/feature/1.jpg">
                        @if($property->filenames != null)
                        <img src="/files/{{$images[0]}}" alt="" height="200" width="330" >
                        @endif


                        <div class="sale-notic">{{$property->ad_type}}</div>
                    </div>
                    <div class="feature-text">
                        <div class="text-center feature-title">
                            <h5>{{$property->name}}</h5>
                            <p><i class="fa fa-map-marker"></i> {{$property->address_address}}</p>
                        </div>
                        <div class="room-info-warp">
                            <div class="room-info">
                                <div class="rf-left">
                                    <p><i class="fa fa-th-large"></i> {{$property->size}} Square foot</p>
                                    <p><i class="fa fa-bed"></i> {{$property->bed}} Bedrooms</p>
                                </div>
                                <div class="rf-right">
                                    <p><i class="fa fa-bath"></i> {{$property->bath}} Bathrooms</p>
                                </div>
                            </div>
                            <div class="room-info">
                                <div class="rf-left">
                                    <p><i class="fa fa-map-marker"></i> {{$property->address_address}}</p>
                                </div>
                                <div class="rf-right">
                                    <p><i class="fa fa-clock-o"></i> 1 days ago</p>
                                </div>
                            </div>
                        </div>
                        <a href="/property/show/{{ $property->id }}" class="room-price">{{$property->price}} BDT</a>
                    </div>
                </div>
            </div>
            @endforeach
</section>
<div class="links" style="margin: auto; margin-left:40%">
    {{ $properties->links(("pagination::bootstrap-4")) }}
</div>




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
