<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>فرم ثبت نام</title>
    <link rel="stylesheet" href="{{ asset('assets/frontend/_framework/uikit-3.0.0/css/uikit-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/_css/master.css') }}">
</head>
<body>
<!--========Header==========-->

<!--========Main============-->
<main>
    @yield('content')
</main>
<!--========Footer==========-->

<!--========Asset===========-->
<script src="{{ asset('assets/frontend/_js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/frontend/_framework/uikit-3.0.0/js/uikit.min.js') }}"></script>
<script src="{{ asset('assets/frontend/_js/pages/apply.js') }}"></script>
<!--========Developer===========-->
<script src="{{ asset('assets/global/function.js') }}"></script>
<!--========Notification===========-->
@include('global.developer.notification.iziToast.iziToast')
<!--========PageJS===========-->
@yield('js')


</body>
</html>
