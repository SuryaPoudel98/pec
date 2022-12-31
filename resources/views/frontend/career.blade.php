@extends('frontend.front_master')
@section('content')

@php
$career=DB::table('careers')->get();
@endphp
    <!-----DESCRIPTION STARTS HERE-->
    <style>
        input[type=text],
        textarea,
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=email]
        
        {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #3284bb;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #154f75;
        }
    </style>

    <div class="newsandevents" style="margin-top: 20px">
        <div class="aboutnews">
            <div class="heads">
                {{-- <h2>{{ $childcontentdetails[0]->child_title  }}</h2> --}}
                <div class="description">
                    <div class="firstdesc">
                        <h2>  {!! @$career[0]->name ?? '' !!}</h2>
                        <div class="firstdesc">
                            {!! @$career[0]->caption ?? '' !!}
                        </div>
                    </div>
                    <div class="seconddesc">
                        <h5>Apply Now </h5>
                        <div class="wholeimages">
                            <div class="images1">
                                <form method="POST" action="{{route('contactpost')}}">
                                    @csrf()
                                    <label for="fname">First Name</label>
                                    <input type="text" id="fname" name="fname" placeholder="Your name..">

                                    <label for="lname">Last Name</label>
                                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" placeholder="Your email..">
                                    <label for="message">Message</label>
                                    <textarea type="text" name="message"></textarea>


                                    <input type="submit" value="Submit">
                                </form>
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
