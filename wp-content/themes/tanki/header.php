<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <?php wp_head();?>
</head>
<body>
<header>
    <div class="header-content">
        <a href="#" class="logo">
            <div class="logo-image"></div>
        </a>
        <nav>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'items_wrap' => '%3$s',
                'walker' => new My_Walker_Nav_Menu(),
            ));
            ?>
        </nav>
        <div class="second-menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'secondary',  // Вывод вторичного меню
                'container' => false,  // Отключение оборачивающего контейнера
                'items_wrap' => '%3$s',  // Убираем оборачивающий <ul> тег
                'walker' => new My_Secondary_Walker_Nav_Menu(),  // Использование кастомного Walker
            ));
            ?>
        </div>

        <a href="#" class="question">
            <div class="question-image"></div>
        </a>
    </div>
</header>
<div class="mobile-header">
    <div class="burger-menu-icon">
        <span></span><span></span><span></span><span></span><span></span
        ><span></span><span></span><span></span><span></span>
    </div>
    <a href="index.html" class="logo">
        <div class="logo-image"></div>
    </a>
    <a href="#" class="question">
        <div class="question-image"></div>
    </a>
</div>
<div class="burger-menu">
    <div class="inner">
        <div class="close-icon close-burger">
            <div class="wrapper">
                <span></span><span></span><span></span><span></span><span></span
                ><span></span><span></span><span></span><span></span>
            </div>
        </div>
        <nav>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'mobile',  // Вывод вторичного меню
                'container' => false,  // Отключение оборачивающего контейнера
                'items_wrap' => '%3$s',  // Убираем оборачивающий <ul> тег
                'walker' => new My_Secondary_Walker_Nav_Menu(),  // Использование кастомного Walker
            ));
            ?>
        </nav>
        <div class="second-menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'secondary',  // Вывод вторичного меню
                'container' => false,  // Отключение оборачивающего контейнера
                'items_wrap' => '%3$s',  // Убираем оборачивающий <ul> тег
                'walker' => new My_Secondary_Walker_Nav_Menu(),  // Использование кастомного Walker
            ));
            ?>
        </div>
    </div>
</div>