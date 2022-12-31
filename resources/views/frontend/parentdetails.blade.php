<?php

use App\Models\SelectClass;

$sc = new SelectClass();
$similarblogs =  $sc->selectBlog();

// $SimilarTrips = $sc->SelectSimilarjobs($childcontentdetails->id);
?>

@extends('frontend.front_master')
@section('content')
<!-----DESCRIPTION STARTS HERE-->


<div class="newsandevents" style="margin-top: 20px">
    <div class="aboutnews">
        <div class="heads">
       
            <div class="description">
                <div class="firstdesc">
                <h2>About Us</h2>
                    <img src="{{ asset('uploads/thumbnailimg/'.@$parentcontaindetails->Thumbnailimg ) }}" class="responsive">
                    {!! @$parentcontaindetails->text ?? '' !!}
                </div>
                <div class="seconddesc">
                    <h5>RECENT EVENTS & ACTIVITIES</h5>
                    <div class="wholeimages">
                        <div class="images1">
                            @foreach ($similarblogs as $similarblog)
                            @if(@$BlogDetails[0]->id != $similarblog->id)
                            <div class="imghoover">
                                <div class="geeks">
                                    <a href="/blogdetails/{{ @$similarblog->id }}"> <img src="{{ asset($similarblog->image) }}" /></a>

                                </div>
                                <p>{{ @$similarblog->title  }}</p>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@stop

<!-----DESCRIPTION STARTS HERE-->

<!-----DESCRIPTION STARTS HERE-->