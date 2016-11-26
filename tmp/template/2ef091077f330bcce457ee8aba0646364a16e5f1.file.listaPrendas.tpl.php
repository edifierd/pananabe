<?php /* Smarty version Smarty-3.1.8, created on 2016-11-26 21:54:46
         compiled from "C:\xampp\htdocs\pananabe\views\prenda\ajax\listaPrendas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:297765839f696a3c567-28532761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ef091077f330bcce457ee8aba0646364a16e5f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pananabe\\views\\prenda\\ajax\\listaPrendas.tpl',
      1 => 1476477044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '297765839f696a3c567-28532761',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prendas' => 0,
    '_layoutParams' => 0,
    'datos' => 0,
    'paginacion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5839f696bba719_73024540',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5839f696bba719_73024540')) {function content_5839f696bba719_73024540($_smarty_tpl) {?>


<div id="lista_registros">
<?php if (isset($_smarty_tpl->tpl_vars['prendas']->value)&&count($_smarty_tpl->tpl_vars['prendas']->value)){?>

<div class="row" style="margin-bottom:25px;">
     <?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prendas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
        <div class="col-xs-12 col-sm-6 col-md-3" style=" padding:15px; ">
        	<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
prenda/show/<?php echo $_smarty_tpl->tpl_vars['datos']->value['id'];?>
" onmouseover="transparenciaImagen(<?php echo $_smarty_tpl->tpl_vars['datos']->value['id'];?>
,0.5)" onmouseout="transparenciaImagen(<?php echo $_smarty_tpl->tpl_vars['datos']->value['id'];?>
,1)">
        	<div class="row">
            	<div class="col-md-12">
                	<img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/prendas/<?php echo $_smarty_tpl->tpl_vars['datos']->value['foto_frente'];?>
.jpg" class="img-responsive" id="<?php echo $_smarty_tpl->tpl_vars['datos']->value['id'];?>
" 
                    	 style="margin-right:auto; margin-left:auto; width:240px; height:320px;"/>
                </div>
                <div class="col-md-12" style="text-align:center;">
                	<b><?php echo $_smarty_tpl->tpl_vars['datos']->value['nombre'];?>
</b>
                </div>
                <div class="col-md-12" style="text-align:center;">
                	$<?php echo $_smarty_tpl->tpl_vars['datos']->value['precio'];?>

                </div>
        	</div>
            </a>
        </div>
    <?php } ?>
</div>
<?php }else{ ?>

<p><strong>No hay prendas publicadas!</strong></p>

<?php }?>

<?php echo (($tmp = @$_smarty_tpl->tpl_vars['paginacion']->value)===null||$tmp==='' ? '' : $tmp);?>

</div><?php }} ?>