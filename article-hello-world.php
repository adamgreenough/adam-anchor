<?php theme_include('header'); ?>

<!-- 
 ____ ____ ____ ____ ____ _________ ____ ____ ____ ____ ____ ____ 
||H |||e |||l |||l |||o |||       |||W |||o |||r |||l |||d |||! ||
||__|||__|||__|||__|||__|||_______|||__|||__|||__|||__|||__|||__||
|/__\|/__\|/__\|/__\|/__\|/_______\|/__\|/__\|/__\|/__\|/__\|/__\|

-->

<link rel="stylesheet" href="<?php echo theme_url('/assets/hello-world/hello-world.css'); ?>">
<link href="https://fonts.googleapis.com/css?family=Roboto+Mono:400,700" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeit/4.2.3/typeit.min.js"></script>

<div class="hello-world-container">
	
	<div class="hello-world-bar">
	<div class="row">
		<div class="columns large-12">
			<i class="fa fa-file-code-o" aria-hidden="true"></i> article-hello-world.php
		</div>
	</div>
	</div>
	
	<div class="row">
		<div class="columns large-12">

		<div class="comment">
			
			<&#33;---------------------------------------------------------------------<br />
			&nbsp;&nbsp;&nbsp;_&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;___&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_    <br />
			&nbsp;&nbsp;/_\&nbsp;&nbsp;__|&nbsp;|__ _ _ __&nbsp;&nbsp;&nbsp;&nbsp;/ __|_ _ ___ ___ _ _ &nbsp;___ _ &nbsp;_ __ _| |_  <br />
			&nbsp;/ _ \/ _`&nbsp;/ _` | ' &nbsp;\ &nbsp;| (_ | '_/ -_) -_) ' \/ _ \ || / _` | ' \ <br />
			/_/ \_\__,_\__,_|_|_|_| &nbsp;\___|_| \___\___|_||_\___/\_,_\__, |_||_| .com<br />
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|___/  <br />
                            
			-----------------------------------------------------------------------><br />
		</div>

		<div class="code">
			
			
			<span class="indent-0"></span>&#x3C;<span class="pink">h1</span>&#x3E;<br />
			<span class="indent-1"></span>&#x9;Hello World!</span><br />
			<span class="indent-1"></span>&#x9;&#x3C;<span class="pink">small</span>&#x3E;Posted 12th October 2016, filed under Random&#x3C;/<span class="pink">small</span>&#x3E;<br />
			<span class="indent-0"></span>&#x3C;/<span class="pink">h1</span>&#x3E;<br />
			<br />
			
			<span class="indent-0"></span>&#x3C;<span class="pink">article</span>&#x3E;<br />
			<span class="indent-1"></span>&#x9;&#x3C;<span class="pink">p</span>&#x3E;<br />
			<span class="indent-2"></span>&#x9;&#x9;Hello! My name is Adam, welcome to my new website. Personal playground and home of the occasional blog.</span><br />
			<span class="indent-1"></span>&#x9;&#x3C;/<span class="pink">p</span>&#x3E;<br />
			<span class="indent-1"></span>&#x9;&#x3C;<span class="pink">p</span>&#x3E;<br />
			<span class="indent-2"></span>&#x9;&#x9;Here you can &#x3C;<span class="pink">a</span> <span class="green">href</span>=<span class="yellow">&#x22;/about/&#x22;</span>&#x3E;find out more about me&#x3C;/<span class="pink">a</span>&#x3E; and &#x3C;<span class="pink">a</span> <span class="green">href</span>=<span class="yellow">&#x22;/posts/&#x22;</span>&#x3E;see what I&#x27;m writing about&#x3C;/<span class="pink">a</span>&#x3E;.</span><br />
			<span class="indent-1"></span>&#x9;&#x3C;/<span class="pink">p</span>&#x3E;<br />
			<span class="indent-1"></span>&#x9;&#x3C;<span class="pink">p</span>&#x3E;<br />
			<span class="indent-2"></span>&#x9;&#x9;This art-directed blog is powered by &#x3C;<span class="pink">a</span> <span class="green">href</span>=<span class="yellow">&#x22;https://anchorcms.com/&#x22;</span> <span class="green">target</span>=<span class="yellow">&#x22;_blank&#x22;</span>&#x3E;Anchor CMS&#x3C;/<span class="pink">a</span>&#x3E;, hosted by &#x3C;<span class="pink">a</span> <span class="green">href</span>=<span class="yellow">&#x22;https://mediatemple.com/&#x22;</span> <span class="green">target</span>=<span class="yellow">&#x22;_blank&#x22;</span>&#x3E;MediaTemple&#x3C;/<span class="pink">a</span>&#x3E; and lovingly crafted by yours truly. :heart:<br />
			<span class="indent-1"></span>&#x9;&#x3C;/<span class="pink">p</span>&#x3E;<br />
			<span class="indent-1"></span>&#x9;&#x3C;<span class="pink">p</span>&#x3E;<br />
			<span class="indent-2"></span>&#x9;&#x9;Say hello below!<br />
			<span class="indent-1"></span>&#x9;&#x3C;/<span class="pink">p</span>&#x3E;<br />
			<span class="indent-0"></span>&#x3C;/<span class="pink">article</span>&#x3E;

		</div>

		</div>
	</div>
</div>

<script>
	jQuery('.code').typeIt({
     speed: 60,
     lifeLike: true,
     autoStart: false
});
</script>

<?php if(comments_open()): ?>
	<section class="comments">
		<div class="row">
			<div class="columns large-12">
				<?php include('comments.php'); ?>
			</div>
		</div>
	</section>
<?php endif; ?>
		
<?php theme_include('footer'); ?>
