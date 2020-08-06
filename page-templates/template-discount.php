<?php
/**
 * Template Name: Discount Custom Template
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="discount-banner" role="banner">
  <div class="container">
    <div class="row banner-content">
      <div class="col-lg-6">

        <div class="bannet-text">
          Discount and
          Coupons
        </div>
        <div class="call-text">
          <p>Our passion for accessibility is only equaled by our passion for a strong, collaboritve community. We are delighted to help other dedicated organizations and citizens who make our communitites stronger and safer. On this page you will find any and all discounts we have available.</p>
        </div>
        <button class="talk-us">Talk To Us <svg class="bi bi-caret-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M6 12.796L11.481 8 6 3.204v9.592zm.659.753l5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
        </svg></button>
        
      </div>
      <div class="col-lg-6">
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/Group 3589@2x.png" alt="ally right banner">
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

<div class="discount-content">
  <div class="container">
    <div class="row two-col">
      <div class="col-lg-6">
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/Group 3590@2x.png" alt="Web Accessibility">

      </div>
      <div class="col-lg-6 content-back">
        <div class="tree-content">
          <h2>Non-Profits Dedicated To Possibilities</h2>
          <p>Nonprofits- and the people behind them – dedicated to improving the lives of people with disabilities have a very special place in our hearts</p>
          <p>
          To quality, you will need to have attained 5O1(C)3 status from the IRS and have in your mission statement and annual report that your mission is to help people with disabilities</p>
          
        </div>
        <div class="tree-image">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/Plant@2x.png" alt="Web Accessibility">
        </div>
      </div>
    </div>


  </div>
</div>

<div class="service-member">
  <div class="container">
    <div class="content-inside">
      <div class="row inside">
        <div class="col-lg-6">
         <h2>Service members, Parents, and Spouses</h2>
         <br><br>
         <p>
         We are delighted to offer a discount to the service men and women, their parent and spouses. This includes members of the armed forces, law enforcement, fire fighters and emergency medical technician (EMT) personnel.</p>

         <p>We count on you every day. if you run a business and need our services, you can count on us, too.</p> 

         <p>We salute you and thank you for dedicating your lives to keep ours safe.
         </p>

       </div>
       <div class="col-lg-6">
         <img src="<?php echo get_template_directory_uri(); ?>/imgs/Group 2711@2x.png" alt="Web Accessibility">
       </div>
     </div>

   </div>
 </div>
</div>




<div class="section-heart">
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
    <img src="<?php echo get_template_directory_uri(); ?>/imgs/Group 2709@2x.png" alt="let grow together">
    <h3>Donate to a Non-Profit dedicated to Possibilities</h3>
    <div class="other-content">
      <h5>Help us to improve the world!
      </h5>
      <p>Make a donation to a nationally-recognized nonprofit dedicated to helping people with disabilities and we will match the donation for up to 10% of your invoice amount or give your half of what you donated in discount (for up to 10%) of the invoice amount)</p>
      <p>Please tell us that you want to join this program at the beginning of our relationship, so we can prepare accordingly</p>

    </div> 
     <button class="talk-us">Talk To Us <svg class="bi bi-caret-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M6 12.796L11.481 8 6 3.204v9.592zm.659.753l5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
        </svg></button>
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