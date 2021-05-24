<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
  <body>
    <div class="authentication-theme auth-style_1">
      <div class="row">
        <div class="col-12 logo-section">
          <a href="/loginUser" class="logo">
            <img src="/img/logo.png" alt="logo" />
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-5 col-md-7 col-sm-9 col-11 mx-auto">
          <div class="grid">
            <div class="grid-body">
              <div class="row">
                <div class="col-lg-7 col-md-8 col-sm-9 col-12 mx-auto form-wrapper">
                  @if(\Session::has('alert'))
                <div class="alert alert-danger">
                    <div>{{Session::get('alert')}}</div>
                </div>
            @endif
            @if(\Session::has('alert-success'))
                <div class="alert alert-success">
                    <div>{{Session::get('alert-success')}}</div>
                </div>
            @endif
            <label><h4>REGISTER USER</h4></label>
               <form action="{{ url('/registerUserPost') }}" method="post">
                    @csrf
                    <div class="form-group input-rounded">
                      <input type="username" class="form-control" placeholder="Username" name="username" />
                    </div>
                    <div class="form-group input-rounded">
                      <input type="password" class="form-control" placeholder="Password" name="password" />
                    </div>
                    <div class="form-inline">
                      <div class="checkbox">
                        <label>
                          
                        <input type="checkbox" class="form-check-input" />Remember me <i class="input-frame"></i>
                        </label>
                      </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Daftar</button> |
                    <a href="/loginUser" class="btn btn-md btn-warning">Back To Login</a>
                </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="auth_footer">
        <p class="text-muted text-center">© Law-Firma 2020</p>
      </div>
    </div>
    <!-- SCRIPT LOADING START FORM HERE /////////////-->
    <!-- plugins:js -->
    <script src="src/assets/vendors/js/core.js"></script>
    <script src="src/assets/vendors/js/vendor.addons.js"></script>
    <!-- endinject -->
    <!-- Vendor Js For This Page Ends-->
    <!-- Vendor Js For This Page Ends-->
    <!-- build:js -->
    <script src="src/assets/js/template.js"></script>
    <!-- endbuild -->
  </body>
</html>