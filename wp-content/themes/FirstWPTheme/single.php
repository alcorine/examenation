<?php get_header() ?>
<div class='content'>
    <div class='wrapper'>
    <article class='main-content'>
        <?php if (have_posts()) : while (have_posts()): the_post(); ?>

            <section class='post-content'>
                <h3>
                    <?php the_title() ?>
                </h3>
                    <span class='publication-date'>
                        <?php echo "Created on "; the_time(' l, d F Y H:i') ?>
                    </span>
                    <div class="post-img">
                        <?php the_post_thumbnail('full') ?>
                    </div>
                <?php the_content() ?>
            </section>
			<?php comments_template(); ?>

        <?php endwhile; ?>

        <?php else: ?>

        <?php endif; ?>
    </article>
<?php get_sidebar() ?>
<?php get_footer() ?>