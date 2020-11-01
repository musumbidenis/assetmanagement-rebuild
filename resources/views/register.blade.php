<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Admin Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../../assets/css/material-dashboard.min.css?v=2.1.2" rel="stylesheet" />
</head>

<body class="off-canvas-sidebar">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">
    <div class="container">
      <div class="navbar-wrapper">
        <a class="navbar-brand" href="javascript:;">Registration Page</a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">
          <li class="nav-item active ">
            <a href="/register" class="nav-link">
              <i class="material-icons">person_add</i>
              Register
            </a>
          </li>
          <li class="nav-item ">
            <a href="/login" class="nav-link">
              <i class="material-icons">fingerprint</i>
              Login
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper wrapper-full-page">
    <div class="page-header login-page header-filter" filter-color="black" style="background-image: url('../../assets/img/login.jpg'); background-size: cover; background-position: top center;">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
            <form class="form" method="POST" action="{{ url('/register') }}">
              {{ csrf_field() }}

            <div class="card card-login card-hidden">
              <div class="card-header card-header-rose text-center">
                <h5 class="card-title">Registration Form</h5>
              </div><br>
              <div class="card-body ">
                <span class="bmd-form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">face</i>
                      </span>
                    </div>
                    <input type="text" name="id" class="form-control" placeholder="Employee id..." required>
                  </div>
                </span><br>
                <span class="bmd-form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">account_circle</i>
                      </span>
                    </div>
                    <input type="text" name="fname" class="form-control" placeholder="First Name..." required>
                  </div>
                </span><br>
                <span class="bmd-form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">face</i>
                      </span>
                    </div>
                    <input type="text" name="surname" class="form-control" placeholder="Surname..." required>
                  </div>
                </span><br>
                <span class="bmd-form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">email</i>
                      </span>
                    </div>
                    <input type="email" name="email" class="form-control" placeholder="Email..." required>
                  </div>
                </span><br>
                <span class="bmd-form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">phone</i>
                      </span>
                    </div>
                    <input type="text" name="phoneNumber" class="form-control" placeholder="Phone Number..." required>
                  </div>
                </span><br>
                <span class="bmd-form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">computer</i>
                      </span>
                    </div>
                    <select class="" name="lab" id="">
                      <option value="" disabled selected>Select Computer lab</option>
                      <option value="1">Computer Lab 1</option>
                      <option value="2">Computer Lab 2</option>
                      <option value="3">Computer Lab 3</option>
                      <option value="4">Computer Lab 4</option>
                      <option value="5">Computer Lab 5</option>
                    </select>
                  </div>
                </span><br>
              </div>
              <div class="card-footer justify-content-center">
                  <div class="card-footer ">
                   <button type="submit" class="btn btn-fill btn-rose">Register</button>
                  </div>
              </div>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../../assets/js/core/jquery.min.js"></script>
  <script src="../../assets/js/core/popper.min.js"></script>
  <script src="../../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../../assets/js/material-dashboard.min.js?v=2.1.2" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      md.checkFullPageBackgroundImage();
      setTimeout(function() {
        // after 1000 ms we add the class animated to the login/register card
        $('.card').removeClass('card-hidden');
      }, 700);
    });
  </script>
</body>

</html>
{{-- @include('layouts.header')

<body class="off-canvas-sidebar">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">
        <div class="container">
          <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a href="/register" class="nav-link">
                  <i class="material-icons">person_add</i> Register
                </a>
              </li>
              <li class="nav-item">
                <a href="/" class="nav-link">
                  <i class="material-icons">fingerprint</i> Login
                </a>
              </li>
            </ul>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
        <div class="wrapper wrapper-full-page">
          <div class="page-header register-page header-filter" filter-color="black" style="background-image: url('../../assets/img/form.jpeg')">
            <div class="container">
                    <div class="row">
                      <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
                        <form class="form" method="POST" action="{{ url('/register') }}">
                            {{ csrf_field() }}
            
                          <div class="card card-login card-hidden">
                            <div class="card-header card-header-rose text-center">
                              <h4 class="card-title">Registration Form</h4>
                            </div><br>
                            <div class="card-body ">
                              <span class="bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">face</i>
                                    </span>
                                  </div>
                                  <input type="text" name="id" class="form-control" placeholder="Employee id..." required>
                                </div>
                              </span><br>
                              <span class="bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">account_circle</i>
                                    </span>
                                  </div>
                                  <input type="text" name="fname" class="form-control" placeholder="First Name..." required>
                                </div>
                              </span><br>
                              <span class="bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">face</i>
                                    </span>
                                  </div>
                                  <input type="text" name="surname" class="form-control" placeholder="Surname..." required>
                                </div>
                              </span><br>
                              <span class="bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">email</i>
                                    </span>
                                  </div>
                                  <input type="email" name="email" class="form-control" placeholder="Email..." required>
                                </div>
                              </span><br>
                              <span class="bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">phone</i>
                                    </span>
                                  </div>
                                  <input type="text" name="phoneNumber" class="form-control" placeholder="Phone Number..." required>
                                </div>
                              </span><br>
                              <span class="bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">computer</i>
                                    </span>
                                  </div>
                                  <select class="" name="lab" id="">
                                    <option value="" disabled selected>Select Computer lab</option>
                                    <option value="1">Computer Lab 1</option>
                                    <option value="2">Computer Lab 2</option>
                                    <option value="3">Computer Lab 3</option>
                                    <option value="4">Computer Lab 4</option>
                                    <option value="5">Computer Lab 5</option>
                                  </select>
                                </div>
                              </span><br>
                            </div>
                            <div class="card-footer justify-content-center">
                                <div class="card-footer ">
                                 <button type="submit" class="btn btn-fill btn-rose">Register</button>
                                </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </body>
</html> --}}