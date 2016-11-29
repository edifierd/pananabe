<?php /* Smarty version Smarty-3.1.8, created on 2016-11-29 18:46:26
         compiled from "C:\xampp\htdocs\pananabe\views\compra\mercadoPago.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13385583dbc1c8fc9f1-26298743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d33668b2b7584018ff33f35e8414a4bc9e4a84c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pananabe\\views\\compra\\mercadoPago.tpl',
      1 => 1480441556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13385583dbc1c8fc9f1-26298743',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_583dbc1c93f0a5_65732663',
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
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583dbc1c93f0a5_65732663')) {function content_583dbc1c93f0a5_65732663($_smarty_tpl) {?>

<h1>Estas por comprar: </h1>

<div class="row" style="border: double #000000; margin:15px; padding:10px; font-size:18px;">
	<div class=" col-sm-12 col-md-2">
    	<img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/prendas/thumb/thumb_<?php echo $_smarty_tpl->tpl_vars['datos']->value['foto_frente'];?>
" class="img-responsive"
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
<a href="<?php echo $_smarty_tpl->tpl_vars['preference']->value['response']['init_point'];?>
" name="MP-Checkout" class="btn btn-primary" style="color:#FFF; width:25%;" id="btnvalidar" onclick="window.open(this.href,'_blank');return false;">
	<b>Finalizar</b>
</a>
<!--<script type="text/javascript" src="//resources.mlstatic.com/mptools/render.js"></script>-->
</p>

<script type="text/javascript">
    	var _ventaId_ = '<?php echo $_smarty_tpl->tpl_vars['id_venta']->value;?>
';
</script><?php }} ?>