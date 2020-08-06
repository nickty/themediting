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

	<div class="card">
    <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
    <div class="card-body">
      <h2 class="card-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
     
      <p class="card-text"><small class="text-muted"><?php echo get_the_date( 'd F', get_the_ID() ); ?></small></p>
    </div>
  </div>

</article><!-- #post-## -->


