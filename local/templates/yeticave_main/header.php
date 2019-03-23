<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
        $APPLICATION -> ShowHead();
        use \Bitrix\Main\Page\Asset;
    ?>
<!--  <meta charset="UTF-8">-->
  <title><?php $APPLICATION -> ShowTitle();?></title>
    
    <?php
        Asset::getInstance() -> addCss(SITE_TEMPLATE_PATH . '/css/normalize.min.css');
        Asset::getInstance() -> addCss(SITE_TEMPLATE_PATH . '/css/style.css');
    ?>
    
<!--  <link href="css/normalize.min.css" rel="stylesheet">-->
<!--  <link href="css/style.css" rel="stylesheet">-->
</head>
<body>
<div id="panel"><?php $APPLICATION -> ShowPanel(); ?></div>

<div class="page-wrapper">

  <header class="main-header">
    <div class="main-header__container container">
      <h1 class="visually-hidden">YetiCave</h1>
        
        <?$APPLICATION->IncludeComponent(
		    "bitrix:main.include",
		    "",
		    Array(
			    "AREA_FILE_SHOW" => "file",
			    "AREA_FILE_SUFFIX" => "inc",
			    "EDIT_TEMPLATE" => "",
			    "PATH" => "/include/logo.php"
		    )
	    );?>
      
      <form class="main-header__search" method="get" action="https://echo.htmlacademy.ru">
        <input type="search" name="search" placeholder="Поиск лота">
        <input class="main-header__search-btn" type="submit" name="find" value="Найти">
      </form>
      <a class="main-header__add-lot button" href="add-lot.html">Добавить лот</a>
      <nav class="user-menu">
        <div class="user-menu__image">
          <img src="<?=SITE_TEMPLATE_PATH;?>/img/user.jpg" width="40" height="40" alt="Пользователь">
        </div>
        <div class="user-menu__logged">
          <p>Константин</p>
          <a href="login.html">Выйти</a>
        </div>
      </nav>
    </div>
  </header>

  <main class="container">
