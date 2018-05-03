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

        <div class="page_name_container">
          <span class="page_name">Homepage</span>
        </div>
      </div>
      <div class="clear"></div>
      <div class="main-content">

        <div id="project-details">
          <?php $field_group = get_group('project_item');  ?>
          <div class="project-screens">
            <?php
              $count = 1;
              $page_names = array();
              foreach($field_group as $field){
              array_push($page_names, $field['project_item_title'][1]); ?>

              <div class="screen-item">
                <img src="<?php echo get('project_item_image',$count,$field); ?>" />
              </div>
            <?php $count++; } ?>
          </div>
        </div>

        <script>

        function replace_page_name(){
          $('.page_name').text($('.bx-pager-link.active').next('.page-name-hover').text());
        }

          $(document).ready(function(){
            $('.project-screens').bxSlider({
              infiniteLoop: false,
              hideControlOnEnd: true,

              adaptiveHeight: true,

              auto: false,
              pause: 6000,
              autoHover: true,

              onSlideAfter: function($slideElement, oldIndex, newIndex) {
                replace_page_name();
              }
            });
          });

          $(window).bind("load", function() {
            var i = 0;
            var page_names = [];
            <?php foreach($page_names as $name){ ?>
              page_names[i++] = '<?php echo $name; ?>';
            <?php } ?>

            var j = 0;
            $('.bx-pager-item').each(function() {
              $(this).append('<div class="page-name-hover">'+ page_names[j++] +'</div>');
            });

            $('.bx-pager-item').mouseover(function(){
              $('.page_name').text($(this).find('.page-name-hover').text());

            });
            $('.bx-pager-item').mouseleave(function(){
              replace_page_name();
            });
            $('.bx-controls-direction a').click(function(){
              replace_page_name();
            });

          });

        </script>

      </div>
    <?php } } ?>
  </div>
</section>
