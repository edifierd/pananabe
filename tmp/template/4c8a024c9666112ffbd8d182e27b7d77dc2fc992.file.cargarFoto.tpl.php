<?php /* Smarty version Smarty-3.1.8, created on 2016-11-24 23:47:11
         compiled from "C:\xampp\htdocs\pananabe\modules\administrador\views\index\cargarFoto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2925758376d76b35eb2-89462673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c8a024c9666112ffbd8d182e27b7d77dc2fc992' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pananabe\\modules\\administrador\\views\\index\\cargarFoto.tpl',
      1 => 1480027621,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2925758376d76b35eb2-89462673',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_58376d7704a931_96319186',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'imagen' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58376d7704a931_96319186')) {function content_58376d7704a931_96319186($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
	<img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/prendas/<?php echo $_smarty_tpl->tpl_vars['imagen']->value;?>
" />
</body>
</html>
<?php }} ?>