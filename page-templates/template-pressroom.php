<?php
/**
 * Template Name: Pressroom Template
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="main">
	<section class="container">
		<div class="row fflex">
			<div class="col-lg-6">
				<h2>Press Room</h2>
				<p>We are delighted to work with members to the <b>press, bloggers, and vloggers</b>. To make it easier for you to quickly gather the info you need, we organized the most important information on this page.</p>
				<p>Need More?</p>
				<button class="talk-us">Talk To Us <svg class="bi bi-caret-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M6 12.796L11.481 8 6 3.204v9.592zm.659.753l5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
				</svg></button>
			</div>
			<div class="col-lg-6">
				
				<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/Group 3122@2x.png" alt="Website Main banner Image">
			</div>
		</div>
	</section>

	<section id="downloads">
		<div class="container">
			<h2>Downloadables</h2>
			<button>Digital Assets</button>
			<button>Press Kit</button>
			<button>Research Summery</button>
		</div>
	</section>

	<section id="announcements">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="announc">
						<img src="<?php echo get_template_directory_uri(); ?>/imgs/megaphone.png" alt="Announcements"><h2>Announcements</h2>
						<p>Save precious time debugging your website. Ally Right also monitors your website and informs you of errors in the HTML, CSS, and JavaScript of the site. Your team will spend less time looking for errors and more time actually coding.
						This is out of order. See previous comment on this section.</p>
						<a href="#" class="btn">Read More Announcements</a>
					</div>
				</div>
				<div class="col-lg-6">
					<section id="blog-sects">
		<div class="container">
			<div class="featured-articles">
				<img src="<?php echo get_template_directory_uri(); ?>/imgs/blog.png" alt="Announcements"><h2>Blog</h2>
				<div class="row">

					<?php

					$query = new WP_Query( array( 'category_name' => 'featured','post_status' => 'publish',
                    'posts_per_page'=>2 ) );

					while ( $query->have_posts() ) {
						$query->the_post();
						?> <div class="col-lg-6" style="display: block"> <?php 
						get_template_part( 'loop-templates/content', 'custom' );

						?> </div>
						<?php
					}

					?>


				</div>
				<a href="#" class="btn" style="display: block; margin-top: 20px;">Read More Articles</a>
			</div>
		</div>
	</section>
				</div>
			</div>
			
		</div>
	</section>

	

	<section class="get-together">
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
	</section>
</div>


<?php
get_footer();
?>