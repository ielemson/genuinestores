	<article class="card  mb-3">
			<div class="card-body">
				<h5 class="card-title mb-4">Recent orders </h5>	

				<div class="row">
				
			<?php
            
            if(count($orders)>0){
            foreach ($orders as $key => $order) {
            ?>
				<div class="col-md-4">
					<figure class="itemside mb-3">
						<div class="aside"><img src="/uploads/product/<?=$order['img']?>" class="border img-sm"></div>
						<figcaption class="info">
							<time class="text-muted"><i class="fa fa-calendar-alt"></i> <?=date('d/m/y', strtotime($order['created_at']))?></time>
							<p><?=$order['product_name']?></p>

                            <?=($order['status'] == 1) ? "<span class='text-success'>Shipped</span>" : "<span class='text-danger'>Pending</span>";?>

							
						</figcaption>
					</figure>
				</div> <!-- col.// -->


<?php }?>
<a href="#" class="btn btn-outline-primary btn-block"> See all orders <i class="fa fa-chevron-down"></i>  </a>
<?php }  else{?>
    </div> <!-- row.// -->

    	<!-- =============== SECTION BANNER =============== -->
<section class="padding-bottom mx-auto col-md-12">
	<article class="box d-flex flex-wrap align-items-center p-5 bg-info">
		<div class="text-white mr-auto">
			<h3>Opps!! :(</h3>
			<p>You do not have orders yet.</p>
		</div>
		<!-- <div class="mt-3 mt-md-0"><a href="#" class="btn btn-outline-light">Learn more</a></div> -->
	</article>
</section>
<?php } ?>
			
			</div> <!-- card-body .// -->
		</article> <!-- card.// -->