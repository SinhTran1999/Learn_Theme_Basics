<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php  wp_head(); ?>
</head>
<body <?php body_class('body-class');?>>

<nav>
    <?php 
    // Kiểm tra xem có navigation menu hay không vì ta đã register trong file functions.php nên nó có
        if(has_nav_menu('header-menu')){
            // Chỉ định vị trí của navigation menu
            wp_nav_menu(array('theme_location' => 'header-menu'));
        }
    ?>
</nav>

<header class="header-area">
    <h1><a href="<?php bloginfo('url');?>"><?php bloginfo('name');?></a></h1>
    <h3><?php bloginfo('description');?></h3>
</header>
<main id="main">