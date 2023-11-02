<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Documento</title>
</head>
<body>
    <h1> Su reporte a sido enviado correctamente</h1>
    <div class="form-group">
                            <h2 for="apellidos">Apellidos</h2>
                            <label>{{$apellidos}}</label>
                    </div>

                    <div class="form-group">
                            <h2 for="nombre">Nombre</h2>
                            <label>{{$nombre}}</label>
                    </div>

                    <div class="form-group">
                            <h2 for="correo">Correo electronico</h2>
                            <label>{{$correo}} </label>
                    </div>

                    <div class="form-group">
                            <h2 for="telefono">Telefono</h2>
                            <label>{{$telefono}} </label>
                    </div>
                    
                    
                    


                    <div class="form-group">
                            <h2 for="nombre_objeto">Nombre del objeto</h2>
                            <label> {{$nombre_objeto}}</label>
                    </div>

                    <div class="form-group">
                            <h2 for="descripcion_objeto">Descripción del objeto </h2>
                            <label>{{$descripcion_objeto }}</label>
                    </div>

                    <div class="form-group">
                            <h2 for="lugar_extravio">Lugar de extravio</h2>
                            <label> {{$lugar_extravio}}</label>
                    </div>

                    <div class="form-group">
                            <h2 for="fecha_extravio">Fecha de extravio</h2>
                            <label> {{$fecha_extravio}}</label>
                    </div>

                    <div class="form-group">
                            <h2 for="descripcion_echos">Descripción de los echos</h2>
                            <label> {{$descripcion_echos}}</label>
                    </div>

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
                </body>
</html>