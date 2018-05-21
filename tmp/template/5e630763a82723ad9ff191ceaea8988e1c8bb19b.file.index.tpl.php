<?php /* Smarty version Smarty-3.1.8, created on 2018-05-22 00:17:51
         compiled from "C:\xampp\htdocs\pananabe\modules\administrador\views\contacto\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:261935b03458fbf4b88-91279388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e630763a82723ad9ff191ceaea8988e1c8bb19b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pananabe\\modules\\administrador\\views\\contacto\\index.tpl',
      1 => 1525300199,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '261935b03458fbf4b88-91279388',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mensajes' => 0,
    'm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5b03458fc395e1_40033085',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b03458fc395e1_40033085')) {function content_5b03458fc395e1_40033085($_smarty_tpl) {?><h3>Listado de Mensajes</h3>

<?php if (isset($_smarty_tpl->tpl_vars['mensajes']->value)&&count($_smarty_tpl->tpl_vars['mensajes']->value)){?>
	<?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mensajes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value){
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
    	<div class="panel panel-default">
  			<div class="panel-heading"><b>N°<?php echo $_smarty_tpl->tpl_vars['m']->value['id_contacto'];?>
</b> | <?php echo $_smarty_tpl->tpl_vars['m']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['m']->value['apellido'];?>
 - <?php echo $_smarty_tpl->tpl_vars['m']->value['correo'];?>
 - <?php echo $_smarty_tpl->tpl_vars['m']->value['telefono'];?>
 - <?php echo $_smarty_tpl->tpl_vars['m']->value['localidad'];?>
</div>
  			<div class="panel-body" style="text-align:center;">
            	<?php if ($_smarty_tpl->tpl_vars['m']->value['mensaje']!=''){?>
    				<b><?php echo $_smarty_tpl->tpl_vars['m']->value['mensaje'];?>
</b>
                <?php }else{ ?>
                	<b>Este persona no indico ningun mensaje</b>
               	<?php }?>
  			</div>
		</div>
    <?php } ?>
<?php }else{ ?>
	<h4>No se recibió ningun mensaje</h4>
<?php }?><?php }} ?>