@extends('layouts.frontend')

@section('title')
    search - @lang('app.Stores')
@endsection

@section('content')
    @include('blocks._top-meta-section',['header' => Lang::get('app.Search'),'breadcrumbs' => 'mapSearch'])

    <div class="container position-static products-list">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3 xxs-mt-40 position-relative z-index-medium">
                <!-- xxx -->
                <div class="offers-box bg-light border-radius-md card-dp-2 clearfix">
                        <div class="offer-card border-radius-sm col-xs-12">
                            <!-- fake form to assist GEO JS  -->
                            <form>
                            {{ Form::hidden('url',url('/'),['id'=>'url']) }}
                            <input type="hidden" name="current_country" value="@if(old('country_id')){{old('country_id')}}@elseif(isset($country_id)){{$country_id}}@endif">
                            <input type="hidden" name="current_state" value="@if(old('state_id')){{old('state_id')}}@elseif(isset($state_id)){{$state_id}}@endif">
                            <input type="hidden" name="current_city" value="@if(old('city_id')){{old('city_id')}}@elseif(isset($city_id)){{$city_id}}@endif">
                            </form>
                            <form>
                                    <!-- Category Id Field -->
    <div class="form-group xxs-pt-40 clearfix{{ $errors->has('cat') ? ' has-error' : '' }}">
        {!! Form::label('cat', Lang::get('products.Category'),['class' => 'col-xs-12 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-30']) !!}

        <div class="col-xs-10 col-sm-9">
            {{-- \App\Repositories\CategoriesRepository::getNestedCategories(null,true,'all') --}}
            {{-- TODO need to check after setting categories hierarchy  --}}
            {!! Form::select('cat', \App\Models\Categories::active()->where('category_id', null)->get()->pluck('name','id')->prepend('الكل',0),null,['id' => 'search_cat','class' => 'form-control input-lg text-md xxs-p-0']) !!}
            @if ($errors->has('cat'))
                <p class="help-block">{{ $errors->first('cat') }}</p>
            @else
                <span class="help-block text-sm line-height-xl font-droidkufi">رجاء اختيار القسم</span>
            @endif
        </div>
    </div>
                                @include("blocks.__geo")
                                <input class="btn btn-lg btn-primary " type="submit" value="بحث">
                            </form>
                            <br />
                            <div class="clear xxs-mb-10"></div>
                        </div>
                    </div>
            </div>


            <div class="col-xs-12 col-sm-8 col-md-9 position-relative z-index-high lg-mb-0">
                <div class="col-xs-12 bg-light card-dp-2 xxs-mt-40 boxed-offers offers border-radius-md clearfix">
                    <div id="gmap" style="width:100%;height:600px;" class="xxs-mb-10 xxs-mt-10"></div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
<script type="text/javascript">
var startLocation = {
    lat : {{config('shari.default_lat')}},
    lng : {{config('shari.default_lng')}}
};
var map = null;
var markerCluster = false;
function getThumb(image)
{
    return image.replace('shari.sa/','thumbs.shari.sa/medium/');
}
function calculateDistance(posA, posB) {
    var lat = posB.lat-posA.lat; // Difference of latitude
    var lon = posB.lng-posA.lng; // Difference of longitude

    var disLat = (lat*Math.PI*6371)/180; // Vertical distance
    var disLon = (lon*Math.PI*6371)/180; // Horizontal distance

    var ret = Math.pow(disLat, 2) + Math.pow(disLon, 2);
    return Math.sqrt(ret); // Total distance (calculated by Pythagore: a^2 + b^2 = c^2)
}
var storesURL = '{{ url('stores') }}';
var mapApiURL = '{{ route('stores.mapAPI') }}';
@if(isset($location) && is_array($location) && count($location) == 2)
startLocation.lat = {{$location[0]}};
startLocation.lng = {{$location[1]}};
@else
if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(NAVSuccess);
    function NAVSuccess(position) {
        startLocation.lat = position.coords.latitudelat;
        startLocation.lng = position.coords.longitude;
        // window.location="{{ route('stores.map') }}"+"?location="+position.coords.latitudelat+","+position.coords.longitude;
    }
}
@endif
function addLocationsToCluster(locations)
{
    // Add some markers to the map.
    var markers = locations.map(function(location, i) {
        var infowindow = new google.maps.InfoWindow({
            content: location.content
        });

        var marker = new google.maps.Marker({
            position: {lat: location.lat, lng: location.lng},
            map: map,
            title: location.title
        });
        marker.addListener('click', function() {
            infowindow.open(map, marker);
        });

        return marker;
    });
    // INIT cluster or add to it
    if (markerCluster)
    {
        markerCluster.clearMarkers();
        markerCluster.addMarkers(markers);
    }
    else
    {
        // Add a marker clusterer to manage the markers.
        markerCluster = new MarkerClusterer(map, markers,{imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
    }
}
function callSearchAPI()
{
    $.ajax({
        url: mapApiURL,
        type: 'get',
        data: {location: [startLocation.lat,startLocation.lng].join(','), distance:'150',cat:$('#search_cat').val()},
        success: function (res) {
            if (res.data)
            {
                var locations = [];
                $.each(res.data,function(index,value)
                {
                    var contentArr = [
                        "<div class='mapInfoBox'>",
                        "<h3><a href='"+storesURL+"/"+value.slug+"' target='_blank'>"+value.name+"</a></h3>",
                        "<a href='"+storesURL+"/"+value.slug+"' target='_blank'><img src='"+getThumb(value.url)+"' /></a>",
                        "<p>"
                    ];
                    value.description.split("\n").map(function(line){
                        contentArr.push(line);
                    });
                    contentArr.push("</p>");
                    contentArr.push("</div>");
                    var loca = {
                        lat: value.lat,
                        lng: value.lon,
                        title: value.name,
                        content: contentArr.join(''),
                    };
                    locations.push(loca);
                });
                addLocationsToCluster(locations);
            }
        }
    });
}
// INIT map called after Ajax call
function initMap() {
    map = new google.maps.Map(document.getElementById('gmap'), {
        zoom: {{$zoom}},
        center: startLocation
    });

    google.maps.event.addListener(map,'idle',function()
    {
        var newStartLocation = {
            lat : map.getCenter().lat(),
            lng : map.getCenter().lng()
        };

        var diff = calculateDistance(newStartLocation,startLocation);
        console.log(diff);
        if (Math.round(diff) > 3)
        {
            startLocation = newStartLocation;
            callSearchAPI();
        }
        if (!markerCluster)
        {
            callSearchAPI();
        }
    });

}
$(document).ready(function (e) {
    // initMap();
});
</script>

<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key={{config('shari.MAP_API_KEY')}}&libraries=geometry&callback=initMap"></script>

    <!-- <script src="/frontend/scripts/maplace.min.js"></script> -->
    <script src="{!! asset('/frontend/scripts/products/geo.js') !!}"></script>

@append