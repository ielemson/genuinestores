<section class="py-3 bg-light">
  <div class="container">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Category name</a></li>
        <li class="breadcrumb-item"><a href="#">Sub category</a></li>
        <li class="breadcrumb-item active" aria-current="page">Items</li>
    </ol>
  </div>
</section>

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content bg-white padding-y">
<div class="container">

<!-- ============================ ITEM DETAIL ======================== -->
<div class="row">
<aside class="col-md-6">
<div class="card">
<article class="gallery-wrap"> 
<div class="container-fluid slider">
    <div class="row">
        <div class="col-md-12">
            <div id="custCarousel" class="carousel slide" data-ride="carousel" align="center">
                <!-- slides -->
                <div class="carousel-inner">
		      <?php foreach ($images as $key => $image):?>
                <div class="carousel-item <?= ($key == 0) ? "active" : "";?>"> 
					<img src="<?= base_url("uploads/product")?>/<?=$image['name']?>" alt="<?=$product['name']?>" style="width:100%; height:50vh">
				</div>
                   <?php endforeach ?>
                </div>

				 <!-- Left right --> 
				 <a class="carousel-control-prev" href="#custCarousel" data-slide="prev"> 
					 <span class="carousel-control-prev-icon"></span> </a> <a class="carousel-control-next" href="#custCarousel" data-slide="next"> <span class="carousel-control-next-icon"></span> </a> <!-- Thumbnails -->
                <ol class="carousel-indicators list-inline">
				<?php foreach ($images as $imgkey => $image):?>
                    <li class="list-inline-item <?= ($imgkey == 0) ? "active" : "";?>">
					 <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#custCarousel">
						  <img src="<?= base_url("uploads/product")?>/<?=$image['name']?>" class="img-fluid" style="width:100%; height:8vh"> </a>
						 </li>
                  <?php endforeach ?>
                </ol>
            </div>
        </div>
    </div>
</div>
</article>
 <!-- gallery-wrap .end// -->

</div> <!-- card.// -->
		</aside>
		<main class="col-md-6">
<article class="product-info-aside">

<h2 class="title mt-3"><?=$product['name']?> </h2>

<div class="rating-wrap my-3">
	<ul class="rating-stars">
		<li style="width:80%" class="stars-active"> 
			<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
			<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
			<i class="fa fa-star"></i> 
		</li>
		<li>
			<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
			<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
			<i class="fa fa-star"></i> 
		</li>
	</ul>
	<small class="label-rating text-muted">132 reviews</small>
	<small class="label-rating text-success"> <i class="fa fa-clipboard-check"></i> 154 orders </small>
</div> <!-- rating-wrap.// -->

<div class="mb-3"> 
	<var class="price h4">NGN <?=$product['sprice']?></var> 
	<!-- <span class="text-muted">USD 562.65 incl. VAT</span>  -->
</div> <!-- price-detail-wrap .// -->

<p>
<?=$product['description']?> 
</p>


<dl class="row">
  <dt class="col-sm-3">Manufacturer</dt>
  <dd class="col-sm-9"><a href="#">Great textile Ltd.</a></dd>

  <dt class="col-sm-3">Article number</dt>
  <dd class="col-sm-9">596 065</dd>

  <dt class="col-sm-3">Guarantee</dt>
  <dd class="col-sm-9">2 year</dd>

  <dt class="col-sm-3">Delivery time</dt>
  <dd class="col-sm-9">3-4 days</dd>

  <dt class="col-sm-3">Availabilty</dt>
  <dd class="col-sm-9">in Stock</dd>
</dl>

	<div class="form-row  mt-4">
		<div class="form-group col-md flex-grow-0">
			<div class="input-group mb-3 input-spinner">
			  <div class="input-group-prepend">
			    <button class="btn btn-light" type="button" id="button-plus"> + </button>
			  </div>
			  <input type="text" class="form-control" value="1">
			  <div class="input-group-append">
			    <button class="btn btn-light" type="button" id="button-minus"> &minus; </button>
			  </div>
			</div>
		</div> <!-- col.// -->
		<div class="form-group col-md">
			<a href="#"  class="btn  btn-primary"> 
				<i class="fas fa-shopping-cart"></i> <span class="text">Add to cart</span> 
			</a>
			<a href="#" class="btn btn-light">
        <i class="fas fa-envelope"></i> <span class="text">Contact supplier</span> 
			</a>
		</div> <!-- col.// -->
	</div> <!-- row.// -->

</article> <!-- product-info-aside .// -->
		</main> <!-- col.// -->
	</div> <!-- row.// -->

<!-- ================ ITEM DETAIL END .// ================= -->


</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->

<!-- ========================= SECTION  ========================= -->
<section class="section-name padding-y bg">
<div class="container">

<div class="row">
	<div class="col-md-8">
		<h5 class="title-description">Description</h5>
		<p>
	   <?= $product['description'] ?>
		</p>
			
	</div> <!-- col.// -->

	</div> <!-- box.// -->
	</aside> <!-- col.// -->
</div> <!-- row.// -->

</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->



<!-- ========================= SECTION SUBSCRIBE  ========================= -->
<section class="padding-y-lg bg-light border-top">
<div class="container">

<p class="pb-2 text-center">Delivering the latest product trends and industry news straight to your inbox</p>

<div class="row justify-content-md-center">
  <div class="col-lg-4 col-sm-6">
<form class="form-row">
    <div class="col-8">
    <input class="form-control" placeholder="Your Email" type="email">
    </div> <!-- col.// -->
    <div class="col-4">
    <button type="submit" class="btn btn-block btn-warning"> <i class="fa fa-envelope"></i> Subscribe </button>
    </div> <!-- col.// -->
</form>
<small class="form-text">We’ll never share your email address with a third-party. </small>
  </div> <!-- col-md-6.// -->
</div>
  

</div>
</section>
<!-- ========================= SECTION SUBSCRIBE END// ========================= -->

<?= $this->section('custom_css'); ?>

<style>
	body {
    background-color: #7B1FA2
}

.slider{
    margin-top: 30px;
    margin-bottom: 80px
}

.carousel-inner img {
    width: 100%;
    height: 100%
}

#custCarousel .carousel-indicators {
    position: static;
    margin-top: 20px
}

#custCarousel .carousel-indicators>li {
    width: 100px
}

#custCarousel .carousel-indicators li img {
    display: block;
    opacity: 0.5
}

#custCarousel .carousel-indicators li.active img {
    opacity: 1
}

#custCarousel .carousel-indicators li:hover img {
    opacity: 0.75
}

.carousel-item img {
    width: 100%
}
</style>

<?= $this->endSection(); ?>


