<?php
/*
Template Name: Full Width
*/
?>

<?php get_header(); ?>

<div id="content">

	<div id="featurebanner"><?php the_post_thumbnail( 'page-feature' ); ?></div>

	<div id="contentwide">
    
        <div class="postarea">
    
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <h1><?php the_title(); ?></h1>
            
            <?php the_content(__("Read more", 'organicthemes'));?><div style="clear:both;"></div><?php edit_post_link(__("(Edit)", 'organicthemes'), '', ''); ?>
            
            <?php endwhile; else: ?>
            
            <p><?php _e("Sorry, no posts matched your criteria.", 'organicthemes'); ?></p><?php endif; ?>
            
        </div>
		
	</div>
			
</div>

<!-- The main column ends  -->

<?php get_footer(); ?>