<?php include 'includes/header.php'; ?>
<section>
  <div class="container">
    <?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
    <div class="node-heading">
      <h2><?php echo the_title(); ?></h2>
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
        <!-- <ul class="tabs">
          <li data-id="tab-0"><p>Overview</p></li>
          <li data-id="tab-1"><p>Mockup</p></li>
        </ul> -->

        <div class="tabs-content">
          <!-- <div class="tab-item tab-0">
            <span class="overview-desc"><?php //echo the_content(); ?></span>
          </div> -->
          <div class="tab-item tab-1">
            <div id="project-screens-container">
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

        </div>
      </div>

      <?php //$screens = get_order_field('project_screen_images');
    //  foreach($screens as $screen){ ?>
        <!-- <div class="screen-container">
          <a href="<?php //echo get('project_screen_images',1,$screen); ?>" target="_blank"><img src="<?php //echo get('project_screen_images',1,$screen); ?>"/></a>
        </div> -->
      <?php //} ?>

<!--

      <?php
      $field_group = get_group('project_item');
      $count = 0;
      foreach($field_group as $field){  ?>
        <div class="tab tab-<?php echo $count ?>">
          <h2><strong><?php echo $field['project_section_title'][1]; ?></strong></h2>
          <div class="content">
            <?php echo $field['project_section_body'][1]; ?>
          </div>
        </div>
      <?php $count++; } ?>
 -->

    </div>
    <?php } } ?>
  </div>
</section>
