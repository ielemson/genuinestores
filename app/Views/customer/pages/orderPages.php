

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
<div class="container">
<?= $this->include('customer/includes/alerts'); ?>
<div class="row">
<?= $this->include('customer/includes/sideMenu'); ?>

<main class="col-md-9">

<div class="card mb-5">
  <div class="card-body">
 <form class="row">
     <div class="col-md-9">
         <div class="form-row">
            <div class="col form-group">
                <label>First Name</label>
                  <input type="text" class="form-control" name="firstname" value="<?=$user['firstname']?>" required>
            </div> <!-- form-group end.// -->

            <div class="col form-group">
                <label>Last Name</label>
                  <input type="text" class="form-control" name="lastname" value="<?=$user['lastname']?>" required>
            </div> <!-- form-group end.// -->
     
        </div> <!-- form-row.// -->
        <div class="col form-group">
                <label>Email</label>
                  <input type="email" class="form-control" name="email" value="<?=$user['email']?>" required>
            </div> <!-- form-group end.// -->
            
        <div class="form-row">
            <div class="form-group col-md-6">
              <label>Country</label>
              <input type="text" class="form-control"  name="country" value="<?=$user['country']?>" required>
            </div> <!-- form-group end.// -->
            <div class="form-group col-md-6">
              <label>City</label>
              <input type="text" class="form-control" name="city" value="<?=$user['city']?>" required>
            </div> <!-- form-group end.// -->
        </div> <!-- form-row.// -->

        <div class="form-row">
            <div class="form-group col-md-6">
              <label>Address</label>
              <input type="text" class="form-control" name="address" value="<?=$user['address']?>" required>
            </div> <!-- form-group end.// -->
            <div class="form-group col-md-6">
              <label>Phone</label>
              <input type="text" class="form-control" name="phone" value="<?=$user['phone']?>" required>
            </div> <!-- form-group end.// -->

            <div class="form-group col-md-6">
              <label>Profile Picture</label>
              <input type="file" class="form-control" name="image" >
            </div> <!-- form-group end.// -->

            <div class="form-group col-md-6">
				  <label>Gender</label>
				  <select id="inputState" class="form-control" name="gender" required>
				    <option> Choose...</option>
                    <?php
                    if ($user['gender'] == "male") {  ?>
				      <option value="male" selected>Male</option>
				      <option value="female">Female</option>
                      <?php }else{?>
				      <option value="female" selected>Female</option>
				      <option value="male">Male</option>
                      <?php }?>
				  </select>
				</div> <!-- form-group end.// -->
            <div class="form-group col-md-12">
            <button class="btn btn-primary" type="submit">Update Profile</button>		
				</div> <!-- form-group end.// -->
        </div> <!-- form-row.// -->
     </div> <!-- col.// -->
     <div class="col-md">
         <img src="<?= base_url('images/avatars/user.png'); ?>" class="img-md rounded-circle border">
     </div>  <!-- col.// -->
  </form>
  </div> <!-- card-body.// -->
</div> <!-- card .// -->

<div class="card">
      <div class="card-body">
     <form class="row">
     	<div class="col-md-9">
     		<div class="form-row">
				<div class="col form-group">
					<label>New Password</label>
				  	<input type="password" class="form-control" name="password" required>
				</div> <!-- form-group end.// -->
				<div class="col form-group">
					<label>Repeat Password</label>
				  	<input type="password" class="form-control" name="cpassword" reuired>
				</div> <!-- form-group end.// -->
			</div> <!-- form-row.// -->
			
			<button class="btn btn-primary" type="submit">Change password</button>	
     	</div> <!-- col.// -->
     	
      </form>
      </div> <!-- card-body.// -->
    </div> <!-- card .// -->

</main>
</div>

</div> <!-- container .//  -->
</section>