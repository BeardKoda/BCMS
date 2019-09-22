<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Brindocorp || Admin - @yield('title')</title><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  @yield('head')
  <link rel="stylesheet" href="{{asset('back/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('back/vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('back/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
  <link rel="stylesheet" href="{{asset('back/css/vertical-layout-light//style.css')}}">
  <link rel="shortcut icon" href="{{asset('back/images/favicon.png')}}" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('admin.layout.include.header')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- SideBar -->
      @include('admin.layout.include.menu')
      <!-- End SideBar-->
      <!-- main-panel Starts  -->
      <div class="main-panel">
        @yield('content')
        @include('admin.layout.include.main-footer')
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
@include('admin.layout.include.footer')
</body>

</html>
