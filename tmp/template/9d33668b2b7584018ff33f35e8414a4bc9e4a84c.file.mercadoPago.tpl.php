<?php /* Smarty version Smarty-3.1.8, created on 2016-11-26 21:43:10
         compiled from "C:\xampp\htdocs\pananabe\views\compra\mercadoPago.tpl" */ ?>
<?php /*%%SmartyHeaderCode:254625839f3de692336-69684695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d33668b2b7584018ff33f35e8414a4bc9e4a84c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pananabe\\views\\compra\\mercadoPago.tpl',
      1 => 1477442454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '254625839f3de692336-69684695',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
    'talle' => 0,
    'cantidad' => 0,
    'total' => 0,
    'preference' => 0,
    'id_venta' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5839f3de734206_09403146',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5839f3de734206_09403146')) {function content_5839f3de734206_09403146($_smarty_tpl) {?>

<h1>Estas por comprar: </h1>

<div class="row" style="border: double #000000; margin:15px; padding:10px; font-size:18px;">
	<div class=" col-sm-12 col-md-2">
    	<img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/prendas/<?php echo $_smarty_tpl->tpl_vars['datos']->value['foto_frente'];?>
.jpg" class="img-responsive"
        		style="max-height:150px; margin-right:auto; margin-left:auto;">
    </div>
    <div class="col-sm-12 col-md-10">
    	<h2><?php echo $_smarty_tpl->tpl_vars['datos']->value['nombre'];?>
, talle <?php echo $_smarty_tpl->tpl_vars['talle']->value;?>
</h2>
        <p><?php echo $_smarty_tpl->tpl_vars['datos']->value['descripcion'];?>
</p><br />
        <p style="font-family:Arial"><b><?php echo $_smarty_tpl->tpl_vars['cantidad']->value;?>
 x $<?php echo $_smarty_tpl->tpl_vars['datos']->value['precio'];?>
 = $<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</b></p>
    </div>
</div>

<h3>Tus datos han sido ingresados correctamente, haga click en finalizar para proceder con el pago.</h3>

<p style=" text-align:center;">
<a href="<?php echo $_smarty_tpl->tpl_vars['preference']->value['response']['sandbox_init_point'];?>
" target="_blank" name="MP-Checkout" class="btn btn-primary" style="color:#FFF; width:25%;" id="btnvalidar">
	<b>Finalizar</b>
</a>
<!--<script type="text/javascript" src="//resources.mlstatic.com/mptools/render.js"></script>-->
</p>

<script type="text/javascript">
    	var _ventaId_ = '<?php echo $_smarty_tpl->tpl_vars['id_venta']->value;?>
';
</script><?php }} ?>