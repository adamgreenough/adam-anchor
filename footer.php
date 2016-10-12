		<footer id="bottom">
			<div class="row">
				<div class="large-12 columns">
					<small><a href="/imprint">Imprint</a> &nbsp; <a href="/terms">Terms</a>
					<br />&copy; <?php echo date('Y'); ?> Adam Greenough, unless otherwise noted. All rights reserved.</small>				
				</div>
			</div>
		</footer>
       
		<script id="dsq-count-scr" src="//adamgreenough.disqus.com/count.js" async></script>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
		<script>jQuery.noConflict();</script>
		<script src="<?php echo theme_url('/js/jquery-plugins.js'); ?>"></script>	
		
		<script src="https://cdn.jsdelivr.net/emojione/2.2.6/lib/js/emojione.min.js"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/emojione/2.2.6/assets/css/emojione.min.css"/>
		
		<script type="text/javascript">
		     jQuery(document).ready(function() {
		        jQuery(".convert-emoji").each(function() {
		            var original = jQuery(this).html();
		            // use .shortnameToImage if only converting shortnames (for slightly better performance)
		            var converted = emojione.shortnameToImage(original);
		            jQuery(this).html(converted);
		        });
		    });
		</script>
		
		<script type="text/javascript">
			//<![CDATA[
	        jQuery(window).on('load', function() { // makes sure the whole site is loaded 
	            jQuery('#status').fadeOut(); // will first fade out the loading animation 
	            jQuery('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
	            jQuery('body').delay(350).css({'overflow':'visible'});
	        })
		    //]]>
		</script>
    </body>
</html>
