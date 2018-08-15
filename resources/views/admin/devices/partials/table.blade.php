<div class="table-responsive table-inventario">
    <table class="table  table-bordered table-hover">
        <thead>
            <tr>
                
                <th>Codigo Patrimonial</th>
                <th>Categoria</th>
                <th>Descripcion del Bien</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Serial</th>
                <th>Dimension</th>
                <th>Color</th>
                <th>Valor de Libros</th>
                <th>Fecha de ingreso</th>
                <th>Documento de Ingreso</th>
                <th>Estado del bien</th>
                <th>Ubicacion</th>
                <th>Procedencia</th>
                <th>Usuario a Cargo del Bien</th>
                <th>Condicion</th>
                <th>Observacion</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
            @foreach($devices as $device)
            <tr data-id="{{ $device->id }}">
                
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
                <td>
                    <a href="{{ route('device.edit',$device) }}" class="btn btn-warning"><i class="fa fa-pencil-square-o" title="Modificar Dispositivo"></i></a>
                    <a href="#!" class="btn btn-danger btn-delete" title="Eliminar Dispositivo"><i class="fa fa-times"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>