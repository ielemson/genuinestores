<section class="py-3 bg-light">
  <div class="container">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?=base_url('/')?>">Home</a></li>
        <li class="breadcrumb-item"><a href="#"><?=$prod_cat['name']?></a></li>
        <!-- <li class="breadcrumb-item"><a href="#">Sub category</a></li> -->
        <li class="breadcrumb-item active" aria-current="page"><?=$product['name']?></li>
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
	<!-- <small class="label-rating text-muted"> reviews</small> -->
	<small class="label-rating text-success"> <i class="fa fa-clipboard-check"></i> <?=$prod_orders ?> orders </small>
</div> <!-- rating-wrap.// -->

<div class="mb-3"> 
	<var class="price h4">NGN <?=$product['sprice']?></var> 
	<!-- <span class="text-muted">USD 562.65 incl. VAT</span>  -->
</div> <!-- price-detail-wrap .// -->

<p>
<?=$product['description']?> 
</p>


<!-- <dl class="row">
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
</dl> -->

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
			<button  class="btn  btn-primary add-to-cart" data-id="<?=$product['id']?>"> 
				<i class="fas fa-shopping-cart" ></i> <span class="text">Add to cart</span> 
			</button>
			<a href="<?=base_url('/')?>" class="btn btn-light">
        <i class="fas fa-chevron-left"></i> <span class="text">Continue Shopping</span> 
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

<?= $this->section('customJS'); ?>

<script>
$(document).ready(function() {
    // This WILL work because we are listening on the 'document', 
    // for a click on an element with an ID of #test-element
    $(document).on("click",".add-to-cart",function() {

		var dataId = $(this).attr("data-id");

		let url = "<?= base_url('add-to-cart/');?>/"+dataId

        // alert("The data-id of clicked item is: " + url);

		 // ajax adding data to database
          $.ajax({
            url : "<?= base_url('add-to-cart');?>/"+dataId,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
       
			 $('.checkout_items').html(data.data.cartCount);
               mdtoast('Product added to cart successfully', { type: mdtoast.SUCCESS, interaction: false, interactionTimeout: 3000 });
			 
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                mdtoast('Error adding to cart', { type: mdtoast.ERROR, interaction: false, interactionTimeout: 3000 });
				console.log(jqXHR);
            }
        })
    });


});
</script>

<?= $this->endSection(); ?>
