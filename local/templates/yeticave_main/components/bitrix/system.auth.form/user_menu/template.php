<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

CJSCore::Init();
?>

<nav class="user-menu">

<?
if ($arResult['SHOW_ERRORS'] == 'Y' && $arResult['ERROR'])
	ShowMessage($arResult['ERROR_MESSAGE']);
?>

    <div class="user-menu__image">
        <img src="<?=SITE_TEMPLATE_PATH;?>/img/user.jpg" width="40" height="40" alt="Пользователь">
    </div>
    <div class="user-menu__logged">
        <p><?=$arResult['USER_NAME'];?></p>
        <a href="<?=$APPLICATION->GetCurPageParam("logout=yes", array(
	        "login",
	        "logout",
	        "register",
	        "forgot_password",
	        "change_password"));?>">Выйти</a>
    </div>

</nav>
