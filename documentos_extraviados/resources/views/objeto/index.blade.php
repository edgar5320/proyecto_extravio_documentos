<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Objetos</title>

</head>
<body>
    
    <div class="container">
        <h4>Gestión de Objetos</4>
        <div class="row">
            <div class="col-xl-12">
            <form action="{{route('objeto.index')}}" method="get" >
               <div class="form-row">
                   
               <div class="col-sm-4 my-1">
                        <input type="text" class="form-control" name="texto" value"{{$texto}}>
                    </div>

                    <div class="col-auto my-1">
                        <input type="submit" class="btn btn-primary" value="buscar">
                    </div>

                    <div class="col-auto my-1">
                        <a href="{{route('objeto.create')}}" class="btn btn-success"> Nuevo</a>
                    </div>


               </div> 
            </form>
            </div>
            <div class="col-xl-12">
                <div class="table-responsive">
                    <table class="tabla table-stripped">
                        <thead >
                            <tr>
                                <th>Opciones</th>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Lugar de extravio</th>
                                <th>fecha</th>
                                <th>Descripcion de los echos</th>
                               

                            </tr>
                        </thead>

                        <tbody>
                        
                            @foreach ($objetos as $objeto)
                            <tr>
                                <td>Editar|Eliminar</td>
                                <td>{{$objeto->id}}</td>
                                <td>{{$objeto->nombre_objeto}}</td>
                                <td>{{$objeto->descripcion}}</td>
                                <td>{{$objeto->lugar_extravio}}</td>
                                <td>{{$objeto->fecha}}</td>
                                <td>{{$objeto->descripcion_echos}}</td>
                                

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    
    </div>
</body>
</html>