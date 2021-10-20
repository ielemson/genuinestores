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
<label>Slider Image - 1</label>
<div class="input-group col-xs-12">
<input type="file" class="form-control file-upload-info" name="slider1" multiple="multiple" accept=".png, .jpg, .jpeg" required>
</div>
</div>

<div class="form-group">
<label>Slider Image - 2</label>
<div class="input-group col-xs-12">
<input type="file" class="form-control file-upload-info" name="slider2" multiple="multiple" accept=".png, .jpg, .jpeg" required>
</div>
</div>

<button type="submit" class="btn btn-primary mr-2">Create</button>
<button class="btn btn-light" type="reset">Cancel</button>
</form>



</div>
</div>
</div>
</div>
</div>
</div>

<?= $this->endSection(); ?>

