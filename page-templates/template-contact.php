<?php
/**
 * Template Name: Contact Us Custom Template
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

  
<div class="column-content">

  <div class="container">
    <section class="breadcrumbs">
  <div class="container">
    <?php 
    if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); 
    ?>
  </div>
</section>
    <h2>Contact Us</h2>
    <div class="row two-col">
      <div class="col-lg-6">
        <div class="teck-support">
          <h3>Tech Support</h3>
          <div class="content1">
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/Group 797@2x.png" alt="Web Accessibility">
            <div class="help-support">
              <span>Help & Support </span>
              <h4>Live Chat</h4>
            </div>
          </div>
          <div class="bot-img">
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/Plant.png" alt="Web Accessibility">
          </div>
        </div>

        <div class="sales-support">
          <h3>Sales</h3>
          <div class="content2">
            <div class="inside-text">
              <p>If you are interested in learning more about the Ally RIght software, fill out this form or start a chat</p>
              <div class="help-support">
                <span>(9:00 am to 6 pm, Los Angeles Time)</span>

              </div>
            </div>
            <div class="bot-img">
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/calendar.png" alt="Web Accessibility">
          </div>

        </div>

      </div>

      <div class="press-blog">
        <h3>Press, Bloggers, and Vloggers</h3>
        <div class="content3">
          <p>We welcome members of the Press, bloggers, and vloggers. Please visit our Pressroom for more information.</p>
          <div class="bot-img">
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/paper.png" alt="Web Accessibility">
          </div>
        </div>

      </div>
    </div>
    <div class="col-lg-6">
      <div class="form-content">
        <h3>Get in touch with us</h3>
        <span>We want to hear from you. Let us know how we can help.</span>

        
        <?php echo do_shortcode('[contact-form-7 id="81" title="For contact page]'); ?>
      </div>
    </div>
  </div>



</div>
</div>




<?php
get_footer();
?>