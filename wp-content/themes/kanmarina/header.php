<!DOCTYPE html>
<html lang="ru-RU" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Марина Кан</title>

<!--    <script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>-->

<!--
    <script>
        $(document).ready(function() {

            $("#menu-main-menu").prepend('<li id="menu-item-87" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-87"><a href="http://www.kanmarina.com">Главная</a></li>');
        });

    </script>
-->

    <?php wp_head(); ?>
</head>

<body class="home blog custom-background">

    <div id="top-bar">

        <div class="container">

            <div id="navigation-wrapper">
                <?php
                    wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'menu_class' => 'menu',
                            'menu_id' => '',
                            'depth' => 1
                        )
                    );
                ?>
            </div>

            <div id="top-social">
                <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                <a href="#" target="_blank"><i class="fa fa-heart"></i></a>
                <a href="" target="_blank"><i class="fa fa-rss"></i></a>
            </div>

            <div id="top-search">
                <a href="#"><i class="fa fa-search"></i></a>
            </div>
            <div class="show-search">
                <form role="search" method="get" id="searchform" action="http://kanmarina.com">
                    <div>
                        <input type="text" placeholder="Введите запрос и нажмите Enter…" name="s" id="s" />
                    </div>
                </form>
            </div>

        </div>

    </div>

    <header id="header">

        <div class="container">

            <div id="logo">

                <h1>
                    <a href="http://www.kanmarina.com"><img src="http://www.kanmarina.com/wp-content/themes/kanmarina/images/logo.png" alt="Марина Кан" /></a>
                </h1>
            </div>

        </div>

        <div class="over">
        </div>

        </div>
    </header>
