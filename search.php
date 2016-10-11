<?php theme_include('header'); ?>
<div class="total-posts">
	<div class="row">
		<div class="large-12 columns">
			<?php echo total_posts(); ?> posts matching &ldquo;<?php echo search_term(); ?>&rdquo;. 
		</div>
	</div>
</div>	


<?php if(has_search_results()): ?>
	<ul class="items">
		<?php $i = 0; while(search_results()): $i++; ?>
			<?php $bg = sprintf('background: hsl(221, 100%%, %d%%);', round(((++$i / posts_per_page()) * 10) + 15)); ?>
			<li style="<?php echo $bg; ?>" class="coloured-post">
			<div class="row">
				<div class="columns large-12">
					<h2>
						<a href="<?php echo search_item_url(); ?>" title="<?php echo search_item_title(); ?>"><?php echo search_item_title(); ?></a>
					</h2>
					<p><?php echo search_item_description(); ?></p>
					<footer>
						Posted <time datetime="<?php echo date(DATE_W3C, search_item_time()); ?>"><?php echo relative_time(search_item_time()); ?></time> 
						by <?php echo search_item_author('real_name'); ?>, filed under <?php echo search_item_category(); ?>.
					</footer>
				</div>
			</div>
		</li>
		<?php endwhile; ?>
	</ul>

<?php if(has_search_pagination()): ?>
	<nav class="pagination">
		<div class="row">
			<div class="large-12 columns">
			<div class="previous">
				<?php echo search_prev('<i class="fa fa-hand-o-left" aria-hidden="true"></i> OLDER POSTS'); ?>	
			</div>
			<div class="next">
				<?php echo search_next('NEWER POSTS <i class="fa fa-hand-o-right" aria-hidden="true"></i>'); ?>				
			</div>
			</div>
		</div>
	</nav>
<?php endif; ?>

<?php else: ?>
	<p class="wrap">Unfortunately, there's no results for &ldquo;<?php echo search_term(); ?>&rdquo;. Did you spell everything correctly?</p>
<?php endif; ?>

<?php theme_include('footer'); ?>