<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href=" <?=base_url("vendors/flag-icon-css/css/flag-icon.min.css")?>">
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
      <!-- partial:partials/_horizontal-navbar.html -->
      <?= $this->include('admin/includes/_header')?>

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
          <div class="content-wrapper">
        <!-- ========================= SECTION MAIN  ========================= -->
        <?= $this->renderSection('content'); ?>
        <!-- ========================= SECTION MAIN END// ========================= -->
          </div> 
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
           <!-- ========================= SECTION MAIN  ========================= -->
           <?= $this->include('admin/includes/_footer'); ?>
        <!-- ========================= SECTION MAIN END// ========================= -->
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <!-- <script src=""></script> -->
    <!-- endinject -->
    <!-- Plugin js for this page-->
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

