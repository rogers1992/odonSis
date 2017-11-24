@extends('layouts.principal1')
@section('content')

<link rel="stylesheet" href="{{ asset('odontograma/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/jquery-ui/jquery-ui.min.css') }}">
<link rel="stylesheet" href="{{ asset('odontograma/css/jquery-ui-1.8.17.custom.css') }}">
<link rel="stylesheet" href="{{ asset('odontograma/css/jquery.svg.css') }}">
<!--link rel="stylesheet" href="{{ asset('odontograma/css/odontograma.css') }}"-->


<div class="x_panel">
  <div class="x_title">
    <h2>Lista de Pacientes</h2>
    <ul class="nav navbar-right panel_toolbox">
      <li><a href="#"><i class="fa fa-chevron-up"></i></a>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">Settings 1</a></li>
          <li><a href="#">Settings 2</a></li>
        </ul>
      </li>
      <li><a href="#"><i class="fa fa-close"></i></a></li>
    </ul>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
    <p class="text-muted font-13 m-b-30">todos los pacientes mostrados</p>
                <table id="datatable" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Ultimo Tratamiento</th>
                      <th>Estado</th>
                      <th>Herramientas</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($users as $user)
                    <tr>
                      <td>{{ $user->name." ".$user->last_name }}</td>
                      <td>Endodoncia</td>
                      <td>pendiente</td>
                      <td>
                        <li role="presentation" class="dropdown">
                          <a id="drop4" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                Accion
                                <span class="caret"></span>
                            </a>
                          <ul id="menu6" class="dropdown-menu animated fadeInDown" role="menu">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('pacientes.show', $user->id)}}">Ver paciente</a>
                            </li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#addTratamiento" data-toggle="modal" data-target="#addTratamiento">Historia Clinica</a>
                            </li>
                            <li role="presentation"><a href="#" data-toggle="modal" data-target="#tratamiento">Añadir Tratamiento</a>
                            </li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">Editar</a>
                            </li>
                          </ul>
                        </li>
                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
      </div>
    </div>
    <div class="modal fade bs-example-modal-lg" id="tratamiento" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h5 class="modal-title" id="exampleModalLabel">Añadir Tratamiento:</h5>
          </div>
          <div class="modal-body">
            <div id=""></div>
            {{ Form::open(['route' => 'pacientes.store', 'method'=>'POST', 'files' => 'true', 'class'=>'form-horizontal form-label-left']) }}
            {!! csrf_field() !!}
            <div class="item from-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12"><span>Especialidad:</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select class="form-control">
                  <option>1</option>
                  </select>
              </div>
            </div><br><br>
          </div>
          <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Detalles Tratamiento: <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="detalles_tratamiento" name="detalles" required="required" class="form-control col-md-7 col-xs-12">
              </div>
          </div><br>
          <div class="item from-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12"><span>Pieza dental:</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select class="form-control">
                  <option>1</option>
                  </select>
              </div>
          </div><br>
            {{ Form::close() }}
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-primary" onclick="">Guardar</button>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
      $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').focus()
      });
      </script>


    <script defer src="{{ asset('js/jquery-ui.min.js') }}"></script>

    <script defer src="{{ asset('odontograma/js/plugins.js')}}"></script>
    <script defer src="{{ asset('odontograma/js/jquery.tmpl.js')}}"></script>
    <script defer src="{{ asset('odontograma/js/knockout-2.0.0.js')}}"></script>
    <script defer src="{{ asset('odontograma/js/jquery.svg.min.js')}}"></script>
    <script defer src="{{ asset('odontograma/js/jquery.svggraph.min.js')}}"></script>
    <script defer src="{{ asset('odontograma/js/odontograma.js')}}"></script>

@endsection
