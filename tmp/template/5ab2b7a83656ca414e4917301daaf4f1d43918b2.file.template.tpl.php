<?php /* Smarty version Smarty-3.1.8, created on 2016-11-25 03:20:22
         compiled from "C:\xampp\htdocs\pananabe\views\layout\administrador\template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:966858375a103a8507-31710133%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ab2b7a83656ca414e4917301daaf4f1d43918b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pananabe\\views\\layout\\administrador\\template.tpl',
      1 => 1480040287,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '966858375a103a8507-31710133',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_58375a1102faa8_30605109',
  'variables' => 
  array (
    'titulo' => 0,
    'description' => 0,
    'keywords' => 0,
    '_layoutParams' => 0,
    'css' => 0,
    'marcado' => 0,
    '_error' => 0,
    '_mensaje' => 0,
    '_contenido' => 0,
    'plg' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58375a1102faa8_30605109')) {function content_58375a1102faa8_30605109($_smarty_tpl) {?><!DOCTYPE html>
<html lang="es">
<head>
        <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['titulo']->value)===null||$tmp==='' ? "Sin t&iacute;tulo" : $tmp);?>
</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <META name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
">
    	<META name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
">
        <link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
icono.ico" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
bootstrap.min.css" rel="stylesheet" type="text/css"> 
        <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
template.css" rel="stylesheet" type="text/css">   
        
        <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['css'])&&count($_smarty_tpl->tpl_vars['_layoutParams']->value['css'])){?>
			<?php  $_smarty_tpl->tpl_vars['css'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['css']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['css']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['css']->key => $_smarty_tpl->tpl_vars['css']->value){
$_smarty_tpl->tpl_vars['css']->_loop = true;
?>
                <link href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
" rel="stylesheet" type="text/css">
			<?php } ?>
		<?php }?>
        
        <?php echo $_smarty_tpl->tpl_vars['marcado']->value;?>

        
</head>
    
<body>
	<!-- HEADER -->
	<header style="background-color:#FFF;">
    	<h1 style="margin-left:25px;">Panel de Administración</h1>
    </header>

      
    <!-- CONTENIDO -->  
    <div class="container">
    	<div class="span8">
                <noscript>
                	<div class="alert alert-danger" role="alert" style="text-align:center; margin-top: 15px;">
                    	<b><h3>¡ Para el correcto funcionamiento debe tener el soporte para javascript habilitado !</h3></b>
                    </div>
                </noscript>
                    
                <?php if (isset($_smarty_tpl->tpl_vars['_error']->value)){?>
                    <div id="_errl" class="alert alert-danger" style="margin-top:20px;">
                        <a class="close" data-dismiss="alert">x</a>
                        <?php echo $_smarty_tpl->tpl_vars['_error']->value;?>

                    </div>
                <?php }?>

                <?php if (isset($_smarty_tpl->tpl_vars['_mensaje']->value)){?>
                    <div id="_msgl" class="alert alert-success" style="margin-top:20px;">
                        <a class="close" data-dismiss="alert">x</a>
                        <?php echo $_smarty_tpl->tpl_vars['_mensaje']->value;?>

                    </div>
                <?php }?>
				<br><!-- eliminar esto el <br> --> 
                <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['_contenido']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        	</div>
    </div>
        
    <!-- Footer -->
    <div class="navbar navbar-fixed-bottom piePagina hidden-xs">
		<div class="navbar-inner">
        	<div class="container" >
            	<ul class="nav nav-pills" style="margin-top:9px;">
				</ul>
			</div>
		</div>
	</div>
            
       
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
bootstrap.js"></script>
    <script type="text/javascript">
    	var _root_ = '<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
';
    </script>
        
    <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['js_plugin'])&&count($_smarty_tpl->tpl_vars['_layoutParams']->value['js_plugin'])){?>
    	<?php  $_smarty_tpl->tpl_vars['plg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['js_plugin']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plg']->key => $_smarty_tpl->tpl_vars['plg']->value){
$_smarty_tpl->tpl_vars['plg']->_loop = true;
?>
        	<script src="<?php echo $_smarty_tpl->tpl_vars['plg']->value;?>
" type="text/javascript"></script>
        <?php } ?>
	<?php }?>
        
	<?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])&&count($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])){?>
		<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value){
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
			<script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
" type="text/javascript"></script>
		<?php } ?>
	<?php }?>
</body>
</html><?php }} ?>