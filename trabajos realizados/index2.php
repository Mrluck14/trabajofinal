<!DOCTYPE html>
<html>
<head>
  <title>Trabajos realizados</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
    <h1 class="titulo_trabajos-realizados text-center">Trabajos realizados</h1>
    <p class="subtitulo_trabajos-realizados text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    <p onClick="cargadatos(0)">todos <p>
    <p onClick="cargadatos(1)">Piping <p>
      <p onClick="cargadatos(2)">Andamios <p>
    <div class="row" id="contenedor" >

    </div>

</div>
<script type="text/javascript">
$( document ).ready(function() {
    cargadatos(0)
});

   function cargadatos(id){
        $.post("blog.php",{id:id})
                .done(function(resultado){     
                      document.getElementById("contenedor").innerHTML = resultado;
                      
        });

   }
</script>
</body>
</html>