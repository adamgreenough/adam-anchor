<?php theme_include('header'); ?>

<div class="row convert-emoji" id="article-<?php echo article_id(); ?>">
	<div class="columns large-10 large-offset-1">
		<section class="default-page">
			<h1><?php echo article_title(); ?><small>Posted <time datetime="<?php echo date(DATE_COOKIE, article_time()); ?>"><?php echo date(DATE_COOKIE, article_time()); ?></time>, filed under <?php echo article_category(); ?>.</small></h1>


			<article>
				<?php echo article_markdown(); ?>
			</article>

			<section class="footnote">
				<p>This article is my <?php echo numeral(article_number(article_id()), true); ?> oldest. It is <?php echo count_words(article_markdown()); ?> words long. <?php echo article_custom_field('attribution'); ?></p>
			</section>
		</section>
	</div>
</div>

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
