<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.urbanui.com/calmui/template/demo/vertical-default-light/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Sep 2019 01:12:57 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Brindocorp || Login</title>
  <link rel="stylesheet" href="{{asset('back/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('back/vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('back/css/vertical-layout-light/style.css')}}">
  <link rel="shortcut icon" href="{{asset('back/images/favicon.png')}}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo">
                <img src="{{asset('back/images/logo.png')}}" alt="logo">
              </div>
              <h4>Admin!! Login</h4>
              <!-- <h6 class="font-weight-light">Sign in to continue.</h6> -->
                <form class="pt-3" method="POST" action="{{ route('admin.login') }}">
                @csrf
                <div class="form-group">
                    <input type="email" class="form-control @error('email') is-invalid @enderror form-control-lg"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email/UserID">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password" class="form-control @error('password') is-invalid @enderror form-control-lg" name="password" required autocomplete="current-password" placeholder="Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <!-- <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                </div> -->
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <script src="{{asset('back/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('back/js/off-canvas.js')}}"></script>
  <script src="{{asset('back/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('back/js/template.js')}}"></script>
  <script src="{{asset('back/js/settings.js')}}"></script>
  <script src="{{asset('back/js/todolist.js')}}"></script>
</body>
</html>