<?php

use App\Models\SelectClass;

$sc = new SelectClass();

// $galleries1 = DB::table('galleries')
//     ->orderBy('id', 'desc')
//     ->take(7)
//     ->get();
$galleries1 = $sc->gallery(request('title'));
?>

@extends('frontend.front_master')
@section('content')





<!-----GALARY STARTS HERE----->
<div class="photos">
    <div class="slides">
        <h1>Gallaries > {{ request()->title }} </h1>
        <div class="gallary">

            <div class="box100">
                @foreach ($galleries1 as $gallery)
                <div class="dream">
                    <a href="{{asset($gallery->image)}}" data-lightbox='mygallary' data-title='{!! $gallery->caption !!}'> <img src="{{asset($gallery->image)}}"></a>
                </div>
                @endforeach
            </div>
            
        </div>

    </div>
</div>
<!-----GALARY ENDS HERE----->


@endsection