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

  <title><?php $APPLICATION -> ShowTitle();?></title>
    
    <?php
        Asset::getInstance() -> addCss(SITE_TEMPLATE_PATH . '/css/normalize.min.css');
        Asset::getInstance() -> addCss(SITE_TEMPLATE_PATH . '/css/style.css');
    ?>
    
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
	
	    <?$APPLICATION->IncludeComponent(
	            "bitrix:search.form",
                "search",
                Array(
	                "PAGE" => "#SITE_DIR#search/index.php",	// Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
		            "USE_SUGGEST" => "N",	// Показывать подсказку с поисковыми фразами
	            ),
	            false
        );?>
	
	    <?$APPLICATION->IncludeComponent(
		    "bitrix:main.include",
		    "",
		    Array(
			    "AREA_FILE_SHOW" => "file",
			    "AREA_FILE_SUFFIX" => "inc",
			    "EDIT_TEMPLATE" => "",
			    "PATH" => "/include/add_lot.php"
		    )
	    );?>
	
	    <?$APPLICATION->IncludeComponent(
		    "bitrix:system.auth.form",
		    "user_menu",
		    Array(
			    "FORGOT_PASSWORD_URL" => "",
			    "PROFILE_URL" => "",
			    "REGISTER_URL" => "",
			    "SHOW_ERRORS" => "Y"
		    )
	    );?>
     
    </div>
  </header>

  <main class="container">
