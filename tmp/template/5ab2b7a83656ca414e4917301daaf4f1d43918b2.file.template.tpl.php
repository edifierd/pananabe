<?php /* Smarty version Smarty-3.1.8, created on 2018-05-22 00:42:19
         compiled from "C:\xampp\htdocs\pananabe\views\layout\administrador\template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49925b03449de76559-73721758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ab2b7a83656ca414e4917301daaf4f1d43918b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pananabe\\views\\layout\\administrador\\template.tpl',
      1 => 1526941640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49925b03449de76559-73721758',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5b03449e5efbe2_27727424',
  'variables' => 
  array (
    'titulo' => 0,
    'description' => 0,
    'keywords' => 0,
    '_layoutParams' => 0,
    'css' => 0,
    'marcado' => 0,
    '_acl' => 0,
    'current_user' => 0,
    '_error' => 0,
    '_mensaje' => 0,
    '_contenido' => 0,
    'plg' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b03449e5efbe2_27727424')) {function content_5b03449e5efbe2_27727424($_smarty_tpl) {?><!DOCTYPE html>
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
bootstrap-select.min.css" rel="stylesheet" type="text/css">
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


</head>

<body>

	<div id="wrapper">
        <div class="overlay"></div>

        <!-- Sidebar -->
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('admin_access')){?>
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
administrador" style="color:#FFF;">
                       Administración
                    </a>
                </li>
                <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('control_prendas')){?>
					<li>
                    	<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
administrador/prendas/listado">Prendas</a>
                	</li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('control_categorias')){?>
					<li>
                    	<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
administrador/categorias">Categorias</a>
                	</li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('control_ventas')){?>
					<li>
                    	<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
administrador/ventas">Ventas</a>
                	</li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('control_mensajes')){?>
					<li>
                    	<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
administrador/contacto">Mensajes</a>
                	</li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('configuracion_index')){?>
					<li>
                    	<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
administrador/configuracion">Configuración</a>
                	</li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('control_usuarios')){?>
                	<li class="dropdown">
                  		<a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios y Permisos<span class="caret"></span></a>
                  		<ul class="dropdown-menu" role="menu">
                    		<li class="dropdown-header">Manejo de usuarios</li>
                    		<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
administrador/usuarios/registro">Nuevo Usuario</a></li>
                    		<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
administrador/usuarios/listado">Listado Usuarios</a></li>
                            <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('super_usuario')){?>
                            	<li class="dropdown-header">ACL</li>
                    			<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
administrador/acl/roles">Roles</a></li>
                    			<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
administrador/acl/permisos">Permisos</a></li>
                            <?php }?>
                  		</ul>
                	</li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('control_perfil')){?>
                <li >
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
administrador/usuarios/perfil/<?php echo $_smarty_tpl->tpl_vars['current_user']->value['id'];?>
" style="color:#FFF;">
                       Mi Perfil
                    </a>
                </li>
                <?php }?>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
administrador/usuarios/cerrar">Cerrar Sesión</a>
                </li>
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->
        <?php }?>

        <!-- CONTENIDO DE LA PAGINA -->
        <div id="page-content-wrapper">
            <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('admin_access')){?>
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
                <span style=" margin-left:35px;"><b>MENÚ</b></span>
            </button>
            <?php }?>

            <div class="" style="margin-left: 25px;"> <!-- Elimine la clase container !!!!!!!!!!!!!!!!!!!!!!!!! -->
                <div class="row">
                    <div class="col-lg-11 col-lg-offset-1">
                    	<div class="col-md-11" >
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
        					</div>

                            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['_contenido']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

						</div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->


	<!-- <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery-1.11.1.min.js"></script> -->
  <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
bootstrap-select.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
menu.js"></script>
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
</html>
<?php }} ?>