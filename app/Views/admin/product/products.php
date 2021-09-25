<?= $this->extend('admin/layouts/app'); ?>

<!-- MAIN CONTENT -->
<?= $this->section('content'); ?>
<div class="container">
<div class="col-md-4">
<div class="card card-post card-round">
<img class="card-img-top" src="<?= base_url("admin/images/products/product-1.jpg")?>" alt="Card image cap">
<div class="card-body">
<!-- <div class="d-flex">
<div class="avatar">
<img src="../assets/img/profile2.jpg" alt="..." class="avatar-img rounded-circle">
</div>
<div class="info-post ml-2">
<p class="username">Joko Subianto</p>
<p class="date text-muted">20 Jan 18</p>
</div>
</div> -->
<div class="separator-solid"></div>
<p class="card-category text-info mb-1"><a href="#">Design</a></p>
<h3 class="card-title">
<a href="#">
Best Design Resources This Week
</a>
</h3>
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<a href="#" class="btn btn-primary btn-sm">Edit</a>
<a href="#" class="btn btn-danger btn-sm">Delete</a>
</div>
</div>
</div>
</div>
<?= $this->endSection(); ?>
