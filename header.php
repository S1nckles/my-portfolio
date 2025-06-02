<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class="container container-header">
            
            <div class="header__logo">IL</div>
    
            <button class="header__burger" id="burger">
                <span></span>
            </button>

            <nav class="header__nav" id="nav">
                <?php
                    wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'container' => 'nav',
                    'container_class' => 'header__nav',
                    'menu_class' => 'header__nav-list'
                    ));
                    ?>
            </nav>    
        </div>
    </header>