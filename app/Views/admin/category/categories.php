<?= $this->extend('admin/layouts/app'); ?>

<!-- MAIN CONTENT -->
<?= $this->section('content'); ?>
<div class="container">
<div class="col-md-4">
<div class="card card-post card-round">
<img class="card-img-top" src="<?= base_url("admin/images/products/product-1.jpg")?>" alt="Card image cap">
<div class="card-body">
<div class="separator-solid"></div>

<h3 class="card-title">
<a href="#">
Best Design Resources This Week
</a>
</h3>
<a href="#" class="btn btn-primary btn-sm">Edit</a>
<a href="#" class="btn btn-danger btn-sm">Delete</a>
</div>
</div>
</div>
</div>
<?= $this->endSection(); ?>