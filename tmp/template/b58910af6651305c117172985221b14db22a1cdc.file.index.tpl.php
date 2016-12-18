<?php /* Smarty version Smarty-3.1.8, created on 2016-12-09 03:11:12
         compiled from "C:\xampp\htdocs\pananabe\views\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20875583ca024237ef3-69566135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b58910af6651305c117172985221b14db22a1cdc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pananabe\\views\\index\\index.tpl',
      1 => 1480373682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20875583ca024237ef3-69566135',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_583ca0242593c8_32160940',
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583ca0242593c8_32160940')) {function content_583ca0242593c8_32160940($_smarty_tpl) {?>
<div class="row container" style="margin-top:45px; margin-bottom:20px;">
	<div class=" col-xs-6 col-sm-6 col-md-6">
    	<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
prenda/mujer" onmouseover="transparenciaImagen(1,0.5)" onmouseout="transparenciaImagen(1,1)">
        	<img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['img'];?>
mujer.jpg" class="img-responsive img-circle" id="1"
            									     style="width:350px; margin-left: auto; margin-right: auto;"
                                                     alt="Trajes de baño para Mujer"
                                                     title="Trajes de baño para Mujer" />
        </a>
        <p style=" margin-top:15px; text-align:center; font-size:18px;">
        	MUJER
        </p>
    </div>

	<div class="col-xs-6 col-sm-6 col-md-6" >
    	<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
prenda/hombre" onmouseover="transparenciaImagen(2,0.5)" onmouseout="transparenciaImagen(2,1)">
        	<img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['img'];?>
hombre.jpg" class="img-responsive img-circle" id="2"
            										  style="width:350px; margin-left: auto; margin-right: auto;" 
                                                      alt="Trajes de baño para Hombre"
                                                      title="Trajes de baño para Hombre" />
                                       
        </a>
        <p style=" margin-top:15px; text-align:center; font-size:18px;">
        	HOMBRE
        </p>
    </div>
</div>

    
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-bottom:60px; ">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/slider/foto1.jpg" alt="Chania" style="width:1920px; max-height:500px;" class="img-responsive">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>
    </div>

    <div class="item">
      <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/slider/foto2.jpg" alt="Chania" style="width:1920px; max-height:500px;" class="img-responsive">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>
    </div>

    <div class="item">
      <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/slider/foto3.jpg" alt="Flower" style="width:1920px; max-height:500px;" class="img-responsive">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>
    </div>
    
    <div class="item">
      <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/slider/foto4.jpg" alt="Flower" style="width:1920px; max-height:500px;" class="img-responsive">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>
    </div>
    
    <div class="item">
      <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/slider/foto5.jpg" alt="Flower" style="width:1920px; max-height:500px;" class="img-responsive">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>

<?php }} ?>