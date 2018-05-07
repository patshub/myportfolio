<?php include 'includes/header.php'; ?>

<?php if(is_front_page()) { ?>

<section>
  <div class="container">
    <?php
    $args = array(
      'posts_per_page' => 9,
      'post_type'   => 'projects'
    );
    $projects = new WP_Query( $args );

    if ( $projects->have_posts() ) { ?>
      <div id="projects">
        <?php	while ( $projects->have_posts() ) { $projects->the_post(); ?>
          <div class="col-4 project-item">
            <div class="col">
              <?php if ( has_post_thumbnail() ) : ?>
                  <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <div class="project-thumbnail" style="background-image:url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>');">
                    </div>
                  </a>
              <?php endif; ?>
              <div class="project-info">
                <p><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></p>
                <?php if (!has_excerpt()) { echo ''; } else{ ?>
                  <div class="project-summary"><?php the_excerpt(); ?></div>
                <?php } ?>
              </div>
              <!-- <a class="btn" href="<?php //echo the_permalink(); ?>">View Project</a> -->
            </div>
          </div>
        <?php } wp_reset_postdata(); ?>
      </div>
    <?php } else {
    	// no posts found
    }
    ?>
  </div>
</section>
<?php } ?>
    </body>
</html>
