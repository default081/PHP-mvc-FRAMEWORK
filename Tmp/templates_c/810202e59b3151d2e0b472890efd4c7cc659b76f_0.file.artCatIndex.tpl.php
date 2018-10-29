<?php
/* Smarty version 3.1.32-dev-38, created on 2018-09-11 22:13:16
  from '/opt/lampp/htdocs/forum/Views/default/artCatIndex.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5b9821dc4367a2_79596297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '810202e59b3151d2e0b472890efd4c7cc659b76f' => 
    array (
      0 => '/opt/lampp/htdocs/forum/Views/default/artCatIndex.tpl',
      1 => 1536696795,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9821dc4367a2_79596297 (Smarty_Internal_Template $_smarty_tpl) {
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
		<p><?php echo $_smarty_tpl->tpl_vars['val']->value['article_text'];?>
</p>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</body>
</html><?php }
}
