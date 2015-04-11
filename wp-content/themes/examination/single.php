<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ): the_post(); ?>
	<article class='item'>
		<div class='img-cont'>
			<?php the_post_thumbnail(); ?>
		</div>
		<div class='news-cont arrow_box'>

			<button class='like'>
				<img alt='Like it' height='10' src='images/like-icon.png' width='13'>
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
		<?php the_content(); ?>
	</article>
<?php endwhile; ?>

<?php else: ?>

<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>