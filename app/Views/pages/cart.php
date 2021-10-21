<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
<div class="container">

<?php

$cart = \Config\Services::cart();
$cart_content  = $cart->contents();
if(count($cart_content)> 0){


?>

<div class="container">

<div class="row">
	<main class="col-md-9">
<div class="card">

<table class="table table-borderless table-shopping-cart">
<thead class="text-muted">
<tr class="small text-uppercase">
  <th scope="col">Product</th>
  <th scope="col" width="120">Quantity</th>
  <th scope="col" width="120">Price</th>
  <th scope="col" class="text-right" width="200"> </th>
</tr>
</thead>
<tbody>
<?php
foreach ($cart_content as $key => $content) {
?>
<tr>
	<td>
		<figure class="itemside">
			<div class="aside"><img src="/uploads/product/<?=$content['img']?>" class="img-sm"></div>
			<figcaption class="info">
				<a href="#" class="title text-dark"><?=$content['name']?></a>
				<p class="text-muted small">Size: XL, Color: blue, <br> Brand: Gucci</p>
			</figcaption>
		</figure>
	</td>
	<td> 
		<select class="form-control">
			<option><?=$content['qty']?></option>	
		</select> 
	</td>
	<td> 
		<div class="price-wrap"> 
			<var class="price">&#x20A6;
            <?php
            echo $content['price'] * $content['qty'];
            ?>
            </var> 
			<small class="text-muted"> &#x20A6;<?=$content['price']?> each </small> 
		</div> <!-- price-wrap .// -->
	</td>
	<td class="text-right"> 
	<a data-original-title="Save to Wishlist" title="" href="#" class="btn btn-light" data-toggle="tooltip"> <i class="fa fa-heart"></i></a> 
	<a href="#" class="btn btn-light"> Remove</a>
	</td>
</tr>
<?php }?>
</tbody>
</table>

<div class="card-body border-top">
	<a href="<?=base_url('checkout')?>" class="btn btn-primary float-md-right"> Make Purchase <i class="fa fa-chevron-right"></i> </a>
	<a href="<?=base_url('/')?>" class="btn btn-light"> <i class="fa fa-chevron-left"></i> Continue shopping </a>
</div>	
</div> <!-- card.// -->

<div class="alert alert-success mt-3">
	<p class="icontext"><i class="icon text-success fa fa-truck"></i> Free Delivery within 1-2 weeks</p>
</div>

	</main> <!-- col.// -->
	<aside class="col-md-3">
		<div class="card mb-3">
			<div class="card-body">
			<form>
				<div class="form-group">
					<label>Have coupon?</label>
					<div class="input-group">
						<input type="text" class="form-control" name="" placeholder="Coupon code">
						<span class="input-group-append"> 
							<button class="btn btn-primary">Apply</button>
						</span>
					</div>
				</div>
			</form>
			</div> <!-- card-body.// -->
		</div>  <!-- card .// -->
		<div class="card">
			<div class="card-body">
					<dl class="dlist-align">
					  <dt>Total price:</dt>
					  <dd class="text-right">USD 568</dd>
					</dl>
					<dl class="dlist-align">
					  <dt>Discount:</dt>
					  <dd class="text-right">USD 658</dd>
					</dl>
					<dl class="dlist-align">
					  <dt>Total:</dt>
					  <dd class="text-right  h5"><strong>$1,650</strong></dd>
					</dl>
					<hr>
					<p class="text-center mb-3">
						<img src="images/misc/payments.png" height="26">
					</p>
					
			</div> <!-- card-body.// -->
		</div>  <!-- card .// -->
	</aside> <!-- col.// -->
</div>

</div> <!-- container .//  -->

<?php } else { ?>

    <div class="row mx-auto">
	<main class="col-md-9">
    <div class="card">

	
</div> <!-- card.// -->

<div class="alert alert-danger mt-3 text-center">
	<p class="icontext"><i class="icon text-danger fa fa-exclamation-triangle "></i>No Content In Your cart</p>
</div>

<div class="card-body border-top">
	<!-- <a href="#" class="btn btn-primary float-md-right"> Make Purchase <i class="fa fa-chevron-right"></i> </a> -->
	<a href="<?=base_url('/')?>" class="btn btn-light"> <i class="fa fa-chevron-left"></i> Continue shopping </a>
</div>
</div>
</main>
<?php } ?>
	

</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->

<!-- ========================= SECTION  ========================= -->
<section class="section-name border-top padding-y">
<div class="container">
<h6>Payment and refund policy</h6>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

</div><!-- container // -->
</section>
<!-- ========================= SECTION  END// ========================= -->
