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
        <h4>Gestión de objetos perdidos</4>
            <div class="row">
            <div class="col-xl-12">
                    <form action="{{route('objeto.store')}}" method="post">
                    @csrf
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
                            <input type="text" class="form-control" name="fecha" required maxlength ="15">
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
    
</body>
</html>