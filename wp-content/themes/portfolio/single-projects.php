<?php include 'includes/header.php'; ?>
<section>
  <div class="container">
    <?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>

      <?php if(!empty( get_the_content())){ ?>
        <div id="case-study">
          <div class="container">
            <div class="case-study-content">
              <?php the_content(); ?>
              <span class="close"></span>
            </div>
          </div>
        </div>
      <?php } ?>

      <div class="node-heading">
        <a href="/" class="btn back">Back to Projects</a>
        <h2><?php echo the_title(); ?></h2>
        <?php if(!empty( get_the_content())){ ?>
          <a href="#" class="case-study-btn">Case Study</a>
        <?php } ?>
      </div>
      <div class="clear"></div>
      <div class="main-content">
        <script>
          $(document).ready(function(){
            $('.project-screens').bxSlider({
              pager: false,

              infiniteLoop: false,
              hideControlOnEnd: true,

              adaptiveHeight: true,

              auto: false,
              pause: 6000,
              autoHover: true
            });
          });
        </script>

        <div id="project-details">
          <?php $field_group = get_group('project_item');  ?>
          <div class="project-screens">
            <?php $count = 1;
            foreach($field_group as $field){ ?>
              <div class="screen-item">
                <!-- <span class="sitepage-title"><?php //echo $field['project_item_title'][1]; ?></span> -->
                <img src="<?php echo get('project_item_image',$count,$field); ?>" />
              </div>
            <?php $count++; } ?>
          </div>
        </div>

      </div>
    <?php } } ?>
  </div>
</section>
