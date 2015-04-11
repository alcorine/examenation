<?php get_header(); ?>
<section class='content'>
<div class='js-masonry' id='container'>
	<div class='quote item'>
		<blockquote>
			"Ability may get you to the top, but it takes
			character to keep you there."
			<cite>John Wooden</cite>
		</blockquote>
	</div>
<?php if ( have_posts() ) : while ( have_posts() ): the_post(); ?>
	<article class='item'>
		<div class='img-cont'>
			<?php the_post_thumbnail(); ?>
		</div>
		<div class='news-cont arrow_box'>
			<a href='<?php the_permalink(); ?>'>
				<h2>
					<?php the_title(); ?>
				</h2>
			</a>
			<?php the_excerpt(); ?>
			<button class='like'>
				<img alt='Like it' height='10' src='<?php bloginfo('template_url') ?>/images/like-icon.png' width='13'>
				15
			</button>
			<div class='post-info'>
				<a class='author' href=''>
					by John Doe
				</a>
				<span>/</span>
				<a class='comm' href=''>4 comments</a>
				<span>/</span>
				<span class='date-public'>Oct. 12, 2013</span>
			</div>
		</div>
	</article>
<?php endwhile; ?>

<?php else: ?>

<?php endif; ?>
</div>
<div class="pag">
	<?php
	global $wp_query;

	$big = 999999999; // need an unlikely integer

	echo paginate_links( array(
		'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format' => '?paged=%#%',
		'current' => max( 1, get_query_var('paged') ),
		'total' => $wp_query->max_num_pages
	) );
	?>
</div>
</section>

<?php get_sidebar() ?>
<?php get_footer(); ?>