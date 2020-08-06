<?php
/**
 * The template for displaying all single posts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<header class="single-blog-header">
	<section class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="auth-text">

					<h2>Nick Richardson described the translation</h2>
					<div class="author-info row">
						<div class="col-lg-6"><?php 
						echo get_avatar( get_the_author_email(), '60' ); 
						?>
						<a href="#"><?php echo  get_the_author_meta('first_name'); ?></a>
						<small class="text-muted"><?php echo get_the_date( 'd F', get_the_ID() ); ?></small>

					</div>
					<div class="col-lg-6">
						<ul class="social">
							<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/imgs/facebook.png" alt="facebook"></a></li>
							<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/imgs/twitter.png" alt="twitter"></a></li>
							<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/imgs/linkedin.png" alt="linkedin"></a></li>
						</ul>
					</div>
				</div>

			</div>

		</div>
		<div class="col-lg-6">
			<div class="single-image">
				<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
			</div>
		</div>
	</div>
</section>
</header>

 <section class="breadcrumbs">
  <div class="container">
    <?php 
    if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); 
    ?>
  </div>
</section>

<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'loop-templates/content', 'single' );
					//understrap_post_nav();

					// If comments are open or we have at least one comment, load up the comment template.
					// if ( comments_open() || get_comments_number() ) {
					// 	comments_template();
					// }
				}
				?>

			</main><!-- #main -->

			<!-- Do the right sidebar check -->
			<?php //get_template_part( 'global-templates/right-sidebar-check' ); <!-- ?> 

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<div class="sign-section">
		<div class="container conts">
						
			<div class="partner-content">
				<h3>Sign up for Latest Update</h3>
				<div class="partner-form">
					<form>
						<input type="text" name="name" placeholder="Name">
						<input type="email" name="email" placeholder="E-mail">
									
						
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

<section class="comment-section">
	<div class="container">
		<?php 
		if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
		?>

		
	</div>

</section>


<?php
get_footer();
