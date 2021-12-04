@extends('menu.menuCoordinador')
@section('perfil')
@foreach ($result as $perfil)
<section class="section">
<div class="section-body">
<div class="row">
<div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Perfil</h4>
                  </div>
                  <div class="card-body">
                        <div class="form-group">
                            <label for="email">Correo</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $perfil->email }}" required readonly>
                        </div>
                        <div class="card-footer text-right">
                           <a href="#" class="btn btn-icon icon-left btn-primary" data-toggle="modal"  title="Editar" data-target="#ModalEditarPerfil{{$perfil->idUsuario}}"><i class="fas fa-pencil-alt"></i>Cambiar Contraseña</a>
                        </div>
                   </div>
                  </div>
               </div>

			  </div>
            </div>
            </div>
        </section>
@endforeach
@include('coordinador.cambiarContraseña')

@endsection