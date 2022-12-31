<?php

use App\Models\SelectClass;

$sc = new SelectClass();

$ItemList = $sc->SimilarList(request('id'));

?>


@extends('frontend.front_master')
@section('content')
    <!-----OUR PROGRAMS---->
    <div class="ourprograms">
        <div class="program">
            <h1> {{ request()->title }} </h1>
            <div class="cards-grad">

                @foreach ($ItemList as $ItemList)
                <div class="card" onclick="window.location.href = '/contentdetails/{{ $ItemList->id }}'">

                    <div class="gradient"></div>

                    <div class="pics">

                       
                        <img src="{{ asset('uploads/childcontentimg/'.$ItemList->Thumbnailimg)}}" alt="{{ @$ItemList->child_title  }}" />


                    </div>

                    <div class="info">

                        <div class="title">{{ @$ItemList->child_title  }}</div>
                    </div>

                </div>
                @endforeach


            </div>
        </div>
    </div>
@endsection
