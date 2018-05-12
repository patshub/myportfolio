<?php include 'includes/header.php'; ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <section id="project">
    <div class="container">
      <h1><?php the_title(); ?></h1>
      <?php if (!has_excerpt()) { echo ''; } else{ ?>
        <div class="project-type"><?php the_excerpt(); ?></div>
      <?php } ?>

      <div style="clear:both; height:60px;">
        <a href="#website-view" class="btn view-website-btn">View Website</a>
      </div>

      <div class="clear"></div>

      <div class="col-6">
        <div class="col">
          <h2>Website Redesign</h2>
          <p>
            The City of Santa Ana website is home to an abundance of city-related resources and information available for its residents and community.
            My advisor at the time started this web project off by reconceptualizing their current website homepage with a new branding.</p>
          <h2>The Goal</h2>
          <p>After client approval, the project was assigned for me to continue designing the interior pages, using the homepage design as my visual basis.</p>
            <!-- My design advisor provided the design materials and a style guide for me to ensure that the rest of the website feels as rich and colorful as the concepts portrayed in the homepage. -->
        </div>
      </div>
      <div class="col-6">
        <div class="col">
          <div class="screenshot" style="background-image:url('<?php bloginfo('template_url'); ?>/assets/images/santa-ana.png');">
          </div>
        </div>
      </div>

      <hr/>

      <div class="page-section">
        <h2>Research</h2>
      </div>

      <div class="centerize">
        <h2>Looking Back</h2>
        <p>Even though there was already an established homepage design to kick off this project, it was still worth paying the old Santa Ana site a visit in an effort to identify pros and cons in the designs, what could be improved, and to get a sense of the site’s architecture and content hierarchies.</p>
      </div>
      <img src="<?php bloginfo('template_url'); ?>/assets/images/projects/santa-ana/santa-ana-old.png" />

      <hr/>
      <div class="page-section centerize">
        <h2>Design Solutions</h2>
        <p>After further browsing through the old site, more and more did I realize that it needed more than just an extreme makeover. Below are the issues I discovered and the solutions I crafted along the way.</p>
      </div>

      <div>
        <div class="col-6 issue">
          <div class="col">
            <h2 class="text-issue">Lack of Visual Focus & Uniformity</h2>
            <p>Right off the bat, looking over the different pages of the site gave me a sense that it lacked... personality. It didn't have a focus in color, typography, and even the way different elements are laid out. A lot of elements did not look visually compatible with neighboring elements and their environment, which could essentially cause user navigation errors and confusion.</p>
            <p>Below are some of the examples that showed obvious visual inconsistencies:</p>
            <ul>
              <li class="list-item-main"><span class="list-title">Several colors are used across the website.</span>
                The site's lack of visual direction can be due to the amount of color being thrown across different pages.
                <img src="<?php bloginfo('template_url'); ?>/assets/images/projects/santa-ana/colors.png" />
              </li>
              <li class="list-item-main"><span class="list-title">Typography is being used inconsistently across different pages.</span>
                The image below is an example of two different pages with inconcsistent representations of information. This greatly reiterates the lack of uniformity across the site.
                <img src="<?php bloginfo('template_url'); ?>/assets/images/projects/santa-ana/font-stylez.png" />
                There are about three different font styles being used, and about four varying font sizes. Again, the lack of focus is displayed here.
                <img src="<?php bloginfo('template_url'); ?>/assets/images/projects/santa-ana/typo-error.png" />
              </li>
              <li class="list-item-main"><span class="list-title">Content blocks in some pages aren't being displayed the same way in other pages.</span>
                E.g. There are two versions of the website sidebar showing different font styles, font sizes, and background colors.
                <img src="<?php bloginfo('template_url'); ?>/assets/images/projects/santa-ana/sidebar.png" />
              </li>
              <li class="list-item-main"><span class="list-title">Un-originality</span>
                Content types that lack a level of originality or uniqueness - relative to other content types - lose their credibility and devalues the information they represent.<br/>
                E.g. The blocks of content below would be difficult to perceive as three separate event items because of their lack of decoration and visual exclusiveness when compared to other content types.
                <img src="<?php bloginfo('template_url'); ?>/assets/images/projects/santa-ana/events_old.png" />
              </li>
            </ul>
          </div>
        </div>

        <div class="col-6 solution">
          <div class="col">
            <h2 class="text-solution">Creating a Style Guide</h2>
            <p>The way to solve this issue was to develop design standards that needed to be followed throughout the course of this project. The style guide had to include all elements that will be used in the website, and had to be designed to minimize visual confusion and improve user experience.
            </p>
            <img src="<?php bloginfo('template_url'); ?>/assets/images/projects/santa-ana/styleguide.png" />
            <p>Creating a style guide ensures that:</p>
            <ul>
              <li class="list-item-main"><span class="list-title">The website is consistent.</span>
                The style guide reassures that any particular element's visual representation (e.g. headers, paragraphs, lists, tables, form fields, etc.) will be emulated consistently across the website.
              </li>
              <li class="list-item-main"><span class="list-title">The website is personalized.</span>
                The website acquires a brand and a sense of identity that is built upon steady and minimal use of color, typography, layout, and imagery.
                <img src="<?php bloginfo('template_url'); ?>/assets/images/projects/santa-ana/santa-ana-cut.png" />
              </li>
              <li class="list-item-main"><span class="list-title">Each type of content gets its own brand, too.</span>
                Different content types have their own visual representations that users could easily recognize by spotting distinct elements exclusive to a particular type of content.<br/>
                E.g. There is a clear visual distinction between a list of event items (A) and a list of articles (B). This disimilarity allows users to meaningfully recognize one content type from the another, preventing confusion.
                <br/>
                <strong>A.</strong> Events Listing
                <img src="<?php bloginfo('template_url'); ?>/assets/images/projects/santa-ana/events.png" />
                <strong>B.</strong> Articles Listing
                <img src="<?php bloginfo('template_url'); ?>/assets/images/projects/santa-ana/news.png" />
              </li>
            </ul>
          </div>
        </div>
      </div>


      <h2 class="text-issue">Poorly-Organized Architecture</h2>
      <p>Below are some of the examples that showed poor use of architecture:</p>
      <div>
        <div class="col-6 issue">
          <div class="col">
            <ul>
              <li class="list-item-main"><span class="list-title">Visual disconnection between related pages</span>
                The main City Hall page (A) is home to different department pages, however as shown on the right, the Clerk of the Council (B) department page has a completely different UI presentation (from typography, to how the sidebar is designed) compared to its 'parent' City Hall page (A).
                <br/><br/>
                This could remove all perception that either page relates to the other, which significantly misrepresents the underlying hierarchy.
              </li>
              <li class="list-item-main"><span class="list-title">Poor use of breadcrumbs</span>
                <ul>
                  <li>The way breadcrumbs are displayed did not immediately stick out to me as a form of navigation due to how it is positioned under the main menu almost like a sub-menu, the big spacing between each breadcrumb label, and how it does not align with the page title.</li>
                  <li>Some pages' breadcrumbs were not accurate with how the page hierarchy is portrayed from the user's perspective.<br/>
                    E.g. As shown on the right, City Hall (A) has the correct breadcrumb structure, however the Clerk of the Council department (B) is missing its parent's breadcrumb label after the 'Home' label and before the 'Clerk of the Council' label.
                  </li>
                </ul>
              </li>
              <li class="list-item-main"><span class="list-title">Headers</span>
                Page titles can make an impact in presenting page hierarchy. The Clerk of the Council page header (B) looks more prominent than that of the City Hall's, which users may perceive as the more dominant page.
              </li>
            </ul>
          </div>
        </div>
        <div class="col-6">
          <div class="col">
            <strong>A.</strong> City Hall Page (parent)
            <img src="<?php bloginfo('template_url'); ?>/assets/images/projects/santa-ana/cityhall.png" />
            <strong>B.</strong> Clerk of the Council Page (child)
            <img src="<?php bloginfo('template_url'); ?>/assets/images/projects/santa-ana/clerkofthecouncil.png" />
          </div>
        </div>
      </div>

      <div>
        <h2 class="text-solution">Re-visualizing the Site's Architecture</h2>
        <div class="col-6 solution">
          <div class="col">
            <ul>
              <li class="list-item-main"><span class="list-title">Sitemap</span>
                In order to get a better understanding of the site hierarchy, I created a sitemap which highlighted the key pages and all the subpages that needed to be addressed.<br/>
                This allowed me to get a better sense of where information will be distributed. It helped in inspiring the design to accomodate to users by ensuring that they are always aware of where they are in the site's hierarchy.
                <img src="<?php bloginfo('template_url'); ?>/assets/images/projects/santa-ana/sitemap.png" />
              </li>
            </ul>
          </div>
        </div>

        <div class="col-6 solution">
          <div class="col">
            <ul>
              <li class="list-item-main"><span class="list-title">Page Categorization</span>
                After collaborating with our client on the hierarchical issues, we had collectively decided on a design solution: to categorize key pages by their department and make the department section more prominent.
                <br/>
                E.g. Below is an example of how a page's hierarchy can be presented in an understandable way. It shows a basic page that belongs to the 'Parks & Recreation' department. In fact, any page that belongs to that department will have the same header.
                <br/>
                This refined representation of hierarchy provides clarity about where users are in the site and helps contextualize the content being viewed.
                <img src="<?php bloginfo('template_url'); ?>/assets/images/projects/santa-ana/dept-category.png" />
              </li>
              <li class="list-item-main"><span class="list-title">Universal Sidebar Menu</span>
                I redesigned the old site's sidebar menu to show more hierarchical depth. As a result, users are able to understand better where they are in the pyramid of content, which is helpful for making it more efficient for them to find what they’re looking for or to simply explore the site.
                <img src="<?php bloginfo('template_url'); ?>/assets/images/projects/santa-ana/sidebar-new.png" />
                The page's breadcrumbs must have the same hierarchical structure as the sidebar menu. This visual consistency further improves user navigation and minimizes confusion.
                <img src="<?php bloginfo('template_url'); ?>/assets/images/projects/santa-ana/breadcrumbs.png" />
              </li>
            </ul>
          </div>
        </div>
      </div>

      <hr/>
      <div class="page-section centerize">
        <h2>Lessons Learned</h2>
      </div>

      <div>
        <div class="col-6 learned">
          <div class="col">
            <ul>
              <li class="list-item-main"><span class="list-title">Personality is Everything</span>
                I've learned that it is important for any kind of website to have a visual focus that users can easily familiarize with.
                To achieve this, the designer's responsibility is:
                <ul>
                  <li>to incorporate a level of consistency or uniformity on every element being used</li>
                  <li>to use color, typography, and imagery effectively so that they compliment one another rather than create distractions</li>
                  <li>to grant key elements or content types their own exclusive visual identity.
                    This can help users make distinctions between different types of content.</li>
                </ul>
              </li>
              <li class="list-item-main"><span class="list-title">Overlooking the Entire Website is Important</span>
                It is easy to just get started designing several pages without accounting for how they relate to one another.
                However, I've learned that it is important to first take a step back and study the whole sitemap to understand
                how pages are connected with one another in the hierarchy - an understanding that is ultimately reflected on how the pages will be designed.
              </li>
            </ul>
          </div>
        </div>

        <div class="col-6 learned">
          <div class="col">
            <ul>
              <li class="list-item-main"><span class="list-title">Have Creative Control</span>
                It can be tempting to think there are no challenges in using an existing template as basis to design an entire website.
                However, it was a challenging task for me to limit my tendencies to 'overdesign'.
                In other words, I could juice out the peak of my creativity but only within the constraints of an already-established design (presented as the Homepage for this project).
                <br/>This was quite a learning curve for me because I always had a mindset of designing a website to have everything mashed together in a bowl, fully-loaded with all the features that can be thought of.
                But that's where the website loses it's personality - it tries to be everything it's not, rather than be one thing that it is.
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div id="website-view">
        <hr/>
        <div class="page-section centerize">
          <h2>Full Website</h2>
        </div>
        <div class="page_name_container">
          <span class="page_name">Homepage</span>
        </div>

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
      </div>

    </div>
  </section>
  <script>
    function replace_page_name(){
      $('.page_name').text($('.bx-pager-link.active .pager-item').attr('data-name'));
    }
    $(document).ready(function(){
      $('.project-screens').bxSlider({
        infiniteLoop: false,
        hideControlOnEnd: true,

        nextText: '',
        prevText: '',
        keyboardEnabled: true,

        adaptiveHeight: true,

        auto: false,
        pause: 6000,
        autoHover: true,

        onSlideAfter: function($slideElement, oldIndex, newIndex) {
          replace_page_name();
        },
        buildPager: function(slideIndex){
          switch(slideIndex){
            <?php $count = 0; foreach($page_names as $name){ ?>
              case <?php echo $count++; ?>:
                return '<div data-name="<?php echo $name; ?>" class="pager-item"></div>';
            <?php } ?>
          }
        }
      });
      $('.bx-controls-direction a').click(function(){
        replace_page_name();
      });
    });
  </script>
<?php endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
