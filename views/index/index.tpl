
<div class="row container" style="margin-top:45px; margin-bottom:20px;">
	<div class=" col-xs-6 col-sm-6 col-md-6">
		<a href="{$_layoutParams.root}prenda/categoria/mujer" onmouseover="transparenciaImagen(1,0.5)" onmouseout="transparenciaImagen(1,1)">
			<img src="{$_layoutParams.root}public/img/portada/{$config.portada_mujer}" class="img-responsive img-circle" id="1"
			style="width:350px; margin-left: auto; margin-right: auto; max-height: 350px;"
			alt="Trajes de baño para Mujer"
			title="Trajes de baño para Mujer" />
		</a>
		<p style=" margin-top:15px; text-align:center; font-size:18px;">
			MUJER
		</p>
	</div>

	<div class="col-xs-6 col-sm-6 col-md-6" >
		<a href="{$_layoutParams.root}prenda/categoria/hombre" onmouseover="transparenciaImagen(2,0.5)" onmouseout="transparenciaImagen(2,1)">
			<img src="{$_layoutParams.root}public/img/portada/{$config.portada_hombre}" class="img-responsive img-circle" id="2"
			style="width:350px; margin-left: auto; margin-right: auto; max-height: 350px;"
			alt="Trajes de baño para Hombre"
			title="Trajes de baño para Hombre" />

		</a>
		<p style=" margin-top:15px; text-align:center; font-size:18px;">
			HOMBRE
		</p>
	</div>
</div>


{if !empty($sliders)}
<div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-bottom:60px; ">
	<!-- Indicators -->
	<ol class="carousel-indicators">
	{assign var="cont" value="0"}
	{foreach item=slider from=$sliders}
	{if $cont == 1}
	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	{else}
	<li data-target="#myCarousel" data-slide-to="{$cont}"></li>
	{/if}
	{assign var="cont" value=$cont+1}
	{/foreach}
</ol>

<!-- Wrapper for slides -->
<div class="carousel-inner" role="listbox">
{assign var="cont" value="1"}
{foreach item=slider from=$sliders}
{if $cont == 1}
<div class="item active">
	{assign var="cont" value="2"}
	{else}
	<div class="item ">
		{/if}
		<img src="{$_layoutParams.root}public/img/slider/{$slider.nombre}" alt="Panana Be" style="width:1920px; max-height:500px;" class="img-responsive">
		<div class="carousel-caption">
			<h3></h3>
			<p></p>
		</div>
	</div>
	{/foreach}
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
{/if}
