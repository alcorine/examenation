<?php get_header() ?>
<section class='slider'>
    <div class='wrapper clearfix'>
        <div class='main-slider' id='main-slider'>

            <?php $slider = new WP_Query(array(
                'post_type' => 'slider'
            )) ?>
            <?php if ($slider->have_posts()) : ?>

                <?php while ($slider->have_posts()): $slider->the_post(); ?>
                    <div class='item'>
                        <div class='slider-text'>
                            <?php the_title('<h1>', '</h1>') ?>
                            <?php the_content() ?>
                            <a class='lrn-btn hvr-lrn-btn' href='<?php the_permalink() ?>'>Order Now</a>
                        </div>
                        <?php the_post_thumbnail('  '); ?>

                    </div>
					<?php comments_template() ?>
                <?php endwhile; ?>
            <?php else: ?>

            <?php endif;
            wp_reset_query(); ?>


</section>
<section class='services'>
    <div class='wrapper clearfix'>
        <header class="service-header">
            <h2><?php echo get_cat_name('3') ?></h2>

            <?php echo category_description('3'); ?>
        </header>
        <?php $services = new WP_Query(array(
            'post_type' => 'services'
        )); ?>
        <?php if ($services->have_posts()) : ?>
            <ul class='specialization-list'>

                <?php while ($services->have_posts()): $services->the_post(); ?>
                    <li>
                        <div class='specialization-item'>
                            <div class='img-cont'>
                                <?php the_post_thumbnail() ?>
                                <h4>
                                    <?php the_title(); ?>
                                </h4>
                            </div>
                            <div class='arrow_box'>
                                <p>
                                    <?php the_content(); ?>
                                </p>
                            </div>
                        </div>
                        <div class='hover-effect'>
                            <div class='img-cont'>
                                <?php echo get_post_meta($post->ID, 'hover_effect', true); ?>
                            </div>
                            <div class='arrow_box'>
                                <h4>
                                    <?php the_title(); ?>
                                </h4>
                <span>
                  in
                  <a href='#'>web design</a>
                </span>
                            </div>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php else: ?>

        <?php endif;
        wp_reset_query(); ?>

    </div>
</section>
<section class='our-work'>
    <div class='wrapper clearfix'>
        <h2>our work</h2>

        <p class='subtitle'>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
            sed diam nonummy nibh euismod tincidunt.
        </p>

        <div class='colagge-cont' id='container'>
            <div class='item'>
                <img alt='' height='133' src='<?php bloginfo('template_url') ?>/img/slider-img3.jpg' width='265'>
            </div>
            <div class='item'>
                <img alt='' height='200' src='<?php bloginfo('template_url') ?>/img/slider-img7.jpg' width='275'>
            </div>
            <div class='item'>
                <img alt='' height='404' src='<?php bloginfo('template_url') ?>/img/slider-img.jpg' width='534'>
            </div>
            <div class='item'>
                <img alt='' height='268' src='<?php bloginfo('template_url') ?>/img/slider-img4.jpg' width='265'>
            </div>
            <div class='item'>
                <img alt='' height='183' src='<?php bloginfo('template_url') ?>/img/slider-img5.jpg' width='275'>
            </div>
            <div class='item'>
                <img alt='' height='404' src='<?php bloginfo('template_url') ?>/img/slider-img2.jpg' width='534'>
            </div>
            <div class='item'>
                <img alt='' height='193' src='<?php bloginfo('template_url') ?>/img/slider-img6.jpg' width='275'>
            </div>
            <div class='item'>
                <img alt='' height='268' src='<?php bloginfo('template_url') ?>/img/slider-img8.jpg' width='264'>
            </div>
            <div class='item'>
                <img alt='' height='404' src='<?php bloginfo('template_url') ?>/img/slider-img9.jpg' width='534'>
            </div>
            <div class='item'>
                <img alt='' height='268' src='<?php bloginfo('template_url') ?>/img/slider-img10.jpg' width='265'>
            </div>
            <div class='item'>
                <img alt='' height='268' src='<?php bloginfo('template_url') ?>/img/slider-img11.jpg' width='265'>
            </div>
        </div>
    </div>
</section>
<section class='clients'>
    <div class='wrapper clearfix'>
        <h2>our clients</h2>

        <p class='subtitle'>
            Lorem ipsum dolor sit amet,
            consectetuer adipiscing elit,
            sed diam nonummy nibh euismod tincidunt.
        </p>

        <div class='slide-wrap'>
            <div id='client-slider'>
                <div class='item'>
                    <img alt='' src='<?php bloginfo('template_url') ?>/img/client-img1.jpg'>
                </div>
                <div class='item'>
                    <img alt='' src='<?php bloginfo('template_url') ?>/img/client-img2.jpg'>
                </div>
                <div class='item'>
                    <img alt='' src='<?php bloginfo('template_url') ?>/img/client-img3.jpg'>
                </div>
                <div class='item'>
                    <img alt='' src='<?php bloginfo('template_url') ?>/img/client-img4.jpg'>
                </div>
                <div class='item'>
                    <img alt='' src='<?php bloginfo('template_url') ?>/img/client-img5.jpg'>
                </div>
                <div class='item'>
                    <img alt='' src='<?php bloginfo('template_url') ?>/img/client-img6.jpg'>
                </div>
                <div class='item'>
                    <img alt='' src='<?php bloginfo('template_url') ?>/img/client-img7.jpg'>
                </div>
                <div class='item'>
                    <img alt='' src='<?php bloginfo('template_url') ?>/img/client-img8.jpg'>
                </div>
                <div class='item'>
                    <img alt='' src='<?php bloginfo('template_url') ?>/img/client-img1.jpg'>
                </div>
                <div class='item'>
                    <img alt='' src='<?php bloginfo('template_url') ?>/img/client-img2.jpg'>
                </div>
                <div class='item'>
                    <img alt='' src='<?php bloginfo('template_url') ?>/img/client-img3.jpg'>
                </div>
                <div class='item'>
                    <img alt='' src='<?php bloginfo('template_url') ?>/img/client-img4.jpg'>
                </div>
                <div class='item'>
                    <img alt='' src='<?php bloginfo('template_url') ?>/img/client-img5.jpg'>
                </div>
                <div class='item'>
                    <img alt='' src='<?php bloginfo('template_url') ?>/img/client-img6.jpg'>
                </div>
                <div class='item'>
                    <img alt='' src='<?php bloginfo('template_url') ?>/img/client-img7.jpg'>
                </div>
                <div class='item'>
                    <img alt='' src='<?php bloginfo('template_url') ?>/img/client-img8.jpg'>
                </div>
            </div>
        </div>
    </div>
</section>
<section class='contact'>
    <div class='wrapper clearfix'>
        <article class='about-us'>
            <h4>About Us</h4>

            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. Ut wisi
                enim ad minim veniam, quis nostrud exerci tation ullamcorper
                suscipit lobortis nisl ut aliquip ex ea commodo consequat.
            </p>
            <a class='lrn-btn hvr-lrn-btn' href='#'>Learn more</a>
            <h4>Photo Stream</h4>
            <ul class='photo-stream list-inline'>
                <li>
                    <a>
                        <img alt='' height='70' src='<?php bloginfo('template_url') ?>/img/photo-stream-1.jpg'
                             width='130'>
                    </a>
                </li>
                <li>
                    <a>
                        <img alt='' height='70' src='<?php bloginfo('template_url') ?>/img/photo-stream-2.jpg'
                             width='130'>
                    </a>
                </li>
                <li>
                    <a>
                        <img alt='' height='70' src='<?php bloginfo('template_url') ?>/img/photo-stream-3.jpg'
                             width='130'>
                    </a>
                </li>
                <li>
                    <a>
                        <img alt='' height='70' src='<?php bloginfo('template_url') ?>/img/photo-stream-4.jpg'
                             width='130'>
                    </a>
                </li>
                <li>
                    <a>
                        <img alt='' height='70' src='<?php bloginfo('template_url') ?>/img/photo-stream-5.jpg'
                             width='130'>
                    </a>
                </li>
                <li>
                    <a>
                        <img alt='' height='70' src='<?php bloginfo('template_url') ?>/img/photo-stream-6.jpg'
                             width='130'>
                    </a>
                </li>
            </ul>
        </article>
        <article class='scl'>
            <h4>Latest tweets</h4>
            <a class='twitter-timeline' data-aria-polite='assertive' data-border-color='#FFFFFF'
               data-chrome='noheader nofooter noborders noscrollbar transparent' data-link-color='#FFEA00'
               data-screen-name='_developin' data-show-replies='false' data-theme='dark' data-tweet-limit='3'
               data-widget-id='566553618976083968' lang='EN'></a>
            <script async='' charset='utf-8' src='//platform.twitter.com/widgets.js'></script>
            <h4 class='social-title'>Social Connecting</h4>

            <div class='scl-cont'>
                <a class='social' href='#' target='_blank'>
                    <div class='front'>
                        <i class='fa fa-facebook'></i>
                    </div>
                    <div class='back'>
                        <i class='fa fa-facebook'></i>
                    </div>
                </a>
                <a class='social social-twitter' href='#' target='_blank'>
                    <div class='front'>
                        <i class='fa fa-twitter'></i>
                    </div>
                    <div class='back'>
                        <i class='fa fa-twitter'></i>
                    </div>
                </a>
                <a class='social social-youtube' href='#' target='_blank'>
                    <div class='front'>
                        <i class='fa fa-youtube'></i>
                    </div>
                    <div class='back'>
                        <i class='fa fa-youtube'></i>
                    </div>
                </a>
                <a class='social social-pinterest' href='#' target='_blank'>
                    <div class='front'>
                        <i class='fa fa-pinterest'></i>
                    </div>
                    <div class='back'>
                        <i class='fa fa-pinterest'></i>
                    </div>
                </a>
                <a class='social social-googleplus' href='#' target='_blank'>
                    <div class='front'>
                        <i class='fa fa-google-plus'></i>
                    </div>
                    <div class='back'>
                        <i class='fa fa-google-plus'></i>
                    </div>
                </a>
                <a class='social social-skype' href='#' target='_blank'>
                    <div class='front'>
                        <i class='fa fa-skype'></i>
                    </div>
                    <div class='back'>
                        <i class='fa fa-skype'></i>
                    </div>
                </a>
                <a class='social social-linkedin' href='#' target='_blank'>
                    <div class='front'>
                        <i class='fa fa-linkedin'></i>
                    </div>
                    <div class='back'>
                        <i class='fa fa-linkedin'></i>
                    </div>
                </a>
                <a class='social social-skype' href='#' target='_blank'>
                    <div class='front'>
                        <i class='fa fa-skype'></i>
                    </div>
                    <div class='back'>
                        <i class='fa fa-skype'></i>
                    </div>
                </a>
                <a class='social social-dribbble' href='#' target='_blank'>
                    <div class='front'>
                        <i class='fa fa-dribbble'></i>
                    </div>
                    <div class='back'>
                        <i class='fa fa-dribbble'></i>
                    </div>
                </a>
            </div>
        </article>
        <article class='contact-info'>
            <h4>Contact Info</h4>
            <address>
                <dl class='dl-horizontal'>
                    <dt class='contact-address'>Address:</dt>
                    <dd>
                        12569 Saint Patrick des Prés,
                        85000 Paris, France
                    </dd>
                    <dt class='contact-tel'>Phone:</dt>
                    <dd>+38 045 845-45-78</dd>
                    <dd>+38 045 845-45-79</dd>
                    <dt class='contact-email'>E-mail:</dt>
                    <dd>
                        <a href='#'>
                            freeforwebdesign@gmail.com
                        </a>
                    </dd>
                </dl>
            </address>
            <h4>Follow Us</h4>

            <p>
                Lorem Ipsum is simply dummy text of the printing
                and typesetting industry.
            </p>

            <form class='spam-form'>
                <input type='email'>
                <input class='spam-email' type='submit' value=''>
            </form>
        </article>
    </div>
</section>
<footer class='footer'>
    <div class='wrapper'>
        <span class='copyright'>Copyright 2013</span>
        <span>&#45;</span>
        <span class='copyright'>FreeForWebDesign.com</span>
        <span>&#45;</span>
        <span class='copyright'>All Rights Reserved</span>
        <nav class='foot-nav'>
            <ul class='list-inline'>
                <li>
                    <a href='#'>Home</a>
                </li>
                <li>
                    <a href='#'>Portfolio</a>
                </li>
                <li>
                    <a href='#'>Blog</a>
                </li>
                <li>
                    <a href='#'>About Us</a>
                </li>
                <li>
                    <a href='#'>Contact</a>
                </li>
            </ul>
        </nav>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
