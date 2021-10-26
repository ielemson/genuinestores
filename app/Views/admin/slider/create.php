<?= $this->extend('admin/layouts/app'); ?>

<!-- MAIN CONTENT -->
<?= $this->section('content'); ?>

<div class="container">  
  
<div class="col-md-12 mx-auto">
<?= $this->include('admin/includes/_notification'); ?>
</div>

<div class="row">
<div class="col-12 grid-margin">
<div class="card">
<div class="card-body">
<h5 class="card-title mb-4">Upload Image Slider</h5>
<div class="fluid-container">

<form action="<?= base_url('admin/slider/store'); ?>" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
<?= csrf_field() ?>


<div class="form-group">
<label>Slider Image </label>
<div class="input-group col-xs-12">
<input type="file" class="form-control file-upload-info" name="slider" multiple="multiple" accept=".png, .jpg, .jpeg" required>
</div>
</div>

<!-- <div class="form-group">
<label>Slider Image - 2</label>
<div class="input-group col-xs-12">
<input type="file" class="form-control file-upload-info" name="slider2" multiple="multiple" accept=".png, .jpg, .jpeg" required>
</div>
</div> -->

<button type="submit" class="btn btn-primary mr-2">Create</button>
<button class="btn btn-light" type="reset">Cancel</button>
</form>



</div>
</div>
</div>
</div>
</div>

<section class="padding-bottom">

<header class="section-heading heading-line">
	<h4 class="title-section text-uppercase">Sliders</h4>
</header>

<div class="row">

<?php if (count($sliders)>0) {foreach ($sliders as $key => $slider) {?>

	<div class="col-md-3 col-sm-6">
		<article class="card card-post">
		  <img src="/images/banner/<?=$slider['slider']?>" class="card-img-top">
		  <div class="card-body">
		    <h6 class="title">Action</h6>
		    <a href="<?=base_url('admin/slider/delete/'.$slider['id'])?>" class="btn btn-danger btn-sm">Delete</a>
		  </div>
		</article> <!-- card.// -->
	</div> <!-- col.// -->

<?php }}else { ?>
	<div class="col-md-3 col-sm-6">
		<article class="card card-post">
		  <!-- <img src="images/posts/1.jpg" class="card-img-top"> -->
		  <div class="card-body">
		    <h6 class="title">No Slider To Display</h6>
		    <!-- <p class="small text-uppercase text-muted">Order protection</p> -->
		  </div>
		</article> <!-- card.// -->
	</div> <!-- col.// -->
<?php } ?>



	
</div> <!-- row.// -->

</section>

</div>

<?= $this->endSection(); ?>

