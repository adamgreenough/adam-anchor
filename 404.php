<?php theme_include('header'); ?>
<link rel="stylesheet" href="<?php echo theme_url('/assets/404/style.css'); ?>">


<!--                 
			_.-;;-._
     '-..-'|   ||   |
     '-..-'|_.-;;-._|
     '-..-'|   ||   |
     '-..-'|_.-''-._|
-->


<div id="parent">
<div id="child">
	<div id="title">
		Error 404
	</div>
	<div id="error">
		A critical error from <?php echo $_SERVER['REMOTE_ADDR']; ?> has occurred whilst trying to access 
		<script>
			document.write(location.href);
		</script> 
		on <? echo date("M-j-Y, G:i:s"); ?> using <?php echo $_SERVER['HTTP_USER_AGENT']; ?>.

		<br /><br />
		
		<!-- Menu Links -->
		*&nbsp;&nbsp;Click <a href="http://adamgreenough.com/">here</a> to reset to the home page.<br />
		*&nbsp;&nbsp;Click <a href="mailto:adam@amazorize.com">here</a> if you think it's my fault and want to email me.<br />
		
		<br /><br />
		
		<center>Press any link to continue <blink>_</blink></center>
		
		</div>
	</div>
</div>
</div>


<?php theme_include('footer'); ?>
