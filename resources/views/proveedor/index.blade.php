@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">PROVEEDOR</div>
				<div class="card-body">
					<div class="row mt-3">
						<div class="col-md-4 mt-3">
							<div class="card">
								<div class="card-header">
									NOMBRE
								</div>
							  	<div class="card-body">
							    	{{ $proveedor->nombre }}
							  	</div>
							</div>
						</div>
						<div class="col-md-4 mt-3">
							<div class="card">
								<div class="card-header">
									NOMBRE
								</div>
							  	<div class="card-body">
							    	{{ $proveedor->nombre }}
							  	</div>
							</div>
						</div>
						<div class="col-md-4 mt-3">
							<div class="card">
								<div class="card-header">
									EDAD
								</div>
							  	<div class="card-body">
							    	{{ $proveedor->edad }}
							  	</div>
							</div>
						</div>
						<div class="col-md-4 mt-3">
							<div class="card">
								<div class="card-header">
									RFC
								</div>
							  	<div class="card-body">
							    	{{ $proveedor->rfc }}
							  	</div>
							</div>
						</div>
						<div class="col-md-4 mt-3">
							<div class="card">
								<div class="card-header">
									Dirección
								</div>
							  	<div class="card-body">
							    	{{ $proveedor->direccion }}
							  	</div>
							</div>
						</div>
						<div class="col-md-12 mt-3">
							<div class="card">
								<div class="card-header">
									Descripción
								</div>
							  	<div class="card-body">
							    	{{ $proveedor->descripcion }}
							  	</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
