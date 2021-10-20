<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href=" <?=base_url("admin/vendors/flag-icon-css/css/flag-icon.min.css")?>">
    <link rel="stylesheet" href=" <?=base_url("admin/vendors/mdi/css/materialdesignicons.min.css")?>">
    <link rel="stylesheet" href=" <?=base_url("admin/vendors/font-awesome/css/font-awesome.min.css")?>">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="stylesheet" href=" <?=base_url("admin/vendors/simple-line-icons/css/simple-line-icons.css")?>">
    <link rel="stylesheet" href=" <?=base_url("admin/vendors/feather/feather.css")?>">
    <link rel="stylesheet" href=" <?=base_url("admin/vendors/css/vendor.bundle.base.css")?>">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?=base_url("admin/css/horizontal-layout/style.css")?>">
    
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" /> 

  </head>

  <body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      
      <div class="main-panel">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
                
              <div class="auth-form-light text-left p-5">
              <?= $this->include('admin/includes/_notification'); ?>
                <!-- <div class="brand-logo">
                  <img src="https://www.bootstrapdash.com/demo/libertyui/template/images/logo-inverse.svg" alt="logo">
                </div> -->
                <h4>Hello! let's get started</h4>
                <h6 class="font-weight-light">Sign in to continue.</h6>
               
                <form class="pt-3" action="<?= base_url('admin/login'); ?>" method="POST" accept-charset="UTF-8">
                      <?= csrf_field() ?>
                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg" id="email" placeholder="Email" name="email" required>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="password" placeholder="Password" name="password" required>
                  </div>
                  
                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" >SIGN IN</button>
                  
                  
                  <div class="text-center mt-4 font-weight-light">
                    Click Here to go back? <a href="<?=base_url('/')?>" class="text-primary">Home</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
    <script src="<?= base_url('admin/vendors/js/vendor.bundle.base.js')?>"></script>
    <script src="<?= base_url('admin/vendors/chart.js/Chart.min.js')?>"></script>
    <script src="<?= base_url('admin/vendors/progressbar.js/progressbar.min.js')?>"></script>
    <script src="<?= base_url('admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')?>"></script>
    <script src="<?= base_url('admin/vendors/jquery-bar-rating/jquery.barrating.min.js')?>"></script>
    <script src="<?= base_url('admin/vendors/jquery-sparkline/jquery.sparkline.min.js')?>"></script>
    <script src="<?= base_url('admin/vendors/raphael/raphael.min.js')?>"></script>
    <script src="<?= base_url('admin/vendors/morris.js/morris.min.js')?>"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="<?= base_url('admin/js/off-canvas.js')?>"></script>
    <script src="<?= base_url('admin/js/hoverable-collapse.js')?>"></script>
    <script src="<?= base_url('admin/js/template.js')?>"></script>
    <script src="<?= base_url('admin/js/settings.js')?>"></script>
    <script src="<?= base_url('admin/js/todolist.js')?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="<?= base_url('admin/js/dashboard.js')?>"></script>
    <!-- End custom -->
  </body>

</html>

