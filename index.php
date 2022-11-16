<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Registrar Administrador</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

	<!--<form class="form-horizontal" action="" method="post">-->
	<form class="form-horizontal">
		<div style="margin-top:60px">

			<div class="grid calfac">

				<div class="twoinput">
					<div class="form-group">
						<div class="box-factura">
							<div class="factura">
								<div class="" style="text-align: center;">
									<h2>Servicios</h2>
								</div>
								<div class="factura-info" style="">
									<label for="full_name" class="">Metros</label>
									<input type="number" id="metros" name="metros" class="form-control" placeholder="Metros">
								</div>
								<div class="factura-info" style="">
									<label for="full_name" class="">servicio de limpieza</label>
									<input type="checkbox" id="limpieza" name="metros" class="form-control" placeholder="Metros">
								</div>
							</div>
						</div>
					</div>
					<input type="button" name="" id="calcular" class="btn " value="Calcular"
			style="text-align:center;">
				</div>
				

				<div class="twoinput">
					<div class="form-group">
						<div class="box-factura">
							<div class="factura">
								<div class="" style="text-align: center;">
									<h2>Factura</h2>
								</div>

								<div class="factura-info" style="">
									<div class="div">
										<p>Servicio desmalezado</p>
									</div>
									<div class="div">
										<p id="desma">precio</p>
									</div>
								</div>

								<div class="factura-info" style="">
										<div class="div">
											<p>Servicio de limpieza</p>
										</div>
									<div class="div">
										<p id="limp">precio</p>
									</div>
								</div>

								<div class="factura-info" style="">
										<div class="div">
											<p>Total</p>
										</div>
									<div class="div">
										<p id="total">total</p>
									</div>
								</div>
	
							</div>
						</div>
					</div>
					
	
				</div>
			</div>
	
		</div>
		
	</form>


	<script>
		let calcular = document.getElementById('calcular')
		let limpieza = document.getElementById('limpieza')
		let resultados =


		calcular.addEventListener('click', calcu)
		limpieza.addEventListener('click', suma)

		function calcu() {
			let metros = document.getElementById('metros').value
		    let precio = 0.1
			var res=0
				
				if (metros > 2000) {
					precio = 0.05
					res = metros * precio
					console.log("el precio por 0.05 " + res  );
					document.getElementById('desma').innerHTML = res + " $"

					}
					else if (metros < 300) {
						precio = 0.2
					res = metros * precio
						console.log("el precio por 0.2 " + res  );
						document.getElementById('desma').innerHTML = res + " $"
					}

					else {
						res = metros * precio
						console.log("el precio por 0.1 " + res  );
						
						document.getElementById('desma').innerHTML = res + " $"
					}
				
			resultados=res
				/*

			limp=5
			suma= res+limp

			document.getElementById('total').innerHTML = suma + " $ total"

			
			*/
			
		}
		
		function suma() {
			//console.log(resultados + "ddd")
			limp=5
			suma= resultados+limp

			document.getElementById('total').innerHTML = suma + " $ total"
				}
		
				//sumafactura()
				


	</script>

	<div class="container-soc">
		<div class="social">
			<ul>
				<li><a href="http://www.facebook.com/falconmasters" target="_blank" class="icon-facebook"></a></li>
				<li><a href="http://www.twitter.com/falconmasters" target="_blank" class="icon-twitter"></a></li>
				<li><a href="http://www.googleplus.com/falconmasters" target="_blank" class="icon-googleplus"></a></li>
				<li><a href="http://www.pinterest.com/falconmasters" target="_blank" class="icon-pinterest"></a></li>
				<li><a href="mailto:contacto@falconmasters.com" class="icon-mail"></a></li>
			</ul>
		</div>

	</div>

	<div class="grid left">
		
	</div>

	<div class="grid">
		<iframe
			src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3374.335972609089!2d-67.62663103574538!3d10.270987127054324!3m2!1i1024!2i768!4f13.1!5e1!3m2!1ses!2sve!4v1668527232394!5m2!1ses!2sve"
			width="400" height="300" style="border:0;" allowfullscreen="false" loading="lazy"
			referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>



	<?php
    /*
	$metros = ($_POST["metros"]);
	$precio = 0.2;
	if ($metros > 500) {
	$precio = 0.1;
	$res = $precio * $metros;
	echo "el resultado " . $res;
	} else {
	$res = $precio * $metros;
	echo "el resultado " . $res;
	//echo"0.2";
	}*/
    ?>
</body>

</html>