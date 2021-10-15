
<?= $this->endSection(); ?>
<?= $this->extend('customer/layouts/app'); ?>

<!-- MAIN CONTENT -->
<?= $this->section('content'); ?>

<?= $this->include('customer/pages/dashboard'); ?>

<?= $this->endSection(); ?>

