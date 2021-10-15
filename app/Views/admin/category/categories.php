<?= $this->extend('admin/layouts/app'); ?>

<!-- MAIN CONTENT -->
<?= $this->section('content'); ?>
<div class="container">
<div class="col-md-12">
<div class="card card-post card-round">
<?= $this->include('admin/includes/_notification'); ?>
<div class="card-body">
<div class="col-12">
                    <div class="table-responsive">
                      <table id="order-listing" class="table">
                        <thead>
                          <tr>
                              <th>S/N #</th>
                              <th>Category Name</th>
                              <th>Category Slug</th>
                              <th>Category Status</th>
                              <th>Edit</th>
                              <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php if($categories): ?>
                         <?php foreach($categories as $category): ?>
                          <tr>
                              <td>1</td>
                              <td><?= $category['name']; ?></td>
                              <td><?= $category['slug']; ?></td>
                              <td>
                                <?php
                                if($category['status'] == 1){?>
                                <span class="badge badge-success">active</span>
                                <?php } else { ?>
                                  <span class="badge badge-danger">inactive</span>
                                <?php } ?>

                              </td>
                              <td>
                              <a href="<?= base_url('admin/category/edit/'.$category['id']);?>" class="btn btn-outline-primary"><i class="fa fa-pencil"></i></a>
                              </td>
                              <td>
                                <a href="<?= base_url('admin/category/delete/'.$category['id']);?>" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a>
                              </td>
                          </tr>
                       
                          <?php endforeach; ?>
                          <?php endif; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>

</div>
</div>
</div>
</div>
<?= $this->endSection(); ?>