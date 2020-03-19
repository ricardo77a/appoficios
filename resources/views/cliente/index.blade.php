@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">CLIENTE</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-4">
							<p>Nombre:</p> {{ $cliente->nombre }} {{ $cliente->paterno }} {{ $cliente->materno }}
						</div>
						<div class="col-md-4">
							<p>CURP:</p> {{ $cliente->curp }}
						</div>
						<div class="col-md-4">
							<p>RFC:</p> {{ $cliente->rfc }}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
