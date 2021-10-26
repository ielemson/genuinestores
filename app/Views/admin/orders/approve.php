<?= $this->extend('admin/layouts/app'); ?>

<!-- MAIN CONTENT -->
<?= $this->section('content'); ?>

<div class="container">
              
<div class="row">
              <div class="col-lg-12">
                  <div class="card px-2">
                      <div class="card-body">
                          <div class="container-fluid">
                            <h3 class="text-right my-5"><?=$user['firstname']?>&nbsp;<?=$user['lastname']?></h3>
                            <hr>
                          </div>
                          <div class="container-fluid d-flex justify-content-between">
                            <div class="col-lg-3 pl-0">
                              <p class="mt-5 mb-2"><b> Address : </b><?=$user['address']?></p>
                              <p><b>City : </b><?=$user['city']?><br> <b>Country</b> <?=$user['country']?></p>
                              <p><b>Email : </b><?=$user['email']?><br> <b>Phone : </b><?=$user['phone']?></p>
                            </div>
                            <div class="col-lg-3 pr-0">
                              <p class="mt-5 mb-2 text-right"><b>Order No</b></p>
                              <p class="text-right"><?=$order['order_no']?></p>
                            </div>
                          </div>
                          <div class="container-fluid d-flex justify-content-between">
                            <div class="col-lg-3 pl-0">
                              <p class="mb-0 mt-5">Order Date : <?=date('D-M-y', strtotime($order['created_at']))?></p>
                              <!-- <p>Due Date : 25th Jan 2017</p> -->
                            </div>
                          </div>
                          <div class="container-fluid mt-5 d-flex justify-content-center w-100">
                            <div class="table-responsive w-100">
                                <table class="table">
                                  <thead>
                                    <tr class="bg-dark text-white">
                                        <th>#</th>
                                        <th>Description</th>
                                        <th class="text-right">Quantity</th>
                                        <th class="text-right">Unit cost</th>
                                        <th class="text-right">Total</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                      
                                      $sumtotal = 0;
                                      $sumTotal = 0;
                                      $total = 0;
                                    $counter = 1;
                                      foreach ($orders as $key => $order) {
                                          
                                       $total =  $order['qty'] * $order['price'];
                                       $sumTotal =  $sumtotal+=$total;

                                          ?>
                                    <tr class="text-right">
                                      <td class="text-left"><?= $counter?></td>
                                      <td class="text-left"><?=$order['product_name']?></td>
                                      <td><?=$order['qty']?></td>
                                      <td>&#8358; <?=$order['price']?></td>
                                      <td>&#8358; <?=$total ?></td>
                                    </tr>
                                   <?php  $counter++; } ?>
                                  </tbody>
                                </table>
                              </div>
                          </div>
                          <div class="container-fluid mt-5 w-100">
                            <p class="text-right mb-2">Sub - Total amount: &#8358; <?= $sumTotal ?></p>
                            <!-- <p class="text-right">vat (10%) : $138</p> -->
                            <h4 class="text-right mb-5">Total : &#8358; <?= $sumTotal ?> </h4>
                            <hr>
                          </div>
                          <div class="container-fluid w-100">
                            <a href="<?=base_url('admin/orders/pending')?>" class="btn btn-primary float-right mt-4 ml-2">Go Back</a>
                            <a href="<?=base_url('admin/orders/approval/'.$user['id'])?>" class="btn btn-success float-right mt-4">Complete Order</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
              
            </div>

<?= $this->endSection(); ?>

