<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr data-id="{{ $category->id }}">
                <td>{{ $category->id}}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <a href="{{ route('category.edit',$category) }}" class="btn btn-warning" title="Modificar Categoria"><i class="fa fa-pencil-square-o"></i></a>
                    <a href="#!" class="btn btn-danger btn-delete" title="Eliminar Categoria"><i class="fa fa-times"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>