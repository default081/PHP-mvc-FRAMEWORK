<?php
/* Smarty version 3.1.32-dev-38, created on 2018-09-10 22:03:48
  from '/opt/lampp/htdocs/forum/Views/default/articleById.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5b96ce24759658_31849811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c37203dc5f4f2b8baeb84a6ae242d102d111c0c' => 
    array (
      0 => '/opt/lampp/htdocs/forum/Views/default/articleById.tpl',
      1 => 1536609827,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b96ce24759658_31849811 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['acticleData']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>

		<p><?php echo $_smarty_tpl->tpl_vars['val']->value['article_content'];?>
</p>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</body>
</html><?php }
}
