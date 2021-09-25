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
                      <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputName1">Cateory Name</label>
                        <input type="text" class="form-control" id="name" placeholder=" Product Name" name="name">
                      </div>
                     
                      
                      <div class="form-group">
                        <label for="exampleSelectGender">Status</label>
                          <select class="form-control" id="status" name="status">
                            <option value="1">active</option>
                            <option value="0">inactive</option>
                          </select>
                        </div>
                      <div class="form-group">
                        <label>Category Image</label>
                        <div class="input-group col-xs-12">
                          <input type="file" class="form-control file-upload-info" multiple name="image" name="image">
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Create</button>
                      <button class="btn btn-light" type="reset">Cancel</button>
                    </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
<?= $this->endSection(); ?>
