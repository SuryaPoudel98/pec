<?php

use App\Models\SelectClass;

$sc = new SelectClass();
$AboutUs = $sc->selectSubHeading('About us');
$Academics = $sc->selectSubHeading('Academics');
$Gallery = $sc->selectSubHeading('Gallery');
$ourprograms = $sc->selectSubHeading('Our Programs');
$Graduate = $sc->selectSubHeading('Graduate');
$Undergraduate = $sc->selectSubHeading('Undergraduate');
$Diploma = $sc->selectSubHeading('Diploma');
$PreDiploma = $sc->selectSubHeading('Pre-diploma');
$noticeDetails = $sc->noticeDetails(request('id'));
$latestExamnotice = $sc->notice('exam');
$latestGeneralnotice = $sc->notice('general');
?>
<!------Marquee Ends------->
<section class="section">
    <div class="logosandinfo">
        <div class="logos">
            <div class="logoimg">
                <a href="{{ url('/') }}"> <img src="/frontend/images/logo.png" alt="" height="85px"></a>
            </div>
        </div>
        <div class="addinfo">
            <div class="flagandnum">
                <div class="flag">
                    <p style="font-size: 19px;">Phirke 08 Pokhara Nepal</p>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25" zoomAndPan="magnify" viewBox="0 0 30 30.000001" height="23" preserveAspectRatio="xMidYMid meet" version="1.0">
                        <defs>
                            <clipPath id="id1">
                                <path d="M 8.648438 2.902344 L 25.339844 2.902344 L 25.339844 24.675781 L 8.648438 24.675781 Z M 8.648438 2.902344 " clip-rule="nonzero" />
                            </clipPath>
                        </defs>
                        <g clip-path="url(#id1)">
                            <path fill="rgb(13.328552%, 25.099182%, 54.508972%)" d="M 25.257812 14.628906 L 8.726562 2.902344 L 8.726562 24.675781 L 25.257812 24.675781 L 15.339844 14.628906 Z M 25.257812 14.628906 " fill-opacity="1" fill-rule="nonzero" />
                        </g>
                        <path fill="rgb(86.669922%, 18.429565%, 27.059937%)" d="M 22.925781 13.789062 L 9.5625 4.742188 L 9.5625 23.839844 L 22.925781 23.839844 L 13.382812 13.789062 Z M 22.925781 13.789062 " fill-opacity="1" fill-rule="nonzero" />
                        <path fill="rgb(100%, 100%, 100%)" d="M 13.980469 18.847656 L 14.46875 18.167969 L 13.632812 18.25 L 13.71875 17.410156 L 13.035156 17.902344 L 12.6875 17.132812 L 12.34375 17.902344 L 11.660156 17.410156 L 11.742188 18.25 L 10.910156 18.167969 L 11.398438 18.847656 L 10.632812 19.195312 L 11.398438 19.542969 L 10.910156 20.226562 L 11.742188 20.144531 L 11.660156 20.980469 L 12.34375 20.492188 L 12.6875 21.257812 L 13.035156 20.492188 L 13.71875 20.980469 L 13.632812 20.144531 L 14.46875 20.226562 L 13.980469 19.542969 L 14.746094 19.195312 Z M 12.6875 12.863281 L 12.6875 12.867188 L 12.691406 12.863281 L 12.707031 12.867188 C 13.929688 12.867188 14.925781 11.917969 15.03125 10.714844 C 14.738281 11.257812 14.269531 11.6875 13.699219 11.921875 L 13.550781 11.71875 L 14.0625 11.488281 L 13.550781 11.257812 L 13.878906 10.800781 L 13.320312 10.855469 L 13.375 10.296875 L 12.921875 10.625 L 12.691406 10.109375 L 12.460938 10.625 L 12.003906 10.296875 L 12.058594 10.855469 L 11.5 10.800781 L 11.828125 11.257812 L 11.316406 11.488281 L 11.828125 11.71875 L 11.6875 11.914062 C 11.128906 11.675781 10.667969 11.25 10.382812 10.714844 C 10.480469 11.914062 11.46875 12.855469 12.6875 12.863281 Z M 12.6875 12.863281 " fill-opacity="1" fill-rule="nonzero" />
                    </svg>
                </div>
                <div class="numbermob">
                    <h1><i class="fa-solid fa-phone"></i> +977 061-581209/575926</h1>
                    <p><i class="fa-solid fa-address-card" style="margin-right:10px"></i> <a href="{{url('contactus')}}">Contact Us</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-------Navbar Starts here---->
<section class="color">
    <nav>
        <label for="btn" class="icon">
            <span class="fa fa-bars"></span>
        </label>
        <input type="checkbox" id="btn">
        <ul>
            <li class="homepath"> <a href="/"><i class="fa-solid fa-house" style="color: white;"></i></a></li>
            <li>
                <label for="btn-1" class="show" style="margin-top: 10px;">About us +</label>
                <a href="#">About us <i class="fa-solid fa-plus"></i>

                </a>
                <input type="checkbox" id="btn-1">
                <ul>
                    @foreach ($AboutUs as $About)
                    <li><a href="{{ url('contentdetails/') . '/' . $About->id }}">{{ $About->child_title }}</a>
                    </li>
                    @endforeach

                </ul>
            </li>
            <li>
                <label for="btn-2" class="show">Programs +</label>
                <a href="#">Programs <i class="fa-solid fa-plus"></i>

                </a>
                <input type="checkbox" id="btn-2">
                <ul>

                    <li>
                        <label for="btn-3" class="show" style="">Graduate</label>
                        <a href="#">Graduate </a>
                        <input type="checkbox" id="btn-3">
                        <ul>
                            @foreach ($Graduate as $graduate)
                            <li><a href="{{ url('contentdetails/') . '/' . $graduate->id }}">{{ $graduate->child_title }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <label for="btn-4" class="show" style="">UnderGraduate</label>
                        <a href="#">UnderGraduate </a>
                        <input type="checkbox" id="btn-4">
                        <ul>
                            @foreach ($Undergraduate as $Undergraduate)
                            <li><a href="{{ url('contentdetails/') . '/' . $Undergraduate->id }}">{{ $Undergraduate->child_title }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <label for="btn-5" class="show" style="">Diploma </label>
                        <a href="#">Diploma
                            <input type="checkbox" id="btn-5">
                            <ul>
                                @foreach ($Diploma as $diploma)
                                <li><a href="{{ url('contentdetails/') . '/' . $diploma->id }}">{{ $diploma->child_title }}</a>
                                </li>
                                @endforeach

                            </ul>
                    </li>
                    <li>
                        <label for="btn-6" class="show" style="">Pre-Diploma </label>
                        <a href="#">Pre-Diploma
                            <input type="checkbox" id="btn-6">
                            <ul>
                                @foreach ($PreDiploma as $prediploma)
                                <li><a href="{{ url('contentdetails/') . '/' . $prediploma->id }}">{{ $prediploma->child_title }}</a>
                                </li>
                                @endforeach
                            </ul>
                    </li>
                </ul>
            </li>



            <li>
                <label for="btn-7" class="show">Notice +</label>
                <a href="#">Notice <i class="fa-solid fa-plus"></i>

                </a>
                <input type="checkbox" id="btn-7">
                <ul>
                    <li><a href="{{url('notice/exam')}}">Exam</a></li>
                    <li><a href="{{url('notice/general')}}">General</a></li>
                    <li><a href="https://pu.edu.np/" target="_blank">PU Related</a></li>
                    <li><a href="http://ctevt.org.np/" target="_blank">CTEVT Related</a></li>
                </ul>
            </li>
            <li>
                <label for="btn-8" class="show">Publications +</label>
                <a href="#">Publications <i class="fa-solid fa-plus"></i>

                </a>
                <input type="checkbox" id="btn-8">
                <ul>
                    <li><a href="{{url('publication/Brochure')}}">Brochure</a></li>
                    <li><a href="{{url('publication/Calender')}}">Calendar</a></li>
                    <li><a href="{{url('publication/Journal')}}">Journal</a></li>
                    <li><a href="{{url('publication/Thesis')}}">Master Thesis</a></li>
                    <li>
                        <label for="btn-9" class="show">BE Project </label>
                        <a href="#">BE Project

                        </a>
                        <input type="checkbox" id="btn-9">
                        <ul>
                            <li><a href="{{url('publication/BE Civil Project')}}">BE Civil Project</a></li>
                            <li><a href="{{url('publication/BE Computer Project')}}">BE Computer Project</a></li>
                            <li><a href="{{url('publication/BE Arch Project')}}" target="_blank">BE Arch Project</a></li>

                        </ul>
                    </li>
                    <li>
                        <label for="btn-10" class="show">DE Project </label>
                        <a href="#">DE Project

                        </a>
                        <input type="checkbox" id="btn-10">
                        <ul>
                            <li><a href="{{url('publication/DE Civil Project')}}">DE Civil Project</a></li>
                            <li><a href="{{url('publication/DE Computer Project')}}">DE Computer Project</a></li>
                        </ul>
                    </li>

                </ul>
            </li>
            <li>
                <label for="btn-11" class="show">Achievements +</label>
                <a href="#">Achievements <i class="fa-solid fa-plus"></i>

                </a>
                <input type="checkbox" id="btn-11">
                <ul>
                    <li><a href="{{url('Achievement/Dean List')}}">Dean List</a></li>
                    <li><a href="{{url('Achievement/Other Achievement')}}">Other Achievement</a></li>

                </ul>
            </li>
            <li>
                <label for="btn-12" class="show">Downloads +</label>
                <a href="#">Downloads <i class="fa-solid fa-plus"></i>

                </a>
                <input type="checkbox" id="btn-12">
                <ul>
                    <li><a href="{{url('download/Exam Form')}}">Exam Form</a></li>
                    <li><a href="{{url('download/Admission Form')}}">Admission Form</a></li>
                    <li><a href="{{url('download/Templates')}}">Templates</a></li>
                    <li><a href="{{url('download/syallabus')}}">Syllabus</a></li>

                </ul>
            </li>

            <li>
                <label for="btn-13" class="show">Gallery +</label>
                <a href="#">Gallery <i class="fa-solid fa-plus"></i>

                </a>
                <input type="checkbox" id="btn-13">
                <ul>
                    <li><a href="{{url('gallery/Sports')}}">Sports</a></li>
                    <li><a href="{{url('gallery/ECA')}}">ECA</a></li>
                    <li><a href="{{url('gallery/Farewell or Welcome')}}">Farewell / Welcome</a></li>
                    <li><a href="{{url('gallery/Graduations')}}">Graduations</a></li>
                    <li><a href="{{url('gallery/Others')}}">Others</a></li>

                </ul>
            </li>
            </a>
            </li>
            <li>
                <label for="btn-14" class="show">Others +</label>
                <a href="#">Others <i class="fa-solid fa-plus"></i>

                </a>
                <input type="checkbox" id="btn-14">
                <ul>

                    <li>
                        <label for="btn-15" class="show" style="">Onine Admission</label>
                        <a href="#">Onine Admission </a>
                        <input type="checkbox" id="btn-15">
                        <ul>
                            <li> <a href="https://pecbe.inschoolerp.com/AdmissionForm/MscForm" target="_blank">MScCM</a></li>
                            <li> <a href="http://apply.pec.edu.np/" target="_blank">BE/B Arch</a></li>
                            <li> <a href="https://pec.inschoolerp.com/AdmissionForm/CTEVTForm" target="_blank">Diploma/TSLC</a></li>
                        </ul>
                    </li>
                    <li>
                        <label for="btn-16" class="show" style="">Career</label>
                        <a href="{{ route('career.index') }}">Career </a>

                    </li>
                    <li>
                        <label for="btn-17" class="show" style="">Virtual Class </label>
                        <a target="_blank" href="https://www.microsoft.com/en-ww/microsoft-teams/log-in">Virtual Class</a>

                    </li>
                    <li>
                        <label for="btn-18" class="show" style="">Email Login </label>
                        <a href="https://gmail.com/" target="_blank">Email Login</a>

                    </li>
                    <li>
                        <label for="btn-19" class="show" style="">Alumni </label>
                        <a href="/alumni" target="_blank">Alumni</a>

                    </li>
                </ul>
            </li>


            
        </ul>
    </nav>
</section>

<script>
    $('.icon').click(function() {
        $('span').toggleClass("cancel");
    });
</script>
<!-------Navbar Ends here---->