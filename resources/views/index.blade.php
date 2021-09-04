<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>mundo deportivo</title>
	<link rel="stylesheet" href="{{asset('css/estilos.css')}}">
</head>
<body>
<div id="general">

<div id="presentacion">

	<div class="logotipo">

		<img src="{{asset('images/logo.png')}}" >
	</div>

	<div class="informacion">

	  <div class="textos">
	  	<p>MUNDO DEPORTIVO</p>
	  	<p>VENTA DE PRENDAS DEPORTIVA PARA DAMAS Y CABALLEROS.</p>
	  <p>"Envios a todo el pais".</p>
	  </div>

	  <div class="redes">

	  	<a href="https://m.facebook.com/Deportes-del-cesar-106801371196064/" target="_blank"><img src="{{asset('images/facebook.png')}}"></a>

		<a href="https://www.instagram.com/mundodeportivo/?hl=es-la" target="_blank"><img src="{{asset('images/instagram.png')}}"></a>

		<a href="https://api.whatsapp.com/send?phone=573016818071&fbclid=IwAR0XptNgYINheHk-IeIBObS13KBGn2aLUkTMC1U880LW6D8pWN6h2OU5GBY" target="_blank"><img src="{{asset('images/whatsapp.png')}}"></a>

		<a href="mailto:kjriverac@ufpso.edu.co?Subject= Interesado%20en%20sus%20productos"  target="_blank"><img src="{{asset('images/gmail.png')}}" ></a>

	  </div>

</div>

</div><!-- /.prentación -->

<div class="cuerpo">

	<div class="columna-uno">

		<div class="header">
			<div class="video">
				<h3>Video Promocional</h3>
				<video src="{{asset('video/video1.mp4')}}"width="200" height="100" controls autoplay muted></video>
			</div>

			<div class="chat">
				<img src="{{asset('images/promo.png')}}" alt="">
			</div>

			<div class="video">
				<h3>Mejores goles</h3>
				<iframe width="200" height="100" src="https://www.youtube.com/embed/Z0eKXieepCg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>


		<!-- Opcioes del pie de pagina -->

		<div class="divi">

			<div><p>Chat</p></div>
			<div><p>Compartir</p></div>
			<div><p>Ayuda</p></div>

		</div>

	</div>

	<div class="columna-dos">

		<!-- Copiar este contenedor para replicar los 3 elementos -->
		<div class="productos">

			<div class="producto">
				<a href="pagina1">Comprar</a>
				<div class="contenido-producto">
					<div class="img-producto">
						<img src="{{asset('images/ropa.png')}}">
					</div>
					<div class="nombre-producto">
						<p>Ropa Deportiva </p>
					</div>
				</div>
			</div>

			<div class="producto">
				<a href="pagina2">Comprar</a>
				<div class="contenido-producto">
					<div class="img-producto">
						<img src="{{asset('images/zapatos.png')}}">
					</div>
					<div class="nombre-producto">
						<p>zapatos deportivos </p>
					</div>
				</div>
			</div>

			<div class="producto">
				<a href="pagina3">Comprar</a>
				<div class="contenido-producto">
					<div class="img-producto">
						<img src="{{asset('images/accesorios1.png')}}">
					</div>
					<div class="nombre-producto">
						<p>accesorios deportivos </p>
					</div>
				</div>
			</div>
		</div><!-- /.productos -->
		<div class="productos">

			<div class="producto">
				<p>productos ofrecidos</p>
				<div class="contenido-producto">
					<div class="img-producto">
						<img id="imagenUno"  width="70 px" height="70px" src="{{asset('images/accesorios1.png')}}">
					</div>
					<div class="nombre-producto">
						<p>productos </p>
					</div>
				</div>
			</div>

			<div class="producto">
				<p>productos ofrecidos</p>
				<div class="contenido-producto">
					<div class="img-producto">
						<img id="imagenDos"  width="70 px" height="70px" src="{{asset('images/balon.png')}}">
					</div>
					<div class="nombre-producto">
						<p> productos</p>
					</div>
				</div>
			</div>

			<div class="producto">
				<p>productos ofrecidos</p>
				<div class="contenido-producto">
					<div class="img-producto">
						<img id="imagenTres" src="{{asset('images/gorra.png')}}">
					</div>
					<div class="nombre-producto">
						<p> productos</p>
					</div>
				</div>
			</div>
		</div><!-- /.productos -->
		<div class="productos">

			<div class="producto">
				<p>productos ofrecidos</p>
				<div class="contenido-producto">
					<div class="img-producto">
						<img id="imagencuatro" width="70 px" height="70px" src="{{asset('images/camiseta.png')}}">
					</div>
					<div class="nombre-producto">
						<p> productos</p>
					</div>
				</div>
			</div>

			<div class="producto">
				<p>productos ofrecidos</p>
				<div class="contenido-producto">
					<div class="img-producto">
						<img  id="imagencinco" width="70 px" height="70px" src="{{asset('images/deporte.png')}}">
					</div>
					<div class="nombre-producto">
						<p> productos</p>
					</div>
				</div>
			</div>

			<div class="producto">
				<p>productos ofrecidos</p>
				<div class="contenido-producto">
					<div class="img-producto">
						<img id="imagenseis" width="70 px" height="70px" src="{{asset('images/futbol.png')}}">
					</div>
					<div class="nombre-producto">
						<p>productos</p>
					</div>
				</div>
			</div>
		</div><!-- /.productos -->
		<div class="productos">

			<div class="producto">
				<p>productos ofrecidos</p>
				<div class="contenido-producto">
					<div class="img-producto">
						<img  id="imagensiete" width="70 px" height="70px" src="{{asset('images/futbol1.png')}}">
					</div>
					<div class="nombre-producto">
						<p> productos</p>
					</div>
				</div>
			</div>

			<div class="producto">
				<p>productos ofrecidos</p>
				<div class="contenido-producto">
					<div class="img-producto">
						<img id="imagenocho" width="70 px" height="70px" src="{{asset('images/deportes1.png')}}">
					</div>
					<div class="nombre-producto">
						<p> productos</p>
					</div>
				</div>
			</div>

			<div class="producto">
				<p>productos ofrecidos</p>
				<div class="contenido-producto">
					<div class="img-producto">
						<img id="imagennueve" width="70 px" height="70px" src="{{asset('images/jersey.png')}}">
					</div>
					<div class="nombre-producto">
						<p>productos</p>
					</div>
				</div>
			</div>
		</div><!-- /.productos -->
	</div>

</div>

</div><!-- /.general -->




</body>
</html>
