<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
    <div class="header-left">
        <a href="<?php echo home_url( '/' ); ?>">
        <?php 
            $custom_logo_id = get_theme_mods();
        ?>
            <img src="<?php echo $custom_logo_id['beans_logo_image']; ?>" alt="Logo">
        </a>
        <div class="energy">energy drink</div>
    </div>
    <?php
        wp_nav_menu (array (
            'theme_location' => 'header',
            'container' => 'nav',
            'container_class' => 'commander-nav', 'nav-menu-simple',
            'menu_class' => 'nav-menu',
        ));
    ?>
</header>