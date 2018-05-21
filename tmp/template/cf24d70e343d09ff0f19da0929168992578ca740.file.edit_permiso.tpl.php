<?php /* Smarty version Smarty-3.1.8, created on 2018-05-22 00:19:01
         compiled from "C:\xampp\htdocs\pananabe\modules\administrador\views\acl\edit_permiso.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57735b0345d54b7368-68884359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf24d70e343d09ff0f19da0929168992578ca740' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pananabe\\modules\\administrador\\views\\acl\\edit_permiso.tpl',
      1 => 1525300199,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57735b0345d54b7368-68884359',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5b0345d552c555_03111511',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0345d552c555_03111511')) {function content_5b0345d552c555_03111511($_smarty_tpl) {?><style type="text/css">
    table.table td { vertical-align: middle; }
    table.table td input { margin: 0; }
</style>

<h2>Editar Permiso</h2>

<form name="form1" method="post" action="">
    <input type="hidden" name="guardar" value="1">
    
    <table class="table table-bordered" style="width: 350px;">
        <tr>
            <td style="text-align: right;">Permiso: </td>
            <td><input type="text" name="permiso" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['permiso'])===null||$tmp==='' ? '' : $tmp);?>
"></td>
        </tr>

        <tr>
            <td style="text-align: right;">Key: </td>
            <td><input type="text" name="key" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['key'])===null||$tmp==='' ? '' : $tmp);?>
"></td>
        </tr>
    </table>
        
    <p><button type="submit" class="btn btn-primary"><li class="icon-ok icon-white"> </li> Guardar</button></p>
</form><?php }} ?>