<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="cache-control" content="max-age=604800" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Genuinestores <?=$title ?? '' ?></title>

<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">


<link href="<?= base_url('css/bootstrap3661.css?v=2.0')?>" rel="stylesheet" type="text/css"/>

<!-- Font awesome 5 -->
<link href="<?= base_url('fonts/fontawesome/css/all.min3661.css?v=2.0')?>" type="text/css" rel="stylesheet">

<!-- custom style -->
<link href="<?= base_url('css/ui3661.css?v=2.0')?>" rel="stylesheet" type="text/css"/>
<link href="<?= base_url('css/responsive3661.css?v=2.0')?>" rel="stylesheet" type="text/css" />

    <!--====== Toaster Alert css ======-->
<link rel="stylesheet" type="text/css" href="<?= base_url('plugin/toastr/mdtoast.css')?>">

    <!--====== Jquery alert css ======-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    
<?= $this->renderSection('custom_css'); ?>
</head>
<body>

<!-- ========================= SECTION HEADER  ========================= -->
<?= $this->include('layouts/common/header'); ?>
<!-- ========================= SECTION HEADER END// ========================= -->


<!-- ========================= SECTION SLIDER  ========================= -->
<?= $this->renderSection('slider'); ?>
<!-- ========================= SECTION SLIDER END// ========================= -->


<!-- ========================= SECTION MAIN  ========================= -->
<?= $this->renderSection('content'); ?>
<!-- ========================= SECTION MAIN END// ========================= -->

<?= $this->include('layouts/common/footer'); ?>

<!-- jQuery -->
<script src="<?= base_url('js/jquery-2.0.0.min.js')?>" type="text/javascript"></script>

<!-- Bootstrap4 files-->
<script src="<?= base_url('js/bootstrap.bundle.min.js')?>" type="text/javascript"></script>

<!-- custom javascript -->
<script src="<?= base_url('js/script3661.js?v=2.0')?>" type="text/javascript"></script>

<!--- Jquery Toaster - -->
<script type="text/javascript" src="<?= base_url('plugin/toastr/mdtoast.js')?>"></script>

<!--Jquery alert js  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<!-- ========================= SECTION CUSTOM JS STARTS ========================= -->
<?= $this->renderSection('customJS'); ?>
<!-- ========================= SECTION CUSTOM JS END// ========================= -->


</body>

</html>