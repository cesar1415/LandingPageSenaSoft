<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>compra zapatos deportivos </title>
	<link rel="stylesheet" href="{{asset('css/sub2.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <p><a href="index" title="Página principal de Mi Sitio" rel="index" class="btn btn-primary mt-3">Volver a la pagina principal</a></p>
	<div id="general">
		<div id="portada">
			<div class="logotipo">

         <img src="{{asset('images/zapatos.png')}}" >
         </div>

  <div class="informacion">

    <div class="textos">
      <p>FORMULARIO COMPRA ROPA DEPORTIVA</p>

    </div>

    </div>

    <div class="logo-principal">

         <img width="120px" src="{{asset('images/logo.png')}}" >

      </div>

  </div>

</form>
<h3>compra del producto</h3>

<form action="/php/insertar_subasta.php" method="post" enctype="multipart/form-data">
	<fieldset>
  <legend>Datos básicos</legend>

  <label for="nombre">Nombre</label> <br/>
  <input type="text" name="nombre" id="nombre" size="50" maxlength="250" />

  <br/><br/>

  <label for="descripcion">Descripción</label> <br/>
  <textarea name="descripcion" id="descripcion" cols="40" rows="5"></textarea>
  <fieldset/>
   <label for="temasDeInteres">producto</label> <br/>
  <select multiple="multiple" size="5" id="producto a comprar " name="productos a comprar">
    <option value="3105">zapatos  mujer</option>
    <option value="3106">zapatos  hombre</option>
    <option value="3107">zapatos  niño</option>
    <option value="3108">zapatos  niña </option>


  </select>
  <fieldset>
  <legend>valor del producto y descuento</legend>

  <label for="precio">Precio</label>
  <input type="text" size="5" id="precio" name="precio" /> &euro;

<label for="impuestos">medio de pago</label>
  <select id="impuestos" name="impuestos">
    <option value="4">pse</option>
    <option value="7">tarjeta debito</option>
    <option value="16">tarjeta credito</option>
    <option value="25">otros</option>
  </select>
<br/><br/>

  <label>descuento </label> <br/>
  <input type="radio" name="promocion" value="ninguno" checked="checked" /> mayores de 50.000 "15%" <br/>
  <input type="radio" name="promocion" value="portes" /> mayores de 100.000 "20%" <br/>
  <input type="radio" name="promocion" value="descuento" /> mayores de 200.000 "30%"

Incluir foto del producto o problema <input type="file" name="foto" />
<input name="suscribir" type="checkbox" value="suscribir" checked="checked"/> Suscribirme para recibir notificaciones

<br/><br/>

<input type="submit" name="enviar" value="Guardar cambios" />
<input type="reset" name="limpiar" value="Borrar los datos introducidos" />

</fieldset>
</div>
</body>
</html>
