<div class="table-responsive">
    <table class="table  table-bordered table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
            @foreach($locations as $location)
            <tr data-id="{{ $location->id }}">
                <td>{{ $location->id}}</td>
                <td>{{ $location->name }}</td>
                <td>
                    <a href="{{ route('location.edit',$location) }}" class="btn btn-warning" title="Modificar Ubicacion"><i class="fa fa-pencil-square-o"></i></a>
                    <a href="#!" class="btn btn-danger btn-delete" title="Eliminar Ubicacion"><i class="fa fa-times"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>