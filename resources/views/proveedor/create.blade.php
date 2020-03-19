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
							<form action="{{ route('proveedor.store') }}" method="POST">
								@csrf
								<div class="row">
									<div class="col">
										<input type="text" class="form-control" placeholder="Nombre" autofocus name="nombre">
									</div>
									<div class="col">
										<input type="number" class="form-control" placeholder="Edad" name="edad">
									</div>
									<div class="col">
										<input type="text" class="form-control" placeholder="RFC" name="rfc">
									</div>
								</div>
								<div class="row mt-3">
									<div class="col">
										<input type="text" class="form-control" placeholder="direccion" name="direccion">
									</div>
								</div>

								<div class="row mt-3">
									<div class="col">
										<select class="custom-select custom-select-sm" name="oficio_id">
										  	<option selected>Selecciona un oficio</option>
										  	@foreach ($oficios as $oficio)
											  	<option value="{{ $oficio->id }}">{{ $oficio->oficio }}</option>
										  	@endforeach
										</select>
									</div>
								</div>
								<div class="row mt-3">
									<div class="col">
									  	<textarea class="form-control" placeholder="Descripción" name="descripcion"></textarea>
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
