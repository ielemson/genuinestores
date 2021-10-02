<?php if (session()->has('success')) : ?>

<div class="alert alert-success" role="alert">
<?=session('success')?>
</div>
<?php endif ?>

<?php if (session()->has('error')) : ?>
<div class="alert alert-warning" role="alert">
<?=session('error')?>
</div>
<?php endif ?>

<?php if (session()->has('errors')) : ?>

<?php foreach (session('errors') as $error) : ?>
<div class="alert alert-danger" role="alert">
<?=$error?>
</div>
<?php endforeach ?>

<?php endif ?>