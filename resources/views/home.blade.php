@extends('layout')

@section('title','Panel Principal')

@section('content')

            <div class="row" >
                <div class="col-md-10 col-md-offset-1 text-center">
                    <div class="panel panel-primary panel-principal">
                      <div class="panel-heading"><h4 style="font-weight:bolder;">TABLERO PRINCIPAL</h4></div>
                      <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-12 text-center">
                                                <p>INVENTARIO GENERAL</p>
                                                <img src="{{ asset('images/consultas.png')}}" widht="180px" height="180px">
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{ route('device.index') }}">
                                        <div class="panel-footer">
                                            <span class="pull-left">Ingresar</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-orange">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-12 text-center">
                                                <p>LISTAR CATEGORIAS</p>
                                                <img src="{{ asset('images/mostrar.png')}}" widht="180px" height="180px">
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{ route('category.index') }}">
                                        <div class="panel-footer">
                                            <span class="pull-left">Ingresar</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-green">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-12 text-center">
                                                <p>REGISTRAR EQUIPOS</p>
                                                <img src="{{ asset('images/entrada.png')}}" widht="180px" height="180px">
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{ route('device.create') }}">
                                        <div class="panel-footer">
                                            <span class="pull-left">Ingresar</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            

           
            
       
@endsection
