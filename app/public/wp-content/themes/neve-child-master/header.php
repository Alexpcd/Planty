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
// Récupérer l'URL du logo
$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );

// Vérifier si un logo est défini
if ( ! empty( $logo_url ) ) {
    echo '<a href="' . esc_url( home_url( '/' ) ) . '" rel="home">';
    echo '<img src="' . esc_url( $logo_url ) . '" alt="' . get_bloginfo( 'name' ) . '">';
    echo '</a>';
} else {
    // Si aucun logo n'est défini, afficher le texte du site
    echo '<h1><a href="' . esc_url( home_url( '/' ) ) . '">' . get_bloginfo( 'name' ) . '</a></h1>';
}
?>

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