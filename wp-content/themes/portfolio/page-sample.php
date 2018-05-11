<?php include 'includes/header.php'; ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <section id="project">
    <div class="container">
      <h1><?php the_title(); ?></h1>
      <?php if (!has_excerpt()) { echo ''; } else{ ?>
        <div class="project-type"><?php the_excerpt(); ?></div>
      <?php } ?>

      <div class="col-6">
        <div class="col">
          <h2>The Story</h2>
          <p>My design advisor at the time started this project off by reconceptualizing Santa Ana’s current site homepage (see image below), which was eventually approved by the client.
          <br/><br/>After client approval, the project was assigned for me to continue designing the interior pages, using the homepage design as my visual basis. My design advisor provided the design materials and a style guide for me to ensure that the rest of the website feels as rich and colorful as the concepts portrayed in the homepage.</p>
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
              <li class="list-item-main"><span class="list-title">Several different colors are used across the website, which is way more than what is needed.</span>
                <img src="<?php bloginfo('template_url'); ?>/assets/images/projects/santa-ana/colors.png" />
              </li>
              <li class="list-item-main"><span class="list-title">Typography is being used inconsistently across different pages.</span>
                <img src="<?php bloginfo('template_url'); ?>/assets/images/projects/santa-ana/font-stylez.png" />
              </li>
              <li class="list-item-main"><span class="list-title">There are more than two font styles being used, and font sizes vary greatly.</span>
                <img src="<?php bloginfo('template_url'); ?>/assets/images/projects/santa-ana/typo-error.png" />
              </li>
              <li class="list-item-main"><span class="list-title">Content blocks in some pages aren't being displayed the same way in other pages.</span>
                E.g. There are two versions of the website sidebar showing a different font style, font size, and background color.
                <img src="<?php bloginfo('template_url'); ?>/assets/images/projects/santa-ana/sidebar.png" />
              </li>
              <li class="list-item-main"><span class="list-title">Elements that are displayed poorly and lack uniqueness compared to other elements lose their credibility and devalues the information they represent. </span>
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
              <li class="list-item-main"><span class="list-title">The website acquires a brand and a sense of identity that is built upon steady and minimal use of color and typography.</span>
                <img src="<?php bloginfo('template_url'); ?>/assets/images/projects/santa-ana/santa-ana-cut.png" />
              </li>
              <li class="list-item-main"><span class="list-title">Visual elements are represented across the website in a consistent manner, which promotes information reliability and improves users' ability to recognize familiar elements.</span>
                E.g. Events are displayed in a consistent way with different data but same layout (desktop/mobile version).
                <img src="<?php bloginfo('template_url'); ?>/assets/images/projects/santa-ana/events.png" />
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
        <h2 class="text-solution">Overlooking the Entire Site</h2>
        <div class="col-6 solution">
          <div class="col">
            <ul>
              <li class="list-item-main"><span class="list-title">Created a Sitemap</span>
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
              <li class="list-item-main"><span class="list-title">Categorizing Key Pages</span>
                After collaborating with our client on the hierarchical issues, we had collectively decided on a design solution: to categorize key pages by their department and make the department section more prominent.
                <br/>
                E.g. Below is an example of how a page's hierarchy can be presented in an understandable way. It shows a basic page that belongs to the 'Parks & Recreation' department. In fact, any page that belongs to that department will have the same header.
                <br/>
                This refined representation of hierarchy provides clarity about where users are in the site and helps contextualize the content being viewed.
                <img src="<?php bloginfo('template_url'); ?>/assets/images/projects/santa-ana/dept-category.png" />
              </li>

              <li class="list-item-main"><span class="list-title">Universal Sidebar that matches with Breadcrumbs</span>
                I redesigned the old site's sidebar menu to show more hierarchical depth. As a result, users are able to understand better where they are in the pyramid of content, which is helpful for making it more efficient for them to find what they’re looking for or to simply explore the site.
                <img src="<?php bloginfo('template_url'); ?>/assets/images/projects/santa-ana/sidebar-new.png" />
                The page's breadcrumbs must have the same hierarchical structure as the sidebar menu. This visual consistency further improves user navigation and minimizes confusion.
                <img src="<?php bloginfo('template_url'); ?>/assets/images/projects/santa-ana/breadcrumbs.png" />
              </li>
            </ul>

          </div>
        </div>
      </div>





    </div>
  </section>
<?php endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
