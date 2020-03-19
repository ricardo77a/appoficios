@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Crear proveedor</div>
				<div class="card-body">
					<div class="row mt-3">
						<div class="col-md-12">
							<form action="{{ route('cliente.store') }}" method="POST">
								@csrf
								<div class="row">
									<div class="col">
										<input type="text" class="form-control" placeholder="Nombre" autofocus name="nombre">
									</div>

									<div class="col">
										<input type="text" class="form-control" placeholder="paterno" name="paterno">
									</div>

									<div class="col">
										<input type="text" class="form-control" placeholder="materno" name="materno">
									</div>
								</div>
								<div class="row mt-3">
									<div class="col">
										<input type="text" class="form-control" placeholder="curp" name="curp">
									</div>
									<div class="col">
										<input type="text" class="form-control" placeholder="rfc" name="rfc">
									</div>
									<div class="col">
										<input type="text" class="form-control" placeholder="direccion" name="direccion">
									</div>
								</div>

								<div class="row mt-3">
									<div class="col">
										<button type="submit" class="btn btn-dark">Guardar</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
