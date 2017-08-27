<!DOCTYPE html>
<html lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title><?php wp_title('-', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="container error404__container">
    <div class="row error404__row align-item-center">
        <div class="col-12">
            <h1 class="error404__title error404__title_text-shadow">404</h1>
            <div class="error404__sub-title error404__sub-title-shadow">страница не найдена :(</div>
            <div class="error404__description">Сожалеем, но вы нашли неработающую страницу или ссылку сайта. Напишите в
                отдел поддержки на <a href="mailto:support@mossebo.ru">support@mossebo.ru</a>, и мы поможем найти
                потерянное!
            </div>
            <div class="text-right">
                <a href="<?php echo get_home_url(); ?>" class="link-arrow error404__link-arrow">Перейти на главную</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
