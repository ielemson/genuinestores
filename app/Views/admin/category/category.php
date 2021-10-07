<?= $this->extend('admin/layouts/app'); ?>


<!-- MAIN CONTENT -->
<?= $this->section('content'); ?>

<div class="container">
            

              <div class="row">
                <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title mb-4">Create Category</h5>
                      <div class="fluid-container">
                      <form action="<?= base_url('admin/category'); ?>" method="POST" accept-charset="UTF-8" >
                         <?= csrf_field() ?>
                      <div class="form-group">
                        <label for="exampleInputName1">Cateory Name</label>
                        <input type="text" class="form-control" id="name" placeholder=" Product Name" name="name" required value="<?= $category['name']; ?>">
                      </div>
                     
                      
                      <div class="form-group">
                        <label for="exampleSelectGender">Status</label>
                          <select class="form-control" id="status" name="status">
                              <?php 
                              if($category['status'] == 1){

                              
                              ?>
                              <option value="<?= $category['status']?>" selected>active</option>
                              <option value="<?= $category['status']?>">inactive</option>
                              <?php
                               }
                               else{

                               
                               ?>
                             <option value="<?= $category['status']?>">active</option>
                              <option value="<?= $category['status']?>" selected>inactive</option>
                           <?php }?>
                          </select>
                        </div>
                      <div class="form-group">
                        <label>Category Image</label>
                        <div class="input-group col-xs-12">
                          <input type="file" class="form-control file-upload-info" multiple name="image" name="image">
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Update</button>
                      <a href="<?=base_url('dashboard/categories')?>" class="btn btn-primary" type="reset">Go back</a>
                    </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
<?= $this->endSection(); ?>
