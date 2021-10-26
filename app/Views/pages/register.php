<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">

<!-- ============================ COMPONENT REGISTER   ================================= -->
<div class="col-md-4 mx-auto">
<?= $this->include('alerts'); ?>
</div>
	<div class="card mx-auto" style="max-width:520px; margin-top:40px;">
	
      <article class="card-body">
		<header class="mb-4"><h4 class="card-title">Sign up</h4></header>
		<form action="<?= base_url('create-account'); ?>" method="POST" accept-charset="UTF-8" >
            <?= csrf_field() ?>
				<div class="form-row">
					<div class="col form-group">
						<label>First name</label>
					  	<input type="text" class="form-control" name="firstname" value="<?= old('firstname') ?>" required>
					</div> <!-- form-group end.// -->
					<div class="col form-group">
						<label>Last name</label>
					  	<input type="text" class="form-control" name="lastname" value="<?= old('lastname') ?>" required>
					</div> <!-- form-group end.// -->
				</div> 
				<!-- form-row end.// -->

				<div class="form-row">
					<div class="col form-group">
						<label>Email</label>
						<input type="email" class="form-control" name="email" value="<?= old('email') ?>" required>
					</div> <!-- form-group end.// -->
					<div class="col form-group">
						<label>Phone</label>
					  	<input type="text" class="form-control" name="phone" value="<?= old('phone') ?>" required>
					</div> <!-- form-group end.// -->
				</div> <!-- form-row end.// -->
				
				<!-- form-group end.// -->
				<div class="form-group">
					<label class="custom-control custom-radio custom-control-inline">
					  <input class="custom-control-input" checked="" type="radio" name="gender" value="male" >
					  <span class="custom-control-label"> Male </span>
					</label>
					<label class="custom-control custom-radio custom-control-inline">
					  <input class="custom-control-input" type="radio" name="gender" value="female" >
					  <span class="custom-control-label"> Female </span>
					</label>
				</div> <!-- form-group end.// -->
				<div class="form-row">
					<div class="form-group col-md-6">
					  <label>City</label>
					  <input type="text" class="form-control" name="city" value="<?= old("city") ?>" required>
					</div> <!-- form-group end.// -->
					<div class="form-group col-md-6">
					<label>Country</label>
					<input type="text" class="form-control" name="country" value="<?= old("country") ?>" required>
					</div>
					 <!-- form-group end.// -->
				</div> 
				<!-- form-row.// -->


				<div class="form-row">
					<div class="form-group col-md-12">
					  <label>Address</label>
					  <textarea  class="form-control" name="address"  required> <?= old("address") ?></textarea>
					</div> <!-- form-group end.// -->
					
				</div> 
				<!-- form-row.// -->

				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Create password</label>
					    <input class="form-control" type="password" name="password" required>
					</div> <!-- form-group end.// --> 
					<div class="form-group col-md-6">
						<label>Repeat password</label>
					    <input class="form-control" type="password" name="password_confirm" required>
					</div> <!-- form-group end.// -->  
				</div>
			    <div class="form-group">
			        <button type="submit" class="btn btn-primary btn-block"> Register  </button>
			    </div> <!-- form-group// -->      
			    <div class="form-group"> 
		            <label class="custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" checked=""> <div class="custom-control-label"> I am agree with <a href="#">terms and contitions</a>  </div> </label>
		        </div> <!-- form-group end.// -->           
			</form>
		</article><!-- card-body.// -->
    </div> <!-- card .// -->
    <p class="text-center mt-4">Have an account? <a href="<?= base_url("login")?>">Log In</a></p>
    <br><br>
<!-- ============================ COMPONENT REGISTER  END.// ================================= -->


</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
