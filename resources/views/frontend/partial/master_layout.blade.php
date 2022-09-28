<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{__('SYSTEMINN')}} </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    {{-- include theme & custom css libruaries  --}}
    @include('frontend.layouts.custom_css')

</head>

<body>

    <!-- Topbar Start -->
    @include('frontend.partial.topbar')
    <!-- Topbar End -->

    <!-- Navbar Start -->
    @include('frontend.partial.header')
    <!-- Navbar End -->


    {{-- main body content start  --}}
    @yield('body-content')
    {{-- main body content end  --}}


    <!-- Footer Start -->
    @include('frontend.partial.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    {{-- include theme & custom scripts files  --}}
    @include('frontend.layouts.custom_script')

</body>

</html>
