<?= $this->extend('admin/layouts/app'); ?>

<!-- MAIN CONTENT -->
<?= $this->section('content'); ?>

<div class="container">

    <div class="col-md-12 mx-auto">
        <?= $this->include('admin/includes/_notification'); ?>
    </div>

    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">Create Product</h5>
                    <div class="fluid-container">

                        <form action="<?= base_url('dashboard/product'); ?>" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                            <?= csrf_field() ?>

                            <div class="form-group">
                                <label for="exampleInputName1">Product Name</label>
                                <input type="text" class="form-control" id="name" placeholder=" Product Name" name="name" required value="<?= $product['name'] ?>">
                            </div>

                            <div class="form-group">
                                <label for="title">Product Title</label>
                                <input type="text" class="form-control" id="title" placeholder=" Product Title" name="title" required value="<?= $product['title'] ?>">
                            </div>

                            <div class="form-group">
                                <label for="cprice">Product Cost Price</label>
                                <input type="text" class="form-control" id="cprice" placeholder="Product Cost Price" name="cprice" required value="<?= $product['cprice'] ?>">
                            </div>

                            <div class="form-group">
                                <label for="sprice">Product Selling Price</label>
                                <input type="text" class="form-control" id="sprice" placeholder="Product Selling Price" name="sprice" required value="<?= $product['sprice'] ?>">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail3">Product Available QTY</label>
                                <input type="text" class="form-control" id="price" placeholder="Product QTY" name="qty" required value="<?= $product['qty'] ?>">
                            </div>

                            <div class="form-group">
                                <label for="cat_id">Category</label>
                                <select class="form-control" id="cat_id" name="cat_id">
                                    <?php if ($categories) : ?>
                                        <?php foreach ($categories as $category) : ?>
                                            <option value="<?= $category['id']; ?>" <?php if ($product['cat_id'] == $category['id']) {
                                                                                        echo "selected";
                                                                                    } ?>><?= $category['name']; ?></option>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleSelectGender">Status</label>
                                <select class="form-control" id="status" name="status">

                                    <?php if ($product['status'] == 1) { ?>
                                        <option value="1" selected>in stock</option>
                                        <option value="0">out of stock</option>
                                    <?php } else { ?>
                                        <option value="1">in stock</option>
                                        <option value="0" selected>out of stock</option>
                                    <?php } ?>

                                </select>
                            </div>

                            <div class="form-group">
                                <label>Cover Image upload</label>
                                <div class="input-group col-xs-12">
                                    <input type="file" class="form-control file-upload-info" name="cover" multiple="multiple" accept=".png, .jpg, .jpeg" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Slider Image upload</label>
                                <div class="input-group col-xs-12">
                                    <input type="file" class="form-control file-upload-info" name="image[]" multiple="multiple" accept=".png, .jpg, .jpeg" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" rows="4" name="description" required> value="<?= $product['description'] ?>"</textarea>
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