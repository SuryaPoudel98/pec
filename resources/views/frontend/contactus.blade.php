@extends('frontend.front_master')
@section('content')

<div class="contactus">
    <div class="contact">
        <div class="contactcontainer">
            <div class="contactinfo">
                <div>
                    <h2>Contact Info</h2>

                    <ul class="info">
                        <li>
                            <span><img src="./images/icons/location.png" alt="" ></span>
                            <span> Phirke-8 <br>
                               Pokhara, Kaski
                       </span>
                        </li>
                        <li>
                            <span><img src="./images/icons/email.png" alt="" ></span>
                            <span> info@pec.edu.np
                       </span>
                        </li>
                        <li>
                            <span><img src="./images/icons/telephone.png" alt="" ></span>
                            <span> +977 061 581209
                       </span>
                        </li>
                    </ul>
                </div>
                <ul class="sci">
                    <li>
                        <a href="#"><img src="/frontend/images/icons/facebook.png" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="/frontend/images/icons/twitter.png" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="/frontend/images/icons/instagram.png" alt=""></a>
                    </li>

                </ul>
            </div>
            <div class="contactform">
                <h2>Send a Message</h2>
                <form method="POST" action="{{route('contactpost')}}">
                @csrf()
                <div class="formBox">
                    <div class="inputBox w50">
                        <input name="fname" type="text"  value="{{ old('fname') }}">
                        <span>First Name</span>
                    </div>
                    <div class="inputBox w50 ">
                        <input type="text"  name="lname" value="{{ old('lname') }}">
                        <span>Last Name</span>
                    </div>

                    <div class="inputBox w50 ">
                        <input name="email" type="text"  value="{{ old('email') }}">
                        <span>Email Address</span>
                    </div>
                    <div class="inputBox w100 ">
                 <textarea name="message"  value="{{ old('message') }}"></textarea>
                        <span>Write a Message here....</span>
                    </div>
                    <div class="inputBox w100 ">
                        <input type="submit" value="SEND">
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="mapouter">
    <div class="gmap_canvas"><iframe width="100%" height="310px" id="gmap_canvas" src="https://maps.google.com/maps?q=pokhara%20eng&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>


    </div>
</div>
<!-----FOOTER STARTS HERE------>
@endsection