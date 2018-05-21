<?php /* Smarty version Smarty-3.1.8, created on 2018-05-22 00:16:25
         compiled from "C:\xampp\htdocs\pananabe\modules\administrador\views\prendas\listado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56305b0345390a0d21-58758465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abe15b76dfd23b4c1ea0c50d89076e2e7ee9bd62' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pananabe\\modules\\administrador\\views\\prendas\\listado.tpl',
      1 => 1525300199,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56305b0345390a0d21-58758465',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'prendas' => 0,
    'p' => 0,
    'categoriasModel' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5b034539241574_92140369',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b034539241574_92140369')) {function content_5b034539241574_92140369($_smarty_tpl) {?><h3>Listado de Prendas</h3>

<div class="btn-group" style="margin-bottom:20px;">
	<a href="javascript:history.back()" class="btn btn-default"> <i class="fa fa-arrow-left fa-lg"></i> Atras</a></li>
	<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
administrador/prendas/nuevo" class="btn btn-default"> Nueva Prenda </a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
administrador/prendas/listado/act" class="btn btn-default"> Activas </a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
administrador/prendas/listado/fin" class="btn btn-default"> Finalizadas </a>
</div>


<?php if (isset($_smarty_tpl->tpl_vars['prendas']->value)&&count($_smarty_tpl->tpl_vars['prendas']->value)){?>
<div class="col-sm-12 hidden-xs" style="margin-bottom:15px;">
	<div class="row panel">
         <div class="col-sm-2" style="text-align:center;">Foto</div>
         <div class="col-sm-2" style="text-align:center;">Temporada</div>
         <div class="col-sm-2" style="text-align:center;">Precio</div>
         <div class="col-sm-2" style="text-align:center;">Descuento</div>
         <div class="col-sm-2" style="text-align:center;">Categoria</div>
         <div class="col-sm-2" style="text-align:center;">Acciones</div>
	</div>
</div>

<div class="row">
	<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prendas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
    	<div class="col-sm-12">
        	<div class="panel panel-default">
  				<div class="panel-heading"><b><?php echo $_smarty_tpl->tpl_vars['p']->value['nombre'];?>
</b></div>
  				<div class="panel-body row">
    				<div class="col-sm-2" style="text-align:center;">
                    	<img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/prendas/thumb/thumb_<?php echo $_smarty_tpl->tpl_vars['p']->value['foto_frente'];?>
" style="max-height:75px;"/>
                    </div>
                    <div class="col-sm-2" style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['p']->value['temporada'];?>
</div>
                    <div class="col-sm-2" style="text-align:center;">$ <?php echo $_smarty_tpl->tpl_vars['p']->value['precio'];?>
</div>
                    <div class="col-sm-2" style="text-align:center;">
                        <?php if ($_smarty_tpl->tpl_vars['p']->value['descuento']==0){?>
                            Sin Descuento
                        <?php }else{ ?>
                            % <?php echo $_smarty_tpl->tpl_vars['p']->value['descuento'];?>

                        <?php }?>
                    </div>
                    <div class="col-sm-2" style="text-align:center;">
                    	<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoriasModel']->value->getCategoriasPrenda($_smarty_tpl->tpl_vars['p']->value['id']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                        	<?php echo $_smarty_tpl->tpl_vars['c']->value['nombre'];?>
<br />
                        <?php } ?>
                    </div>
                    <div class="col-sm-2" style="text-align:center;">
                        <?php if ($_smarty_tpl->tpl_vars['p']->value['estado']=='act'){?>
                        	<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
administrador/prendas/editar/<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" class="btn btn-primary btn-xs" style="margin-right:10px;">
                        	<i class="fa fa-pencil fa-2x"></i>
                        	</a>
                        	<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
administrador/prendas/eliminar/<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" 
                       		onClick="javascript: return confirm('¿Estas seguro?');" class="btn btn-danger btn-xs" style="margin-right:10px;"><i class="fa fa-trash fa-2x"></i></a>
                        <?php }else{ ?>
                        	<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
administrador/prendas/reactivar/<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" 
                        	onClick="javascript: return confirm('¿Estas seguro?');" class="btn btn-warning btn-xs" style="margin-right:10px;">
                            	<i class="fa fa-check-square-o fa-2x"></i> Reactivar
                            </a>
                        <?php }?>
                    </div>
                </div>
			</div>
        </div>
    <?php } ?>
</div>
<?php }else{ ?>
<h4 style="margin-top:25px;">No se han encontrado prendas.</h4>
<?php }?><?php }} ?>