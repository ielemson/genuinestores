<section class="section-intro padding-y">
<div class="container">
<!-- ==============  COMPONENT SLIDER  BOOTSTRAP ============  -->
<div id="carousel1_indicator" class="slider-home-banner carousel slide" data-ride="carousel">
<ol class="carousel-indicators">

<?php if (count($sliders)>0) {foreach ($sliders as $key => $slider) {?>


<li data-target="#carousel1_indicator" data-slide-to="<?=$key?>" class="<?= ($key == 0) ? "active" : ""; ?>"></li>

<?php }}else { ?>

  <li data-target="#carousel1_indicator" data-slide-to="0" class="active"></li>
  <li data-target="#carousel1_indicator" data-slide-to="1"></li>

<?php } ?>
 
  </ol>

<div class="carousel-inner">
<?php if (count($sliders)>0) {foreach ($sliders as $key => $slider) {?>

    <div class="carousel-item
    <?= ($key == 0) ? "active" : ""; ?>">
    <img src="/images/banner/<?=$slider['slider']?>" alt="images/banner/<?=$slider['slider']?>"> 
    </div>
   
<?php }}else { ?>

  <div class="carousel-item active">
      <img src="images/banners/slide1.jpg" alt="First slide"> 
    </div>
    <div class="carousel-item">
      <img src="images/banners/slide2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img src="images/banners/slide3.jpg" alt="Third slide">
    </div>
<?php } ?>


  </div>
  <a class="carousel-control-prev" href="#carousel1_indicator" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel1_indicator" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> 
<!-- ============ COMPONENT SLIDER BOOTSTRAP end.// ===========  .// -->	
	
</div> <!-- container end.// -->
</section>