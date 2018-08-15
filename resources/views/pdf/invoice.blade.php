<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Reporte de Inventario General </title>
    
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/favicon.png')}}"/>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <style>
    .cabecera{
        text-align: center;
        padding-top: 50px;
    }
    tr {
        page-break-inside: avoid;
    }
    table th{
        background-color: #EEEEEE;
    }
    </style>
  </head>
  <body>
        
        
      <div class="cabecera">
        <p>INVENTARIO FISICO GENERAL DE BIENES PATRIMONIALES AÑO {{$date}}</p>
        <h1>MAQUINAS Y EQUIPOS (CPUs, MONITOR, IMPRESORA, FOTOCOPIADORA, ETC)</h1>
        <p><strong>UBICACION : </strong> {{ $ubicacion}}</p>
        <br>
      </div>
      <div class="title">
          <p><div style="width:300px;float:left;">INSTITUCION EDUCATIVA</div> : I.E. 43026 "CARLOS ALBERTO CONDE VASQUEZ"</p>
          <p><div style="width:300px;float:left;">NOMBRE DEL DIRECTOR DE LA I.E</div> : BRAULIO GUILLÉN FLORES</p>
          
      </div>
      
      
      <table class="table table-bordered">
        <thead>
          <tr>
                <th>N°</th>
                <th>Codigo Patrimonial</th>
                <th>Categoria</th>
                <th>Descripcion del Bien</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Serial</th>
                <th>Dimension</th>
                <th>Color</th>
                <th>Valor en libros</th>
                <th>Fecha de ingreso</th>
                <th>Documento de Ingreso</th>
                <th>Estado del Bien</th>
                <th>Ubicacion</th>
                <th>Procedencia</th>
                <th>Usuario a Cargo del Bien</th>
                <th>Condicion</th>
                <th>Observacion</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($devices as $device)
            <tr>
                <td>{{ $device->id}}</td>
                <td>{{ $device->code }}</td>
                <td>{{ $device->category->name }}</td>
                <td>{{ $device->description }}</td>
                <td>{{ $device->brand }}</td>
                <td>{{ $device->model }}</td>
                <td>{{ $device->serial }}</td>
                <td>{{ $device->dimension }}</td>
                <td>{{ $device->color }}</td>
                <td>{{ $device->cost }}</td>
                <td>{{ $device->entry }}</td>
                <td>{{ $device->document }}</td>
                <td>{{ $device->state }}</td>
                <td>{{ $device->location->name }}</td>
                <td>{{ $device->made }}</td>
                <td>{{ $device->owner}}</td>
                <td>{{ $device->condition }}</td>
                <td>{{ $device->observation }}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
      
  </body>
</html>