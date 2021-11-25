<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from radixtouch.in/templates/snkthemes/grexsan/source/light/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Dec 2020 17:28:46 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('assets/css/app.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bundles/bootstrap-social/bootstrap-social.css')}}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/components.css')}}">
  <!-- Custom style CSS -->
  
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<body class="background-image-body">
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <!-- <div class="login-brand login-brand-color">
                <img alt="image" src="assets/img/logo.png" />
              Grexsan
            </div> -->
            <div class="card card-auth">
              <div class="card-header card-header-auth">
                <h4>Login</h4>
              </div>
               @if(\Session::has('verify'))
             <div class="container">
                  <div class="row">
                      <div class="col-lg-2">
                          
                      </div>
                      <div class="col-lg-8">
                           <div class="alert alert-success" style="text-align: center;">
                          You have successfully verified your account. Please login to continue, Thanks.
                      </div>
                      </div>
                      <div class="col-lg-2">
                          
                      </div>
                     
                  </div>
             </div>
             
                 
                  @endif

                  @if(\Session::has('message'))
             <div class="container">
                  <div class="row">
                      <div class="col-lg-2">
                          
                      </div>
                      <div class="col-lg-8">
                           <div class="alert alert-success" style="text-align: center;">
                         Your password has been changed!.
                      </div>
                      </div>
                      <div class="col-lg-2">
                          
                      </div>
                     
                  </div>
             </div>
             
                 
                  @endif
                   @if(\Session::has('success'))
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-2">
                              
                          </div>
                          <div class="col-lg-8">
                               <div class="alert alert-success">
                          Kindly Check Your Email<br>
                          A Verification Email Is Sent On Your Email.
                      </div>
                          </div>
                          <div class="col-lg-2">
                              
                          </div>
                      </div>
                  </div>
                  @endif
                  
                   @if(\Session::has('warning'))                  
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-2">
                               
                          </div>
                          <div class="col-lg-8">
                                <div class="alert alert-warning" style="    color: #020201;
                                    background-color: #2ce55d;;
                                    border-color: #faebcc;
                                    text-align: center;">
                          {{\Session::get('warning')}}
                      </div>
                          </div>
                          <div class="col-lg-2">
                               
                          </div>
                      </div>
                  </div>
                 @endif 
            @if(\Session::has('danger'))
             <div class="container">
                  <div class="row">
                      <div class="col-lg-2">
                          
                      </div>
                      <div class="col-lg-8">
                           <div class="alert alert-success" style="text-align: center;">
                          Username & Password combination doesnot not match. Please try again.
                      </div>
                      </div>
                      <div class="col-lg-2">
                          
                      </div>
                     
                  </div>
             </div>
             
                 
                  @endif
              <div class="card-body">
                <form method="POST" action="{{route('loginpost')}}" class="needs-validation" novalidate="">
                    @csrf
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">Password</label>
                      <div class="float-right">
                        <a href="" class="text-small">
                          Forgot Password?
                        </a>
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-lg btn-block btn-auth-color" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
                
                
              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Don't have an account? <a href="">SignUp</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="{{asset('assets/js/app.min.js')}}"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="{{asset('assets/js/scripts.js')}}"></script>
  @include('sweetalert::alert')

</body>


<!-- Mirrored from radixtouch.in/templates/snkthemes/grexsan/source/light/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Dec 2020 17:28:46 GMT -->
</html>