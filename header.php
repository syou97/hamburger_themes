<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="l-main__wrapper">
        <div class="l-main">
            <header class="l-header">
                <button class="c-btn--header-menu">Menu</button>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><h1 class="l-header__tit"><?php bloginfo('name'); ?></h1></a>
                    <?php get_search_form(); ?>
            </header>