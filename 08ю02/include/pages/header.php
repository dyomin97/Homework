<?
use Bitrix\Main\Page\Asset;
use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);
?>
<!DOCTYPE HTML>
<html lang="<?=LANGUAGE_ID;?>">
<head>
	<?$APPLICATION->ShowHead();?>
	<title><?$APPLICATION->ShowTitle()?></title>
	<?php
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/template_style.css");
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery-1.8.2.min.js");
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/slides.min.jquery.js");
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery.carouFredSel-6.1.0-packed.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/functions.js");

	?>
	
	
	
	<!--[if gte IE 9]><style type="text/css">.gradient {filter: none;}</style><![endif]-->
</head>
	<body>
	<div class="wrap">
		<?$APPLICATION->ShowPanel();?>
		<div class="hd_header_area">
			<div class="hd_header">
				<table>
					<tr>
						<td rowspan="2" class="hd_companyname">
							<h1><a href="">Мебельный магазин</a></h1>
						</td>
						<td rowspan="2" class="hd_txarea">
							<span class="tel"><?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/phone.php"
	)
);?></span>	<br/>	
							<?=GetMessage('WORKTIME')?> <span class="workhours">ежедневно с 9-00 до 18-00</span>						
						</td>
						<td style="width:232px">
							<form action="">
								<div class="hd_search_form" style="float:right;">
									<input placeholder="Поиск" type="text"/>
									<input type="submit" value=""/>
								</div>
							</form>
						</td>
					</tr>
					<tr>
						<td style="padding-top: 11px;">
							<span class="hd_singin"><a id="hd_singin_but_open" href="">Войти на сайт</a>
							<div class="hd_loginform">
								<span class="hd_title_loginform">Войти на сайт</span>
								<form name="" method="" action="">
					
									<input placeholder="Логин"  type="text">
									<input  placeholder="Пароль"  type="password">			
									<a href="/" class="hd_forgotpassword">Забыли пароль</a>
									
									<div class="head_remember_me" style="margin-top: 10px">
										<input id="USER_REMEMBER_frm" name="USER_REMEMBER" value="Y" type="checkbox">
										<label for="USER_REMEMBER_frm" title="Запомнить меня на этом компьютере">Запомнить меня</label>
									</div>				
									<input value="Войти" name="Login" style="margin-top: 20px;" type="submit">
									</form>
								<span class="hd_close_loginform">Закрыть</span>
							</div>
							</span><br>
							<a href="" class="hd_signup">Зарегистрироваться</a>
						</td>
					</tr>
				</table>
				<div class="nv_topnav">
					<ul>
						<li><a href=""   class="menu-img-fon"  style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/nv_home.png);" ><span></span></a></li>
						<li><a href=""><span>Компания</span></a>
							<ul>
								<li><a href="">Пункт 1</a></li>
								<li><a href="">Пункт 2</a></li>
								<li><a href="">Пункт 3</a></li>
								<li><a href="">Пункт 4</a></li>
							</ul>
						</li>
						<li><a href=""><span>Новости</span></a></li>
						<li><a href=""><span>Каталог</span></a></li>
						<li><a href=""><span>Акции</span></a>
							<ul>
								<li><a href="">Пункт 1</a>
									<ul>
										<li><a href="">Пункт 1</a></li>
										<li><a href="">Пункт 2</a></li>
									</ul>
								</li>
								<li><a href="">Пункт 2</a></li>
								<li><a href="">Пункт 3</a></li>
								<li><a href="">Пункт 4</a></li>
							</ul>
						</li>
						<li><a href=""><span>Партнерам</span></a></li>
						<li><a href=""><span>Контакты</span></a></li>
						<div class="clearboth"></div>
					</ul>
					<br><?$APPLICATION->IncludeComponent("bitrix:menu", "horizontal_multilevel1", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"COMPONENT_TEMPLATE" => "horizontal_multilevel",
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "2",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	),
	false
);?>
				</div>

			</div>
		</div>