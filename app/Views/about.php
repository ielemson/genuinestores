<?= $this->extend('layouts/common/main'); ?>

<!-- SLIDER -->
<?= $this->section('slider'); ?>

<section class="section-pagetop bg-light">
	<div class="container">
		<h2 class="title-page">About Us</h2>
	</div> <!-- container .// -->
</section>

<?= $this->endSection(); ?>

<!-- MAIN CONTENT -->
<?= $this->section('content'); ?>

<?= $this->include('pages/about'); ?>

<?= $this->endSection(); ?>