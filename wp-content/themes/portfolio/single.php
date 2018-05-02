<?php include 'includes/header.php'; ?>
<section>
  <div class="container">
    <ul class="breadcrumbs">
      <li><?php echo the_title(); ?></li>
    </ul>
    <h1><?php echo the_title(); ?></h1>

    <div class="main-content">
      <div class="col-8">
        <div class="col">
          <?php echo the_content(); ?>
        </div>
      </div>
    </div>
  </div>
</section>
