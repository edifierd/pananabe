<?php /* Smarty version Smarty-3.1.8, created on 2016-11-28 22:24:15
         compiled from "C:\xampp\htdocs\pananabe\views\prenda\show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11072583ca07f60d206-76227938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97917f9a16cd2da09ec111233a2a12ae3a9f40ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pananabe\\views\\prenda\\show.tpl',
      1 => 1480357630,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11072583ca07f60d206-76227938',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_583ca07f6d17e6_22061070',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583ca07f6d17e6_22061070')) {function content_583ca07f6d17e6_22061070($_smarty_tpl) {?>
<div class="row">
	<div class="col-xs-12 col-sm-6 col-md-6" >
    	<div class="row">
        	<div class="col-md-12" style="height:500px;">
            	<img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/prendas/<?php echo $_smarty_tpl->tpl_vars['datos']->value['foto_frente'];?>
" class="img-responsive fotoMax" id="5000"  style="max-height:500px; "
                title="<?php echo $_smarty_tpl->tpl_vars['datos']->value['nombre'];?>
"/>
            </div>
            <div class="col-md-12">
            	<a onmouseover="cambiarImagen(5000,'<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/prendas/<?php echo $_smarty_tpl->tpl_vars['datos']->value['foto_frente'];?>
')" href="javascript:void(0);">
                	<img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/prendas/<?php echo $_smarty_tpl->tpl_vars['datos']->value['foto_frente'];?>
" class="img-responsive fotoMin" alt="<?php echo $_smarty_tpl->tpl_vars['datos']->value['nombre'];?>
 foto frente"/>
                </a>
                <a onmouseover="cambiarImagen(5000,'<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/prendas/<?php echo $_smarty_tpl->tpl_vars['datos']->value['foto_perfil'];?>
')" href="javascript:void(0);">
                	<img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/prendas/<?php echo $_smarty_tpl->tpl_vars['datos']->value['foto_perfil'];?>
" class="img-responsive fotoMin"  alt="<?php echo $_smarty_tpl->tpl_vars['datos']->value['nombre'];?>
 foto perfil"/>
                </a>
                <a onmouseover="cambiarImagen(5000,'<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/prendas/<?php echo $_smarty_tpl->tpl_vars['datos']->value['foto_atras'];?>
')" href="javascript:void(0);">
                	<img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/prendas/<?php echo $_smarty_tpl->tpl_vars['datos']->value['foto_atras'];?>
" class="img-responsive fotoMin"  alt="<?php echo $_smarty_tpl->tpl_vars['datos']->value['nombre'];?>
 foto atras"/>
                </a>
            </div>
        </div>
	</div>
    <div class="col-xs-12 col-sm-6 col-md-6" style="text-align:left; font-size:18px;">
    	<h1><?php echo $_smarty_tpl->tpl_vars['datos']->value['nombre'];?>
</h1>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6" style="text-align:left; font-size:18px;">
        <p><?php echo $_smarty_tpl->tpl_vars['datos']->value['descripcion'];?>
</p>
   	</div>
    <div class="col-xs-12 col-sm-6 col-md-6" style="text-align:left; font-size:18px;">
        <p style="color:#999; font-size:28px; font-family:'Arial Black';">$<?php echo $_smarty_tpl->tpl_vars['datos']->value['precio'];?>
</p>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6" style="text-align:left; font-size:18px;">     
        <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['img'];?>
formasDePago.png" class="img-responsive" style="max-width:60%; margin-top:15px; margin-bottom:20px;" 
        	 alt="Formas de pago" title="Formas de pago"/>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6" style="text-align:left; font-size:18px;">
        <p style="float:left; padding-top:6px; margin-right:10px;">Talles disponibles:</p>
        <div class="cuboTalle" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['datos']->value['S'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1==0){?> style="background-color:#F00;" <?php }?> >S</div>
        <div class="cuboTalle" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['datos']->value['M'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2==0){?> style="background-color:#F00;" <?php }?> >M</div>
        <div class="cuboTalle" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['datos']->value['L'];?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3==0){?> style="background-color:#F00;" <?php }?> >L</div>
        <div class="cuboTalle" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['datos']->value['XL'];?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4==0){?> style="background-color:#F00;" <?php }?> >XL</div>
        
        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
prenda/tabla_de_talles" class="btn btn-info btn-xs btn-talles" title="Tabla de talles">Ver tabla de talles</a> 
    </div>
    
    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['datos']->value['S'];?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['datos']->value['M'];?>
<?php $_tmp6=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['datos']->value['L'];?>
<?php $_tmp7=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['datos']->value['XL'];?>
<?php $_tmp8=ob_get_clean();?><?php if ($_tmp5>0||$_tmp6>0||$_tmp7>0||$_tmp8>0){?>
    <div class="col-xs-12 col-sm-6 col-md-3" style="text-align:left; font-size:18px; margin-top:25px;">
    	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
compra/user_email/<?php echo $_smarty_tpl->tpl_vars['datos']->value['id'];?>
" enctype="multipart/form-data" style="">  
            <div class="form-group">
            Elegir Talle 
        	<select name="talle" id="talle" style="margin-left:5px;">
            	<option value="" selected="selected">Seleccione</option>
  				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['datos']->value['S'];?>
<?php $_tmp9=ob_get_clean();?><?php if ($_tmp9>0){?><option value="S" title="Chico">S</option><?php }?>
  				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['datos']->value['M'];?>
<?php $_tmp10=ob_get_clean();?><?php if ($_tmp10>0){?><option value="M" title="Mediano">M</option><?php }?>
  				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['datos']->value['L'];?>
<?php $_tmp11=ob_get_clean();?><?php if ($_tmp11>0){?><option value="L" title="Grande">L</option><?php }?>
  				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['datos']->value['XL'];?>
<?php $_tmp12=ob_get_clean();?><?php if ($_tmp12>0){?><option value="XL" title="Extra Grande">XL</option><?php }?>
			</select>
            <span class="help-block"></span>
            </div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-3" style="text-align:left; font-size:18px; margin-top:25px;">
            <div class="form-group">
            Cantidad
			<input type="number" name="cantidad" id="cantidad" value="1" min="1" max="5" style="margin-left:5px; height:25px;" title="Cantidad">
            <span class="help-block"></span>
            </div>
	</div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 " style="text-align:left; font-size:18px;">
        	<button class="btn btn-warning btn-comprar" id="btnvalidar" title="Comprar"><i class="icon-ok icon-white"></i>	<h4>COMPRAR</h4></button>
        </form>
    </div>
    <?php }?>
</div><?php }} ?>