<div class="form-group">
    <div class="col-md-4">
        {!! Form::label('code', 'Codigo Patrimonial : ', array('class' => 'control-label')) !!}
        {!! Form::text('code', null,array('class' => 'form-control', 'placeholder' => 'Ingrese Codigo Patrimonial')) !!}
    </div>
    <div class="col-md-4">
        {!! Form::label('category_id', 'Categoria : ', array('class' => 'control-label')) !!}
        {!! Form::select('category_id', $categories, null,array('class'=>'form-control')) !!}
    </div>
    <div class="col-md-4">
        {!! Form::label('description', 'Descripcion del bien : ', array('class' => 'control-label')) !!}
        {!! Form::text('description', null,array('class' => 'form-control', 'placeholder' => 'Describa el bien')) !!}
    </div>
    
</div>
<div class="form-group">
    <div class="col-md-4">
        {!! Form::label('brand', 'Marca:', array('class' => 'control-label')) !!}
        {!! Form::text('brand', null,array('class' => 'form-control', 'placeholder' => 'Escriba Marca')) !!}
    </div>
    <div class="col-md-4">
        {!! Form::label('model', 'Modelo:', array('class' => 'control-label')) !!}
        {!! Form::text('model', null,array('class' => 'form-control', 'placeholder' => 'Escriba Modelo')) !!}
    </div>
    <div class="col-md-4">
        {!! Form::label('serial', 'Serie:', array('class' => 'control-label')) !!}
        {!! Form::text('serial', null,array('class' => 'form-control', 'placeholder' => 'Escriba Numero de Serie')) !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-4">
        {!! Form::label('dimension', 'Dimension:', array('class' => 'control-label')) !!}
        {!! Form::text('dimension', null,array('class' => 'form-control', 'placeholder' => 'Escriba Dimension')) !!}
    </div>
    <div class="col-md-4">
        {!! Form::label('color', 'Color:', array('class' => 'control-label')) !!}
        {!! Form::text('color', null,array('class' => 'form-control', 'placeholder' => 'Escriba Color')) !!}
    </div>
    <div class="col-md-4">
        {!! Form::label('cost', 'Valor en Libros:', array('class' => 'control-label')) !!}
        {!! Form::text('cost', null,array('class' => 'form-control', 'placeholder' => 'Escriba valor de ingreso')) !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-4">
        {!! Form::label('entry', 'Fecha de Ingreso:', array('class' => 'control-label')) !!}
        <div class='input-group date' id='datetimepicker1'>
            {!! Form::text('entry', null,array('class' => 'form-control', 'placeholder' => 'Escriba Fecha')) !!}
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
    </div>
    <div class="col-md-4">
        {!! Form::label('document', 'Documento de Ingreso:', array('class' => 'control-label')) !!}
        {!! Form::select('document', array(''=>'Seleccione Documento','Boleta'=>'Boleta', 'Factura'=>'Factura','Acta'=>'Acta'), null,array('class'=>'form-control')) !!}
    </div>
    <div class="col-md-4">
        {!! Form::label('state', 'Estado:', array('class' => 'control-label')) !!}
        {!! Form::select('state', array(''=>'Seleccione Estado del Bien','Regular'=>'Regular', 'Bueno'=>'Bueno','Nuevo'=>'Nuevo','Malo'=>'Malo'), null,array('class'=>'form-control')) !!}
    </div>
    
    
</div>
<div class="form-group">
    <div class="col-md-4">
        {!! Form::label('location_id', 'Ubicacion : ', array('class' => 'control-label')) !!}
        {!! Form::select('location_id', $locations, null,array('class'=>'form-control')) !!}
    </div>
    <div class="col-md-4">
        {!! Form::label('made', 'Pais de Origen:', array('class' => 'control-label')) !!}
        {!! Form::text('made', null,array('class' => 'form-control', 'placeholder' => 'Escriba Pais de Origen')) !!}
    </div>
    <div class="col-md-4">
        {!! Form::label('owner', 'Responsable:', array('class' => 'control-label')) !!}
        {!! Form::text('owner', null,array('class' => 'form-control', 'placeholder' => 'Escriba Responsable')) !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-4">
        {!! Form::label('condition', 'Condicion:', array('class' => 'control-label')) !!}
        {!! Form::select('condition', array(''=>'Seleccione Condicion','Comprado'=>'Comprado', 'Donado'=>'Donado'), null,array('class'=>'form-control')) !!}
    </div>
    <div class="col-md-4">
        {!! Form::label('observation', 'Observacion:', array('class' => 'control-label')) !!}
        {!! Form::text('observation', null,array('class' => 'form-control', 'placeholder' => 'Observacion del Bien')) !!}
    </div>
</div>
