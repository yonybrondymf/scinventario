@extends('layout')

@section('content')
        <div class="row">
            <div class="col-md-12 text-right">
                <a href="{{ route('category.create')}}" class="btn btn-success"> <i class="fa fa-plus fa-lg"></i> Agregar Categoria</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <br>
                @if(Session::has('msg_create'))
                    <p class="alert alert-success">{{ Session::get('msg_create')}}</p>
                @endif
                <div class="panel panel-principal">
                    <div class="panel-heading">
                        LISTA DE CATEGORIAS
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 text-right">
                                {!! Form::open(array('route' => 'category.index', 'method' => "GET", 'class' => 'navbar-form', 'role' => 'search')) !!}
                                    <div class="input-group">
                                        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder' => 'Nombre de la Categoria']) !!}
                                        <div class="input-group-btn">
                                            <button class="btn btn-primary" type="submit">Buscar</button>
                                        </div>
                                    </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p><strong>Se encontraron {{ $categories->total() }} registros</strong></p>
                                @include('admin.categories.partials.table')
                                {!! $categories->render() !!}
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    
    {!! Form::open(array('route' => array('category.destroy', ':CATEGORY_ID'), 'method' => "DELETE", 'id' => 'form-deletecat')) !!}
{!! Form::close() !!}
@endsection



@section('scripts')
    <script>
        $(document).on("ready",function(){
            $(".btn-delete").click(function(e){
                e.preventDefault();
                var row = $(this).parents("tr");
                var id = row.data("id");
                var form = $("#form-deletecat");
                var url = form.attr("action").replace(":CATEGORY_ID",id);
                var data = form.serialize();
                //alert(data);
                $.ajax({
                    url: url,
                    method: "POST",
                    async: false,
                    data:data,
                    success:function(resp){
                        alert(resp.message);
                        row.fadeOut();
                    },
                    error:function(){
                        alert("La Categoria no pudo ser Eliminado");
                        row.show();
                    }
                });
            });
        });
    </script>
@stop