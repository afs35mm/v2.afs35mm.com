<?php get_header(); ?>
<div id="main">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			<?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>

			<div class="entry">
				<?php the_content(); ?>
			</div>

			<footer class="postmetadata">
				<?php the_tags('', ', ', ''); ?>
				

				<!--<?php the_category(', ') ?> | -->
				<div style="float:right; font-style:italic; font-family:georgia;">
					<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
				</div>
				<div style="clear:both;"></div>
			</footer>

		</article>

	<?php endwhile; ?>
	<div style="clear:both;"></div>
</div>
	<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>

<?php get_sidebar(); ?>
<div style="clear:both;"></div>
<?php get_footer(); ?>
