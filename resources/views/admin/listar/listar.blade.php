@extends('admin.template.index')

@section('content')

<div class="row">
    <div class="col s12 m4 l1"></div>
    <div class="col s12 m12 l10">
		<div class="row">
			<div class="container z-depth-3">
				<table class="bordered centered highlight">
					<br>
					<div class="row">
							<div class="col sl2">
								<div class="col s2 text-center offset-s2">
									<a href="#"><img src="{{ asset('iconos/pdf.png')}}" width="25"></a>
								</div>

								<div class="col s2 text-center offset-s2">
									<a href="#"><img src="{{ asset('iconos/excel.png')}}" width="30"></a>
								</div>
							</div>
					</div>
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Cedula</th>
							<th>Tipo de Participacion</th>
							<th>Dias de Asistencia</th>
							<th>Accion</th>
						</tr>
					</thead>

					<tbody>

					@foreach ($usuarios as $usuario) 
						
						<tr>
							<td> {{ $usuario->nombre   }} </td>
							<td> {{ $usuario->apellido }} </td>
							<td> {{ $usuario->cedula   }} </td>
							<td> {{ $usuario->tipo_participacion }} </td>
							<td> {{ $usuario->asistencia }} </td>
							<td>
								<a href="#"><img src="{{ asset('iconos/ojo.png')}}" width="25"></a>
								<a href="#"><img src="{{ asset('iconos/edit.png')}}" width="25"></a>
								<a href="#"><img src="{{ asset('iconos/certificado.png')}}" width="25"></a>
								<a href="#"><img src="{{ asset('iconos/Delete_64px.png')}}" width="25"></a>
							</td>
						</tr>
					
					@endforeach
						
					</tbody>

				</table>

				{!! $usuarios->links() !!}

			</div>
    	</div>
    <!--CONTENIDO PRINCIPAL-->
    <div class="col s12 m4 l1"></div>

</div>

@endsection