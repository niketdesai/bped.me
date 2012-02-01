<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<div class="divider"></div>
<div class="wrapper" style="background-color: #f2f2f2;">
<div class="container">
	<!-- FOOTER START -->
	<div id="share">
		<div id="logomast" class="float-left">
			<img src="wp-content/themes/twentyeleven/images/bpe-logo.png" alt="BPEDME LOGO" />
		</div>
		<div id="share-text" class="float-left">
			<h3>Share BPEDME with your friends, colleagues &amp; network professionals.</h3>
		</div>
		<div id="share-box" class="float-left">
			<span  class='st_email_vcount' displayText='Email'></span>
			<span  class='st_twitter_vcount' displayText='Tweet'></span>
			<span  class='st_facebook_vcount' displayText='Facebook'></span>
			<span  class='st_linkedin_vcount' displayText='LinkedIn'></span>
			<span  class='st_plusone_vcount' ></span>
		</div>
	</div>
	<div id="footer-divider"></div>
	<div id="site-map">
		<nav class="footer">
			<ul>
				<li><a href="/about/#mission">Mission</a></li>
				<li><a href="/about/#founders">About Us</a></li>
				<li><a href="/research">Research</a></li>
				<li class="not-here">Blog</li>
				<li class="not-here">Support Us</li>
				<li id="footer-text">
					(c)2012 Berkeley Program on Entrepreneurship &amp; Democracy in the Middle East
				</li>
			</ul>
		</nav>
	</div>
	<!-- FOOTER END -->
</div>
</div>
</body>
	<!-- JAVASCRIPT INCLUDE -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="wp-content/themes/twentyeleven/js/jquery.expander.min.js"></script>
	<script>
		$(document).ready(function() {
		
		  // Function appends + prepends non-breaking spaces to
		  // all .button element text so it looks pretty.
			$('.button').each(function(index) {
				var currText = $(this).text();
				$(this).html("&nbsp; &nbsp; " + currText +  " &nbsp; &nbsp;");
			}); 
		  // This function shortens the text on the about page (read more/less).
			$('p.person-bio').expander({
			    slicePoint:       300,  // default is 100
			    expandPrefix:     ' ', // default is '... '
			    expandText:       'read more', // default is 'read more'
			    collapseTimer:    0, // re-collapses after 5 seconds; default is 0, so no re-collapsing
			    userCollapseText: 'read less'  // default is 'read less'
			});
			// This function allows smooth scrolling to anchor tags with class "scroll"
			$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top}, 500);
			});  
			
		});
	</script>
	
	<!-- SHARE BUTTONS JS -->	
	<script type="text/javascript">var switchTo5x=true;</script>
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript">
		stLight.options({
			publisher:'2aba839c-79a2-48fa-a9a5-31eb930dcc33',
			serviceBarColor:'#ffc80d',
			shareButtonColor:'#044689',
			footerColor: 'white',
			mainWidgetColor: '#ffc80d'
		});
	</script>
	
	<!-- GOOGLE ANALYTICS -->
	<script type="text/javascript">
	
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-9468150-3']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>
</html>