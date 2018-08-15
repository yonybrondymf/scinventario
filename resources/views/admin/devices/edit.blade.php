@extends('layout')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-md-12">
                <br>
                <div class="panel panel-orange">
                    <div class="panel-heading">
                        Editar Dispositivo
                    </div>
                    <div class="panel-body">
                        
                        <div class="row">
                            <div class="col-md-12">
								@include('admin.devices.partials.messages')
                                {!! Form::model($device,array('route' => array('device.update', $device), 'method' => 'PUT', 'class' => 'form-horizontal')) !!}
                                    @include('admin.devices.partials.fields')
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input type="submit" value="Actualizar" class="btn btn-primary">
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
    </div>
    <!-- /#page-wrapper -->

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