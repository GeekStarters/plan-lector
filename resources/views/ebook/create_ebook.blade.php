@extends('app')

@section('content')

	   <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Crear ebook</h1>
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
										<label>Nombre</label>
										<input class="form-control">
									</div>
									<div class="form-group">
										<label>Descripcion</label>
										<textarea class="form-control" rows="3"></textarea>
									</div>
									<div class="form-group">
										<label>Estado</label>
										<select class="form-control">
											<option>Activo</option>
											<option>Inactivo</option>
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
