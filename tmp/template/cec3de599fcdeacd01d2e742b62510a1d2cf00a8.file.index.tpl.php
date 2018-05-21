<?php /* Smarty version Smarty-3.1.8, created on 2018-05-22 00:17:41
         compiled from "C:\xampp\htdocs\pananabe\modules\administrador\views\categorias\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:244405b034585bdcf27-87696692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cec3de599fcdeacd01d2e742b62510a1d2cf00a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pananabe\\modules\\administrador\\views\\categorias\\index.tpl',
      1 => 1525300199,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '244405b034585bdcf27-87696692',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'categorias' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5b034585c48824_38389401',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b034585c48824_38389401')) {function content_5b034585c48824_38389401($_smarty_tpl) {?><h3>Listado de Categorias</h3>

<div class="btn-group" style="margin-bottom:20px;">
	<a href="javascript:history.back()" class="btn btn-default"> <i class="fa fa-arrow-left fa-lg"></i> Atras</a></li>
	<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
administrador/categorias/nuevo" class="btn btn-default"> Nueva Categoria </a>
</div>

<?php if (isset($_smarty_tpl->tpl_vars['categorias']->value)&&count($_smarty_tpl->tpl_vars['categorias']->value)){?>
<table class="table">
	<tr>
    	<th>Genero</th>
        <th>Nombre</th>
        <th>Acciones</th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
    	<tr>
    		<td><?php echo $_smarty_tpl->tpl_vars['c']->value['genero'];?>
</td>
        	<td><?php echo $_smarty_tpl->tpl_vars['c']->value['nombre'];?>
</td>
        	<td>
            	<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
administrador/categorias/eliminar/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" 
                onClick="javascript: return confirm('¿Estas seguro? Esto finalizara las prendas con esta categoria.');" 
                class="btn btn-danger btn-xs" style="margin-right:10px;"><i class="fa fa-trash fa-2x"></i></a>
            </td>
   		</tr>
    <?php } ?>
</table>
<?php }else{ ?>
	<h3 style="margin-top:30px;">No se han cargado categorias</h3>
<?php }?><?php }} ?>