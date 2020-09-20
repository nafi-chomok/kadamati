@extends('layouts.app')
@section('content')

<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClh7C3CGqKEHJaoaCufnpe2K-xO34jU9w&callback=initAutocomplete&libraries=places&v=weekly"
    defer></script>
    <link href="/css/map.css" rel="stylesheet" />
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<form method="POST" action="/create-property" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <h1>Add Listing</h1>

        <div class="input-group hdtuto control-group lst increment">
            <input type="file" name="filenames[]" class="myfrm form-control">
            <div class="input-group-btn">
                <button class="btn btn-success" type="button"><i
                        class="fldemo glyphicon glyphicon-plus"></i>Add</button>
            </div>
        </div>
        <div class="clone hide">
            <div class="hdtuto control-group lst input-group" style="margin-top:10px">
                <input type="file" name="filenames[]" class="myfrm form-control">
                <div class="input-group-btn">
                    <button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i>
                        Remove</button>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-4" id="listing-type">
                <div class="flex d-inline p-1">
                    <input type="radio" name="type" id="sale" value="sale" />
                    <label for="sale" onclick="sale()">For Sale</label>
                </div>
                <div class="flex d-inline p-1">
                    <input type="radio" name="type" id="rent" value="rent" />
                    <label for="rent" onclick="rent()">For Rent</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">

                <div class="flex d-inline p-1">
                    <img src="{{ url('icons/bed-i.png') }}"> Bedroom

                </div>
                <div class="flex d-inline p-1">
                    <input type="radio" name="bed" id="bed1" value="1" />
                    <label for="bed1">1</label>
                </div>
                <div class="flex d-inline p-1">
                    <input type="radio" name="bed" id="bed2" value="2" />
                    <label for="bed2">2</label>
                </div>
                <div class="flex d-inline p-1">
                    <input type="radio" name="bed" id="bed3" value="3" />
                    <label for="bed3">3</label>
                </div>
                <div class="flex d-inline p-1">
                    <input type="radio" name="bed" id="bed4" value="4" />
                    <label for="bed4">4+</label>
                </div>

            </div>
            <div class="col">
                <div class="flex d-inline p-1">
                    <img src="{{ url('icons/bath-i.png') }}"> Bathroom

                </div>
                <div class="flex d-inline p-1">
                    <input type="radio" name="bath" id="bath1" value="1" />
                    <label for="bath1">1</label>
                </div>
                <div class="flex d-inline p-1">
                    <input type="radio" name="bath" id="bath2" value="2" />
                    <label for="bath2">2</label>
                </div>
                <div class="flex d-inline p-1">
                    <input type="radio" name="bath" id="bath3" value="3" />
                    <label for="bath3">3</label>
                </div>
                <div class="flex d-inline p-1">
                    <input type="radio" name="bath" id="bath4" value="4" />
                    <label for="bath4">4+</label>
                </div>
            </div>
            <div class="w-100"></div>

            <div class="col">
                <div class="flex d-inline p-1">
                    <img src="{{ url('icons/size-i.png') }}"> Built Up
                </div>
                <div class="flex d-inline p-1">
                    <div class="col-sm-10">
                        <input type="text" type="text" class="form-control" name="build" id="build1" value="">
                    </div>

                </div>
            </div>
        </div>


        <div class="form-group row">
            <label for="property-name" class="col-sm-2 col-form-label">Property Type</label>
            <div class="col-sm-10">
                <div class="flex d-inline p-1">
                    <input type="radio" name="property-type" id="apartment" value="apartment" />
                    <label for="apartment">Apartment</label>
                    <input type="radio" name="property-type" id="land" value="land" />
                    <label for="land">Land</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="property-name" class="col-sm-2 col-form-label">Property Name</label>
            <div class="col-sm-10">
                <input type="text" name="property-name" class="form-control" id="property-name">
            </div>
        </div>
        <div class="form-group row">
            <label for="price" id="price-tag" class="col-sm-2 col-form-label">Price (BDT)</label>
            <div class="col-md-4">
                <input type="text" class="form-control" name="price" id="price">
            </div>

        </div>

        <div class="form-group row">
            <label for="additional-info" class="col-sm-2 col-form-label">Additional info</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="additional-info" id="additional-info" rows="5"
                    value="text"></textarea>
            </div>
            <label for="address_address">Address</label>
            <input type="text" id="address-input" name="address_address" class="form-control map-input">

        </div>
        <div class="map_div">
            <input
              id="pac-input"
              class="controls"
              type="text"
              placeholder="Search Box"
            />
            <input type="hidden" name="latitude" id="latitude" value="0" />
                <input type="hidden" name="longitude" id="longitude" value="0" />
            <div id="map"></div>
        </div>


        <div class="form-group row">
            <div class="col-sm-10 d-inline">
                <button type="submit" class="btn btn-danger">POST</button>

            </div>
        </div>

</form>


</div>

<script>
    function rent() {
        document.getElementById("price-tag").innerHTML = "Rental Per Month (BDT)";
    }

    function sale() {
        document.getElementById("price-tag").innerHTML = "Price (BDT)";
    }


</script>






<script src="{{ asset('js/pages/map.js') }}"></script>


<script type="text/javascript">
    $(document).ready(function() {
      $(".btn-success").click(function(){
          var lsthmtl = $(".clone").html();
          $(".increment").after(lsthmtl);
      });
      $("body").on("click",".btn-danger",function(){
          $(this).parents(".hdtuto control-group lst").remove();
      });
    });
</script>



@endsection
