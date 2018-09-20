<?php 
	$template = "default";

	define('TemplatePrefix',"./Views/{$template}/");

	define ('TemplateWebPath', "/templates/{$template}/");

	require('./Configs/Smarty/libs/Smarty.class.php');
	$smarty = new Smarty();
	$smarty->setTemplateDir(TemplatePrefix);
	$smarty->setCompileDir('./Tmp/templates_c');
	$smarty->setCacheDir('./Tmp/cache');
	$smarty->setConfigDir('./Configs/Smarty/configs');
	// $smarty->setForceCompile(true);

	$smarty->assign('teplateWebPath', TemplateWebPath);
	 // echo $smarty->testInstall();
 ?>
