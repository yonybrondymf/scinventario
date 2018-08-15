@extends('layout')

@section('content')
        <div class="row">
            <div class="col-md-12" style="padding-top:10px; margin-bottom:10px;">
                <div class="pull-right text-center">
                    <a href="{{ route('device.create')}}" class="btn btn-success" title="Nuevo Dispositivo" > <i class="fa fa-plus fa-lg"></i> Nuevo Dispositivo</a>
                    
                    
                    @if(Request::get('name')==="" && Request::get('category')==="" && Request::get('location')==="")
                     <a href="{{ url('ReporteInventarios',['name'=>Request::get('name'),'category'=>Request::get('category'),'location'=>Request::get('location')]) }}" class="btn btn-danger" title="Generar Reporte" target="_blank"> <i class="fa fa-print fa-lg"></i> Generar Reporte</a>
                    @elseif(Request::get('name')==="" && Request::get('location')==="")
                    <a href="{{ url('ReporteInventarios2',Request::get('category')) }}" class="btn btn-danger" title="Generar Reporte"  target="_blank"> <i class="fa fa-print fa-lg"></i> Generar Reporte</a>
                    @elseif(Request::get('name')==="" && Request::get('category')==="")
                    <a href="{{ url('ReporteInventarios4', Request::get('location'))}}" class="btn btn-danger" title="Generar Reporte"  target="_blank"> <i class="fa fa-print fa-lg"></i> Generar Reporte</a>
                    @elseif(Request::get('category')==="" && Request::get('location')==="")
                    <a href="{{ url('ReporteInventarios6', Request::get('name'))}}" class="btn btn-danger" title="Generar Reporte"  target="_blank"> <i class="fa fa-print fa-lg"></i> Generar Reporte</a>
                    
                    @elseif(Request::get('category')==="")
                    <a href="{{ url('ReporteInventarios5', ['name'=>Request::get('name'),'location'=>Request::get('location')])}}" class="btn btn-danger" title="Generar Reporte"  target="_blank"> <i class="fa fa-print fa-lg"></i> Generar Reporte</a>
                    @elseif(Request::get('name')==="")
                    <a href="{{ url('ReporteInventarios3', ['category'=>Request::get('category'),'location'=>Request::get('location')])}}" class="btn btn-danger" title="Generar Reporte"  target="_blank"> <i class="fa fa-print fa-lg"></i> Generar Reporte</a>
                    @else
                    <a href="{{ url('ReporteInventarios',['name'=>Request::get('name'),'category'=>Request::get('category'),'location'=>Request::get('location')]) }}" class="btn btn-danger" title="Generar Reporte" target="_blank"> <i class="fa fa-print fa-lg"></i> Generar Reporte</a>
                    @endif
                    
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                @if(Session::has('msg_create'))
                    <p class="alert alert-success">{{ Session::get('msg_create')}}</p>
                @endif
                <div class="panel panel-principal">
                    <div class="panel-heading text-center">
                        <h4>INVENTARIO GENERAL</h4>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                {!! Form::model(Request::all(),array('route' => 'device.index', 'method' => "GET", 'class' => 'form-horizontal', 'role' => 'search')) !!}
                                    <div class="form-group">
                                        <div class="col-md-2 text-right">
                                            {!! Form::label('name', 'Buscar por:', array('class' => 'control-label')) !!}
                                        </div>
                                        <div class="col-md-3">
                                            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder' => 'Nombre de Dispositivo']) !!}
                                        </div>
                                        <div class="col-md-3">
                                            {!! Form::select('category', $categories, null,array('id'=>'select-category','class'=>'form-control')) !!}
                                        </div>
                                        <div class="col-md-3">
                                            {!! Form::select('location', $locations, null,array('id'=>'select-location','class'=>'form-control')) !!}
                                        </div>
                                        <div class="col-md-1">
                                            <button class="btn btn-primary" type="submit">Buscar</button>
                                        </div>
                                    </div>
                                {!! Form::close() !!}
                            </div>            
                        </div>
                        <hr style="margin:0;">
                        <div class="row">
                            <div class="col-md-12">
                                <p><strong>Se encontraron {{ $devices->total() }} registros</strong></p>
                                @include('admin.devices.partials.table')
                                {!! $devices->appends(Request::only(['name','category','location']))->render() !!}
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    

@endsection
{!! Form::open(array('route' => array('device.destroy', ':DEVICE_ID'), 'method' => "DELETE", 'id' => 'form-delete')) !!}
{!! Form::close() !!}
@section('scripts')
    <script>
        $(document).on("ready",function(){
            $(".btn-delete").click(function(e){
                e.preventDefault();
                var row = $(this).parents("tr");
                var id = row.data("id");
                var form = $("#form-delete");
                var url = form.attr("action").replace(":DEVICE_ID",id);
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
                        alert("La Disposito no pudo ser Eliminado");
                        row.show();
                    }
                });
            });

            $(".btn-reporte").on("click", function(){
                var name = $("#name").val();
                var category = $("#select-category").val();
                var location = $("#select-location").val();
                //alert(name+" , "+category+" , "+location)
                $.ajax({
                    url:"ReporteInventario",
                    type:"GET",
                    data:{name:name,category:category,location:location}
                    
                });
            });
        });
    </script>
@stop