<?php get_header() ?>
<div class='content'>
    <div class='wrapper'>
    <article class='main-content'>
        <h1 class="page-title"><?php the_title() ?></h1>

        <?php if (have_posts()) : while (have_posts()): the_post(); ?>

            <section class='post-content'>
                <h3>
                    <a href='<?php the_permalink() ?>'> <?php the_title() ?></a>
                </h3>
                    <span class='publication-date'>
                        <?php echo "Created on "; the_time(' l, d F Y H:i') ?>
                    </span>
                <?php the_content() ?>
            </section>

        <?php endwhile; ?>
            <div class="pagination">
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
        <?php else: ?>

        <?php endif; ?>

    </article>
<?php get_sidebar() ?>
<?php get_footer() ?>