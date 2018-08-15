@extends('layout')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-md-12">
                <h1>Inventario General</h1>
                <div class="pull-right">
                    <a href="" class="btn btn-default">Nuevo Dispositivo</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Lista de Activo
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 text-right">
                                
                                    <form class="navbar-form" role="search">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search" name="q">
                                            <div class="input-group-btn">
                                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Codigo Patrimonial</th>
                                                <th>Descripcion del Bien</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Serial</th>
                                                <th>Color</th>
                                                <th>Dimension</th>
                                                <th>Estado</th>
                                                <th>Fecha de ingreso</th>
                                                <th>Pais de Origen</th>
                                                <th>Ubicacion</th>
                                                <th>Responsable</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
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