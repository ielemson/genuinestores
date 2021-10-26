<?= $this->extend('admin/layouts/app'); ?>

<!-- MAIN CONTENT -->
<?= $this->section('content'); ?>

<div class="container">
              
             
<div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">New Orders</h4>
                    <div class="row grid-margin">
                      <!-- <div class="col-12">
                        <div class="alert alert-warning" role="alert">
                            <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                        </div>
                      </div> -->
                    </div>
                    <div class="row">
                    <?php if (count($orders)>0) { ?>
                      <div class="col-12">
                        <div class="table-responsive">
                          <table id="order-listing" class="table">
                            <thead>
                              <tr class="bg-primary text-white">
                                  <th>Order #</th>
                                  <th>Product</th>
                                  <th>Purchased Price</th>
                                  <th>QTY</th>
                                  <th>Date Ordered</th>
                                  <th>Status</th>
                                  <th>Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($orders as $key => $order) {
                            ?>
                              <tr>
                                  <td><?=$order['order_no']?></td>
                                  <td><?=$order['product_name']?></td>
                                  <td>&#8358; <?=$order['price']?></td>
                                  <td><?=$order['qty']?></td>
                                  <td><?=date('d/m/y', strtotime($order['created_at']))?></td>
                                  <td>
                                    <label class="badge badge-info">New</label>
                                  </td>
                                  <td class="text-right">
                                    <a href="<?=base_url('admin/orders/approve/'.$order['order_no'])?>" class="btn btn-light">
                                      <i class="mdi mdi-eye text-primary"></i>View
                                    </a>
                                    <button class="btn btn-light">
                                      <i class="mdi mdi-close text-danger"></i>Remove
                                    </button>
                                  </td>
                              </tr>
                                <?php }?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    <?php }else { echo '<div class="col-12">
                        <div class="alert alert-warning" role="alert">
                            <strong>Heads up!</strong> No New Orders
                        </div>
                      </div>';} ?>

                    </div>
                  </div>
                </div>
              </div>
            </div>

<?= $this->endSection(); ?>

