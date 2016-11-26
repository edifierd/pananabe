<!DOCTYPE html>
<html lang="es">
<head>
        <title>{$titulo|default:"Sin t&iacute;tulo"}</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <META name="description" content="{$description}">
    	<META name="keywords" content="{$keywords}">
        <link rel="icon" type="image/png" href="{$_layoutParams.ruta_img}icono.ico" />
        <link href="{$_layoutParams.ruta_css}bootstrap.min.css" rel="stylesheet" type="text/css"> 
        <link href="{$_layoutParams.ruta_css}template.css" rel="stylesheet" type="text/css">   
        
        {if isset($_layoutParams.css) && count($_layoutParams.css)}
			{foreach item=css from=$_layoutParams.css}
                <link href="{$css}" rel="stylesheet" type="text/css">
			{/foreach}
		{/if}
        
        {$marcado}
        
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
                    
                {if isset($_error)}
                    <div id="_errl" class="alert alert-danger" style="margin-top:20px;">
                        <a class="close" data-dismiss="alert">x</a>
                        {$_error}
                    </div>
                {/if}

                {if isset($_mensaje)}
                    <div id="_msgl" class="alert alert-success" style="margin-top:20px;">
                        <a class="close" data-dismiss="alert">x</a>
                        {$_mensaje}
                    </div>
                {/if}
				<br><!-- eliminar esto el <br> --> 
                {include file=$_contenido}
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
            
       
	<script type="text/javascript" src="{$_layoutParams.root}public/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="{$_layoutParams.ruta_js}bootstrap.js"></script>
    <script type="text/javascript">
    	var _root_ = '{$_layoutParams.root}';
    </script>
        
    {if isset($_layoutParams.js_plugin) && count($_layoutParams.js_plugin)}
    	{foreach item=plg from=$_layoutParams.js_plugin}
        	<script src="{$plg}" type="text/javascript"></script>
        {/foreach}
	{/if}
        
	{if isset($_layoutParams.js) && count($_layoutParams.js)}
		{foreach item=js from=$_layoutParams.js}
			<script src="{$js}" type="text/javascript"></script>
		{/foreach}
	{/if}
</body>
</html>