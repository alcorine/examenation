<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <meta content='IE=edge' http-equiv='X-UA-Compatible'>
    <meta content='width=device-width, initial-scale=1' name='viewport'>
    <title><?php bloginfo('name'); wp_title(); ?></title>

    <?php wp_head(); ?>
</head>
<body>
<header class='header'>
    <div class='wrapper clearfix'>
        <div class='navbar-header navbar-inverse'>
            <button class='navbar-toggle collapsed' data-target='#navbar' data-toggle='collapse' type='button'>
                <span class='sr-only'>Toggle navigation</span>
                <span class='icon-bar'></span>
                <span class='icon-bar'></span>
                <span class='icon-bar'></span>
            </button>
            <div class='logo pull-left'>
                <a href='<?php echo home_url() ?>'>
                    <img alt='logo' height='115' src='<?php bloginfo('template_url')?>/img/logo.png' width='115'>
                </a>
            </div>
        </div>
        <div class='collapse navbar-collapse' id='navbar'>
                <?php wp_nav_menu(array(
                    'container'     =>  'nav',
                    'menu_class'    =>  'navbar-nav'
                )); ?>
        </div>
    </div>
</header>