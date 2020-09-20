<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <input type="text" wire:model="search" />

    <div>
        @foreach($props as $property)
        <?php $images= json_decode($property->filenames);?>
            <div class="">
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
<div class="links" style="position:absolute; left:250px; bottom: -300px">

</div>

    </div>
</div>
