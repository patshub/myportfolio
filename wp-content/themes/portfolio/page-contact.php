<?php include 'includes/header.php'; ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <section>
    <div class="container">
      <div class="main-content" id="contact">
        <div class="col-6">
            <?php echo the_content(); ?>
            <!-- <div class="contact-form">
              <h2 style="font-weight:300;">Send me a Message</h2>
              <?php //echo the_content(); ?>
            </div> -->
        </div>
      </div>
    </div>
  </section>
<?php endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
