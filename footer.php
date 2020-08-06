<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="container">

		<div class="row">
			<div class="col-lg-6">
				<div class="footer-logo">
					<img src="<?php echo get_template_directory_uri(); ?>/imgs/Header - AllyRight Logo@2x.png" alt="AllyRight Logo">
				</div>
			</div>		
			<div class="col-lg-6">
				<ul class="social">
					<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/imgs/facebook.png" alt="facebook"></a></li>
					<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/imgs/twitter.png" alt="twitter"></a></li>
					<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/imgs/linkedin.png" alt="linkedin"></a></li>
				</ul>
			</div>

		</div>
		<!-- footer bottom -->
		<div class="row footer-bottom">
			<div class="col-lg-4">
				<span>Legal Information   |.  ©2020 Copyrights - Allyright</span>
			</div>		
			<div class="col-lg-8">
				<!-- <ul class="footer-menu">
					<li><a href="/Allyright">Home</a></li>
					<li><a href="">Features</a></li>
					<li><a href="">Pricing</a></li>
					<li><a href="">Blog</a></li>
					<li><a href="">Research</a></li>
					<li><a href="">Partners</a></li>
					<li><a href="">About</a></li>
					<li><a href="/allyright/pressroom">Pressroom</a></li>
					<li><a href="">Careers</a></li>
					<li><a href="/allyright/contact-us">Contact Us</a></li>
				</ul> -->

				<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'footer',
							'container_class' => 'collapsenot',
							'container_id'    => 'navbarNavDropdown2',
							'menu_class'      => 'footer-menu ml-auto',
							'fallback_cb'     => '',
							'menu_id'         => 'main-menu2',
							'depth'           => 2,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					);
					?>
			</div>		

			

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>
</html>

<script type="text/javascript">
	// Get all Accordion and Panel
let accHeading = document.querySelectorAll(".accordion");
let accPanel = document.querySelectorAll(".panel");
let imageBox = document.querySelectorAll(".imgpan"); 

 //imageBox.style.display = 'none';


for (let i = 0; i < accHeading.length; i++) {
    // Execute whenever an accordion is clicked 
    accHeading[i].onclick = function() {
        if (this.nextElementSibling.style.maxHeight) {
           hidePanels();     // Hide All open Panels 
           
        } else {
           showPanel(this);  // Show the panel
           //alert(this.id);
        } 
    };
}

// Function to Show a Panel
function showPanel(elem) {
  hidePanels();
  elem.classList.add("active");
  elem.nextElementSibling.style.maxHeight = elem.nextElementSibling.scrollHeight + "px";

  let imgdisp = elem.id;

  if (imgdisp == 'accord-img-1') {
  	document.getElementById("imgone").style.display = 'block';

  	document.getElementById("imgtwo").style.display = 'none';
  	document.getElementById("imgthree").style.display = 'none';
  	document.getElementById("imgfour").style.display = 'none';
  	document.getElementById("imgfive").style.display = 'none';
  } else if (imgdisp == 'accord-img-2') {
  	document.getElementById("imgtwo").style.display = 'block';

  	document.getElementById("imgone").style.display = 'none';
  	document.getElementById("imgthree").style.display = 'none';
  	document.getElementById("imgfour").style.display = 'none';
  	document.getElementById("imgfive").style.display = 'none';
  }else if (imgdisp == 'accord-img-3') {
  	document.getElementById("imgthree").style.display = 'block';

  	document.getElementById("imgtwo").style.display = 'none';
  	document.getElementById("imgone").style.display = 'none';
  	document.getElementById("imgfour").style.display = 'none';
  	document.getElementById("imgfive").style.display = 'none';
  }else if (imgdisp == 'accord-img-4') {
  	document.getElementById("imgfour").style.display = 'block';

  	document.getElementById("imgtwo").style.display = 'none';
  	document.getElementById("imgthree").style.display = 'none';
  	document.getElementById("imgone").style.display = 'none';
  	document.getElementById("imgfive").style.display = 'none';
  }else if (imgdisp == 'accord-img-5') {
  	document.getElementById("imgfive").style.display = 'block';

  	document.getElementById("imgtwo").style.display = 'none';
  	document.getElementById("imgthree").style.display = 'none';
  	document.getElementById("imgfour").style.display = 'none';
  	document.getElementById("imgone").style.display = 'none';
  }
 
 }

// Function to Hide all shown Panels
function hidePanels() {
  for (let i = 0; i < accPanel.length; i++) {
      accPanel[i].style.maxHeight = null;
      accHeading[i].classList.remove("active");
      
  }
}


// subscription form

var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("prevBtn").style.display = "none";
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
	 
</script>