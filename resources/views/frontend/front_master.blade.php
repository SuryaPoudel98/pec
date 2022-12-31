
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pokhara Engineering Collge</title>
        <link rel="stylesheet" href="/frontend/css/style.css">
        <link rel="stylesheet" href="/frontend/css/bootstrapcdn.css">
        <link rel="stylesheet" href="/frontend/css/owl-courser.css">
        <script src="https://kit.fontawesome.com/c8371491b6.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/frontend/css/lightbox.min.css">
        <link rel="stylesheet" href="/frontend/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="/frontend/css/slider.css">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <link rel="shortcut icon" type="image/x-icon" href="/logo.jpg">
    
    
    </head>
</head>

<body>
@include('frontend.body.header')

 @yield('content')
    <!-----FOOTER STARTS HERE------>
    @include('frontend.body.footer')
    <!-----FOOTER ENDS HERE-------->
</body>


<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
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
<!-----NAVBAR SCRIPR PATH---->
<script src="/frontend/javascript/lightbox-plus-jquery.min.js"></script>
<script src="/frontend/javascript/photoslider.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="/frontend/javascript/swiper-bundle.min.js"></script>
<script src="/frontend/javascript/main.js"></script>
<script src="/frontend/javascript/sliderscript.js"></script>



</html>