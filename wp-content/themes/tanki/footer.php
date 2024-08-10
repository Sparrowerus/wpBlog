<footer>
    <div class="desktop">
        <div class="info">
            <div class="lang-container">
                <div class="current">ru</div>
            </div>
            <div class="copyright">
                © ООО «Альтернатива Гейм» <b>(ИНН 5906071031)</b> 2010–2024. Все
                права защищены.
            </div>
            <div class="menu">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',  // Вывод вторичного меню
                    'container' => false,  // Отключение оборачивающего контейнера
                    'items_wrap' => '%3$s',  // Убираем оборачивающий <ul> тег
                    'walker' => new My_Secondary_Walker_Nav_Menu(),  // Использование кастомного Walker
                ));
                ?>
            </div>
        </div>
    </div>
    <div class="mobile">
        <div class="menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer',  // Вывод вторичного меню
                'container' => false,  // Отключение оборачивающего контейнера
                'items_wrap' => '%3$s',  // Убираем оборачивающий <ul> тег
                'walker' => new My_Secondary_Walker_Nav_Menu(),  // Использование кастомного Walker
            ));
            ?>
        </div>
        <div class="info">
            <div class="lang-container">
                <div class="current">ru</div>
            </div>
            <div class="copyright">
                © ООО «Альтернатива Гейм» <b>(ИНН 5906071031)</b> 2010–2024. Все
                права защищены.
            </div>
        </div>
    </div>
</footer>
<?php wp_head();?>
</body>
</html>