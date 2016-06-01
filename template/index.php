<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Noob Programming</title>

	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300,800|Roboto:400,300,500,700,900|Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/less" href="style.less">

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/ace/1.2.3/ace.js"></script>

	<script>
		$(function(){
			var htmlEditor = ace.edit('htmlEditor');
			htmlEditor.setTheme('ace/theme/monokai');
			htmlEditor.getSession().setMode("ace/mode/html");
			var cssEditor = ace.edit('cssEditor');
			cssEditor.setTheme('ace/theme/monokai');
			cssEditor.getSession().setMode("ace/mode/css");
			var jsEditor = ace.edit('jsEditor');
			jsEditor.setTheme('ace/theme/monokai');
			jsEditor.getSession().setMode("ace/mode/javascript");
		});
	</script>
</head>
<body>
	<header>
		<nav>
			<div class="logo">
				LOGO
			</div>
			<div class="menu">
				<ul>
					<li><a href="#">Lorem ipsum</a></li>
					<li><a href="#">Odit pariatur</a></li>
					<li><a href="#">Porro totam</a></li>
					<li><a href="#">Debitis odit</a></li>
					<li><a href="#">Voluptatem magnam</a></li>
					<li><a href="#">Adipisci ipsam</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<main>
		<section class="langs">
			<ul class="langs">
				<li class="html">
					<div class="info">
						<a href=""><h2>HTML</h2></a>
						<p>Cria o próximo Facebook</p>
					</div>
					<textarea id="htmlEditor" class="editor html" data-lang="js"><!DOCTYPE html>
<html>
	<head><title>Olá, Mundo!</title></head>
	<body>
		Olá, Mundo!
	</body>
</html></textarea>
				</li>
				<li class="css">
					<div class="info">
						<a href=""><h2>CSS</h2></a>
						<p>Swag!</p>
					</div>
					<textarea id="cssEditor" class="editor css" data-lang="js">.editor{
	font-size: 14px;
	color: #f2f1f6;
}</textarea>
				</li>
				<li class="js">
					<div class="info">
						<a href=""><h2>JavaScript</h2></a>
						<p>IT'S ALIIVEE!</p>
					</div>
					<textarea id="jsEditor" class="editor js" data-lang="js">function ola_mundo(){
	var nome = 'Mundo';
	console.log('Olá, ' + nome + '!');
}</textarea>
				</li>
			</ul>
		</section>
	</main>
	<footer></footer>
</body>
</html>