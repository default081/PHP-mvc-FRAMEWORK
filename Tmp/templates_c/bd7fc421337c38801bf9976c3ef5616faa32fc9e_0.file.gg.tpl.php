<?php
/* Smarty version 3.1.32-dev-38, created on 2018-08-06 18:41:25
  from '/opt/lampp/htdocs/Chat/views/default/gg.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5b687a351996b5_59093374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd7fc421337c38801bf9976c3ef5616faa32fc9e' => 
    array (
      0 => '/opt/lampp/htdocs/Chat/views/default/gg.tpl',
      1 => 1533573675,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b687a351996b5_59093374 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<div id="show"></div>

	 <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>

		<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {

			setInterval(function () {
				$('#show').load('/Chat/engine');
			});
		});

		<?php echo '</script'; ?>
>
	<h1>,lv;d</h1>
</body>
</html><?php }
}
