<?php get_header(); ?>

<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$news = new WP_Query(array(
    'post_type' => 'post',
    'category_name' => 'news',
    'posts_per_page' => 6,
    'orderby' => 'date',
    'order' => 'DESC',
    'paged' => $paged        
));
?>

<section class="blog-section container-fluid px-5 py-3 text-light">
	<div class="row">
		<div class="col-12">
			<?php if($news->have_posts()): ?>
    		<?php while($news->have_posts()): $news->the_post(); ?>
					<h2><a class="post-title text-decoration-none" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<span><?php the_time('m/Y'); ?></span>
					<p><?php the_content(); ?></p>
				<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php else: ?>
						<p>No posts found meow :3</p>
				<?php endif; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
