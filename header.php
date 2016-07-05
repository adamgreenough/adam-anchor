<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

		<meta name="description" content="<?php echo site_description(); ?>">

		<link rel="stylesheet" href="<?php echo theme_url('/css/foundation.css'); ?>">
		<link rel="stylesheet" href="<?php echo theme_url('/css/style.css'); ?>">
		<link rel="stylesheet" href="<?php echo theme_url('/css/small.css'); ?>" media="(max-width: 400px)">
		<link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700|Montserrat:400,700|Open+Sans:400,400i,700" rel="stylesheet">
		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
		<link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">

		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<script>var base = '<?php echo theme_url(); ?>';</script>
		<script src="<?php echo asset_url('/js/zepto.js'); ?>"></script>
		<script src="<?php echo theme_url('/js/main.js'); ?>"></script>	
		<script src="https://use.fontawesome.com/d914ed9ee8.js"></script>
	    <meta name="viewport" content="width=device-width">
	    <meta name="generator" content="Anchor CMS">

	    <meta property="og:title" content="<?php echo site_name(); ?>">
	    <meta property="og:type" content="website">
	    <meta property="og:url" content="<?php echo e(current_url()); ?>">
	    <meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
	    <meta property="og:site_name" content="<?php echo site_name(); ?>">
	    <meta property="og:description" content="<?php echo site_description(); ?>">
	    
	    <?php if (article_custom_field('logo_colour')) { ?>
	    <!-- If post has custom logo colour, let's style some other elements to match -->
	    <style>
		nav#main ul li.active {
			box-shadow: 0px 5px 0px #<?php echo article_custom_field('logo_colour', '002269'); ?> inset;
		}
		nav#main ul li.active a {
			color: #<?php echo article_custom_field('logo_colour', '002269'); ?>;
		}    
		p a {
			border-bottom: solid 3px #<?php echo article_custom_field('logo_colour', '002269'); ?>;
    		font-weight: bold;
   			color: #<?php echo article_custom_field('logo_colour', '002269'); ?>;
		}	
		</style>
		<?php } ?>
		
		<?php if (page_custom_field('logo_colour')) { ?>
	    <!-- If page has custom logo colour, let's style some other elements to match -->
	    <style>
		nav#main ul li.active {
			box-shadow: 0px 5px 0px #<?php echo page_custom_field('logo_colour', '002269'); ?> inset;
		}
		nav#main ul li.active a {
			color: #<?php echo page_custom_field('logo_colour', '002269'); ?>;
		}    
		p a {
			border-bottom: solid 3px #<?php echo page_custom_field('logo_colour', '002269'); ?>;
    		font-weight: bold;
   			color: #<?php echo page_custom_field('logo_colour', '002269'); ?>;
		}	
		</style>
		<?php } ?>

		<?php if(customised()): ?>
		    <!-- Custom CSS -->
    		<style><?php echo article_css(); ?></style>

    		<!--  Custom Javascript -->
    		<script><?php echo article_js(); ?></script>
		<?php endif; ?>
	</head>
	<body class="<?php echo body_class(); ?>">
		<div class="main-wrap">
			<div class="slidey" id="tray">
				<div class="row">
					<div class="large-6 columns">
						<form id="search" action="<?php echo search_url(); ?>" method="post">
							<label for="term">Search my blog:</label>
							<input type="search" id="term" name="term" placeholder="To search, type and hit enter&hellip;" value="<?php echo search_term(); ?>">
							<input type="hidden" id="whatSearch" name="whatSearch" value="all" />
						</form>
					</div>
					<div class="large-6 columns">
						<b>Categories</b>
						<ul>
						<?php while(categories()): 
								if (category_count() > 0) { ?>
							<li>
								<a href="<?php echo category_url(); ?>" title="<?php echo category_description(); ?>">
									<?php echo category_title(); ?> <span><?php echo category_count(); ?></span>
								</a>
							</li>
						<?php } endwhile; ?>
						</ul>
					</div>
				</div>
			</div>

			<header id="top">
				<div class="row">
					<div class="large-12 columns">
						<a id="logo" href="<?php echo base_url(); ?>">									
							<!-- Logo SVG, Includes PHP to dynamically select logo colour from backend custom field. -->
<svg height="80px" viewBox="0 0 919 835" version="1.1" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M678.945 27.43c33.87 19.554 221.95 345.32 221.95 384.43 0 39.11-188.08 364.875-221.95 384.43-33.87 19.556-410.032 19.556-443.903 0-33.87-19.555-221.95-345.32-221.95-384.43 0-39.11 188.08-364.876 221.95-384.43 33.87-19.556 410.032-19.556 443.903 0z" fill="#<?php if (page_custom_field('logo_colour')) { echo page_custom_field('logo_colour'); } elseif (article_custom_field('logo_colour')) { echo article_custom_field('logo_colour'); } else { echo '002269'; } ?>"/><g fill="#fff" fill-rule="nonzero"><path d="M163.03 449.185c-6.2 2.16-11.826 4.7-16.88 7.617-22.073 12.744-33.237 37.628-37.025 59.318-4.044 24.32 2.584 49.925 14.253 70.136 14.74 25.53 41.28 32.193 66.013 17.913 24.47-14.13 32.01-33.02 32.56-53.55 11.37 12.94 23.06 19.66 33.16 13.83 27.93-16.12 43.67-65.63 30.31-88.77-3.53-6.12-7.96-8.88-10.62-7.34-4.78 2.76-10.48 50.02-21.38 56.31-3.99 2.3-11.11-6.35-18.17-18.59-7.83-13.57-13.86-24.62-17.83-35.8.15-8.95-.07-17.33-1.22-27.31-5.06-8.78-28.14-14.96-39.04-8.67-3.72 2.15-4.96 6.76-4.59 12.93-2.47.01-5.59.75-9.51 1.95zm22.43 119.312c-11.966 6.91-20.992-1.354-26.98-11.726-20.73-35.9-5.507-73.41 17.526-93.09 5.837 19.33 18.132 43.08 24.16 54.13 6.67 26.29-2.47 43.63-14.705 50.69z"/><path d="M317.808 359.823c-6.086 1.74-12.09 4.853-16.878 7.617-22.073 12.744-33.237 37.628-37.025 59.318-4.044 24.32 2.584 49.924 14.253 70.136 14.74 25.53 41.28 32.193 66.013 17.913 24.21-13.972 31.89-32.594 32.76-52.595 11.37 12.938 22.86 18.714 32.97 12.88 27.93-16.122 43.67-65.633 30.31-88.77-3.53-6.117-7.96-8.878-10.62-7.342-4.78 2.763-10.48 50.02-21.38 56.315-4.25 2.457-10.26-3.65-16.71-14.818-9.36-16.223-26.85-60.024-34.02-87.798 1.59-19.36 4.87-35.79-5.81-55.51-3.53-6.12-23.51-20.47-34.68-14.02-13.3 7.67-7.56 48.33 7.89 94.73l-7.04 1.93zm37.528 70.528c5.79 25.38-3.127 41.88-15.095 48.79-11.96 6.91-20.99-1.35-26.98-11.72-20.57-35.63-5.77-73.26 17.26-92.94 7.1 19.66 15.57 39.24 24.82 55.88z"/><path d="M472.588 270.46c-6.2 2.16-11.825 4.7-16.878 7.618-22.073 12.744-33.237 37.628-37.025 59.318-4.044 24.32 2.583 49.924 14.253 70.136 14.74 25.53 41.28 32.193 66.013 17.913 24.47-14.126 32.01-33.014 32.56-53.547 11.37 12.938 23.06 19.666 33.16 13.83 27.93-16.12 43.67-65.63 30.31-88.768-3.53-6.117-7.96-8.878-10.62-7.343-4.78 2.764-10.48 50.02-21.38 56.316-3.99 2.303-11.11-6.35-18.17-18.583-7.83-13.563-13.86-24.62-17.83-35.8.15-8.953-.07-17.332-1.22-27.306-5.06-8.776-28.14-14.958-39.04-8.663-3.72 2.15-4.95 6.77-4.58 12.94-2.47.01-5.59.75-9.51 1.95zm22.433 119.312c-11.96 6.91-20.99-1.354-26.98-11.725-20.73-35.903-5.5-73.413 17.53-93.094 5.84 19.324 18.13 43.075 24.16 54.133 6.67 26.29-2.47 43.623-14.7 50.686z"/><path d="M693.03 248.15l-.308-.533c-5.92-20.694-7.393-52.112 3.245-58.254 7.978-4.606 12.255-2.11 15.172 2.942 9.05 15.69 10.73 32.1 21.17 50.184 10.13 17.55 24.1 32.53 39.26 23.78 28.99-16.74 41.27-64.25 27.91-87.39-3.53-6.12-6.44-8.7-9.1-7.16-5.06 2.92-10.15 48.76-20.52 54.75-1.6.92-2.9-.1-4.13-2.23-5.07-8.78-8.82-39.23-22.64-63.17-9.83-17.02-26.08-21.83-45.22-10.77-17.82 10.28-25.48 27.12-27.96 43.09l-1.69-2.93c-9.06-15.69-29.98-18.15-44.88-9.55-12.5 7.21-18.61 19.96-20.84 33.3-7.69-6.56-23.19-14.98-31.7-10.07-3.46 1.99-5.69 6.12-6.07 13.43-2.47 43.62 12.77 70.64 38.72 115.58 9.37 16.22 17.97 24.37 26.75 19.31 1.86-1.08 3.68-2.84 5.35-4.86 13.82-17.2 15.54-25.29 11.7-31.94-4.3-7.45-15.11-13.27-23.4-27.63-9.98-17.286-11.22-63.027-.05-69.47 6.11-3.53 10.08-1.57 13.46 4.28 6.45 11.17 17.66 39.8 35.315 70.38 9.37 16.22 17.977 24.37 26.75 19.303 1.86-1.077 3.68-2.837 5.35-4.864 13.83-17.2 15.546-25.285 11.71-31.934-4.3-7.45-15.105-13.267-23.396-27.628z"/></g><path d="M245.318 661.308L221.32 619.74l-7.74 4.47 3.317 5.743c-5.863-2.785-12.826-1.21-18.172 1.875-15.125 8.626-16.977 23.844-10.114 35.732 6.78 11.728 20.73 16.545 35.25 8.162 5.35-3.087 10.13-7.336 11.02-14.447l2.63 4.547c4.79 8.298-.9 15.945-7.71 19.986-5.62 3.35-14.13 5.925-17.31.42l-7.74 4.468c5.67 9.813 18.29 8.272 29.14 2.007 10.69-6.172 19.19-17.99 11.45-31.395zm-25.505 7.598c-9.494 5.482-18.927 1.673-23.383-5.86-4.514-7.82-3.456-19.068 6.576-24.54 9.473-5.15 17.91-1.406 22.333 6.253 4.6 7.97 4.2 18.52-5.53 24.14zm35.22-68.524l24.875 43.083 7.74-4.468-13.497-23.376c-5.39-9.33-.66-20.68 9.72-23.16l-3.96-6.86c-7.78 2.37-13.3 7.36-14.09 15.58l-3.04-5.26-7.74 4.47zm107.472-35.88c-8.71-13.056-23.155-13.757-33.846-7.584-11.41 6.587-18.14 20.363-9.57 35.203 8.57 14.84 24.06 15.89 35.15 9.49 8.85-5.11 14.99-14.93 12.83-26.23l-8.06 4.66c.25 6.34-3.36 11.51-8.7 14.6-6.47 3.74-17.47 3.28-22.35-5.18l36.54-21.09c-.41-1.25-1.11-2.66-2.01-3.84zm-37.948 18.293c-2.826-8.58 1.76-15.377 8.063-19.016 6.223-3.6 14.117-4.11 20.1 2.75l-28.163 16.26zm112.146-61.13c-8.708-13.057-23.155-13.758-33.846-7.586-11.41 6.58-18.135 20.36-9.567 35.2 8.567 14.84 24.067 15.89 35.157 9.49 8.856-5.12 14.994-14.94 12.83-26.24l-8.058 4.65c.25 6.34-3.36 11.51-8.7 14.59-6.47 3.73-17.47 3.27-22.36-5.18l36.54-21.09c-.41-1.26-1.11-2.66-2.01-3.84zm-37.947 18.29c-2.826-8.58 1.76-15.376 8.063-19.015 6.22-3.593 14.11-4.108 20.1 2.756l-28.17 16.26zm58.404-56.375l24.92 43.162 7.818-4.515-13.542-23.456c-4.376-7.57-3.204-16.23 5.266-20.91 9.267-5.14 14.52-.83 19.172 7.23l13.358 23.14 7.74-4.47-13.405-23.21c-7.14-12.36-17.47-17.36-30.633-9.76-5.426 3.14-9.27 7.16-9.79 13.63l-3.086-5.34-7.82 4.52zm130.402-46.46c-8.567-14.84-24.386-15.707-36.034-8.982-11.73 6.77-19.093 20.916-10.48 35.836 8.568 14.84 24.467 15.66 36.035 8.98 11.73-6.77 19.093-20.916 10.48-35.835zm-38.695 22.34c-5.942-10.293-1.15-19.867 6.668-24.38 7.66-4.423 18.392-3.705 24.288 6.507 5.896 10.212 1.072 19.912-6.793 24.347-7.705 4.342-18.313 3.658-24.163-6.475zm122.618-42.072l-25.15-43.562-7.82 4.514 13.774 23.856c4.42 7.66 3.28 16.188-5.27 20.912-9.27 5.137-14.44.784-19.05-7.195l-13.64-23.616-7.82 4.515 13.63 23.616c7.14 12.366 17.55 17.313 30.63 9.76 5.58-3.226 9.53-7.63 10-14.18l3.27 5.664 7.42-4.284zm75.432-45.678l-24-41.567-7.738 4.468 3.31 5.75c-5.87-2.78-12.83-1.21-18.17 1.88-15.13 8.63-16.98 23.85-10.12 35.74 6.77 11.73 20.72 16.55 35.24 8.16 5.34-3.08 10.12-7.33 11.02-14.44l2.62 4.55c4.79 8.3-.9 15.95-7.72 19.99-5.62 3.35-14.13 5.93-17.31.42l-7.74 4.47c5.66 9.81 18.28 8.27 29.13 2.01 10.69-6.17 19.18-17.99 11.44-31.39zm-25.506 7.598c-9.49 5.482-18.92 1.673-23.38-5.86-4.51-7.82-3.45-19.068 6.58-24.54 9.48-5.15 17.91-1.406 22.34 6.253 4.61 7.98 4.21 18.53-5.52 24.15zm35.36-85.618l-7.74 4.467 32.25 55.848 7.74-4.468-13.54-23.456c-4.37-7.58-3.2-16.23 5.27-20.91 9.27-5.14 14.52-.83 19.18 7.23l13.36 23.14 7.82-4.51-13.41-23.21c-7.14-12.36-17.55-17.31-30.71-9.71-5.42 3.14-9.19 7.12-9.79 13.63l-10.41-18.03z" fill="#fff" fill-rule="nonzero"/></svg>
						</a>
		
						<nav id="main" role="navigation">
							<ul>
								<li <?php if (is_homepage()) { echo 'class="active"'; } ?>><a href="/" title="Homepage"><i class="fa fa-home"></i>Home</a></li>
								<li <?php if (page_id() == 2) { echo 'class="active"'; } ?>><a href="/about" title="Homepage"><i class="fa fa-user"></i>About</a></li>
								<li <?php if (is_postspage()) { echo 'class="active"'; } ?>><a href="/posts" title="Homepage"><i class="fa fa-pencil"></i>Posts</a></li>
								<li><a href="#tray" class="linky"><i class="fa fa-search"></i>Search</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>
