<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eliminar entrada</title>
</head>
<body>

 
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Eliminacion de registros</h5>
        </div>
        <div class="modal-body">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">C&oacute;digo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Correo</th>
                <th scope="col">Telefono</th>
              </tr>
            </thead>
            <tbody>                
                <tr>
                    <th scope="row">{{$directorioEliminar->codigoEntrada}}</th>
                    <td>{{$directorioEliminar->nombre}}</td>
                    <td>{{$directorioEliminar->apellido}}</td>
                    <td>{{$directorioEliminar->correo}}</td>
                    <td>{{$directorioEliminar->telefono}}</td>
                  </tr>
                
              
            </tbody>
          </table>  
        
        
        
        </div>
        <div class="modal-footer">
          <a href={{route('directorios.mostrar')}} class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</a>          
          <a href={{route('directorios.eliminar.confirmar',$directorioEliminar->codigoEntrada)}} class="btn btn-danger" data-bs-dismiss="modal">Confirmar</a>          
        </div>
      </div>
    </div>
  


    
    

    

</body>
</html>