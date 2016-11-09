<!DOCTYPE html>
<html>
<head>
	<title>Pagina Home</title>
</head>
<body>

	<h1> Olá, coisa linda <?php echo $nome ?> </h1>
	<h1> Senha: <?php echo $senha ?> </h1>

	<p>Usando links ....</p>
	<br>
	<a href="<?php echo $view['router']->path('blog_detalhe', array('id'=> 1)) ?>"> Detalhe1 </a>

</body>
</html>
