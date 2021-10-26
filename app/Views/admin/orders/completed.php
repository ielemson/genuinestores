<?= $this->extend('admin/layouts/app'); ?>

<!-- MAIN CONTENT -->
<?= $this->section('content'); ?>

<div class="container">
              
             
              <div class="row">
                <div class="col-12 grid-margin">
                  <div class="card">
                    
                      <?php if (count($orders)>0) { ?>
                        <div class="table-responsive">
                        <table class="table center-aligned-table">
                        <thead>
                          <tr class="bg-light">
                            <th class="border-bottom-0">Order No</th>
                            <th class="border-bottom-0">Product </th>
                            <th class="border-bottom-0">Amount</th>
                            <th class="border-bottom-0">QTY</th>
                            <th class="border-bottom-0">Status</th>
                            <th class="border-bottom-0">Tracking No</th>
                            <th class="border-bottom-0">View</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($orders as $key => $order) {
                            ?>
                          <tr>
                            <td><?=$order['order_no']?></td>
                            <td><?=$order['product_name']?></td>
                            <td>&#x20A6; <?=$order['price']?></td>
                            <td><?=$order['qty']?></td>
                            <td><label class="badge badge-success">pending</label></td>
                            <td>N/A</td>
                            <td><a href="" class="btn btn-sm btn-primary">view</a></td>
                          </tr>
                        <?php } ?>
                        </tbody>
                      </table>
                      </div>
                      <?php } else {?>

                        <div class="alert alert-dark" role="alert">
                        No Completed order found
                        </div>
                      <?php } ?>

                    
                  </div>
                </div>
              </div>
              
            </div>

<?= $this->endSection(); ?>

