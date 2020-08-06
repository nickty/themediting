<?php
/**
 * Template Name: Home Template Custom
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="home-banner" role="banner">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
      <div class="banner-content">
        <div class="bannet-text">
          <h1>Catch <span>web accessibility violations</span> on your website automatically!</h1>
          <p>The First AI-powered tool for automated and manual audits of your website.</p>
          <div class="check-website">
            <input type="text" name="check_website" placeholder="Enter Website"><input type="submit" name="check_website" value="Check Website">
            <p>Your team will spend less time looking for errors and more time actually coding.</p>
          </div>
        </div>
        <div class="header-image ">
          <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/newimgs/Group 4046@2x.png" alt="Website Main banner Image">
        </div>
      </div>
</div>
    </div>

  </div>
</div>

<div class="column-content">
  <div class="container">
    <div class="row two-col">
      <div class="col-lg-6">
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/Group 2319@2x.png" alt="Web Accessibility">
        <h2>Web Accessibility</h2>
        <p>Continuously monitor your website accessibility compliance in 34 types of devices. Get in-depth reports for every page, violation, priority, and more. Also, learn where in the source code the problem is so you can fix it quickly and definitively.</p>
        <a href="#">Learn More <span class="glyphicon">></span></a>
      </div>
      <div class="col-lg-6">
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/Group 2476@2x.png" alt="Front End Development">
        <h2>Front End Development</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        <a href="#">Learn More <a href="#">Learn More <span class="glyphicon">></span></a></span></a>
      </div>
    </div>

    <div class="row three-col">
      <div class="col-lg-4">
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/Group 972@2x.png" alt="Scrum Boards">
        <h2>Scrum Boards</h2>
        <p>Manage your web Accessibility mediation projects (or any project!) with unlimited scrum boards</p>
        <a href="#">Learn More <a href="#">Learn More <span class="glyphicon">></span></a></a>
      </div>
      <div class="col-lg-4">
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/Group 193@2x.png" alt="Machine Learning">
        <h2>Machine Learning</h2>
        <p>Ally Right learns how you use your website and helps you to avoid common accessibility and frontend coding mistakes.	</p>
        <a href="#">Learn More <a href="#">Learn More <span class="glyphicon">></span></a></a>
      </div>
      <div class="col-lg-4">
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/Group 1198@2x.png" alt="Chat">
        <h2>Chat</h2>
        <p>Communicate with your entire team securely through our in-app chat.</p>
        <a href="#">Learn More <a href="#">Learn More <span class="glyphicon">></span></a></a>
      </div>
    </div>
  </div>
</div>

<div class="five-step">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <div class="content">
          <div class="inside">
            <h2>Our Five-Step Continuous Model</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>

        </div>
      </div>
      <div class="col-lg-7">
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/Group 1656@2x.png" alt="five steps solution">
      </div>
    </div>
  </div>
</div>

<div class="how-to-help">
  <div class="container">
    <div class="row">
      <div class="col-6">
        <div id="imagebox">
          <img id="imgone" style="display: block;" src="<?php echo get_template_directory_uri(); ?>/imgs/accord-1.png" alt="C-Suite">
          <img id="imgtwo" src="<?php echo get_template_directory_uri(); ?>/imgs/Group 47@2x.png" alt="Development">
          <img id="imgthree" src="<?php echo get_template_directory_uri(); ?>/imgs/Group 2238@2x.png" alt="Marketing">
          <img id="imgfour" src="<?php echo get_template_directory_uri(); ?>/imgs/OBJECTS@2x.png" alt="Sale and Support">
          <img id="imgfive" src="<?php echo get_template_directory_uri(); ?>/imgs/Group 14@2x.png" alt="SME's">
              
       </div>

     </div>
     <div class="col-6">
      <h2>How we help every member of your organization:</h2>
      <div class="accrod">
        <button class="accordion active" id="accord-img-1">C-Suite</button>
        <div class="panel show" style="max-height: 278px;">
          <p>All the KPIs your C-Suite needs to quickly understand the state of your website and make decisions accordingly.</p>
          <div class="row">
            <div class="col-lg-9">
              <div class="arr">CEO</div>
              <div class="arr">CFO</div>
              <div class="arr">CTO</div>
              <div class="arr">CLO</div>
              <div class="arr">CISO</div>
              <div class="arr">CTO</div>
              <div class="arr">CMO</div>
              <div class="arr">CCO</div>
            </div>
            <div class="col-lg-3">
              <a href="#">Learn More</a>
            </div>
          </div>
          <br>
        </div>

        <button class="accordion" id="accord-img-2">Development</button>
        <div class="panel">
          <p>Access the raw data, showing the errors & violations, their priorities, and where to locate them. All your developers need to remediate your website ASAP.</p>
          <div class="row">
            <div class="col-lg-9">
              <div class="arr">System architects</div>
              <div class="arr">Frontend Developer</div>
              <div class="arr">Backend Developer</div>
              <div class="arr">DevOps</div>


            </div>
            <div class="col-lg-3">
              <a href="#">Learn More</a>
            </div>
          </div>
          <br>
        </div>

        <button class="accordion" id="accord-img-3">Marketing</button>
        <div class="panel">
          <p>Empower your marketers to create accessible content by design.</p>
          <div class="row">
            <div class="col-lg-9">
              <div class="arr">Social Media</div>
              <div class="arr">Content Creators</div>
              <div class="arr">SEO/SEM</div>
              <div class="arr">Graphic Designers</div>


            </div>
            <div class="col-lg-3">
              <a href="#">Learn More</a>
            </div>
          </div>
          <br>
        </div>

        <button class="accordion" id="accord-img-4">Sale and Support</button>
        <div class="panel">
          <p>Show your clients, before and after the sale, that you care about them</p>
          <div class="row">
            <div class="col-lg-9">
              <div class="arr">Sales reps</div>
              <div class="arr">Customer Support</div>
              <div class="arr">Sales Director</div>


            </div>
            <div class="col-lg-3">
              <a href="#">Learn More</a>
            </div>
          </div>
          <br>
        </div>

        <button class="accordion" id="accord-img-5">SME's</button>
        <div class="panel">
          <p>The tools your SME’s need to </p>
          <div class="row">
            <div class="col-lg-9">
              <div class="arr">Inclusion/Diversity</div>
              <div class="arr">Accessibility</div>
              <div class="arr">PMP</div>
              <div class="arr">HR</div>

            </div>
            <div class="col-lg-3">
              <a href="#">Learn More</a>
            </div>
          </div>
          <br>
        </div>
      </div>
    </div>
  </div>    
</div>
</div>



<div class="feature-on">
  <div class="container feature-inner">
    <h2>Featured On</h2>
    <div class="logos">

      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/imgs/the-wall2.png" alt="ally right banner"></a>
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/imgs/Image 12@2x.png" alt="ally right banner"></a>
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/imgs/Mask Group 33@2x.png" alt="ally right banner"></a>
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/imgs/Image 13@2x.png" alt="ally right banner"></a>
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/imgs/Mask Group 32@2x.png" alt="ally right banner"></a>
    </div>
  </div>
</div>

<div class="other-reason">
  <div class="container">
    <h2>Other reasons to use Ally Right</h2>
    <div class="row">
      <div class="col-lg-4">

        <div class="accordion-section">
          <h4>Cutting-edge technology</h4>
          <button class="accordion">Powered by Artificial Intelligence</button>
          <div class="panel">
            <p>Ally Right learns how you use your website and helps you avoid errors and violations.</p>
          </div>

          <button class="accordion">Insanely Fast Scanning</button>
          <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>

          <button class="accordion">Test Pages Before Launching</button>
          <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
          <button class="accordion">Find Issues Others Miss</button>
          <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
          <button class="accordion">Less False Positives, More Confidence</button>
          <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
          <button class="accordion">Continuous Monitoring</button>
          <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>

        </div>
      </div>
      <div class="col-lg-4">

        <div class="accordion-section">
          <h4>Granular Reporting</h4>
          <button class="accordion">Prioritize Errors & Violations</button>
          <div class="panel">
            <p>Get a list of errors & violations prioritized from most to least urgent, so you know where to start your site’s remediation.</p>
          </div>

          <button class="accordion">Granular Reporting</button>
          <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>

          <button class="accordion">Find Patterns, Save Time</button>
          <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
          <button class="accordion">Track Your Website Over Time</button>
          <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
          <button class="accordion">Easily locate the Issues on Your Site</button>
          <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
          <button class="accordion">Filter through reports</button>
          <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
          <button class="accordion">Scan on dozens of devices resolutions and devices</button>
          <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
      </div>  
      <div class="col-lg-4">

        <div class="accordion-section">
          <h4>Benefits of being accessible</h4>
          <button class="accordion">Avoid/Settle Web Accessibility Lawsuits</button>
          <div class="panel">
            <p>Lawsuits are on the rise. Remediate your website before it is too late - or to avoid other lawsuits</p>
          </div>

          <button class="accordion">Better, Easier UI/UX</button>
          <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>

          <button class="accordion">Better SEO</button>
          <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
          <button class="accordion">Cheaper PPC</button>
          <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
          <button class="accordion">Open the door to more clients</button>
          <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
          <button class="accordion">Show you care</button>
          <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
      </div>      
    </div>
  </div>
</div>

<div class="get-a-demo">
  <div class="container">
    <div class="row">
      <div class="col-lg-9">
        <h3>Take the first step towards web accessibility - schedule a demo at a time that is convenient for you.</h3>
        <button>Get a Demo</button>
      </div>
      <div class="col-lg-3">
        <div class="flower-image">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/Plant@2x.png" alt="get a demo">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="lets-grow">
  <div class="container">
    <div class="inside-content">
      <div class="row">
        <div class="col-lg-6">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/Group 2232@2x.png" alt="let grow together">
        </div>
        <div class="col-lg-6 grow-content">
          <div class="grow-form">
            <h3>Let’s grow together</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
            <form>
              <input type="email" name="email" placeholder="E-mail Addrress"><input type="submit" name="check_website" value="Subscribe Now">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
 function  func_one() {
    console.log('working here ');
  }
</script>

<?php
get_footer();
?>