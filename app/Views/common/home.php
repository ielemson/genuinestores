<?= $this->extend('layouts/common/main'); ?>

<!-- SLIDER -->
<?= $this->section('slider'); ?>

<?= $this->include('layouts/common/slider'); ?>

<?= $this->endSection(); ?>

<!-- MAIN CONTENT -->
<?= $this->section('content'); ?>

<?= $this->include('common/pages/index'); ?>

<?= $this->endSection(); ?>