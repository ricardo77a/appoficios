@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Crea oficio</div>

				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<form action="{{ route('oficios.store') }}" method="post">
								@csrf
								<div class="form-row">
									<div class="col">
										<input type="text" class="form-control" placeholder="Nombre del nuevo oficio" name="oficio" autofocus="autofocus" autocomplete="off">
									</div>
									<div class="col">
										<button type="submit" class="btn btn-dark">Guardar nuevo oficio</button>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-md-12">
							<div class="table-responsive-sm">
								<table class="table table-hover">
									<caption>Listado de oficios</caption>
									<thead class="thead-dark">
										<tr>
											<th scope="col">#</th>
											<th scope="col">First</th>
										</tr>
									</thead>
									<tbody>
										@forelse ($oficios as $oficio)
											<tr>
												<th>{{ $oficio->id }}</th>
												<td>{{ $oficio->oficio }}</td>
											</tr>
										@empty
											<tr>
												<td colspan="2">NO EXISTEN DATOS CARGADOS AÚN</td>
											</tr>
										@endforelse
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
