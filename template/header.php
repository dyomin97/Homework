<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID;?>">

<head>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <?$APPLICATION->ShowHead();?>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/./css/reset.css" />
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/./css/style.css" />
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/./css/owl.carousel.css" />
    <script src="<?=SITE_TEMPLATE_PATH?>/./js/jquery.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/./js/owl.carousel.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/./js/scripts.js"></script>
    <link rel="icon" type="image/vnd.microsoft.icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico">
    <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico">
    <title><?$APPLICATION->ShowTitle()?></title>
</head>

<body>
    <!-- wrap -->
    <div class="wrap">
        <!-- header -->
        <?$APPLICATION->ShowPanel();?>
        <header class="header">
            <div class="inner-wrap">
                <div class="logo-block"><a href="" class="logo">Мебельный магазин</a>
                </div>
                <div class="main-phone-block">
                    <a href="tel:84952128506" class="phone">8 (495) 212-85-06</a>
                    <div class="shedule"><?=GetMessage('WORKTIME')?> с 9-00 до 18-00</div>
                </div>
                <div class="actions-block">
                    <form action="/" class="main-frm-search">
                        <input type="text" placeholder="Поиск">
                        <button type="submit"></button>
                    </form>
                    <nav class="menu-block">
                        <ul>
                            <li class="att popup-wrap">
                                <a id="hd_singin_but_open" href="" class="btn-toggle">Войти на сайт</a>
                                <form action="/" class="frm-login popup-block">
                                    <div class="frm-title">Войти на сайт</div>
                                    <a href="" class="btn-close">Закрыть</a>
                                    <div class="frm-row"><input type="text" placeholder="Логин"></div>
                                    <div class="frm-row"><input type="password" placeholder="Пароль"></div>
                                    <div class="frm-row"><a href="" class="btn-forgot">Забыли пароль</a></div>
                                    <div class="frm-row">
                                        <div class="frm-chk">
                                            <input type="checkbox" id="login">
                                            <label for="login">Запомнить меня</label>
                                        </div>
                                    </div>
                                    <div class="frm-row"><input type="submit" value="Войти"></div>
                                </form>
                            </li>
                            <li><a href="">Зарегистрироваться</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <!-- /header -->
        <!-- nav -->
        <nav class="nav">
            <div class="inner-wrap">
                <div class="menu-block popup-wrap">
                    <a href="" class="btn-menu btn-toggle"></a>
                    <div class="menu popup-block">
                        <ul class="">
                            <li class="main-page"><a href="">Главная</a>
                            </li>
                            <li>
                                <a href="">Компания</a>
                                <ul>
                                    <li>
                                        <a href="">Пункт 1</a>
                                        <ul>
                                            <li><a href="">Пункт 1</a>
                                            </li>
                                            <li><a href="">Пункт 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="">Пункт 2</a>
                                    </li>
                                    <li><a href="">Пункт 3</a>
                                    </li>
                                    <li><a href="">Пункт 4</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="">Новости</a>
                            </li>
                            <li>
                                <a href="">Каталог</a>
                                <ul>
                                    <li>
                                        <a href="">Пункт 1</a>
                                        <ul>
                                            <li><a href="">Пункт 1</a>
                                            </li>
                                            <li><a href="">Пункт 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="">Пункт 2</a>
                                    </li>
                                    <li><a href="">Пункт 3</a>
                                    </li>
                                    <li><a href="">Пункт 4</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="">Фотогалерея</a>
                            </li>
                            <li><a href="">Партнерам</a>
                            </li>
                            <li><a href="">Контакты</a>
                            </li>
                        </ul>
                        <a href="" class="btn-close"></a>
                    </div>
                    <div class="menu-overlay"></div>
                </div>
            </div>
        </nav>
        <!-- /nav -->
        <!-- breadcrumbs -->
        <div class="breadcrumbs-box">
            <div class="inner-wrap">
                <a href="">Главная</a>
                <a href="">Мебель</a>
                <span>Выставки и события</span>
            </div>
        </div>
        <div class="page">
            <!-- content box -->
            <div class="content-box">
                <!-- content -->
                <div class="content">
                    <div class="cnt">
                        <header>
                            <h1><?$APPLICATION->ShowTitle(FALSE)?></h1>
                        </header>
                        <hr>
         