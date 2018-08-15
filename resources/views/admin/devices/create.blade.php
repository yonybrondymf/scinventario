@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-12 text-right" style="margin-bottom:10px;">
            <a href="{{ route('category.create')}}" class="btn btn-primary"><i class="fa fa-plus fa-lg"></i> Agregar Categoria</a>
            <a href="{{ route('location.create')}}" class="btn btn-warning"><i class="fa fa-plus fa-lg"></i> Agregar Ubicacion</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            
            <div class="panel panel-green">
                <div class="panel-heading">
                    <h4>Registrado Nuevo Equipo</h4>
                </div>
                <div class="panel-body">
                    
                    <div class="row">
                        <div class="col-md-12">
                            @include('admin.devices.partials.messages')
                            {!! Form::open(array('route' => 'device.store', 'method'=>'POST' , 'class' => 'form-horizontal' )) !!}
                                @include('admin.devices.partials.fields')
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="submit" value="Registrar" class="btn btn-primary">
                                    </div>
                                    
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    

@endsection

@section('scripts')
    <script>
        $(document).on('ready', function(){
            $('#datetimepicker1').datepicker({
                todayBtn: "linked",
                language: "es"
            });
             
        });
    </script>
@endsection