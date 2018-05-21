<?php /* Smarty version Smarty-3.1.8, created on 2018-05-22 00:18:34
         compiled from "C:\xampp\htdocs\pananabe\modules\administrador\views\acl\roles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:283425b0345ba6b8b63-61894409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd96e70406b4270d553c39877e67c911b28515d40' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pananabe\\modules\\administrador\\views\\acl\\roles.tpl',
      1 => 1525300199,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '283425b0345ba6b8b63-61894409',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'roles' => 0,
    'rl' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5b0345ba72a5c2_28018277',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0345ba72a5c2_28018277')) {function content_5b0345ba72a5c2_28018277($_smarty_tpl) {?><h2>Administraci&oacute;n de roles</h2>

<?php if (isset($_smarty_tpl->tpl_vars['roles']->value)&&count($_smarty_tpl->tpl_vars['roles']->value)){?>
    <table class="table table-bordered table-condensed table-striped">
        <tr>
            <th>ID</th>
            <th>Role</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        
        <?php  $_smarty_tpl->tpl_vars['rl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['roles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rl']->key => $_smarty_tpl->tpl_vars['rl']->value){
$_smarty_tpl->tpl_vars['rl']->_loop = true;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['rl']->value['id_role'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['rl']->value['role'];?>
</td>
                <td>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
administrador/acl/permisos_role/<?php echo $_smarty_tpl->tpl_vars['rl']->value['id_role'];?>
">Permisos</a>
                </td>
                <td>
                	<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
administrador/acl/edit_role/<?php echo $_smarty_tpl->tpl_vars['rl']->value['id_role'];?>
" style="color:#090;">Editar</a>
                </td>
                <td>
                	<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
administrador/acl/delete_role/<?php echo $_smarty_tpl->tpl_vars['rl']->value['id_role'];?>
" style="color:#F00;">Eliminar</a>
                </td>
            </tr>
        <?php } ?>
    </table>
<?php }?>

<p><a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
administrador/acl/nuevo_role"><i class="icon-plus-sign icon-white"> </i> Agregar Role</a></p><?php }} ?>