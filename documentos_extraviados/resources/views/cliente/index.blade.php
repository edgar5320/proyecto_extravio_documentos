<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Clientes</title>

</head>
<body>
    
    <div class="container">
        <h4>Gestión de registros</4>
        <div class="row">
            <div class="col-xl-12">
            <form action="{{route('cliente.index')}}" method="get" >
               <div class="form-row">
                   
               <div class="col-sm-4 my-1">
                        <input type="text" class="form-control" name="texto" value"{{$texto}}>
                    </div>

                    <div class="col-auto my-1">
                        <input type="submit" class="btn btn-primary" value="Buscar">
                    </div>

                    <div class="col-auto my-1">
                        <a href="{{route('cliente.create')}}" class="btn btn-success"> Nuevo</a>
                    </div>


               </div> 
            </form>
            </div>
            <div class="col-xl-12">
                <div class="table-responsive">
                    <table class="tabla table-stripped">
                        <thead >
                            <tr>
                                
                                <th style="height: 20px; border-top: #c0c0c0 1pt solid; border-bottom: #C0C0C0 1pt solid; padding: 0px;"><p style="padding-left: 3px; margin-top: 0px; margin-bottom: 0px; font: bold 9pt 'Arial'; line-height: 15px;">ID</th>
                                <th style="height: 20px; border-top: #c0c0c0 1pt solid; border-bottom: #C0C0C0 1pt solid; padding: 0px;"><p style="padding-left: 3px; margin-top: 0px; margin-bottom: 0px; font: bold 9pt 'Arial'; line-height: 15px;">Apellido</th>
                                <th style="height: 20px; border-top: #c0c0c0 1pt solid; border-bottom: #C0C0C0 1pt solid; padding: 0px;"><p style="padding-left: 3px; margin-top: 0px; margin-bottom: 0px; font: bold 9pt 'Arial'; line-height: 15px;">Nombre</th>
                                <th style="height: 20px; border-top: #c0c0c0 1pt solid; border-bottom: #C0C0C0 1pt solid; padding: 0px;"><p style="padding-left: 3px; margin-top: 0px; margin-bottom: 0px; font: bold 9pt 'Arial'; line-height: 15px;">Documento</th>
                                <th style="height: 20px; border-top: #c0c0c0 1pt solid; border-bottom: #C0C0C0 1pt solid; padding: 0px;"><p style="padding-left: 3px; margin-top: 0px; margin-bottom: 0px; font: bold 9pt 'Arial'; line-height: 15px;">Telefono</th>
                                <th style="height: 20px; border-top: #c0c0c0 1pt solid; border-bottom: #C0C0C0 1pt solid; padding: 0px;"><p style="padding-left: 3px; margin-top: 0px; margin-bottom: 0px; font: bold 9pt 'Arial'; line-height: 15px;">Correo</th>
                                <th style="height: 20px; border-top: #c0c0c0 1pt solid; border-bottom: #C0C0C0 1pt solid; padding: 0px;"><p style="padding-left: 3px; margin-top: 0px; margin-bottom: 0px; font: bold 9pt 'Arial'; line-height: 15px;">Id del objeto</th>

                            </tr>
                        </thead>

                        <tbody>
                        
                            @foreach ($clientes as $cliente)
                            <tr>
                               
                                <td style="height: 20px; border-top: #c0c0c0 1pt solid; border-bottom: #C0C0C0 1pt solid; padding: 0px;"><p style="padding-left: 3px; margin-top: 0px; margin-bottom: 0px; font: bold 9pt 'Arial'; line-height: 15px;">{{$cliente->id}}</td>
                                <td style="height: 20px; border-top: #c0c0c0 1pt solid; border-bottom: #C0C0C0 1pt solid; padding: 0px;"><p style="padding-left: 3px; margin-top: 0px; margin-bottom: 0px; font: bold 9pt 'Arial'; line-height: 15px;">{{$cliente->apellidos}}</td>
                                <td style="height: 20px; border-top: #c0c0c0 1pt solid; border-bottom: #C0C0C0 1pt solid; padding: 0px;"><p style="padding-left: 3px; margin-top: 0px; margin-bottom: 0px; font: bold 9pt 'Arial'; line-height: 15px;">{{$cliente->nombre}}</td>
                                <td style="height: 20px; border-top: #c0c0c0 1pt solid; border-bottom: #C0C0C0 1pt solid; padding: 0px;"><p style="padding-left: 3px; margin-top: 0px; margin-bottom: 0px; font: bold 9pt 'Arial'; line-height: 15px;">{{$cliente->documento}}</td>
                                <td style="height: 20px; border-top: #c0c0c0 1pt solid; border-bottom: #C0C0C0 1pt solid; padding: 0px;"><p style="padding-left: 3px; margin-top: 0px; margin-bottom: 0px; font: bold 9pt 'Arial'; line-height: 15px;">{{$cliente->telefono}}</td>
                                <td style="height: 20px; border-top: #c0c0c0 1pt solid; border-bottom: #C0C0C0 1pt solid; padding: 0px;"><p style="padding-left: 3px; margin-top: 0px; margin-bottom: 0px; font: bold 9pt 'Arial'; line-height: 15px;">{{$cliente->email}}</td>
                                <td style="height: 20px; border-top: #c0c0c0 1pt solid; border-bottom: #C0C0C0 1pt solid; padding: 0px;"><p style="padding-left: 3px; margin-top: 0px; margin-bottom: 0px; font: bold 9pt 'Arial'; line-height: 15px;">{{$cliente->objeto_id}}</td>

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