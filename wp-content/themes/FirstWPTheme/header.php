<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <title><?php bloginfo('name'); wp_title() ?></title>
        <?php wp_head(); ?>
</head>
<body>
<header class='header'>
    <div class='wrapper'>
        <a class='header-logo' href='<?php echo home_url() ?>'>
            <img alt='Private' height='49' src='<?php bloginfo('template_url')?>/images/logo.png' width='218'>
        </a>
        <form action='<?php echo home_url("/") ; ?>' class='search-form' method=''>
            <input type='search' name="s">
            <input type='submit' value=''>
        </form>
        <h1 class='main-title'>News site</h1>

    <?php wp_nav_menu(array('theme_location' => 'menu', 'container' => 'false')) ?>

    </div>
</header>