<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}
?>
</main>

</div>

<footer class="main-footer">
	
	<?$APPLICATION->IncludeComponent(
	        "bitrix:menu",
            "bottom_menu",
            Array(
	            "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		        "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		        "DELAY" => "N",	// Откладывать выполнение шаблона меню
		        "MAX_LEVEL" => "1",	// Уровень вложенности меню
		        "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			        0 => "",
		        ),
		        "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		        "MENU_CACHE_TYPE" => "N",	// Тип кеширования
		        "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		        "ROOT_MENU_TYPE" => "bottom",	// Тип меню для первого уровня
		        "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
            ),
	        false
    );?>
    
  <div class="main-footer__bottom container">
	
	  <?$APPLICATION->IncludeComponent(
		  "bitrix:main.include",
		  "",
		  Array(
			  "AREA_FILE_SHOW" => "file",
			  "AREA_FILE_SUFFIX" => "inc",
			  "EDIT_TEMPLATE" => "",
			  "PATH" => "/include/copyright.php"
		  )
	  );?>
	
	  <?$APPLICATION->IncludeComponent(
		  "bitrix:main.include",
		  "",
		  Array(
			  "AREA_FILE_SHOW" => "file",
			  "AREA_FILE_SUFFIX" => "inc",
			  "EDIT_TEMPLATE" => "",
			  "PATH" => "/include/social.php"
		  )
	  );?>
   
	  <?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/add_lot_footer.php",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
	 
<!--    <a class="main-footer__add-lot button" href="add-lot.html">Добавить лот</a>-->
	
	  <?$APPLICATION->IncludeComponent(
		  "bitrix:main.include",
		  "",
		  Array(
			  "AREA_FILE_SHOW" => "file",
			  "AREA_FILE_SUFFIX" => "inc",
			  "EDIT_TEMPLATE" => "",
			  "PATH" => "/include/logo_developed.php"
		  )
	  );?>
   
  </div>
</footer>

</body>
</html>

