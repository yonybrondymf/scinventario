@extends('layout')

@section('content')
        <div class="row">
            <div class="col-md-12 text-right" style="margin-bottom:10px;">
                <a href="{{ route('user.create')}}" class="btn btn-success"><i class="fa fa-plus fa-lg"></i> Agregar Usuario</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                
                @if(Session::has('msg_create'))
                    <p class="alert alert-success">{{ Session::get('msg_create')}}</p>
                @endif
                <div class="panel panel-principal">
                    <div class="panel-heading">
                        Lista de Usuarios
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 text-right">
                                {!! Form::open(array('route' => 'user.index', 'method' => "GET", 'class' => 'navbar-form', 'role' => 'search')) !!}
                                    <div class="input-group">
                                        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder' => 'Nombre del Usuario']) !!}
                                        <div class="input-group-btn">
                                            <button class="btn btn-primary" type="submit">Buscar</button>
                                        </div>
                                    </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                @include('admin.users.partials.table')
                                {!! $users->render() !!}
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
   
    {!! Form::open(array('route' => array('user.destroy', ':USER_ID'), 'method' => "DELETE", 'id' => 'form-deleteuser')) !!}
{!! Form::close() !!}
@endsection



@section('scripts')
    <script>
        $(document).on("ready",function(){
            $(".btn-delete").click(function(e){
                e.preventDefault();
                var row = $(this).parents("tr");
                var id = row.data("id");
                var form = $("#form-deleteuser");
                var url = form.attr("action").replace(":USER_ID",id);
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
                        alert("El Usuario no pudo ser Eliminado");
                        row.show();
                    }
                });
            });
        });
    </script>
@stop