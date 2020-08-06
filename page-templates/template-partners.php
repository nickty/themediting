<?php
/**
 * Template Name: Partners Custom Template
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="partner-banner">
  <div class="container">
    <div class="row all-content">
      <div class="col-lg-6">
        <div class="banner-content">
          <div class="bannet-text">
            Receive Recurring,
            Passive Income
          </div>
          <div class="call-text">
            <p>Prefer us once and get paid for the lifetime of the client.</p>
            <p>Our program is very simple. You will make 20% commission on any and every sale you refer to us.</p>
          </div>
          <button class="talk-us">Talk To Us <svg class="bi bi-caret-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M6 12.796L11.481 8 6 3.204v9.592zm.659.753l5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
          </svg></button>
        </div>
      </div>
      <div class="col-lg-6">
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/Group 3354@2x.png" alt="ally right banner">
      </div>
    </div>
  </div>
</div>
<section class="breadcrumbs">
  <div class="container">
    <?php 
    if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); 
    ?>
  </div>
</section>
<div class="side-by-side">
  <div class="container">
    <div class="row two-col">
      <div class="col-lg-6">
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/Group 3580@2x.png" alt="Web Accessibility">
        <h3>Join Us as an Affiliate</h3>
        <p>Ideal for bloggers and social media influencers</p>
      </div>
      <div class="col-lg-6">
        <div class="tree-content">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/Group 3579@2x.png" alt="Web Accessibility">
          <h3>Join Us as Partner</h3>
          <p>Ideal for web designer and developers, consultants, accountants, lawyers, entrepreneurs, etc</p>
        </div>
      </div>
    </div>


  </div>
</div>

<div class="earning-section">
  <div class="container">
    <div class="row two-col">
      <div class="col-lg-6">
        <h2>Earning</h2>
        <p>We are providing your the marketing materials you needed- flyers, ebooks, social media banners, and more</p>
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/Group 3591@2x.png" alt="Web Accessibility">
      </div>
      <div class="col-lg-6">
        <div class="tree-content">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/Group 3357@2x.png" alt="Web Accessibility">
          
        </div>
      </div>
    </div>


  </div>
</div>


<div class="partner_detail-section">
  <div class="container conts">
    <h3>Partner Detail Form</h3>
    <span>Fill out this form to get started</span>
    <div class="partner-content">
    
    <div class="partner-form">
      <form>
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="E-mail">
        <input type="number" name="phone" placeholder="phone">
        <p>Do you want to join us</p>
        <div class="check-box">
          
          <input type="checkbox" class="hidden" name="cb" id="cb"><label for="cb">Affiliate</label>
          
          <input type="checkbox" class="hidden" name="pr" id="pr"><label for="pr">Partner</label>
          
          <input type="checkbox" class="hidden" name="both" id="both"><label for="both">Both</label>
        </div>
        <p>Are you Ally Right client already</p>
        <div class="check-box">
          <input type="checkbox" class="hidden" name="client-already-yes" id="client-already"><label for="client-already">Yes</label>
          <input type="checkbox" class="hidden" name="client-already-no" id="client-already-no"><label for="client-already-no">No</label>
        </div>

        <div class="bottom-input">
          <input type="text" name="follower-number" placeholder="Number of followers/People on mailing list">
          <input type="text" name="active-client" placeholder="Number of active clients">
        </div>
        <div class="bottom-buttons">
          <input type="button" name="cancel" value="Cancel">
          <input type="submit" id="submit" value="Send">
        </div>
      </form>
      <img src="<?php echo get_template_directory_uri(); ?>/imgs/Plant.png" alt="Web Accessibility">
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


<?php
get_footer();
?>