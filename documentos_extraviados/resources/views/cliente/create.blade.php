<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="container">
        <h4>Gestión de objetos perdidos</4>
        </div>
        

            <div class="row">
            <div class="col-xl-12">
                    <form action="{{route('cliente.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                            <label for="apellidos">Apellidos</label>
                            <input type="text" class="form-control" name="apellidos" required maxlength ="50">
                    </div>

                    <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" name="nombre" required maxlength ="30">
                    </div>

                    <div class="form-group">
                            <label for="documento">Suba una identificación</label>
                            <input type="file" class="form-control" name="documento" required maxlength ="50">
                    </div>

                    <div class="form-group">
                            <label for="email">Correo electronico</label>
                            <input type="text" class="form-control" name="email" required maxlength ="150">
                    </div>

                    <div class="form-group">
                            <label for="telefono">Telefono</label>
                            <input type="text" class="form-control" name="telefono" required maxlength ="15">
                    </div>
                    
                    
                    


                    <div class="form-group">
                            <label for="nombre_objeto">Nombre del objeto</label>
                            <input type="text" class="form-control" name="nombre_objeto" required maxlength ="50">
                    </div>

                    <div class="form-group">
                            <label for="descripcion">Descripción del objeto </label>
                            <input type="text" class="form-control" name="descripcion" required maxlength ="100">
                    </div>

                    <div class="form-group">
                            <label for="lugar_extravio">Lugar de extravio</label>
                            <input type="text" class="form-control" name="lugar_extravio" required maxlength ="100">
                    </div>

                    <div class="form-group">
                            <label for="fecha">Fecha de extravio</label>
                            <input type="date" class="form-control" name="fecha" required maxlength ="15">
                    </div>

                    <div class="form-group">
                            <label for="descripcion_echos">Descripción de los echos</label>
                            <input type="text" class="form-control" name="descripcion_echos" required maxlength ="250">
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Guardar">
                        <input type="reset" class="btn btn-default" value="Cancelar">
                        <a href="javascript:history.back()" >Ir a listado</a>

                    </div>


                    </form>
            </div>
            </div>
    </div>
    
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>