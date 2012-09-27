<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title>Calculo de IMC</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width ,initial-scale=1, maximum-scale=1"/>
		<style type="text/css">

			body{
				margin: 0 auto;				
				font-family: Segoe WP Light;
				font-weight: lighter;
				font-size: 5em;
				color: #999;				
				background-color: #FFF;
			}

			#main{
				margin: 0 auto;
				max-width: 1024px;				
			}

			#title{
				text-align: center;
			}

			.form{
				margin: 0 auto;
				text-align: center;				
			}
			p{
				font-size: 0.6em;
				margin-top: 0;
				margin-bottom: 0;
				padding: 0;
			}

			input[type=text]{
				font-family: Segoe WP Light;
				text-align: center;
				font-size: 0.6em;
				border:1px solid #999999;
				border-right: 0;
				border-top: 0;
				border-left: 0;
				max-width: 500px;
				height: 30px;
			}

			input[type=submit]{
				font-family: Segoe WP Light;
				text-align: center;
				font-size: 0.5em;
				max-width: 200px;
				background-color: transparent;
				border: 1px solid #999;				
			}

			#results{
				text-align: center;
			}

			#results h1{
				font-size: .6em;
			}

			#results h2{
				font-size: .5em;	
			}
			#results h3{
				font-size: .3em;
			}
		</style>
	</head>

	<body>				
		<section id="main">
			<div id="title">
				Calcula tu IMC
			</div>

			<form action="http://www.xcytekc.com/IMC/index.php/imc/calcular" method="POST" class="form">
				<p>Peso (kg)</p>
				<p><input type="text" name="peso"/></p>
				<p>Estatura (m)</p>
				<p><input type="text" name="estatura"/></p>		
				<p><input type="submit" name="calcular" value="Calcular" /></p>		
			</form>

			<?php if(isset($imc)) : ?>
				<section id="results">
					<h3><?php echo $operacion;?></h3>
					<h1><?php echo $imc;?></h1>
					<h2><?php echo $tipo; ?></h2>
				</section>
			<?php endif;?>
		</section>

		
	</body>

</html>