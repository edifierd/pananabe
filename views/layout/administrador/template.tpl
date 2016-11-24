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
        
        <style type="text/css">
			
			.barra{
				background-image: url('{$_layoutParams.ruta_img}barra.jpg');
				background-repeat:repeat-x;
				background-color: #333;
				border-bottom-color: #18B05B;
				border-bottom-width: 5px;
				margin-bottom:0px;
			}
			
			.piePagina{
				background-color: #333;
				border-top-color: #000;
				border-top-width: 2px;
				height: 60px;
				color: #FFF;
			}
			
			body{
				background-image: url('{$_layoutParams.ruta_img}body.jpg');
				background-repeat: no-repeat;
				background-size: 100% 100%;
				padding-bottom: 70px;
				color: #FFF;
			}
			
			
        </style>
</head>
    
<body>
	<!-- HEADER -->
	<header style="background-color:#FFF;">
    <div class="container">
    	<a href="{$_layoutParams.root}"> <img src="{$_layoutParams.ruta_img}logo.png" class="img-responsive" style="height:95px; float:left;"></a>
        
        
        <h1 style="color:#000">ESTOY EN EL PANEL ADMINISTRADOR</h1>
        
        <div class="hidden-xs" style="float:right; margin-top: 25px;">
        	<a href="https://www.facebook.com/proredargentina" title="Facebook" target="_blank">
                <img src="{$_layoutParams.ruta_img}facebook.png" height="40" width="auto" style="margin-right:10px;" /></a>
            <a href="https://plus.google.com/+ProredAr" title="Google +" target="_blank">
            	<img src="{$_layoutParams.ruta_img}google.png" height="40" width="auto" style="margin-right:10px;" /><a>
            <a href="https://www.google.com.ar/maps/place/Grupo+Sancor+Seguros/@-34.8893037,-57.9506166,18z/data=!4m5!3m4!1s0x0:0x72c9c965e04eeb96!8m2!3d-34.8889809!4d-57.9518656?hl=es>" 
            title="Google Maps" target="_blank">
            	<img src="{$_layoutParams.ruta_img}gmap.png" height="40" width="auto" style="margin-right:10px;" /></a>
            <a href="{$_layoutParams.root}contacto" title="Correo">
            	<img src="{$_layoutParams.ruta_img}carta.png" height="40" width="auto" style="margin-right:10px;" /></a>
		</div>
    </div>
	<nav class="navbar navbar-default navbar-static-top barra" >
    	<div class="container">
    		<div class="navbar-header">
        		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1" aria-expanded="false">
        			<span class="sr-only">Menu</span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
      			</button>
                
                <span class="visible-xs navbar-brand" href="#" style="color:#FFF">ProRed Menu</span>
    		</div>

    		<div class="collapse navbar-collapse" id="navbar-1">
        		<ul class="nav navbar-nav">
                	{foreach item=it from=$_layoutParams.menu}
                    	{if isset($_layoutParams.item) && $_layoutParams.item == $it.id}
                        	{assign var="_item_style" value='active'}
                        {else}
                            {assign var="_item_style" value=''}
                        {/if}
                        
                        {if $it.dropdown == '' } 
                        	<li class="{$_item_style}"><a  href="{$it.enlace}" class="boton"> {$it.titulo}</a></li>
                        {else}
                            <li class="dropdown {$_item_style}">
          					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            	{$it.titulo} <span class="caret"></span>
                            </a>
         					<ul class="dropdown-menu">
            					{foreach item=itd from=$it.dropdown}
                                	{if isset($_layoutParams.item) && $_layoutParams.item == $itd.id}
                        				{assign var="_item_style" value='active'}
                        			{else}
                            			{assign var="_item_style" value=''}
                        			{/if}
                                	<li><a href="{$itd.enlace}" > {$itd.titulo}</a></li>
                                {/foreach}
          					</ul>
        					</li>       
                        {/if}
   					{/foreach}
      			</ul>
    		</div>
    	</div>
	</nav>
    {if $titulo == 'Inicio'}
        <img src="{$_layoutParams.ruta_img}portada1.jpg" class="img-responsive" style="width:100%;"/>
    {/if}
    {if $titulo == 'Sobre Nosotros'}
        <img src="{$_layoutParams.ruta_img}portada2.jpg" class="img-responsive" style="width:100%;"/>
    {/if}
    {if $titulo == 'Logo y Desarrollo'}
        <img src="{$_layoutParams.ruta_img}portada3.jpg" class="img-responsive" style="width:100%;"/>
    {/if}
    {if $titulo == 'Galeria de fotos'}
        <img src="{$_layoutParams.ruta_img}portada4.jpg" class="img-responsive" style="width:100%;"/>
    {/if}
    {if $titulo == 'Novedades'}
        <img src="{$_layoutParams.ruta_img}portada5.jpg" class="img-responsive" style="width:100%;"/>
    {/if}
    {if $titulo == 'Socios'}
        <img src="{$_layoutParams.ruta_img}portada11.jpg" class="img-responsive" style="width:100%;"/>
    {/if}
    {if $titulo == 'Contacto'}
        <img src="{$_layoutParams.ruta_img}portada6.jpg" class="img-responsive" style="width:100%;"/>
    {/if}
    {if $titulo == 'Sumate a la Red'}
        <img src="{$_layoutParams.ruta_img}portada7.jpg" class="img-responsive" style="width:100%;"/>
    {/if}
    
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
  					<li role="presentation"><a href="{$_layoutParams.root}institucional/nosotros" class="btn-xs">Sobre Nosotros</a></li>
                    <li role="presentation"><a href="{$_layoutParams.root}institucional/logo" class="btn-xs">Logo y Desarrollo</a></li>
                    <li role="presentation"><a href="{$_layoutParams.root}institucional/fotos" class="btn-xs">Fotos</a></li>
                    <li role="presentation"><a href="{$_layoutParams.root}novedades" class="btn-xs">Novedades</a></li>
                    <li role="presentation"><a href="{$_layoutParams.root}socios" class="btn-xs">Socios</a></li>
                    <li role="presentation"><a href="{$_layoutParams.root}proveedores" class="btn-xs">Proveedores</a></li>
                    <li role="presentation"><a href="{$_layoutParams.root}contacto/sumate" class="btn-xs">Sumate a la Red</a></li>
                    <li role="presentation"><a href="{$_layoutParams.root}contacto" class="btn-xs">Contacto</a></li>
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