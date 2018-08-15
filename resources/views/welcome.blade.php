
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistema de Control de Inventarios</title>
	<link rel="shortcut icon" type="image/png" href="{{ asset('images/favicon.png')}}"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body style="background-color:#0B173B;">

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 text-center" style="color:#DF0101;font-weight:bolder;">
			<h1>SISTEMA DE CONTROL DE INVENTARIO</h1>
			<p style="color:#FFFFFF; font-weight:bold;">I.E. CARLOS ALBERTO CONDE VASQUEZ</p>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading text-center">
					AUTENTICACION DE USUARIO
				</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Advertencia!</strong> Hubo algunos problemas con su entrada.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label for="name" class="col-md-4 control-label">Email:</label>
							<div class="col-md-6">
								<input id="name" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Introduzca su Email">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Contraseña:</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password" placeholder="Introduzca su Contraseña">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-success">Acceder</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
