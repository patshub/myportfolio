<?php include 'includes/header.php'; ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <section>
    <div class="container">
      <div class="col-12" id="headline">
        <div class="headline-img" style="background-image:url('<?php bloginfo('template_url'); ?>/assets/images/me.png');">
        </div>

        <div class="col-8 headline-info">
          <div class="col">
            <h2>I’m a <strong>web designer</strong> looking to hear<br/>
              <span class="bulker">your story.</span></h2>
            <p>Beyond the visual tangibles that appeal to people’s eyes, design is the process of telling a story, an expression of one's true identity, and a way to shape how people experience the world.</p>
            <a class="btn" href="/portfolio/projects">My Resume</a>
          </div>
        </div>

        <img class="line-separator" src="<?php bloginfo('template_url'); ?>/assets/images/line-separator.svg" />

        <h2>The Process</h2>
        <div class="col-12" id="process">
          <table>
            <tbody>
              <tr>
                <td class="process-title"><h3>Identifying <strong>User Problems</strong></h3></td>
                <td class="process-icon"><img src="<?php bloginfo('template_url'); ?>/assets/images/icon-user.svg"/></td>
                <td class="process-description">I learn about your goals and understand the needs of your business.</td>
              </tr>
              <tr>
                <td class="process-title"><h3>Understanding the <strong>Context</strong></h3></td>
                <td class="process-icon"><img src="<?php bloginfo('template_url'); ?>/assets/images/icon-context.svg"/></td>
                <td class="process-description">I do extensive research on your user base and existing products to identify the most optimal solutions.</td>
              </tr>
              <tr>
                <td class="process-title"><h3>Producing <strong>Design Solutions</strong></h3></td>
                <td class="process-icon"><img src="<?php bloginfo('template_url'); ?>/assets/images/icon-design.svg"/></td>
                <td class="process-description">I sketch ideas into wireframes and transform them into mockups with emphasis on detail and adherence to the chosen theme.</td>
              </tr>
              <tr>
                <td class="process-title"><h3>Evaluating and Testing for <strong>Usability</strong></h3></td>
                <td class="process-icon"><img src="<?php bloginfo('template_url'); ?>/assets/images/icon-test.svg"/></td>
                <td class="process-description">I create prototypes and use them to conduct tests on existing users to further improve the usability of your website.</td>
              </tr>
              <tr>
                <td class="process-title"><h3>Delivering As <strong>Promised</strong></h3></td>
                <td class="process-icon"><img src="<?php bloginfo('template_url'); ?>/assets/images/icon-ok.svg"/></td>
                <td class="process-description">I promise to deliver the best version of your website so that I leave you satisfied and your goals reached.</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
<?php endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
