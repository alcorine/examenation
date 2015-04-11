<?php get_header() ?>
<div class='content'>
	<div class='wrapper'>
		<article class='main-content'>
            <?php if (have_posts()) : while (have_posts()): the_post(); ?>
                <section class='post-content'>
                    <h3>
                        <a href='<?php the_permalink() ?>'> <?php the_title() ?></a>
                    </h3>
                    <span class='publication-date'>
                        <?php echo "Created on "; the_time(' l, d F Y H:i') ?>
                    </span>
                    <div class="post-img">
                        <?php the_post_thumbnail('full') ?>
                    </div>
                   <?php the_excerpt() ?>
                    <a class='more-btn' href='<?php the_permalink() ?>'>More info</a>
                </section>

            <?php endwhile; ?>
                <?php
                $query = new WP_Query( array( 'category_name' => 'no-cat' ) );

                while ( $query->have_posts() ) :
                    $query->the_post(); ?>

                    <h2>Запись без рубрики</h2>
                    <section class='post-content'>
                        <h3>
                            <a href='<?php the_permalink() ?>'> <?php the_title() ?></a>
                        </h3>
                        <span class='publication-date'>
                            <?php echo "Created on "; the_time(' l, d F Y H:i') ?>
                        </span>
                        <div class="post-img">
                            <?php the_post_thumbnail('full') ?>
                        </div>
                        <?php the_excerpt() ?>
                    <a class='more-btn' href='<?php the_permalink() ?>'>More info</a>
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