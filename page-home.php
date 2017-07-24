<?php theme_include('header'); ?>

	<div id="home-title">
		<div class="row">
			<div class="large-12 columns">
				<div class="adam-face"></div>		
				<h1>Hello! My name's <span class="highlight"><i class="fa fa-user" aria-hidden="true"></i> Adam Greenough</span>, <span class="highlight"><i class="fa fa-code" aria-hidden="true"></i> design-oriented developer</span> & <span class="highlight"><i class="fa fa-comments-o" aria-hidden="true"></i> digital consultant</span> from the <del>sunny</del> south coast of the <span class="highlight"><i class="fa fa-location-arrow" aria-hidden="true"></i> United Kingdom</span>.
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="large-8 main-content columns convert-emoji">
			<p>Since I first laid my hands on a computer I have been fascinated with the unlimited potential for creativity, communication and change that the world wide web offered. I built my <a href="#firstwebsite" class="underline" rel="modal:open">first website</a> with my father age 7 and I've not stopped learning since.  </p>
			<div id="firstwebsite" style="display: none;"><img src="https://adamgreenough.com/content/adamspokemonplace.png"></div>
			<p>Now, I run my own small-but-mighty agency, <a href="https://amazorize.com" target="_blank" class="amazorize">Amazorize</a>, and craft data-driven experiences at <a href="http://atelierstudios.com" target="_blank" class="atelier">Atelier</a>.</p>
			<a href="/about" class="body-button-outline"><i class="fa fa-user"></i> About Me</a>
			<div class="home-posts">
				<h1>Latest Posts</h1>
				<ul>
				<?php $p = 0; 
					while( latest_posts() ) : 
					if ($p < 3) : // The number after $p equates to how many posts you want to show. There are better ways to do this :)
 				?> 
			         <li class="home-single">
			         	<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>							
			         	<footer>
							Posted <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time>, filed under <?php echo article_category(); ?>.
						</footer>
					</li>
				<?php $p++; endif; endwhile; ?>
					
				</ul>
				<a href="/posts" class="body-button-outline"><i class="fa fa-pencil"></i> All Posts</a>
			</div>
		</div>
		
		<div class="large-4 columns">
			<div class="sidebar-wrapper">
				<blockquote class="speech-twitter">
					<a class="twitter-timeline" data-lang="en" data-height="300" data-dnt="true" data-theme="light" data-link-color="#091d36" data-chrome="transparent noheader nofooter noborders noscrollbar" href="https://twitter.com/adam_greenough">Tweets by adam_greenough</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
      			</blockquote>

	  			<a href="https://www.instagram.com/adam_greenough/" target="_blank"><div id="instagram-wrapper"></div></a>
	  				<script type="text/javascript">
						var count = 4;
						var clientID = "bf5c78448b2645fc9fa7b865a6573366";
						var tag = "12320619";
						
						var jsonpURL = "https://api.instagram.com/v1/users/" + tag + "/media/recent?access_token=12320619.1677ed0.f11516e4920148019725c8c6a62b2621&callback=listImages&count=" + count;
						var script = document.createElement('script');
						script.type = 'text/javascript';
						script.src = jsonpURL;
						var head = document.getElementsByTagName("head")[0];
						head.appendChild(script);
						
						function listImages(response) {
						  var i, item, len, images;
						  images = '';
						  if (response.data.length > 0) {
						    var entries = response.data;
						    var wrapper = document.getElementById('instagram-wrapper');
						    for (i = 0, len = entries.length; i < len; i++) {
						      item = entries[i];
						      images += '<img src="' + item.images.low_resolution.url + '">';
						    }
						    wrapper.innerHTML = images;
						  }
						}
					</script>

					<a href="https://twitter.com/adam_greenough" class="twitter-follow-button" data-show-count="true">Follow @adam_greenough</a>
					<script>
						!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
					</script>

					<div class="divider-25"></div>
				</div>
			</div>
		</div>
	
		<div class="availability convert-emoji">
			<div class="row">
				<div class="large-12 columns">
					<div class="availability-switch"><div class="dot"></div></div>LOOKING FOR NEW OPPORTUNITIES (Portsmouth/Southampton/Remote)
				</div>
			</div>
		</div>

<?php theme_include('footer'); ?>