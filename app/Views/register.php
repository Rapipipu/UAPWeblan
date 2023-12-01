<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Register
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/soft-ui-dashboard.min.css?v=1.0.7" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>
<body class="">
 
  <main class="main-content  mt-0">
    <section>
      <div class="page-header ">
        <div class="container-fluid" style="height:100vh; background-color: #9F481B;">
          <div class="row" >
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-5" style="background-color: white;">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">Welcome to ARX</h3>
                  <h2 class="mb-0 #9F481B" >Sign Up</h2>
                </div>
                <div class="card-body">
                <?= view('Myth\Auth\Views\_message_block') ?>
                <form action="<?= url_to('register') ?>" method="post">
                    <?= csrf_field() ?>
                    <label>Email</label>
                    <div class="mb-3">
                      <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" placeholder="Username" aria-label="Email" aria-describedby="email-addon" name="email">
                    </div> 

                    <label>Username</label>
                    <div class="mb-3">
                      <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>" placeholder="Username" aria-label="Email" aria-describedby="email-addon" name="username">
                    </div> 
                    
                    <label>Enter your password</label>
                    <div class="mb-3">
                      <input type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="Password" aria-label="Password" aria-describedby="password-addon" name="password">
                    </div>

                    <label>Confirm Password</label>
                    <div class="mb-3">
                      <input type="password" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="Password" aria-label="Password" aria-describedby="password-addon" name="pass_confirm">
                    </div>

                    <label>Enter your age</label>
                    <div class="mb-3">
                      <input type="text" class="form-control " placeholder="Password" aria-label="Password" aria-describedby="password-addon" name="umur">
                    </div>

                    <label>Contact</label>
                    <div class="mb-3">
                      <input type="text" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon" name="telefon">
                    </div>

                    <div class="mb-3">
                      <input type="text" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon" name="poin" value="0" hidden>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Sign up</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    Already have an account?
                    <a href="<?=base_url('/login')?>" class="text-info text-gradient font-weight-bold">Sign in</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8"
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-size: 90% 100%; background-repeat: no-repeat; background-image:url('../../../assets/img/register.JPG')"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
</body>
</html>