<?php /* Smarty version Smarty-3.1.8, created on 2016-12-19 01:18:31
         compiled from "C:\xampp\htdocs\pananabe\modules\administrador\views\upload\uploader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20644585726b756d3b4-24492954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28bb08f1b49dddb14b1dc7614dcc44d13086cdb3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pananabe\\modules\\administrador\\views\\upload\\uploader.tpl',
      1 => 1482106666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20644585726b756d3b4-24492954',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_585726b759fe02_47908082',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'imagen' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585726b759fe02_47908082')) {function content_585726b759fe02_47908082($_smarty_tpl) {?>    	
        
<img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/prendas/<?php echo $_smarty_tpl->tpl_vars['imagen']->value;?>
.jpg" />
<?php }} ?>