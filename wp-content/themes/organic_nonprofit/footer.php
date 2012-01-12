<!-- begin footer -->

<div class="clear"></div>

</div>

<div id="footertop">

    <div id="footerwidgets">
        
            <div class="footerwidget01">
            	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget 1') ) : ?>
                <?php endif; ?>
            </div>
            
            <div class="footerwidget02">
            	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget 2') ) : ?>
                <?php endif; ?>
            </div>
            
            <div class="footerwidget03">
            	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget 3') ) : ?>
                <?php endif; ?>
            </div>
            
            <div class="footerwidget04">
            	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget 4') ) : ?>
                <?php endif; ?>
            </div>
            <div class="clear"></div>
            
    </div>

</div>

<div id="footerbg">

	<div id="footer">
    
    	<div class="footerleft">
	
            <div class="footertop">
                <p><?php _e("Copyright", 'organicthemes'); ?> &copy; <?php echo date(__("Y", 'organicthemes')); ?> &middot; <?php _e("All Rights Reserved", 'organicthemes'); ?> &middot; <?php bloginfo('name'); ?></p>
            </div>
            
            <div class="footerbottom">
                <p><a href="http://www.organicthemes.com/themes/" target="_blank"><?php _e("NonProfit Theme v3", 'organicthemes'); ?></a> <?php _e("by", 'organicthemes'); ?> <a href="http://www.organicthemes.com" target="_blank"><?php _e("Organic Themes", 'organicthemes'); ?></a> &middot; <a href="http://kahunahost.com" target="_blank" title="WordPress Hosting"><?php _e("WordPress Hosting", 'organicthemes'); ?></a> &middot; <a href="<?php bloginfo('rss2_url'); ?>"><?php _e("RSS Feed", 'organicthemes'); ?></a> &middot; <?php wp_loginout(); ?></p>
            </div>
        
        </div>
        
        <div class="footerright">
    		<a href="http://www.organicthemes.com" target="_blank" title="Organic Themes"><img src="<?php bloginfo('template_url'); ?>/images/footer_logo.png" alt="Organic Themes" /></a>
    	</div>
	
	</div>
	
</div>

<?php do_action('wp_footer'); ?>

</body>
</html>