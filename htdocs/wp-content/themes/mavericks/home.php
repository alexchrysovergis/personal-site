<?php get_header(); ?>

<?php

$paged = get_query_var('paged') ? get_query_var('paged') : 1;

echo 'We are on the page: '. $paged;

$news = new WP_Query(array(
    'post_type' => 'post',
    'category_name' => 'news',
    'posts_per_page' => 2,
    'orderby' => 'date',
    'order' => 'DESC',
    'paged' => $paged
));
?>
<section class="rolling-text-section text-white d-flex flex-column">
		<hr class="vr w-100">
			<div class="rolling-text">Learn About Alex's Latest Shenanigans.</div>
		<hr class="vr w-100">
</section>

<section class="blog-section container-fluid px-5 py-5 text-light">
	<div class="row">
		<div class="col-12">
			<?php if($news->have_posts()): ?>
    		<?php while($news->have_posts()): $news->the_post(); ?>
					<h2><a class="post-title text-decoration-none" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<span><?php the_time('m/Y'); ?></span>
					<p><?php the_excerpt(); ?></p>
				<?php endwhile; ?>
				<div class="col-6 d-flex justify-content-start pagination pagination-left px-5 pt-5 mt-5">
					<?php previous_posts_link('<i class="material-icons blog-arrow">keyboard_arrow_left</i>'); ?>
				</div>
				<div class="col-6 d-flex justify-content-end pagination pagination-right px-5 pt-5 mt-5">
					<?php next_posts_link('<i class="material-icons blog-arrow">keyboard_arrow_right</i>', $news->max_num_pages); ?>
				</div>
					<?php wp_reset_postdata(); ?>
				<?php else: ?>
						<p>No posts found meow :3</p>
				<?php endif; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
