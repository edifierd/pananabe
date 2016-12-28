<?php /* Smarty version Smarty-3.1.8, created on 2016-12-28 04:53:54
         compiled from "C:\xampp\htdocs\pananabe\modules\administrador\views\prenda\cargarFotos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5355586180fa82f5d4-79627802%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8dc23aabc76767939f4b0f764e60d2af9cef5c48' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pananabe\\modules\\administrador\\views\\prenda\\cargarFotos.tpl',
      1 => 1482897227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5355586180fa82f5d4-79627802',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_586180fa883487_38336068',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'prenda' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586180fa883487_38336068')) {function content_586180fa883487_38336068($_smarty_tpl) {?>
<h1>Cargar Fotos: </h1>

<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
administrador/prenda/finalizarPublicacion" role="form">
	<div class="form-group row">
    	<div class="col-xs-12"> Foto Frente </div>
    	<div class="col-xs-12" >
        	<input id="imagen1" type="file" accept="image/*" onchange=" mostrarFoto(enviar('imagen1', new Array(<?php echo $_smarty_tpl->tpl_vars['prenda']->value['id'];?>
, 'foto_frente' ))); "/>
            <img src="" id="imagen1Foto" />
        </div>
        
        <div class="col-xs-12"> Foto Perfil </div>
    	<div class="col-xs-12">
        	<input id="imagen2" type="file" accept="image/*" onchange="cant += enviar('imagen2', new Array(<?php echo $_smarty_tpl->tpl_vars['prenda']->value['id'];?>
, 'foto_perfil' )  );" />
        </div>
        
        <div class="col-xs-12"> Foto Atras </div>
    	<div class="col-xs-12">
        	<input id="imagen3" type="file" accept="image/*" onchange="cant += enviar('imagen3', new Array(<?php echo $_smarty_tpl->tpl_vars['prenda']->value['id'];?>
, 'foto_atras' )  );" />
        </div>
	</div>
    <input type="hidden" name="enviado" value="1">
    <input type="hidden" name="idPrenda" value="<?php echo $_smarty_tpl->tpl_vars['prenda']->value['id'];?>
">
    <br /><br />
    <button class="btn btn-primary" id="btnvalidar"><i class="icon-ok icon-white"></i>Finalizar</button>
</form>


<?php }} ?>