<?php include 'includes/header.php'; ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <section>
    <div class="container">
      <div class="main-content" id="contact">
        <div class="col-6">
            Whether it’s promoting your online business, expanding your user base, or improving your existing website, I will provide the most optimal design solutions to cater to your needs. <strong>Let’s talk!</strong><br/>
            <br/>
            <strong><a href="tel:5628104778">(562) 810-4778</a> | <a href="mailto:pmartindesigns@gmail.com">pmartindesigns@gmail.com</a></strong>
            <div class="contact-form">
              <h2 style="font-weight:300;">Send me a Message</h2>
              <?php echo the_content(); ?>
            </div>
        </div>
      </div>
    </div>
  </section>
<?php endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
