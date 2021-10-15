<?= $this->extend('admin/layouts/app'); ?>

<!-- MAIN CONTENT -->
<?= $this->section('content'); ?>
<div class="container">

<div class="col-md-12 mx-auto">
<?= $this->include('admin/includes/_notification'); ?>
</div>

<?php

if ($products) {?>

<div class="row">

<?php foreach ($products as $key => $product) {?>

    <div class="col-md-4">
	<figure class="card card-product">
		<div class="img-wrap"><img src="<?= base_url("uploads/product")?>/<?=$product['cover_img']?>" style="width:100%"></div>
		<figcaption class="info-wrap">
				<h4 class="title"><?= $product['name'];?></h4>
				<p class="desc"><?= $product['description'];?></p>
				<div class="rating-wrap">
					<div class="label-rating">132 reviews</div>
					<div class="label-rating">154 orders </div>
				</div> <!-- rating-wrap.// -->
		</figcaption>
		<div class="bottom-wrap">
        <div class="price-wrap h5">
				<span class="price-new">&#x20A6; <?= $product['cprice']?></span> <del class="price-old">&#x20A6;<?= $product['cprice']?></del>
			</div> <!-- price-wrap.// -->
		<section class="btn-group">
        <a href="<?= base_url('dashboard/product/edit/'.$product['id']);?>" class="btn btn-sm btn-primary float-right">Edit</a>	
        &nbsp;
		<a href="" class="btn btn-sm btn-danger float-right">Delete</a>
        </section>	
		
		</div> <!-- bottom-wrap.// -->
	</figure>
</div> <!-- col // -->
<?php }}else {?>

    <div class="card card-inverse-info">
                      <div class="card-body">
                        <p class="mb-4">
                         You currently have no active product
                        </p>
                        <a href="<?=base_url('admin/category/create')?>" class="btn btn-primary">Create Category</a>
                        <a href="<?=base_url('admin/product/create')?>" class="btn btn-info">Create Product</a>
                      </div>
                    </div>

<?php }?>
</div>
</div>

<?= $this->endSection(); ?>
