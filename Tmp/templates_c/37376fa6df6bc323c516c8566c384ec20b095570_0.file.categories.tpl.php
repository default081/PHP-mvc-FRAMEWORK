<?php
/* Smarty version 3.1.32-dev-38, created on 2018-09-11 21:28:55
  from '/opt/lampp/htdocs/forum/Views/default/categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5b98177709c952_84605838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37376fa6df6bc323c516c8566c384ec20b095570' => 
    array (
      0 => '/opt/lampp/htdocs/forum/Views/default/categories.tpl',
      1 => 1536694074,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b98177709c952_84605838 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
		<a href="http://localhost/forum/categoriesArt/<?php echo $_smarty_tpl->tpl_vars['val']->value['categorie_title'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['categorie_title'];?>
</a> 	<br>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</body>
</html><?php }
}
