<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/responsive-styles.css">
</head>

<header id="header">
    <div>
        <a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg"></a>
    </div>
    <?php wp_nav_menu( array(
    'theme_location' => 'header-menu',
    'container'      => 'nav',
    'container_class'=> 'header-menu-class',
    'menu_class'     => 'header-menu'
    ,'menu_id'       => 'header-main'
) ); ?>
    <div id="menu-button" class="menu-button" onclick="handleMenuButtonClick()">
        <img class="menu-button-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/menu.png">
    </div>
    <script>

        const menuContainer = document.getElementById('header-main');
        const header = document.getElementById('header');

        let isMenuOpen = false;

        function handleMenuButtonClick() {
            if (isMenuOpen){
                menuContainer.style.display = "none";
                header.style.marginBottom = "4%";
                menuContainer.classList.add('--asd');
            }
            else {
                menuContainer.style.display = "flex";
                header.style.marginBottom = "16%";
            }

            isMenuOpen = !isMenuOpen;
        }
    </script>
</header>
