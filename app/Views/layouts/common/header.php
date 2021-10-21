
<header class="section-header">
	
<section class="header-main border-bottom">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-xl-2 col-lg-3 col-md-12">
				<a href="<?= base_url('/'); ?>/" class="brand-wrap">
					<img class="logo" src="<?= base_url('images/logo3661.png?v=2.0'); ?>">
				</a> <!-- brand-wrap.// -->
			</div>
			<div class="col-xl-6 col-lg-5 col-md-6">
				<form action="#" class="search-header">
					<div class="input-group w-100">
						<select class="custom-select border-right"  name="category_name">
								<option value="">All type</option><option value="codex">Special</option>
								<option value="comments">Only best</option>
								<option value="content">Latest</option>
						</select>
					    <input type="text" class="form-control" placeholder="Search">
					    
					    <div class="input-group-append">
					      <button class="btn btn-primary" type="submit">
					        <i class="fa fa-search"></i> Search
					      </button>
					    </div>
				    </div>
				</form> <!-- search-wrap .end// -->
			</div> <!-- col.// -->
			<div class="col-xl-4 col-lg-4 col-md-6">
				<div class="widgets-wrap float-md-right">
				<?php if (isset($_SESSION['isLoggedIn'])) { ?>
					
					<div class="widget-header mr-3">
						<a href="#" class="widget-view">
							<div class="icon-area">
								<i class="fa fa-user"></i>
								<span class="notify">3</span>
							</div>
							<small class="text"> My profile </small>
						</a>
					</div>

					<div class="widget-header mr-3">
						<a href="#" class="widget-view">
							<div class="icon-area">
								<i class="fa fa-comment-dots"></i>
								<span class="notify">1</span>
							</div>
							<small class="text"> Message </small>
						</a>
					</div>

					<div class="widget-header mr-3">
						<a href="#" class="widget-view">
							<div class="icon-area">
								<i class="fa fa-store"></i>
							</div>
							<small class="text"> Orders </small>
						</a>
					</div>
					<?php } ?>

					<div class="widget-header">
						<a href="<?=base_url('cart')?>" class="widget-view">
							<div class="icon-area">
								<i class="fa fa-shopping-cart"></i>
								<span class="notify checkout_items">

								<?php
								// Call the cart service
								$cart = \Config\Services::cart();
								echo $cart->totalItems();
								?>
								</span>
							</div>
							<small class="text"> Cart </small>
						</a>
					</div>
				</div> <!-- widgets-wrap.// -->
			</div> <!-- col.// -->
		</div> <!-- row.// -->
	</div> <!-- container.// -->
</section> <!-- header-main .// -->



<nav class="navbar navbar-main navbar-expand-lg border-bottom">
<div class="container">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="main_nav">
	<ul class="navbar-nav">
		<li class="nav-item dropdown">
			<a class="nav-link "  href="<?= base_url('/'); ?>"> <i class="fa fa-home text-muted mr-2"></i> Home </a>
			
		</li>
		<li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Category</a>
		<?php
		if ($categories) {?>
		<div class="dropdown-menu">
		<?php foreach ($categories as $key => $category) {?>
			<a class="dropdown-item" href="<?= base_url('category/product/'.$category['slug']);?>"><?=$category['name']?></a>
			<?php  }?>
			</div>
		<?php } ?>
			<!-- <a class="nav-link" href="#">Categories</a> -->
		</li>
		<li class="nav-item">
		<a class="nav-link" href="<?= base_url('about')?>">About</a>
		</li>
		<li class="nav-item">
		<a class="nav-link" href="<?= base_url('contact')?>">Contact</a>
		</li>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Account</a>
			<div class="dropdown-menu ">

			<?php if ( isset($_SESSION['role']) && $_SESSION['role'] == "admin") {?>

						<a class="dropdown-item" href="<?= base_url('admin/dashboard'); ?>">Admin</a>
						<a class="dropdown-item" href="<?= base_url('logout'); ?>">Logout</a>

						<?php }elseif(isset($_SESSION["role"]) && $_SESSION["role"] == "customer"){ ?>

							<a class="dropdown-item" href="<?= base_url('customer/dashboard'); ?>">Dashboard</a>
							<a class="dropdown-item" href="<?= base_url('logout'); ?>">Logout</a>
						<?php }else{ ?>

							<a class="dropdown-item" href="<?= base_url('login'); ?>">Login</a>
							<a class="dropdown-item" href="<?= base_url('register'); ?>">Register</a>
						<?php } ?>
					

					
			</div>
		</li>
	</ul>
	
	</div> <!-- collapse .// -->
</div> <!-- container .// -->
</nav>

</header>
 <!-- section-header.// -->