<?php theme_include('header'); ?>
<div class="total-posts">
	<div class="row">
		<div class="large-12 columns">
			<?php echo total_posts(); ?> POSTS IN <?php if (raw_category_title()) { echo raw_category_title(); } else { echo 'TOTAL'; } ?>
		</div>
	</div>
</div>				

<section class="content">
	<?php if(has_posts()): ?>
		<ul class="items">
			<?php posts(); ?>
			<li>
				<div class="row">
					<div class="large-12 columns">
						
						
						<article>
							<h2>
								<?php if (substr($_SERVER['REQUEST_URI'], -1) !== '2' &&  substr($_SERVER['REQUEST_URI'], -1) !== '3') { echo '<small>LATEST POST</small>'; } ?>
								<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
							</h2>

								<p>
									<?php echo article_description(); ?>
								</p>
								
							<footer>
								Posted <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time> 
								by <?php echo article_author('real_name'); ?>, filed under <?php echo article_category(); ?>.
							</footer>
						</article>
					</div>
				</div>
			</li>
			
			<?php $i = 0; while(posts()): ?>
			<?php $bg = sprintf('background: hsl(221, 100%%, %d%%);', round(((++$i / posts_per_page()) * 10) + 15)); ?>
			<li style="<?php echo $bg; ?>" class="coloured-post">
				<article>
					<div class="row">
						<div class="large-12 columns">
							<h2>
								<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
							</h2>
							<p>
								<?php echo article_description(); ?>
							</p>
							<footer>
								Posted <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time> 
								by <?php echo article_author('real_name'); ?>, filed under <?php echo article_category(); ?>.
							</footer>
						</div>
					</div>
				</article>
			</li>
			<?php endwhile; ?>
		</ul>

		<?php if(has_pagination()): ?>
		<nav class="pagination">
			<div class="row">
				<div class="large-12 columns">
				<div class="previous">
					<?php echo posts_prev('<i class="fa fa-hand-o-left" aria-hidden="true"></i> OLDER POSTS'); ?>
				</div>
				<div class="next">
					<?php echo posts_next('NEWER POSTS <i class="fa fa-hand-o-right" aria-hidden="true"></i>'); ?>
				</div>
				</div>
			</div>
		</nav>
		<?php endif; ?>

	<?php else: ?>
	<div class="row">
		<div class="large-12 columns">
			<h1>No posts yet!</h1>
			<p>Looks like you have some writing to do!</p>
		</div>
	</div>
	<?php endif; ?>

</section>

<?php theme_include('footer'); ?>
