<?= $this->extend('admin/layouts/app'); ?>


<!-- MAIN CONTENT -->
<?= $this->section('content'); ?>

<div class="container">
            

              <div class="row">
                <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title mb-4">Manage Tickets</h5>
                      <div class="fluid-container">
                      <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputName1">Product Name</label>
                        <input type="text" class="form-control" id="name" placeholder=" Product Name" name="name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Product Price</label>
                        <input type="text" class="form-control" id="price" placeholder="Product Price" name="price">
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleSelectGender">Status</label>
                          <select class="form-control" id="status" name="status">
                            <option value="1">in stock</option>
                            <option value="0">out of stock</option>
                          </select>
                        </div>
                      <div class="form-group">
                        <label>File upload</label>
                        <div class="input-group col-xs-12">
                          <input type="file" class="form-control file-upload-info" name="image" multiple>
                         
                        </div>
                      </div>
                     
                      <div class="form-group">
                        <label for="exampleTextarea1">Description</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
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
