<?php /* Smarty version Smarty-3.1.8, created on 2016-11-26 18:09:57
         compiled from "C:\xampp\htdocs\pananabe\views\layout\pananabe\template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32545812beb26625f6-39864152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c35c68bd8a3856a03b370fb17a88f2a8f5be01f9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pananabe\\views\\layout\\pananabe\\template.tpl',
      1 => 1477623248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32545812beb26625f6-39864152',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5812beb2818df8_60084236',
  'variables' => 
  array (
    'titulo' => 0,
    'description' => 0,
    'keywords' => 0,
    '_layoutParams' => 0,
    'css' => 0,
    'marcado' => 0,
    'it' => 0,
    '_item_style' => 0,
    'itd' => 0,
    'i' => 0,
    '_error' => 0,
    '_mensaje' => 0,
    '_contenido' => 0,
    'plg' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5812beb2818df8_60084236')) {function content_5812beb2818df8_60084236($_smarty_tpl) {?><!DOCTYPE html>
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
font-awesome.min.css" rel="stylesheet" type="text/css"> 
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

        
        <style type="text/css">
			.barra{
				background-color: transparent;
				border: none;
				font-size: 17px;
			}
			.piePagina{
				background-color: #DADADA;
				border-top-color: #000;
				border-top-width: 1px;
				height: 60px;
				color: #000;
			}
			
			body{
				background-color: #FFF;
				padding-bottom: 70px;
				color: #000;
				font-weight:bold;
				font-family: Garamond;
			}
			
        </style>
</head>
    
<body>
	<!-- HEADER -->
	<header>
	<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
">
    	<img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
logo.png" class=" img-responsive" 
        	 style="margin-right:auto; margin-left:auto; margin-top:15px; margin-bottom:10px; max-height:250px;" title="Panana Be Argentina" alt="Panana Be Logo">
    </a>
	<nav class="navbar navbar-default" role="navigation" style="background-color:transparent; border:none;">
    	<div class="container">
  		<div class="navbar-header">
        	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-1" aria-expanded="false">
        		<span class="sr-only">Menu</span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
      		</button>
			<span class="visible-xs navbar-brand" href="#" style=" color:#000;">Panana Be.</span>
            <span class="visible-xs navbar-brand" href="#" style=" color:#000; float:right;">Menú</span>
    	</div>

		<div class="collapse navbar-collapse navbar-ex1-collapse" id="navbar-1">
    		<ul class="nav nav-justified">
				<?php  $_smarty_tpl->tpl_vars['it'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it']->key => $_smarty_tpl->tpl_vars['it']->value){
$_smarty_tpl->tpl_vars['it']->_loop = true;
?>
                	<?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['item'])&&$_smarty_tpl->tpl_vars['_layoutParams']->value['item']==$_smarty_tpl->tpl_vars['it']->value['id']){?>
                    	<?php $_smarty_tpl->tpl_vars["_item_style"] = new Smarty_variable('active', null, 0);?>
                    <?php }else{ ?>
                    	<?php $_smarty_tpl->tpl_vars["_item_style"] = new Smarty_variable('', null, 0);?>
                    <?php }?>
                        
                    <?php if ($_smarty_tpl->tpl_vars['it']->value['dropdown']==''){?> 
                        <li class="<?php echo $_smarty_tpl->tpl_vars['_item_style']->value;?>
"><a  href="<?php echo $_smarty_tpl->tpl_vars['it']->value['enlace'];?>
" class="boton"> <?php echo $_smarty_tpl->tpl_vars['it']->value['titulo'];?>
</a></li>
                    <?php }else{ ?>
                        <li class="hidden-xs dropdown <?php echo $_smarty_tpl->tpl_vars['_item_style']->value;?>
">
          				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <?php echo $_smarty_tpl->tpl_vars['it']->value['titulo'];?>
 <span class="caret"></span>
                        </a>
         					<ul class="dropdown-menu" style="margin-left:20px;">
            					<?php  $_smarty_tpl->tpl_vars['itd'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itd']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['it']->value['dropdown']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itd']->key => $_smarty_tpl->tpl_vars['itd']->value){
$_smarty_tpl->tpl_vars['itd']->_loop = true;
?>
                                	<?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['item'])&&$_smarty_tpl->tpl_vars['_layoutParams']->value['item']==$_smarty_tpl->tpl_vars['itd']->value['id']){?>
                        				<?php $_smarty_tpl->tpl_vars["_item_style"] = new Smarty_variable('active', null, 0);?>
                        			<?php }else{ ?>
                            			<?php $_smarty_tpl->tpl_vars["_item_style"] = new Smarty_variable('', null, 0);?>
                        			<?php }?>
                                	<li><a href="<?php echo $_smarty_tpl->tpl_vars['itd']->value['enlace'];?>
" > <?php echo $_smarty_tpl->tpl_vars['itd']->value['titulo'];?>
</a></li>
                           		<?php } ?>
          					</ul>
        				</li> 
                        
                        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['it']->value['dropdown']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                        	<li class="visible-xs"><a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['enlace'];?>
" ><?php echo $_smarty_tpl->tpl_vars['i']->value['titulo'];?>
 </a></li>
                    	<?php } ?>      
                    <?php }?>
   				<?php } ?>
	   		</ul>
		</div>
        </div>
	</nav>

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
    <div class="navbar navbar-fixed-bottom piePagina hidden-xs ">
    	<div class="container">
    	<div class="row">
        	<div class="col-sm-4 col-md-4">
            	<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
">
    				<img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
logoMin.png" class="img-responsive" 
        				 style="margin-right:auto; margin-left:auto; margin-top:5px; max-height:50px;" title="Panana Be Argentina" alt="Panana Be Logo">
    			</a>
            </div>
            <div class="col-sm-4 col-md-4" style=" margin-top:10px; font-weight:bold;">
            	<p style="margin-right:auto; margin-left:auto;">
            	Contacto al (221) 15 5698569 de 8:00 a 20:00 Hs <br>
                Brandsen, Buenos Aires, Argentina
                </p>
            </div>
            <div class="col-sm-4 col-md-4" >
            	<table title="Contacto Redes Sociales">
                	<tr>
                    	<td>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
contacto" class="redes" title="Contacto">
                        	<i class="fa fa-envelope fa-2x" style="margin:1px; font-size: 12px; font-weight:bold;" > Consultas </i>
                        </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <a href="https://www.facebook.com/pananabeok" class="redes" target="_blank" title="Facebook Panana Be">
                        	<i class="fa fa-facebook fa-2x" style="margin:1px; font-size: 12px; font-weight:bold;" > Facebook </i>
                        </a>
                        </td>	
                   	</tr>
                    <tr>
               			<td>
                        <a href="https://www.instagram.com/pananabeok/" class="redes" target="_blank" title="Instagram Panana Be">
                        	<i class="fa fa-instagram fa-2x" style="margin:1px; font-size: 12px; font-weight:bold;" > Instagram </i>
                        </a>
                        </td>
                    </tr>
                </table>
            </div>
    	</div>
        </div>
	</div>
            
       
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
funciones.js"></script>
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