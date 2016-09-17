@extends('app')

@section('content')

	   <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Crear usuario</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
						<div class="row">
							<div class="col-lg-10">
								<form role="form">
									<div class="form-group">
										<label>Nombres</label>
										<input class="form-control">
									</div>
									<div class="form-group">
										<label>Apellidos</label>
										<input class="form-control">
									</div>
									<div class="form-group">
										<label>E-mail</label>
										<input class="form-control">
									</div>
									<div class="form-group">
										<label>Fecha de Nacimiento</label>
										<input type="date" class="form-control">
									</div>
									<div class="form-group">
										<label>Telefono</label>
										<input class="form-control">
									</div>
									<div class="form-group">
										<label>Contraseña</label>
										<input class="form-control">
									</div>
									<div class="form-group">
										<label>Confirmar Contraseña</label>
										<input class="form-control">
									</div>
									<div class="form-group">
										<label>Pais</label>
										<select class="form-control">
											<option>El Salvador</option>
											<option>Guatemala</option>
										</select>
									</div>
									<div class="form-group">
										<label>Ciudad</label>
										<select class="form-control">
											<option>San Salvador</option>
											<option>Santa Ana</option>
										</select>
									</div>
									<button type="submit" class="btn btn-default">Crear Ebook</button>
								</form>
							</div>
							<!-- /.col-lg-6 (nested) -->
						</div>
						<!-- /.row (nested) -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
@endsection
