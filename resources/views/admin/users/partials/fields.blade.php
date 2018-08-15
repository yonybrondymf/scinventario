<div class="form-group">
    {!! Form::label('name', 'Nombre : ', array('class' => 'col-md-4 control-label')) !!}
    <div class="col-md-4">
        {!! Form::text('name', null,array('class' => 'form-control', 'placeholder' => 'Escriba algun Nombre')) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('email', 'Email : ', array('class' => 'col-md-4 control-label')) !!}
    <div class="col-md-4">
        {!! Form::email('email', null, array('class'=>'form-control','placeholder'=>'Escriba algun Email'))!!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('password', 'Contraseña : ', array('class' => 'col-md-4 control-label')) !!}
    <div class="col-md-4">
        {!! Form::password('password',array('class'=>'form-control','placeholder'=>'Escriba Contraseña')) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('type', 'Tipo de Usuario : ', array('class' => 'col-md-4 control-label')) !!}
    <div class="col-md-4">  
        {!! Form::select('type', array(''=>'Seleccione Tipo','user'=>'Usuario', 'admin'=>'Administrador'), null,array('class'=>'form-control')) !!}
    </div>
</div>
    

