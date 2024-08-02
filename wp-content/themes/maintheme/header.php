<header>
    <div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg">
    </div>
    <?php wp_nav_menu( array(
    'theme_location' => 'header-menu',
    'container'      => 'nav',
    'container_class'=> 'header-menu-class',
    'menu_class'     => 'header-menu'
) ); ?>
</header>