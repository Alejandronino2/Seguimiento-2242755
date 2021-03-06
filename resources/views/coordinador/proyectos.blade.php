
@extends('menu.menuCoordinador')

@section('proyectos')
<section class="section">
<div class="section-body">
<div class="row">
@if(count($result)<=0)
    <h1 class="text-center">No hay proyectos</h1>
@else
@foreach ($result as $proyec)
<div class="col-xl-3 col-lg-6">
<div class="card l-bg-orange">
<a href="{{ url('coordinador/proyecto/'.$proyec->idProyecto) }}">
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
          
                    </p>
                     
                  </div>
                  </a> 
                </div>
              </div>  
			@endforeach    
            @endif
</div>
</div>
</section>
@endsection