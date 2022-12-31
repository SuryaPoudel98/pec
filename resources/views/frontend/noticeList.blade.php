<?php
use App\Models\SelectClass;
$sc = new SelectClass();
$ItemList = $sc->noticeList(request('title'));
?>
@extends('frontend.front_master')
@section('content')
<!-----OUR PROGRAMS---->
<div class="ourprograms">
    <div class="program">
        <h1> {{ request()->title }} </h1>
        <div>
            <div class="downloads">
                <div class="">
                    <ul>
                        @foreach($ItemList as $item)
                        <li>
                           <a target="_blank" href="{{url($item->image)}}"> <p>{{$item->title}} </p></a></p>
                        </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection