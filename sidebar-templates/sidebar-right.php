<?php
/**
 * The right sidebar containing the main widget area
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! is_active_sidebar( 'right-sidebar' ) ) {
	return;
}

?>

<?php 
// when both sidebars turned on reduce col size to 3 from 4.
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<?php if ( 'both' === $sidebar_pos ) : ?>
	<div class="col-md-4 widget-area" id="right-sidebar" role="complementary">
		<?php else : ?>
			<div class="col-md-4 widget-area" id="right-sidebar" role="complementary">
			<?php endif; ?>
			<?php dynamic_sidebar( 'right-sidebar' ); ?>

			<div class="cus-sidebar">
				<div class="first">
					<h4>Changing Lives</h4>
					<div class="text-img">
						<p>5% of every order is donated to amazing nonprofits that are changing the lives of people with disabilities, including these:</p>
						<img src="<?php echo get_template_directory_uri(); ?>/imgs/Group 3994@2x.png" alt="Allyright About us support image">
					</div>
					<img src="<?php echo get_template_directory_uri(); ?>/imgs/Image 17@2x.png" alt="Allyright About us support image">
				</div>
				<h3 class="heads">Top Stories</h3>
				<div class="first">
					
					<div class="top-stories">
						<?php
						$categories = get_categories( array(
							'orderby' => 'name',
							'order'   => 'ASC'
						) );

						foreach( $categories as $category ) {
							$category_link = sprintf( 
								'<a href="%1$s" alt="%2$s">%3$s</a>',
								esc_url( get_category_link( $category->term_id ) ),
								esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
								esc_html( $category->name )
							);

							echo '<p>' . sprintf($category_link ) . '</p>';
						// echo '<p>' . sprintf($category->description ) . '</p>';
							echo '<span>' . sprintf($category->count ) . '</span>';
						} 
						?>
					</div>
				</div>
			</div>

			<div class="subscribe-box">
				<h3>Subscribe to Our Blog</h3>
				<img src="<?php echo get_template_directory_uri(); ?>/imgs/Group 2232.png" alt="Allyright About us support image">
				<p>
					Stay up to date with the latest marketing, sales, and service tips and news.
				</p>
				<form>
					<input type="email" name="email" placeholder="E-mail Address" required>
					<input type="submit" name="submit" value="Subscribe Now">
				</form>
				
			</div>

			<div class="subscribe-box">
				<h3>Subscribe to Our Blog</h3>
				<label><input type="checkbox" name="marketing" value="Marketing"> Marketing</label>
				<label>
					<input id="check" type="checkbox" name="sales" value="Sales"> Sales</label>
					<label>
						<input id="serv" type="checkbox" name="service" value="Service"> Service</label>
						<label>
							<input id="web" type="checkbox" name="website" value="Website"> Website</label>
							<p>
								We’re committed to your privacy. AllyRight uses the information you provide to us to contact you about our relevant content, products, and services. You may unsubscribe from these communications at any time. For more information, check out our privacy policy.
							</p>
							<input type="button" name="done" value="Done">
							<input type="button" name="back" value="Back">
							
						</div>

						<div class="subscribe-box">
							<h3>Thank You!</h3>

							<p>
								You have been subscribed.
							</p>

							
						</div>

						<?php echo do_shortcode( '[mc4wp_form id="76"]' ); ?>

						<form id="regForm" action="">
  
  <!-- One "tab" for each step in the form: -->
    <div class="tab">
    	<h3>Subscribe to Our Blog</h3>
				<img src="http://localhost/allyright/wp-content/uploads/2020/07/Group-2232.png" alt="Allyright About us support image">
				<p>
					Stay up to date with the latest marketing, sales, and service tips and news.
				</p>
    <p><input type="email" name="email" placeholder="E-mail Address" required></p>
    
  </div>
  <div class="tab">
  	<h3>Subscribe to Our Blog</h3>
   		<label><input type="checkbox" name="marketing" value="Marketing"> Marketing</label>
				<label>
					<input id="check" type="checkbox" name="sales" value="Sales"> Sales</label>
					<label>
						<input id="serv" type="checkbox" name="service" value="Service"> Service</label>
						<label>
							<input id="web" type="checkbox" name="website" value="Website"> Website</label>
							<p>
								We’re committed to your privacy. AllyRight uses the information you provide to us to contact you about our relevant content, products, and services. You may unsubscribe from these communications at any time. For more information, check out our privacy policy.
							</p>
  </div>
  <div class="tab">
  	<h3>Thank You!</h3>

							<p>
								You have been subscribed.
							</p>
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Back</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Subscribe</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
   
    <span class="step"></span>
    <span class="step"></span>
    
  </div>
</form>

					</div><!-- #right-sidebar -->
				</div>


				
