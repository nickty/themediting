<?php
/**
 * Template Name: Right Sidebar Layout
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<header class="blog-header">
	<section class="container">
		<div class="row cont">
			<div class="col-lg-6"><h2>Insights & News
			on Accessibility</h2></div>
			<div class="col-lg-6">
				<img src="<?php echo get_template_directory_uri(); ?>/imgs/Group 2319@2x.png" alt="Allyright About us support image">
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
<div class="wrapper" id="page-wrapper" style="background: #F9F9F9; ">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div id="featured-articles">
			<h3>Featured Articles</h3>
			<div class="row">

				<?php

				$query = new WP_Query( array( 'category_name' => 'featured' ) );

				while ( $query->have_posts() ) {
					$query->the_post();
					?> <div class="col-lg-4" style="display: block"> <?php 
					get_template_part( 'loop-templates/content', 'custom' );

					?> </div>
					<?php
				}

				?>


			</div>
		</div>

		<div class="row">

			<div class="<?php echo is_active_sidebar( 'right-sidebar' ) ? 'col-md-8' : 'col-md-12'; ?> content-area" id="primary">

				<main class="site-main my-posts" id="main" role="main">

					<?php

					$query = new WP_Query( array( 'category__not_in' => array(3) ) );

					while ( $query->have_posts() ) {
						$query->the_post();

						get_template_part( 'loop-templates/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						// if ( comments_open() || get_comments_number() ) {
						// 	comments_template();
						// }
					}

					?>

					<div class="loadmore text-center mt-60">Load More Articles... </div>

					<script>
						var ajaxurl = "<?php echo admin_url( 'admin-ajax.php'); ?>";
						var page = 2; 

						jQuery(function($) {
							$('body').on('click', '.loadmore', function(){
								var data = {
									'action':'load_posts_by_ajax',
									'page':page, 
									'security':'<?php echo wp_create_nonce("load_more_posts"); ?>'
								}; 
								$.post(ajaxurl, data, function(response){
									$('.my-posts').append(response); 
									page++;
								}); 
							}); 
						});  
					</script>

				</main><!-- #main -->

			</div><!-- #primary -->

			<?php get_template_part( 'sidebar-templates/sidebar', 'right' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();
