<?php
/* Smarty version 3.1.32-dev-38, created on 2018-09-10 22:03:49
  from '/opt/lampp/htdocs/forum/Views/default/allArticles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5b96ce25cbf0e3_10506754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa387aa54c2ee0dbdbd844f0df2585e56fc50dda' => 
    array (
      0 => '/opt/lampp/htdocs/forum/Views/default/allArticles.tpl',
      1 => 1536609824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b96ce25cbf0e3_10506754 (Smarty_Internal_Template $_smarty_tpl) {
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
		<a href="http://localhost/forum/article/<?php echo $_smarty_tpl->tpl_vars['val']->value['article_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['article_title'];?>
</a>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</body>
</html><?php }
}
