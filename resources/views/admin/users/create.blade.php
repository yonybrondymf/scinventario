@extends('layout')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-md-12">
                <br>
                <div class="panel panel-green">
                    <div class="panel-heading">
                        Nuevo Usuario
                    </div>
                    <div class="panel-body">
                        
                        <div class="row">
                            <div class="col-md-12">
                                @include('admin.users.partials.messages')
                                {!! Form::open(array('route' => 'user.store', 'method'=>'POST' , 'class' => 'form-horizontal' )) !!}
                                    @include('admin.users.partials.fields')
                                    <div class="form-group">
                                        <div class="col-md-offset-4 col-md-4">
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
    </div>
    <!-- /#page-wrapper -->

@endsection