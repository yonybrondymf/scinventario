<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Tipo de Usuario</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr data-id="{{ $user->id }}">
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->type }}</td>
                <td>
                    <a href="{{ route('user.edit',$user) }}" class="btn btn-warning" title="Modificar Usuario"><i class="fa fa-pencil-square-o"></i></a>
                    <a href="#!" class="btn btn-danger btn-delete" title="Eliminar Usuario"><i class="fa fa-times"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>