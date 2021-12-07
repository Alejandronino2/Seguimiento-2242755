
@extends('menu.menuInstructor')

@section('proyecto')
<section class="section">
<div class="section-body">
<h4>Proyectos:</h4>
<div class="row">

@foreach ($result as $proyec)
<div class="col-xl-3 col-lg-6">

<a href="{{ url('instructor/proyecto/'.$proyec->idProyecto) }}">
                <div class="card l-bg-orange">
                  <div class="card-body card-type-3">
                    <div class="row">
                      <div class="col">
                      <center>
                        <h6 class="text-muted mb-0">{{ $proyec->nombreProyecto }}</h6>
                        <span class="font-weight-bold mb-0">{{ $proyec->descripcionProyecto }}</span>
                      </div>
                      </div>
                     <center>
                    <p class="mt-3 mb-0 text-muted text-sm">
					@if ($proyec->estadoProyecto === 1)
                      <span class="text-nowrap">Activo</span>
					@elseif ($usuario->estadoUsuario === 0)
					<span class="text-nowrap">Finalizado</span>
					@endif
</center>
          </a>
                    </p>
                    </center>
                  </div>
                </div>
              </div>  
			@endforeach    
</div>
</div>
</section>
@endsection