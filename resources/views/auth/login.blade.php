@extends('app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-panel panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Iniciar Sesion</h3>
					</div>
					<div class="panel-body">
						@if (count($errors) > 0)
							<div class="alert alert-danger">
								<strong>Ups!</strong> Algunos problemas que debes resolver.<br><br>
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
									<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus value="{{ old('email') }}">
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Contraseña" name="password" type="password" value="">
								</div>
								<div class="checkbox">
									<label>
										<input name="remember" type="checkbox">Recuerdame
									</label>
								</div>
								<button type="submit" class="btn btn-lg btn-success btn-block col-md-12">Ingresar</button>

								<div class="form-group">
									<div class="col-md-6 col-md-offset-5">

										<a class="btn btn-link" href="{{ url('/password/email') }}">Olvido su contraseña?</a>
									</div>
								</div>
							</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
