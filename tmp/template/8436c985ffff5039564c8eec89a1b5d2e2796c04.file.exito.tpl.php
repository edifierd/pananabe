<?php /* Smarty version Smarty-3.1.8, created on 2016-11-29 18:34:26
         compiled from "C:\xampp\htdocs\pananabe\views\compra\exito.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12622583dbc2224ee43-45065854%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8436c985ffff5039564c8eec89a1b5d2e2796c04' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pananabe\\views\\compra\\exito.tpl',
      1 => 1480373680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12622583dbc2224ee43-45065854',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    '_layoutParams' => 0,
    'prenda' => 0,
    'venta' => 0,
    'total' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_583dbc222e5647_42663803',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583dbc222e5647_42663803')) {function content_583dbc222e5647_42663803($_smarty_tpl) {?>
<h1>Gracias <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['surname'];?>
 por tu compra: </h1>

<div class="row" style="border: double #000000; margin:15px; padding:10px; font-size:18px;">
	<div class=" col-sm-12 col-md-2">
    	<img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/prendas/thumb/thumb_<?php echo $_smarty_tpl->tpl_vars['prenda']->value['foto_frente'];?>
" class="img-responsive"
        		style="max-height:150px; margin-right:auto; margin-left:auto;">
    </div>
    <div class="col-sm-12 col-md-10">
    	<h2><?php echo $_smarty_tpl->tpl_vars['prenda']->value['nombre'];?>
, talle <?php echo $_smarty_tpl->tpl_vars['venta']->value['talle'];?>
</h2>
        <p><?php echo $_smarty_tpl->tpl_vars['prenda']->value['descripcion'];?>
</p><br />
        <p style="font-family:Arial"><b><?php echo $_smarty_tpl->tpl_vars['venta']->value['cant'];?>
 x $<?php echo $_smarty_tpl->tpl_vars['prenda']->value['precio'];?>
 = $<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</b></p>
    </div>
</div>

<div style="text-align:center">
<h3>Al recibir el pago nos pondremos en contacto contigo por medio de correo o por telefono para concretar la entrega</h3>

<h3>Cualquier duda podes comunicarte con nosotros haciendo <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
contacto">click aqui</a>.</h3>

</div><?php }} ?>