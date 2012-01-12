<?php get_header(); ?>

<div id="banner">

	<div id="homeslider">
        <ul id="slider1">
            <?php $recent = new WP_Query("cat=" .of_get_option('select_categories_slider')); while($recent->have_posts()) : $recent->the_post();?>
            <?php $meta_box = get_post_custom($post->ID); $video = $meta_box['custom_meta_video'][0]; ?>
            <li>
            	<div class="slideinfo">
            	    <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
            	    <?php the_excerpt(); ?>
            	</div>
            	<span class="slideinfo_bg"></span>
                <?php if ( $video ) : ?>
                    <div class="feature_video"><?php echo $video; ?></div>
                <?php else: ?>
                    <a class="feature_img" href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail( 'home-feature' ); ?></a>
                <?php endif; ?>
            </li>
            <?php endwhile; ?>
        </ul>
    </div>
        
    <div id="bannerwidget">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Homepage Widgets') ) : ?>
			<div class="widget">
				<h3><?php _e("Widget Area", 'organicthemes'); ?></h4>
				<p><?php _e("This section is widgetized. To add widgets here, go to the", 'organicthemes'); ?> <a href="<?php echo admin_url(); ?>widgets.php"><?php _e("Widgets", 'organicthemes'); ?></a> <?php _e("panel in your WordPress admin, and add the widgets you would like to the", 'organicthemes'); ?> <strong><?php _e("Homepage Widget", 'organicthemes'); ?></strong>.</p>
				<p><small><?php _e("*This message will be overwritten after widgets have been added", 'organicthemes'); ?></small></p>
			</div>
        <?php endif; ?>
    </div>
    
</div>   

<div id="contenthome">

	<?php if(of_get_option('display_home_mid') == 'true') { ?>
    <div id="homepagemid"> 
    
    	<div id="homecontent_left">
			<?php $recent = new WP_Query('page_id='.of_get_option('select_pages_mid_1')); while($recent->have_posts()) : $recent->the_post();?>
            <h2><?php the_title(); ?></h2>
            <div class="homebox"> 
                <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail( 'home-thumbnail' ); ?></a>
                <?php the_excerpt(); ?>
                <div class="learnmore"><a href="<?php the_permalink() ?>" rel="bookmark"><?php _e("Learn More", 'organicthemes'); ?></a></div>
            </div>
            <?php endwhile; ?>
		</div>

        <div id="homecontent_mid">
			<?php $recent = new WP_Query('page_id='.of_get_option('select_pages_mid_2')); while($recent->have_posts()) : $recent->the_post();?>
            <h2><?php the_title(); ?></h2>
            <div class="homebox"> 
                <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail( 'home-thumbnail' ); ?></a>
                <?php the_excerpt(); ?>
                <div class="learnmore"><a href="<?php the_permalink() ?>" rel="bookmark"><?php _e("Learn More", 'organicthemes'); ?></a></div>
            </div>
            <?php endwhile; ?>
		</div>

        <div id="homecontent_right">
			<?php $recent = new WP_Query('page_id='.of_get_option('select_pages_mid_3')); while($recent->have_posts()) : $recent->the_post();?>
            <h2><?php the_title(); ?></h2>
            <div class="homebox"> 
                <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail( 'home-thumbnail' ); ?></a>
                <?php the_excerpt(); ?>
                <div class="learnmore"><a href="<?php the_permalink() ?>" rel="bookmark"><?php _e("Learn More", 'organicthemes'); ?></a></div>
            </div>
            <?php endwhile; ?>
		</div>
        
    </div>
    <?php } else { ?>
    <?php } ?>

	<?php if(of_get_option('display_home_bot') == 'true') { ?>
    <div id="homepagebot">
    
        <div id="homecontent_page">
        	<div class="postarea">
				<?php $recent = new WP_Query('page_id='.of_get_option('select_pages_bot')); while($recent->have_posts()) : $recent->the_post();?>
                    <h1><?php the_title(); ?></h1>		
                    <?php the_content(__("Read More", 'organicthemes')); ?>
                <?php endwhile; ?>
            </div>
        </div>
    
        <div id="feature_list">
            
            <h4 class="featuredtitle"><?php echo cat_id_to_name(of_get_option('select_categories_tabber')); ?></h4>
            
            <ul id="tabs">
			<?php $recent = new WP_Query("cat=" .of_get_option('select_categories_tabber')); while($recent->have_posts()) : $recent->the_post();?>
                <li>
                    <h3><a href="javascript:;"><?php the_title(); ?></a></h3>
                </li>
            <?php endwhile; ?>
            </ul>
            
            <ul id="output">
            <?php $recent = new WP_Query("cat=" .of_get_option('select_categories_tabber')); while($recent->have_posts()) : $recent->the_post();?>
            <?php $meta_box = get_post_custom($post->ID); $video = $meta_box['custom_meta_video'][0]; ?>
            
                <li>
                    <?php if ( $video ) : ?>
                        <div class="tab_video"><?php echo $video; ?></div>
                    <?php else: ?>
                        <a class="feature_img" href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail( 'home-tab' ); ?></a>
                    <?php endif; ?>
                    <div class="feature_info">
                        <h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
                        <?php the_excerpt(); ?>
                    </div>
                    <div class="learnmore"><a href="<?php the_permalink() ?>" rel="bookmark"><?php _e("Learn More", 'organicthemes'); ?></a></div>
                </li>
                
            <?php endwhile; ?>
            </ul>
            
        </div>

    </div>
    <?php } else { ?>
    <?php } ?>

</div>

<!-- The main column ends  -->

<?php get_footer(); ?>