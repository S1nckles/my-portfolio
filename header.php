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
            
            <div class="header__logo"></div>
    
            <button class="header__burger" id="burger">
                <span></span>
            </button>

            <nav class="header__nav" id="nav">
                <ul class="header__nav-list "  id="navList">
                    <li><a class="nav__item" href="#home">Home</a></li>
                    <li><a class="nav__item" href="#projects">Projects</a></li>
                    <li><a class="nav__item" href="#experience">Experience</a></li>
                    <li><a class="nav__item" href="#footer">Contact</a></li>
                </ul>
            </nav>    
           
        </div>
    </header>