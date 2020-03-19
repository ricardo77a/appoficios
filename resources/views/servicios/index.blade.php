@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Agendar</div>
				<div class="card-body">
					<div class="row mt-3">
						<div class="col-md-12">
							<form action="{{ route('agendar.cita') }}">
								@csrf
								<div class="form-row">
									<div class="col-6">
										<input type="date" class="form-control" placeholder="fecha" name="fecha">
									</div>
									<div class="col-6">
										<input type="text" class="form-control" placeholder="hora" name="hora">
									</div>
								</div>
								<div class="form-row mt-3">
									<div class="col-8">
										<select class="custom-select" name="proveedor_id">
											<option selected>Selecciona una opción</option>
											@foreach ($proveedores as $proveedor)
												<option value="{{ $proveedor->id }}">{{ $proveedor->nombre }} || {{ $proveedor->oficio->oficio }}</option>
											@endforeach
										</select>
									</div>
									<div class="col">
										<button type="submit" class="btn btn-success">Guardar</button>
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
