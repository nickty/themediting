<?php
/**
 * Partial template for content in page.php
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="row">
		<div class="col-lg-5"><?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?></div>
		<div class="col-lg-7">
			<header class="entry-header">

				<h2 class="card-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo short_title('...', 10); ?></a></h2>

				<small class="text-muted"><?php echo get_the_date( 'd F', get_the_ID() ); ?></small>
			</header><!-- .entry-header --></div>
			
		</div>


</article><!-- #post-## -->
