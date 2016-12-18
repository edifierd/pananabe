<?php /* Smarty version Smarty-3.1.8, created on 2016-12-18 05:46:09
         compiled from "C:\xampp\htdocs\pananabe\modules\administrador\views\upload\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3056558561032235ec0-63429841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db9c98f0f5765e77ba6c63c61bfb430880af1006' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pananabe\\modules\\administrador\\views\\upload\\index.tpl',
      1 => 1482036291,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3056558561032235ec0-63429841',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_585610322774e7_06230284',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585610322774e7_06230284')) {function content_585610322774e7_06230284($_smarty_tpl) {?><h1>Foto</h1>

    <form method="post" action="#" role="form">

        <div class="progress">
            <div id="progresso" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0"
                 aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
        </div>

        <div class="form-group row">

            <div class="col-xs-12">
                <input id="imagem" type="file" accept="image/*" multiple/>
            </div>

        </div>

    </form>
<?php }} ?>