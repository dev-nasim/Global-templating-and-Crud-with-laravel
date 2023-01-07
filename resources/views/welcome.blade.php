<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Vue</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icon -->
    <link rel="icon" href="../../public/assets/images/logo/logo_icon.png" type="image/png" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}" />
    <!-- site css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" />
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}" />
    <!-- color css -->
{{--    <link rel="stylesheet" href="{{ asset('assets/css/color_2.css')}}" />--}}
    <!-- select bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select.css')}}" />
    <!-- scrollbar css -->
    <link rel="stylesheet" href="{{ asset('assets/css/perfect-scrollbar.css')}}" />
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css')}}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div id="app">
    <App></App>
</div>


<script>
    window.baseUrl = '{{url('/')}}'
</script>

<script src="{{ asset('js/app.js') }}" defer></script>
<!-- jQuery -->
<script src="{{ asset('assets/js/jquery.min.js')}}"></script>
<script src="{{ asset('assets/js/popper.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
<!-- wow animation -->
<script src="{{ asset('assets/js/animate.js')}}"></script>
<!-- select country -->
<script src="{{ asset('assets/js/bootstrap-select.js')}}"></script>
<!-- owl carousel -->
<script src="{{ asset('assets/js/owl.carousel.js')}}"></script>
<!-- chart js -->
<script src="{{ asset('assets/js/Chart.min.js')}}"></script>
<script src="{{ asset('assets/js/Chart.bundle.min.js')}}"></script>
<script src="{{ asset('assets/js/utils.js')}}"></script>
<script src="{{ asset('assets/js/analyser.js')}}"></script>
<!-- nice scrollbar -->
<script src="{{ asset('assets/js/perfect-scrollbar.min.js')}}"></script>
<script>
    var ps = new PerfectScrollbar('#sidebar');
</script>
<!-- custom js -->
<script src="{{ asset('assets/js/custom.js')}}"></script>
<script src="{{ asset('assets/js/chart_custom_style1.js')}}"></script>

</body>
</html>
