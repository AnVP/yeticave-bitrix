<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<section class="lots">
    <div class="lots__header">
        <h2>Открытые лоты</h2>
    </div>
    <ul class="lots__list">
	
	    <?foreach($arResult["ITEMS"] as $cell=>$arElement):?>
	    <?
	    $this->AddEditAction($arElement['ID'], $arElement['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
	    $this->AddDeleteAction($arElement['ID'], $arElement['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCS_ELEMENT_DELETE_CONFIRM')));
	    ?>

        <li class="lots__item lot" id="<?=$this->GetEditAreaId($arElement['ID']);?>">

            <div class="lot__image">
                    <img src="<?=$arElement["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arElement["NAME"]?>"/>
            </div>
            <div class="lot__info">
                <span class="lot__category"><?=$arElement["PROPERTIES"]["CATEGORY"]["VALUE"]?></span>
                <h3 class="lot__title"><a class="text-link" href="<?=$arElement["DETAIL_PAGE_URL"]?>"><?=$arElement["NAME"]?></a></h3>
                <div class="lot__state">
                    <div class="lot__rate">
                        <span class="lot__amount"><?=$arElement["PROPERTIES"]["STATE"]["VALUE"]?></span>
                        <span class="lot__cost"><?=$arElement["PROPERTIES"]["PRICE"]["VALUE"]?><b class="rub">р</b></span>
                    </div>
                    <div class="lot__timer timer">
	                    <?=$arElement["PROPERTIES"]["TIME"]["VALUE"]?>
                    </div>
                </div>
            </div>
		
		    <?/*foreach($arElement["DISPLAY_PROPERTIES"] as $pid=>$arProperty):*/?><!--
			    <?/*=$arProperty["NAME"]*/?>: <?/*
			    if(is_array($arProperty["DISPLAY_VALUE"]))
				    echo implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);
			    else
				    echo $arProperty["DISPLAY_VALUE"];*/?>
		    <?/*endforeach*/?>
		-->
		    <?=$arElement["PREVIEW_TEXT"]?>
		
		
		    <?if(is_array($arElement["OFFERS"]) && !empty($arElement["OFFERS"])):?>
			    <?foreach($arElement["OFFERS"] as $arOffer):?>
				    <?foreach($arOffer["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
					    <?=$arProperty["NAME"]?>: <?
					    if(is_array($arProperty["DISPLAY_VALUE"]))
						    echo implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);
					    else
						    echo $arProperty["DISPLAY_VALUE"];?>
				    <?endforeach?>
				    <?foreach($arOffer["PRICES"] as $code=>$arPrice):?>
					    <?if($arPrice["CAN_ACCESS"]):?>
						    <?=$arResult["PRICES"][$code]["TITLE"];?>
						    <?if($arPrice["DISCOUNT_VALUE"] < $arPrice["VALUE"]):?>
                                <s><?=$arPrice["PRINT_VALUE"]?></s> <?=$arPrice["PRINT_DISCOUNT_VALUE"]?>
						    <?else:?>
							    <?=$arPrice["PRINT_VALUE"]?>
						    <?endif?>
					    <?endif;?>
				    <?endforeach;?>
				    <?if($arOffer["CAN_BUY"]):?>
                        <form action="<?=POST_FORM_ACTION_URI?>" method="post" enctype="multipart/form-data">
                            <input type="text" name="<?echo $arParams["PRODUCT_QUANTITY_VARIABLE"]?>" value="1" size="5">
                            <input type="hidden" name="<?echo $arParams["ACTION_VARIABLE"]?>" value="BUY">
                            <input type="hidden" name="<?echo $arParams["PRODUCT_ID_VARIABLE"]?>" value="<?echo $arOffer["ID"]?>">
                            <input type="submit" name="<?echo $arParams["ACTION_VARIABLE"]."BUY"?>" value="<?echo GetMessage("CATALOG_BUY")?>">
                            <input type="submit" name="<?echo $arParams["ACTION_VARIABLE"]."ADD2BASKET"?>" value="<?echo GetMessage("CATALOG_ADD")?>">
                        </form>
				    <?elseif(count($arResult["PRICES"]) > 0):?>
					    <?=GetMessage("CATALOG_NOT_AVAILABLE")?>
				    <?endif?>
			    <?endforeach;?>
		    <?else:?>
			    <?foreach($arElement["PRICES"] as $code=>$arPrice):?>
				    <?if($arPrice["CAN_ACCESS"]):?>
					    <?=$arResult["PRICES"][$code]["TITLE"];?>:&nbsp;&nbsp;
					    <?if($arPrice["DISCOUNT_VALUE"] < $arPrice["VALUE"]):?>
                            <s><?=$arPrice["PRINT_VALUE"]?></s> <?=$arPrice["PRINT_DISCOUNT_VALUE"]?>
					    <?else:?>
						    <?=$arPrice["PRINT_VALUE"]?>
					    <?endif;?>
				    <?endif;?>
			    <?endforeach;?>
			
			    <?if($arElement["CAN_BUY"]):?>
                    <form action="<?=POST_FORM_ACTION_URI?>" method="post" enctype="multipart/form-data">
                        <input type="text" name="<?echo $arParams["PRODUCT_QUANTITY_VARIABLE"]?>" value="1" size="5">
                        <input type="hidden" name="<?echo $arParams["ACTION_VARIABLE"]?>" value="BUY">
                        <input type="hidden" name="<?echo $arParams["PRODUCT_ID_VARIABLE"]?>" value="<?echo $arElement["ID"]?>">
                        <input type="submit" name="<?echo $arParams["ACTION_VARIABLE"]."BUY"?>" value="<?echo GetMessage("CATALOG_BUY")?>">
                        <input type="submit" name="<?echo $arParams["ACTION_VARIABLE"]."ADD2BASKET"?>" value="<?echo GetMessage("CATALOG_ADD")?>">
                    </form>
			    <?elseif((count($arResult["PRICES"]) > 0) || is_array($arElement["PRICE_MATRIX"])):?>
				    <?=GetMessage("CATALOG_NOT_AVAILABLE")?>
			    <?endif?>
		    <?endif?>

        </li>
	    <?endforeach;?>
    </ul>
</section>

		

