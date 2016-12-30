<?php
require './libs/Smarty.class.php';
$smarty = new Smarty();
//// 下記２フォルダの相対位置が変わるなら明示的に指定
//$smarty->setTemplateDir('./templates/');
//$smarty->setCompileDir('./templates_c/');
$smarty->assign("Name", "果物屋");
$smarty->assign("Fruits", array("みかん", "りんご", "バナナ"));
$smarty->display('hello.tpl');
?>