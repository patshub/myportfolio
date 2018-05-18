<?php include 'includes/header.php'; ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <section id="project">
    <div class="container">
      <h1><?php the_title(); ?></h1>
      <?php if (!has_excerpt()) { echo ''; } else{ ?>
        <div class="project-type"><?php the_excerpt(); ?></div>
      <?php } ?>

      <div style="clear:both; height:60px;">
        <a href="#website-view" class="btn view-website-btn">Final Design</a>
      </div>

      <div class="clear"></div>

      <div>
        <div class="col-6">
          <div class="col">
            <img class="none" src="<?php bloginfo('template_url'); ?>/assets/images/projects/soe/thumbnail-monitor.png" />
          </div>
        </div>
        <div class="col-6">
          <div class="col">
            <h2 class="page-headline">Integrating Voice-Recognition to an Existing Directory</h2>
            <p>With a team of 6 passionate and driven UCI senior students, our project was to redesign a visually-outdated UCI directory system in an effort to ultimately provide a compelling user experience that is fun, engaging, and reliable for students, faculty members, and visitors.</p>

            <div class="col"></div>
            <h3>Table of Contents</h3>

            <div>
              <div class="col-6">
                <div class="col">
                  <ul id="table-of-contents">
                    <li><a href="#section-overview">Overview</a></li>
                    <li><a href="#section-project">The Project</a></li>
                    <li>
                      <a href="#section-research">Research</a>
                      <ul>
                        <li><a href="#section-competitive-analysis">Competitive Analysis</a></li>
                        <li><a href="#section-issues">Issues Discovered</a></li>
                        <li><a href="#section-what-went-wrong">What Went Wrong?</a></li>
                      </ul>
                    </li>
                    <li><a href="#section-critical-thinking">Critical Thinking</a></li>

                  </ul>
                </div>
              </div>

              <div class="col-6">
                <div class="col">
                  <ul>
                    <li>
                      <a href="#section-solution">Solution</a>
                      <ul>
                        <li><a href="#section-competitive-analysis">Competitive Analysis</a></li>
                        <li><a href="#section-non-func">Non-Functional Requirements</a></li>
                        <li><a href="#section-wireframing">Wireframing</a></li>
                        <li><a href="#section-hi-fi">High-Fidelity Mockup</a></li>
                        <li><a href="#section-important-components">Important Components</a></li>
                      </ul>
                    </li>
                    <li><a href="#website-view">Final Design</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="clear"></div>
      <hr/>
      <div id="section-overview" class="page-section centerize">
        <h2>Overview</h2>
      </div>

      <div class="col-5">
        <div class="col">
          <img class="none" style="margin:0 0 25px 0;" src="<?php bloginfo('template_url'); ?>/assets/images/projects/soe/currentSystem.png" />
          <h2>The Current Directory System</h2>
          <p>The current directory system, stationed near the entrance of the 2nd floor SOE building, displays a list of room code numbers within the floor level, each associated with one or more faculty members.</p>
        </div>
      </div>
      <div class="col-7">
        <div class="col">

          <div>
            <div class="col-3">
              <div class="col" style="padding:0 0 1.5em 0;">
                <img class="none" style="margin:0;" src="<?php bloginfo('template_url'); ?>/assets/images/projects/soe/staff-hyuk.png" />
              </div>
            </div>
            <div class="col-9">
              <div class="col">
                <h2>Our Client</h2>
                <h3><strong>Hyuk Kang</strong></h3>
                <p>IT Director of UCI School of Education</p>
              </div>
            </div>
          </div>
          <p>
            The IT Director of UCI’s School of Education, Hyuk Kang, believed that there was a lot of
            room for improving the directory system currently installed in the 2nd floor of UCI's School
            of Education (SOE) building.<br/> His idea for a design project was born from the desire to make the
            students, staff, and visitors’ experience with the directory system more intuitive, engaging, useful, fun, and unique.
          </p>

          <div style="margin-top:1.5em">
            <h2>Our Team</h2>
            <p><img class="none" src="<?php bloginfo('template_url'); ?>/assets/images/projects/soe/team.png" /></p>
          </div>
        </div>
      </div>

      <hr/>
      <div id="section-project" class="page-section centerize">
        <h2>The Project</h2>
      </div>
      <div class="centerize">
        <h3>Design the Directory System to be solely <strong style="margin:8px 0 20px 0;display:block; clear:both;font-size:1.75em;">Voice-Activated</strong></h3>
        <p>Our team's goal is to redesign the SOE directory system to be a voice-activated service in an effort to provide a more fun and intuitive experience for the users.</p>
      </div>
      <img class="none" style="width:80%;margin:auto; display:block;" src="<?php bloginfo('template_url'); ?>/assets/images/projects/soe/idea-old.png" />

      <hr/>
      <div id="section-research" class="page-section centerize">
        <h2>Research</h2>
      </div>
      <div class="centerize">
        <h2><strong>What Makes a Good Voice-Recognition Device?</strong></h2>
        <p>Our team performed research on existing devices and systems that utilize voice-recognition to identify the important elements that make them useful.</p>
      </div>

      <style>
        #voice-device-features li:before{
          width: 1.75em;
          font-size: 3em;
          position: relative;
          top: 15px;
          color: #009BE3;
          text-align: center;
          padding: 0 0px 0 0;
          box-sizing: border-box;
        }
        #voice-device-features li.sound-quality:before{content: "\f026";}
        #voice-device-features li.flexibility:before{content: "\f0ca";}
        #voice-device-features li.feedback:before{content: "\f075";}
        #voice-device-features li.instructions:before{content: "\f05a";}
        #voice-device-features li.environment:before{content: "\f0c0";}
      </style>
      <div id="voice-device-features">
        <div class="col-6">
          <div class="col">
            <ul>
              <li class="sound-quality">
                <div class="list-title">Sound Quality</div>
                <p>Because users will need to rely on the device's auditory traits, the standard of quality for sound must be high enough for users to clearly comprehend information being projected.</p>
              </li>
              <li class="flexibility">
                <div class="list-title">Flexibility in Recognizing Different Instances of a Request</div>
                <p>They must be flexible enough to recognize user requests that are formulated in multiple ways.</p>
              </li>
              <li class="feedback">
                <div class="list-title">Auditory Feedback</div>
                <p>Users must receive auditory feedback from the device for them to know what actions to take next.</p>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-6">
          <div class="col">
            <ul>
              <li class="instructions">
                <div class="list-title">Comprehensible Instructions</div>
                <p>There must be a way to provide instructions to users on how to interact with the system.</p>
              </li>
              <li class="environment">
                <div class="list-title">Ability to Withstand Different Environmental Conditions</div>
                <p>The device must remain functional in environments that may comprise of external noise and accidental situations when a request is made that is not intentional towards the device.</p>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div id="section-competitive-analysis" class="centerize">
        <h3><strong>Competitive Analysis</strong></h3>
        <p>In an effort to further understand the nature of voice-recognition devices, our team conducted a competitive analysis on existing devices that harness that same kind of functionality as their core.</p>
      </div>

      <div>
        <div class="col-4">
          <div class="col">
            <img class="none" src="<?php bloginfo('template_url'); ?>/assets/images/projects/soe/echo.png" />
          </div>
        </div>
        <div class="col-4">
          <div class="col">
            <img class="none" src="<?php bloginfo('template_url'); ?>/assets/images/projects/soe/google-home.png" />
          </div>
        </div>
        <div class="col-4">
          <div class="col">
            <img class="none" src="<?php bloginfo('template_url'); ?>/assets/images/projects/soe/siri.png" />
          </div>
        </div>
      </div>

      <div id="section-issues" class="centerize">
        <h2 class="text-issue"><strong>Issues Discovered</strong></h2>
      </div>

      <div>
        <div class="col-6 issue">
          <div class="col">
            <ul>
              <li class="list-item-main"><span class="list-title">Lack of Visual Feedback</span>
                While users can benefit from auditory feedback, the amount of information they can retain will be minimal compared to the amount they will remember when visualizing the information. Study shows that people’s ability to remember and identify images they’ve seen before have 83% accuracy. For example, long verbal instructions are less likely to be remembered compared to visual instructions that they can read from.
              </li>
              <li class="list-item-main"><span class="list-title">Lack of Instructions for Learnability</span>
                Users can get trapped on the get-go for not having to know what the device’s true use is without an immediate display of instructions they can follow.
              </li>
              <li class="list-item-main"><span class="list-title">Frequent Pauses can Bore Users</span>
                Without immediate feedback to tell users what the system status currently is, not only could users lose some interest and get bored, but it would also consume time more so than how long they planned to invest on interacting with the system.
              </li>
            </ul>
          </div>
        </div>

        <div class="col-6 issue">
          <div class="col">
            <li class="list-item-main"><span class="list-title">Little to No Accessibility Improvement</span>
              While having auditory capabilities can help users with visual disabilities harness information from the system, the lack of visual feedback ignores the other reality that there are users with auditory disabilities or who aren’t technically savvy, which may deem the system inaccessible for those users.
            </li>
            <li class="list-item-main"><span class="list-title">Interruptive Outside Noise</span>
              Outside noises could accidentally interrupt the user’s interaction with the system. Unintentional voice commands could be recognized by the device from afar.
            </li>
          </div>
        </div>
      </div>

      <div id="section-what-went-wrong" class="centerize">
        <h2><strong>What Went Wrong?</strong></h2>
        <h3>The problem came from <strong>how we framed our research</strong>.</h3>
        <br/>
        <p>
          We focused solely on the voice-recognition aspect of this project, which is not the core ingredient and main source of solution for us to reach our goal.
        </p>
      </div>

      <hr/>
      <div id="section-critical-thinking" class="page-section centerize">
        <h2>Critical Thinking</h2>
      </div>
      <div class="centerize" style="margin-bottom:45px;">
        <h3><strong>Framing it the Right Way</strong></h3>
        <p>We needed to reframe our research and focus on what eventually appeared to us as the core property of the system, right from the beginning: <strong>it is essentially a directory system</strong>.</p>
      </div>

      <div class="centerize">
        <h2><strong>What Makes a Good <span style="display:block;clear:both;"><del>Voice-Recognition</del> Directory System?</span></strong></h2>
      </div>

      <style>
        #directory-system-features li:before{
          width: 1.75em;
          font-size: 3em;
          position: relative;
          top: 20px;
          color: #009BE3;
          text-align: center;
          padding: 0 0px 0 0;
          box-sizing: border-box;
        }
        #directory-system-features li.visual:before{content: "\f108";}
        #directory-system-features li.map:before{content: "\f279";}
        #directory-system-features li.interface:before{content: "\f2bd";}
        #directory-system-features li.accuracy:before{content: "\f140";}

        #directory-system-features .list-title{
          font-weight: 400;
        }
      </style>

      <div id="directory-system-features">
        <div class="col-1"><div class="col"></div></div>
        <div class="col-5">
          <div class="col">
            <ul>
              <li class="list-item-main visual">
                <span class="list-title">Visual capabilities for more instructive feedback and improved accessibility</span>
              </li>
              <li class="list-item-main map">
                <span class="list-title">Informative map presenting data and a point of reference</span>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-5">
          <div class="col">
            <ul>
              <li class="list-item-main interface">
                <span class="list-title">Well-designed interface that is user-focused and aesthetically minimal</span>
              </li>
              <li class="list-item-main accuracy">
                <span class="list-title">Accurate data that prevents user confusion and ensures reliability</span>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-1"><div class="col"></div></div>
      </div>

      <hr/>
      <div id="section-solution" class="page-section centerize">
        <h2>Solution</h2>
      </div>
      <div class="centerize">
        <!-- <h2 class="text-solution"><strong>Proposing a New Solution</strong></h2> -->
        <h3>Add<strong style="margin:8px 0 20px 0;display:block; clear:both;font-size:1.75em;">Visual Display</strong></h3>

        <p>With the research data we've gathered along the way, we had proposed a solution to our client that promised to generate better results while maintaining our project's scope in tact.
          <br/>Our goal from the beginning was to create an intuitive user experience and robust system. We felt that this solution would be an improvement from what the initial system intended to be,
          because it better reflected what directory systems are at their core, while satisfying what the client wanted to include in the system (which was a voice-recognition feature).
          <br/>We felt confident presenting this solution to Hyuk, and with no time received a "YES!" from him.
        </p>
      </div>
      <img class="none" src="<?php bloginfo('template_url'); ?>/assets/images/projects/soe/idea-new.png" />


      <div id="section-non-func" class="centerize">
        <h2><strong>Non-Functional Requirements</strong></h2>
      </div>

      <div>
        <div class="col-6">
          <div class="col">
            <ul>
              <li class="list-item-main"><span class="list-title">Reliability</span>
                The voice-activated device must be a reliable source of information, free of discoordination or inconsistencies
                in the data being used. The distributed information about room locations or office hours or other department information
                must be highly consistent with what building information the administration has predefined to prevent navigational confusion
                from the user’s perspective.
                <br/>The device must be able to function properly under a variety of conditions, such as a
                traffic of students passing by or any noise that can disrupt the device’s ability to recognize a user’s voice.
                <br/>The device must also be able to perform as expected in a time well-suited for the user. For example, students should not
                have to wait for a long time in order to obtain the information they need from the device - the system should function so that
                students can rely on it providing the information they need in a timely manner.
              </li>
              <li class="list-item-main"><span class="list-title">Accessibility</span>
                The system must satisfy the needs of all users, not just the ones capable of vocal speech. In a situation
                where a student with a vocal disability needs to use the device to find the location of a room, the system must have
                a way to cater to the disabled user.
                <br/>Furthermore, users who do not speak fluent English must be equally supported.
                With UCI’s diverse community, language barriers must be prevented and the system’s ability to recognize different accents
                or pronunciations must be highly considered.
              </li>

              <li class="list-item-main"><span class="list-title">Performance</span>
                The voice-activated device must function with a high level of efficiency, enough for users to not experience any delays from the
                interaction. The device must have a short response time following user requests. More specifically, the transmission of data
                within the system (retrieved from a database to the device) must be fast enough to not cause any delays for users.
              </li>

              <li class="list-item-main"><span class="list-title">Availability</span>
                The voice-activated device must be available to users 100% of the time. When a user approaches the device, the device must be prepared
                to respond to the user’s immediate requests.
              </li>

            </ul>
          </div>
        </div>
        <div class="col-6">
          <div class="col">
            <ul>
              <li class="list-item-main"><span class="list-title">Robustness</span>
                The voice-activated device must be able to handle errors that can occur. User errors such as incorrect requests or unfamiliar pronunciations
                must not cause the device to stop functioning properly or cause the system to crash.
                <br/>Environmental factors, such as background noise that can
                disrupt a user’s interaction with the device, must be highly considered and must cause no response error from the system to the user.
                In the event that the system encounters any of the mentioned errors above, the system must respond with the appropriate feedback to guide users
                to move forward and prevent them from being stuck in the error.
              </li>

              <li class="list-item-main"><span class="list-title">Learnability</span>
                The voice-activated device directory system must be intuitive and must not require too much command-learning and user memory overload.
                With the system’s ability to recognize a variety of vocal commands, users should not have to memorize the commands - instead, the system
                should allow users to ‘speak’ to the device in a casual manner and in many different ways, as if they are inquiring to a real person.
              </li>

              <li class="list-item-main"><span class="list-title">Memorability</span>
                The voice-activated directory system should have an intuitive and straightforward design so that if a user were to use it once, and return to
                use it again after a long period of time, they either remember how to utilize it or are reminded after a very short period of time.
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div id="section-wireframing" class="centerize">
        <h2><strong>Wireframing</strong></h2>
        <p>
          Our team created wireframes to help us determine what visual components are needed and where in the interface they would excel in performance, build the aesthetic foundations, and contribute to the usability of the system.
          <br/>We used these wireframes to collaboratively make design decisions that became the foundation for the UI designs crafted later in the project.
        </p>
      </div>
      <img class="none" style="display:block; margin:auto auto 45px auto;" src="<?php bloginfo('template_url'); ?>/assets/images/projects/soe/wireframe.png" />

      <div id="section-hi-fi" class="centerize">
        <h2><strong>High-Fidelity Mockup</strong></h2>
        <p>Our team went through several design iterations to come up with a variety of UI design alternatives to choose from throughout the process.</p>
      </div>
      <img class="none" style="display:block; margin:auto auto 45px auto;" src="<?php bloginfo('template_url'); ?>/assets/images/projects/soe/hi-fi.png" />

      <div id="section-important-components" class="centerize">
        <h3>Important Components that <strong style="margin:8px 0 20px 0;display:block; clear:both;font-size:1.75em;">Made All The Difference</strong></h3>
      </div>
      <div class="solution">
        <div class="col-6">
          <div class="col">
            <ul>
              <li class="list-item-main"><span class="list-title">Press "Start" Button to Initiate System</span>
                <p>To prevent the system from being unintentionally activated, we added an initial prerequisite in the Home screen to activate the system by pressing a ‘Start’ button first. This ensured that the system could only accept commands when being used intentionally.</p>
                <img src="<?php bloginfo('template_url'); ?>/assets/images/projects/soe/start-btn.png" />
              </li>
              <li class="list-item-main"><span class="list-title">"Reset" System Command</span>
                <p>There needed to be a way for users to reset the system after it’s been used. A command like “Reset” or “Search Again” was added to accomplish this.</p>
                <img src="<?php bloginfo('template_url'); ?>/assets/images/projects/soe/reset-command.png" />
              </li>
              <li class="list-item-main"><span class="list-title">System Response to User Inactivity</span>
                <p>We added a way for the system to respond to user inactivity by asking if the user still needs more time, 2 or 3 times, before eventually restarting itself to the Home screen (or initial state).</p>
                <img src="<?php bloginfo('template_url'); ?>/assets/images/projects/soe/are-you-still-there.png" />
              </li>
              <li class="list-item-main"><span class="list-title">Visual Feedback on Voice-Recognition Status</span>
                <p>We designed a way for users to differentiate between active and inactive statuses of the system so that users will know when or when not to interact with the system.</p>
                <img src="<?php bloginfo('template_url'); ?>/assets/images/projects/soe/mic-status.png" />
              </li>
            </ul>
          </div>
        </div>
        <div class="col-6">
          <div class="col">
            <ul>
              <li class="list-item-main"><span class="list-title">Dotted Lines to Destination</span>
                A directory map wouldn’t be complete without having a point of reference and a path line that directs it to a specific destination. We wanted to make sure that the digital version of the directory map reflects the actual structure of the floor level.
                <img src="<?php bloginfo('template_url'); ?>/assets/images/projects/soe/dotted-lines.png" />
              </li>

              <li class="list-item-main"><span class="list-title">Subtitles</span>
                We provided subtitles at the bottom of the user interface in an effort to make the system more accessible to users with hearing disabilities.
              </li>
              <li class="list-item-main"><span class="list-title">Minimal Steps to Desired Results</span>
                We decided to limit the number of page navigations so that users aren’t required to perform multiple commands to get to their desired results. We wanted to ensure that a user could make a single request to acquire all the information they need.
                <br/>This also meant that the interface design needed to be as minimalistic as possible to prevent users from being overloaded with information.
                <img src="<?php bloginfo('template_url'); ?>/assets/images/projects/soe/user-flow.png" />
              </li>
              <li class="list-item-main"><span class="list-title">Error Prevention</span>
                We incorporated error prevention in the design by persistently providing side instructions to users so they never get stuck on any steps, at any given time.
                <img src="<?php bloginfo('template_url'); ?>/assets/images/projects/soe/prompt.png" />
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div id="website-view">
        <hr/>
        <div class="page-section centerize">
          <h2>Final Design</h2>
        </div>
        <div class="page_name_container">
          <span class="page_name">Start Screen</span>
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

      <style>
      h2.surpassed{
        display: inline;
      }
      h2.surpassed:before{
        font-family: FontAwesome;
        display: table-cell;
        width: 1em;

        content: "\f058";
        color: #19BC3F;
        font-size: 2em;
        vertical-align: top;
        position: relative;
        top: 5px;
        padding: 0 10px 0 0;
        box-sizing: border-box;
      }
      </style>
      <hr/>
      <div class="page-section centerize">
        <h2>Client Feedback</h2>
      </div>
      <div class="centerize">
        <h2 class="surpassed">Surpassed Expectations</h2>
        <p>Our client, after showing him the final design iteration of the system, was amazed by how far we’ve taken this project. He initially
          expected us to only develop a voice-activated directory device that responds to user requests strictly in an auditory fashion, but he was
          extremely happy with our integration of a user interface because it improved the overall usability of the system.</p>
      </div>
      <img class="none" style="width:80%;margin:auto; display:block;" src="<?php bloginfo('template_url'); ?>/assets/images/projects/soe/team.png" />



      <!-- <hr/>
      <div class="page-section centerize">
        <h2>Lessons Learned</h2>
      </div> -->

      <!-- <div>
        <div class="col-6 learned">
          <div class="col">
            <ul>
              <li class="list-item-main"><span class="list-title">Personality is Everything</span>
                I've learned that it is important for any kind of website to have a visual focus that users can easily familiarize with.
                To achieve this, the designer's responsibility is:
                <ul>
                  <li>to incorporate a high level of consistency and uniformity on all visual components</li>
                  <li>to use color, typography, and imagery effectively so that they compliment one another rather than create distractions</li>
                  <li>to grant key elements or content types their own exclusive visual identity.
                    This can help users make distinctions between different types of content.</li>
                </ul>
              </li>
              <li class="list-item-main"><span class="list-title">Overlooking the Entire Website is Important</span>
                It is easy to just get started designing page by page without addressing the entire scope of a site.
                However, I've learned that it is important to first take a step back and visualize how pages
                are connected with one another in the hierarchy - an understanding that is ultimately reflected on how the pages will be designed.
              </li>
            </ul>
          </div>
        </div>

        <div class="col-6 learned">
          <div class="col">
            <ul>
              <li class="list-item-main"><span class="list-title">Have Creative Control</span>
                It was a challenging task for me to limit my tendencies to 'overdesign'.
                Because I didn't start the project with a completely empty canvas, I had to be able to utilize the peak of my creativity strictly within the constraints of an already-established concept (presented as the homepage for this project).
                <br/>This was quite a learning curve for me because I always had the tendency to over-populate a website with several features to the point where the aesthetics became very 'busy'.
                I've realized that that's where the website loses it's personality - it tries to be everything it's not, rather than be one thing that it is.
              </li>
            </ul>
          </div>
        </div>
      </div> -->

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
