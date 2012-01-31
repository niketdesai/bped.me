<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>

	<div class="divider"></div>
	<div class="wrapper force-four" style="background-color: #ffffff;">
	<div class="container">
		<!-- SECONDARY-CONTENT START -->
		<div id="secondary-content">
			<section class="buckets">
				<h2 class="blue">WHO WE ARE</h2>
				<div class="buckets-pic">
					<img src="wp-content/themes/twentyeleven/images/bucket_imgs/bckt001.jpg" alt="bucket-images">
				</div>
				<div class="buckets-text">
				<p>We're a group of passionate professionals and academics dedicated in growing the budding entrepreneurship community in the Middle East.</p>
				</div>
				<a href="/about/#founders"><div class="buckets-cta button b-blue cta">about us</div></a>
			</section>
			<section class="buckets">
				<h2 class="yellow">GET INVOLVED</h2>
				<div class="buckets-pic">
					<img src="wp-content/themes/twentyeleven/images/bucket_imgs/bckt002.jpg" alt="bucket-images">
				</div>
				<div class="buckets-text">
				<p>If you would like to submit research, speak at a BPEDME event, or network with our dedicated group please get involved with us!</p>
				</div>
					<div class="buckets-cta button b-yellow cta not-here">join us</div>
			</section>
			<section class="buckets">
				<h2 class="grey">GET IN TOUCH</h2>
				<div class="buckets-pic">
					<img src="wp-content/themes/twentyeleven/images/bucket_imgs/bckt003.jpg" alt="bucket-images">
				</div>
				<div class="buckets-text">
				<p>Want to learn more about BPEDME or get on the line with one of the founders? Drop us an email here and we'll be sure to respond as quickly as possible.</p>
				</div>
				<a href="mailto:mslh83@gmail.com?subject=Hi, tell me more about BPEDME">
					<div class="buckets-cta button b-grey cta">contact us</div>
				</a>
			</section>
		</div>
		<!-- SECONDARY-CONTENT END -->
	</div>
	</div>
	

<?php get_footer(); ?>