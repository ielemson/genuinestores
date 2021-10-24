<article class="card mb-3">
			<div class="card-body">
				
				<figure class="icontext">
						<div class="icon">
							<img class="rounded-circle img-sm border" src="<?= base_url('images/avatars/user.png'); ?>">
						</div>
						<div class="text">
							<strong> <?= $_SESSION['firstname']?> <?= $_SESSION['lastname']?> </strong> <br> 
							<p class="mb-2"> <?= $_SESSION['email']?> </p> 
							<a href="#" class="btn btn-light btn-sm">Edit</a>
						</div>
				</figure>
				<hr>
				<p>
					<i class="fa fa-map-marker text-muted"></i> &nbsp; My address:  
					 <br>
					Tashkent city, Street name, Building 123, House 321 &nbsp 
					<a href="#" class="btn-link"> Edit</a>
				</p>

				

				<article class="card-group card-stat">
					<figure class="card bg">
						<div class="p-3">
							 <h4 class="title"><?=count($orders)?></h4>
							<span>Orders</span>
						</div>
					</figure>
					<!-- <figure class="card bg">
						<div class="p-3">
							 <h4 class="title">5</h4>
							<span>Wishlists</span>
						</div>
					</figure> -->
					<figure class="card bg">
						<div class="p-3">
							 <h4 class="title"><?=count($orders)?></h4>
							<span>Awaiting delivery</span>
						</div>
					</figure>
					<figure class="card bg">
						<div class="p-3">
							 <h4 class="title"><?=count($orders)?></h4>
							<span>Delivered items</span>
						</div>
					</figure>
				</article>
				

			</div> <!-- card-body .// -->
		</article> <!-- card.// -->