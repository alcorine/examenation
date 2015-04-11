<!DOCTYPE html>
<html lang='en'>
    <meta charset='<?php bloginfo('charset') ?>'>
    <meta content='IE=edge' http-equiv='X-UA-Compatible'>
    <meta content='width=device-width, initial-scale=1' name='viewport'>
    <title><?php bloginfo('name'); wp_title(); ?></title>
    <?php wp_head(); ?>
<body>
<header class='header clearfix'>
    <a href=''>
        <img alt='Skokov' class='logo' height='116' src='<?php bloginfo('template_url') ?>/images/logo.png' width='116'>
    </a>
    <?php wp_nav_menu(array(
        'container' =>  ''
    )); ?>
</header>

<section class='page-title'>
    <h1><?php wp_title(); ?></h1>
</section>