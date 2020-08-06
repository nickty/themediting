<?php
/**
 * Template Name: About Template
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

	<header>
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<h2>About Us</h2>
					<p>We are a tech startup and a think tank obsessed with accessibility and social equality.</p>

					<button class="talk-us">Talk To Us <svg class="bi bi-caret-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M6 12.796L11.481 8 6 3.204v9.592zm.659.753l5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
					</svg></button>
				</div>
				<div class="col-lg-7">

					<img src="<?php echo get_template_directory_uri(); ?>/imgs/Group 3961@2x.png" alt="Allyright about page header image">
				</div>
			</div>
		</div>
	</header>

	<section class="breadcrumbs">
	<div class="container">
		<?php 
		if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); 
		?>
	</div>
</section>

	<section id="teck-start-up">
		<div class="container">
			<div class="row cont">
				<div class="col-lg-5">
					<img src="<?php echo get_template_directory_uri(); ?>/imgs/Group 2477@2x.png" alt="Allyright About us support image">
				</div>
				<div class="col-lg-7">
					<div class="text">
						<p>As a tech startup, we’ve begun by creating the world’s 1st AI-powered web accessibility and frontend monitor with a full suite of productivity tools. Also, we created a set of free tools to help businesses to make their website accessible.
						</p>
						<a href="#">Learn More</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	

	<section id="as-a-think">
		<div class="container">
			<div class="row cont">
				<div class="col-lg-6">
					<div class="text">
						<p>As a think tank, we’ve started by tackling one of the oldest social issues - gender inequality. We conducted two parallel researches. In one we analyzed How many men and how many women hold a <b>C-suite technology</b> job in the <b>Fortune 500</b>. In the other, we studied the number of men and women teaching at the computer science schools of the <div>top 100 universities</div> in the United States.
						</p>
						<a href="#">Learn More</a>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="side-img">
						<img src="<?php echo get_template_directory_uri(); ?>/imgs/Group 1660@2x.png" alt="Allyright About us support image">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="get-together">
		<div class="lets-grow">
			<div class="container">
				<div class="inside-content">
					<div class="row cont">
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