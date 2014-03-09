<!DOCTYPE html>
<html>
<head>
	<title>Decinos donde votas | Red Solidaria</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- Incude bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/afiche.css" rel="stylesheet"  />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
	<body>

		<div class="container">

			<div class="row-fluid">
				<div class="row rowBar">
					<a class="pull-left" href="../imprimir.html">VOLVER</a>
					<a class="pull-right" href="javascript:window.print()">IMPRIMIR</a>
				</div>
			</div>
			
			<div class="row-fluid">
				<div class="row rowHeader">
					<img class="logo" src="img/logoAfiche.png">
					<div class="bodyAfiche">
						<div class="col-xs-12 title"><h1>Ayudanos a encontrar</h1></div>
						
					</div>
				</div>
			</div>

			<div class="row-fluid">
				<div class="row rowFooter">
					<div class="col-xs-12">
						<h1>0800-999-654</h1><br>
						<h3>redneuquen@hotmail.com</h3><br>
						<h3>www.personasperdidads.org.ar</h3>
					</div>
				</div>
			</div>

		</div>
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="js/api/peopleAfiche.js"></script>

		<?php if(isset($_GET["id"])) : ?>
			<script type="text/javascript">
				$(getPeople(<?php echo $_GET["id"]; ?>));
			</script>
		<?php endif; ?>
	</body>
	</html>