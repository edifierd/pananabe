<?php /* Smarty version Smarty-3.1.8, created on 2018-05-22 00:18:56
         compiled from "C:\xampp\htdocs\pananabe\modules\administrador\views\acl\permisos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:315245b0345d0e82c04-62401792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51b3d13ab30cbeb126689aa7f3acefc401bb9051' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pananabe\\modules\\administrador\\views\\acl\\permisos.tpl',
      1 => 1525300199,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '315245b0345d0e82c04-62401792',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'permisos' => 0,
    'rl' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5b0345d0ef9334_42735753',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0345d0ef9334_42735753')) {function content_5b0345d0ef9334_42735753($_smarty_tpl) {?><h2>Administración de permisos</h2>

<?php if (isset($_smarty_tpl->tpl_vars['permisos']->value)&&count($_smarty_tpl->tpl_vars['permisos']->value)){?>
<table class="table table-bordered table-condensed table-striped" style="width:500px;">
    <tr>
        <th>ID</th>
        <th>Permiso</th>
        <th>Llave</th>
        <th></th>
        <th></th>
    </tr>
    
    <?php  $_smarty_tpl->tpl_vars['rl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['permisos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rl']->key => $_smarty_tpl->tpl_vars['rl']->value){
$_smarty_tpl->tpl_vars['rl']->_loop = true;
?>
    
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['rl']->value['id_permiso'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['rl']->value['permiso'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['rl']->value['key'];?>
</td>
            <td>
            	<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
administrador/acl/edit_permiso/<?php echo $_smarty_tpl->tpl_vars['rl']->value['id_permiso'];?>
" style="color:#090;">Editar</a>
            </td>
            <td>
            	<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
administrador/acl/delete_permiso/<?php echo $_smarty_tpl->tpl_vars['rl']->value['id_permiso'];?>
" style=" color:#C00">Eliminar</a>
            </td>
        </tr>
        
    <?php } ?>
    
</table>
<?php }?>

<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
administrador/acl/nuevo_permiso" class="btn btn-primary"><i class="icon-plus-sign icon-white"> </i> Agregar Permiso</a></p><?php }} ?>