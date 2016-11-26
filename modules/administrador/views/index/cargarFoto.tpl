<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
	{for $var=1 to 3}
		<img src="{$_layoutParams.root}public/img/prendas/{$imagen[$var]}" style="height:350px; width:auto; float: left;" />
	{/for}
</body>
</html>
