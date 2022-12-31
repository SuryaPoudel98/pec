<?php

use App\Models\SelectClass;

$sc = new SelectClass();
$blogs = $sc->selectBlog();
$parentpageabout = $sc->selectParentpage('AboutPec');
$clientreviews = $sc->SelectReview();
$messagefromchairman = $sc->selectSubHeading('About us');
//$selectfromparentpage = $sc->
$latestExamnotice = $sc->notice('exam');
$latestGeneralnotice = $sc->notice('general');
?>
@php
$slider_images = DB::table('slider_images')->get();
$galleries1 = DB::table('galleries')
->orderBy('id', 'desc')
->take(7)
->get();

$blogs1 = DB::table('blogs')
->where('header','blog')
->orderBy('id', 'desc')
->take(7)
->get();


@endphp
@extends('frontend.front_master')
@section('content')

@php $popupimage=DB::table('popup_images')->get(); @endphp
<!-----Photo slider STARTS HERE------>


<style>
    #mask {
        position: absolute;
        left: 0;
        top: 0;
        z-index: 9000;
        background-color: #26262c;
        display: none;
    }

    #boxes .window {
        position: absolute;
        left: 0;
        top: 0;
        max-width: 440px;
        height: auto;
        display: none;
        z-index: 9999;
        padding: 20px;
        border-radius: 5px;
        text-align: center;
    }

    #boxes #dialog {
        max-width: 450px;
        height: auto;
        padding: 10px 10px 10px 10px;
        background-color: #ffffff;
        font-size: 15pt;
    }

    .agree:hover {
        background-color: #D1D1D1;
    }

    .popupoption:hover {
        background-color: #D1D1D1;
        color: green;
    }

    .popupoption2:hover {
        color: red;
    }

    @media only screen and (max-width: 600px) {
        #boxes .window {
            width: 340px;
            height: 750px;
        }

        #boxes #dialog {
            width: 340px;
            height: auto;
        }
    }
</style>
<!-- {{$popupimage}} -->
@if(!$popupimage->isEmpty())
<div id="boxes">
    <div style="top: 50%; left: 50%; display: none;" id="dialog" class="window">
        <div id="san">
            @foreach($popupimage as $popup )
            <a href="#" class="close agree"><img src="{{ asset('remove-icon.png') }}" width="25" style="float:right; margin-right: -25px; margin-top: -20px;"></a>
            <img src="{{ asset($popup->image) }}" width="100%">
            @endforeach
        </div>
    </div>
    <div style="width: 2478px; font-size: 32pt; color:white; height: 1202px; display: none; opacity: 0.4;" id="mask"></div>
</div>
@endif

<section class="home-slider">
    <div class="slider-back">
        @foreach ($slider_images as $slider)
        <div class="slide active" style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{$slider->image}}')">
            <div class="slider-container">
                <div class="caption">
                    <h1> {{ $slider->name }}</h1>
                    <p> {!! $slider->caption !!}</p>

                </div>
            </div>
        </div>
        @endforeach



    </div>

    <!-- controls  -->
    <div class="controls">
        <div class="prev-back"><i class="fa-solid fa-angle-left"></i></div>
        <div class="next-back"><i class="fa-solid fa-angle-right"></i></div>
    </div>

    <!-- indicators -->
    <div class="indicator">
    </div>

</section>

<br>

<!-- <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div> -->



<!-----Photo slider  ENDS HERE-->




<!-----Photo slider STARTS HERE------>

<!-----Photo slider  ENDS HERE-->

<!-----OUR PROGRAMS---->
<div class="ourprograms" id="weoffer">
    <div class="program">
        <h1>We Offer</h1>
        <div class="cards-grad">

            <div class="card" onclick="window.location.href = '/contentdetails/7'">

                <div class="gradient"></div>
                {{-- <a href="" alt=""> --}}
                <div class="pics">

                    <img src="frontend/images/graduate.jpeg" alt="">

                </div>
                {{-- </a> --}}
                <div class="info">

                    <div class="title">Graduate Programs</div>
                </div>

            </div>


            <div class="card" onclick="window.location.href = '/itemList/4/UnderGraduate Programs'">
                <div class="gradient"></div>
                <div class="pics">
                    <img src="frontend/images/UnderGraduate.jpeg" alt="">
                </div>
                <div class="info">

                    <div class="title">UnderGraduate Programs</div>
                </div>
            </div>
            <div class="card" onclick="window.location.href = '/itemList/5/Diploma Programs'">
                <div class="gradient"></div>
                <div class="pics">
                    <img src="frontend/images/diploma.jpeg" alt="">
                </div>
                <div class="info">

                    <div class="title">Diploma Programs</div>
                </div>
            </div>
            <div class="card" onclick="window.location.href = '/itemList/6/Pre-Diploma Programs'">
                <div class="gradient"></div>
                <div class="pics">
                    <img src="frontend/images/prediploma.jpg" alt="">
                </div>
                <div class="info" style="text-align: center;">

                    <div class="title">Pre-Diploma Programs</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-----OUR PROGRAMS ENDS HERE-->
<!-----OUR PROGRAMS---->
<div class="ourprograms" id="notice">
    <div class="program">
        <h1>Notice Board</h1>
        <div class="upcomming">
            <div class="events">
                <div class="event1">
                    <ul>
                        @foreach ($latestExamnotice as $notice)
                        <li>
                            <p>{{ Carbon\Carbon::parse($notice->updated_at)->format('M d Y') }} <button>{{ ucfirst($notice->header) }}</button></p> <a href="/noticeDetails/{{ $notice->id }}">{!! $notice->title !!}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="event2">
                    <ul>
                        @foreach ($latestGeneralnotice as $notice)
                        <li>
                            <p>{{ Carbon\Carbon::parse(@$notice->updated_at)->format('M d Y') }} <button>{{ ucfirst($notice->header) }}</button></p><a href="/noticeDetails/{{ $notice->id }}">{!! $notice->title !!}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="iframe4">
                <img src="/frontend/images/aboutus.jpg" alt="">
            </div>
        </div>
    </div>
</div>
<!-----OUR PROGRAMS ENDS HERE-->

<!-------ABOUT US ------->
<div class="aboutus">
    <div class="aboutcontainer">
        <div class="abouttitle">
            <h1>About us</h1>
        </div>
        <div class="image-section2">
            <img src="{{ asset('uploads/thumbnailimg/' . @$parentpageabout[0]->Thumbnailimg) }}" alt="">
        </div>
        <div class="aboutcontent">
            <div class="article">
                <p>{!! substr(@$parentpageabout[0]->text, 0, 2000) !!}</p>

                <div class="aboutbutton">
                    <a href="/parentpagedetails/{{ @$parentpageabout[0]->id }}">Read More</a>
                </div>
            </div>
        </div>
        <div class="image-section">
            <img src="{{ asset('uploads/thumbnailimg/' . @$parentpageabout[0]->Thumbnailimg) }}" alt="">
        </div>
        <div class="sociallinks">
            <a href="https://www.facebook.com/PECPoU/" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
    </div>
</div>
<!-------ABOUT US ENDS HERE----->
<!---Lates news and Events---->
<div class="newsandevents">
    <div class="aboutnews">
        <h1>Recent Events & Activities</h1>
        <article id="popular-news">
            <div id="featured">
                <section class="popular-news-carousel">
                    <div id="carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <?php $i = 0; ?>
                            @foreach ($blogs1 as $blog)
                            <?php $i++; ?>
                            <div class="carousel-item <?php if ($i == 1) {
                                                            echo 'active';
                                                        } ?> ">
                                <a href="/blogdetails/{{ $blog->id }}"><img class="d-block w-100" src="{{ @$blog->image }}" alt="Second slide"></a>
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>{!! substr(@$blog->title, 0, 50) !!} </h5>
                                    <p>{{ Carbon\Carbon::parse(@$blog->updated_at)->format('M d Y') }}</p>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </section>

            </div>

            <div id="latest">
                <section class="news">
                    <div class="news-container">
                        <a href="/blogdetails/{{ @$blogs1[3]->id }}"><img src="{{ @$blogs1[3]->image }}"></a>
                        <p class="carousel-text">{!! substr(@$blogs1[3]->title, 0, 100) !!}</p>
                    </div>
                </section>
                <section class="news">
                    <div class="news-container">
                        <a href="/blogdetails/{{ @$blogs1[4]->id }}"> <img src="{{ @$blogs1[4]->image }}"></a>
                        <p class="carousel-text">{!! substr(@$blogs1[4]->title, 0, 100) !!} </p>
                    </div>
                </section>
            </div>
            <div id="our-picks">
                <section class="news">
                    <div class="news-container">
                        <a href="/blogdetails/{{ @$blogs1[5]->id }}"> <img src="{{ @$blogs1[5]->image }}"></a>
                        <p class="carousel-text"> {!! substr(@$blogs1[5]->title, 0, 100) !!} </p>
                    </div>
                </section>
                <section class="news">
                    <div class="news-container">
                        <a href="/blogdetails/{{ @$blogs1[6]->id }}"> <img src="{{ @$blogs1[6]->image }}"></a>
                        <p class="carousel-text">{!! substr(@$blogs1[6]->title, 0, 100) !!} </p>
                    </div>
                </section>
            </div>

        </article>
    </div>
</div>
<!---Lates news and Ends here---->

<!-----GALARY STARTS HERE----->
<div class="photos">
    <div class="slides">
        <h1>Galleries</h1>
        <div class="gallary">

            <div class="box100">
                @foreach ($galleries1 as $gallery)
                <div class="dream">
                    <a href="{{ $gallery->image }}" data-lightbox='mygallary' data-title={{ Carbon\Carbon::parse(@$gallery->updated_at) }}> <img src="{{ $gallery->image }}"></a>
                </div>
                @endforeach
            </div>
            <!-- <div class="btn100">
                            <a href="#">More</a>
                        </div> -->

        </div>

    </div>
</div>
<!-----GALARY ENDS HERE----->
<!----Message from the chairmen---->
<div class="newsandevents" style="margin-top: 40px">
    <div class="aboutnews">
        <h1>Message From The Chairman</h1>
        <div class="message">
            <div class="message-img">
                <img src="{{ asset('uploads/childcontentimg/' . @$messagefromchairman[1]->Thumbnailimg) }}" alt="" height="200px">
            </div>
            <div class="message-text">
                <!-- <h5>{{ @$messagefromchairman[1]->child_title }}</h5> -->
                <p>{!! substr(@$messagefromchairman[1]->text, 0, 4000) !!}</p>
                <!-- <h5 style="padding-top: 20px">- Director Amber Gurung</h5> -->
            </div>
        </div>
    </div>
</div>
<!----Message from the chairmen ends here-->
<!----Message from the chairmen ends here-->

<!-----STUDENT TESTOMONIAL-->
<div class="newsandevents" style="margin-top: 50px">
    <div class="aboutnews">
        <h1>Testimonials</h1>
        <section id="testimonial_area" class="section_padding">
            <div class="container">
                <div class="row10">
                    <div class="col-md-12">
                        <div class="testmonial_slider_area text-center owl-carousel">
                            @foreach ($clientreviews as $clientreview)
                            <div class="box-area1">
                                <div class="img-area">
                                    <img src="uploads/testimonial/{{ $clientreview->image }}" alt="">
                                </div>
                                <h5>{{ $clientreview->name }}</h5>
                                <span>{{$clientreview->designation}}</span>
                                <p class="content"> {!! $clientreview->description !!} </p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
        <script>
            $(document).ready(function() {

                var id = '#dialog';

                //Get the screen height and width
                var maskHeight = $(document).height();
                var maskWidth = $(window).width();

                //Set heigth and width to mask to fill up the whole screen
                $('#mask').css({
                    'width': maskWidth,
                    'height': maskHeight
                });

                //transition effect     
                $('#mask').fadeIn(500);
                $('#mask').fadeTo("slow", 0.9);

                //Get the window height and width
                var winH = $(window).height();
                var winW = $(window).width();

                //Set the popup window to center
                $(id).css('top', winH / 2 - $(id).height() / 2);
                $(id).css('left', winW / 2 - $(id).width() / 2);

                //transition effect
                $(id).fadeIn(2000);

                //if close button is clicked
                $('.window .close').click(function(e) {
                    //Cancel the link behavior
                    e.preventDefault();

                    $('#mask').hide();
                    $('.window').hide();
                });

                //if mask is clicked
                $('#mask').click(function() {
                    $(this).hide();
                    $('.window').hide();
                });

            });

            function delayedAlertClose() {
                timeoutID = window.setTimeout(popupClose, 5000);
            }

            function popupClose() {
                $('#mask').hide();
                $('.window').hide();
            }
        </script>
        <script>
            $(".testmonial_slider_area").owlCarousel({
                autoplay: true,
                slideSpeed: 1000,
                items: 3,
                loop: true,
                nav: true,
                navText: ['<i class="fa fa-arrow-left"></i>', '<i class="fa fa-arrow-right"></i>'],
                margin: 30,
                dots: true,
                responsive: {
                    320: {
                        items: 1
                    },
                    767: {
                        items: 2
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }

            });
        </script>

    </div>
</div>
<!-----STUDENT TESTOMONIAL ENDS HERE-->
@endsection