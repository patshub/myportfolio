<?php include 'includes/header.php'; ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <section>
    <div class="container">
      <ul class="breadcrumbs">
        <li><a href="/portfolio">Home</a></li>
        <li><?php echo the_title(); ?></li>
      </ul>
      <h1><?php echo the_title(); ?></h1>
      <?php echo the_content(); ?>
    </div>
  </section>
<?php endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
