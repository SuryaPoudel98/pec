<?php

use App\Models\SelectClass;

$sc = new SelectClass();


$ItemList = $sc->publication(request('title'));

?>


@extends('frontend.front_master')
@section('content')
<!-----OUR PROGRAMS---->
<div class="ourprograms">
    <div class="program">
        <h1>Publications > {{ request()->title }} </h1>
        <div>
            <div class="downloads">
                <div class="">
                    <ul>
                        @foreach($ItemList as $item)
                        <li>
                            <h3 style="color: #1680AC; font-size:24px;">{{$item->title}}&nbsp;
                                @if(@$item->image)

                                <a target="_blank" style=" font-size:14px;" href="{{url('uploads/Publicationfile/'.$item->image)}}">Download</a>

                                @endif
                            </h3>
                            {!! $item->description !!}

                        </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection