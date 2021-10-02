<div class="container">

<!-- =============== SECTION 1 =============== -->
<section class="padding-bottom">
<header class="section-heading mb-4">
	<h3 class="title-section">Recommended items</h3>
</header>

<div class="row">
	<?php if ($products) {?>
	<?php foreach ($products as $key => $product) { ?>
	<div class="col-xl-3 col-lg-3 col-md-4 col-6" >
		<div class="card card-product-grid" >
		<a href="<?= base_url('product/'.$product['slug']);?>" class="img-wrap"> 

				<?php if ($product['qty'] > 0) {?>
					<b class="badge badge-info mr-1">in-stock</b>
				<?php }else{ ?>
					<b class="badge badge-danger mr-1">out-of-stock</b>
				<?php } ?>

				<img src="/uploads/product/<?=$product['cover_img']?>" style="width:100%">
			</a>

			<!-- <a href="" class="img-wrap"> <img > </a> -->
			<figcaption class="info-wrap">
				
                <!-- <ul class="rating-stars mb-1">
                	<li style="width:80%" class="stars-active">
						<img src="images/icons/stars-active.svg" alt="">
					</li>
					<li>
						<img src="images/icons/starts-disable.svg" alt="">
					</li>
				</ul> -->
				<div>
					<a href="#" class="text-muted"><?=$product['cat_name']?></a>
                	<a href="#" class="title"><?=$product['title']?></a>
				</div>
				<div class="price h5 mt-2">&#x20A6;<?=$product['sprice']?></div> <!-- price.// -->
				<section class="btn-group">
					<button class="btn btn-info"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
					<a href="<?= base_url('product/'.$product['slug']);?>" class="btn btn-primary "><i class="fa fa-eye" aria-hidden="true"></i></a>
				</section>
			</figcaption>
		</div>
	</div> <!-- col.// -->
<?php } }else{ ?>
	<!-- =============== SECTION BANNER =============== -->
<section class="padding-bottom mx-auto">
	<article class="box d-flex flex-wrap align-items-center p-5 bg-info">
		<div class="text-white mr-auto">
			<h3>Opps!! :(</h3>
			<p> We do not have products in stock, please check back later. </p>
		</div>
		<!-- <div class="mt-3 mt-md-0"><a href="#" class="btn btn-outline-light">Learn more</a></div> -->
	</article>
</section>
<!-- =============== SECTION BANNER .//END =============== -->
<?php } ?>



	
</div> <!-- row.// -->
</section>
<!-- =============== SECTION 1 END =============== -->


<!-- =============== SECTION BANNER =============== -->
<section class="padding-bottom">
	<div class="row">
		<aside class="col-md-6">
			<div class="card card-banner-lg bg-dark">
				<img src="images/banners/banner4.jpg" class="card-img opacity">
				<div class="card-img-overlay text-white">
				  <h2 class="card-title">Big Deal on Clothes</h2>
				  <p class="card-text" style="max-width: 80%">This is a wider card with text below and Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo ab quae nihil praesentium impedit libero possimus id vero</p>
				  <a href="#" class="btn btn-light">Discover</a>
				</div>
			 </div>
		</aside>
		<div class="col-md-6">
			<div class="card card-banner-lg bg-dark">
				<img src="images/banners/banner5.jpg" class="card-img opacity">
				<div class="card-img-overlay text-white">
				  <h2 class="card-title">Great Bundle for You</h2>
				    <p class="card-text" style="max-width: 80%">Card with text below and Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo ab quae nihil praesentium impedit libero possimus id vero</p>
				  <a href="#" class="btn btn-light">Discover</a>
				</div>
			 </div>
		</div> <!-- col.// -->
	</div> <!-- row.// -->
</section>
<!-- =============== SECTION BANNER .//END =============== -->

	
<!-- =============== SECTION 2 =============== -->
<section class="padding-bottom">



<!-- =============== SECTION 2 END =============== -->


<!-- =============== SECTION BANNER =============== -->
<section class="padding-bottom">
	<article class="box d-flex flex-wrap align-items-center p-5 bg-secondary">
		<div class="text-white mr-auto">
			<h3>Looking for fashion? </h3>
			<p> Popular items, discounts and free shipping </p>
		</div>
		<div class="mt-3 mt-md-0"><a href="#" class="btn btn-outline-light">Learn more</a></div>
	</article>
</section>
<!-- =============== SECTION BANNER .//END =============== -->

</div>  
<!-- container end.// -->