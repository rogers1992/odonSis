@extends('layouts.principal1')
@section('content')
<link rel="stylesheet" href=" {{ asset('bower_components/datatables/css/jquery.dataTables.min.css') }}">
  <link rel="stylesheet" href=" {{ asset('bower_components/datatables/cssbuttons.bootstrap.min.css/') }}">
  <link rel="stylesheet" href=" {{ asset('bower_components/datatables/css/fixedHeader.bootstrap.min.css') }}">
  <link rel="stylesheet" href=" {{ asset('bower_components/datatables/css/responsive.bootstrap.min.css') }}">
  <link rel="stylesheet" href=" {{ asset('bower_components/datatables/css/scroller.bootstrap.min.css') }}">

  <!--Scripts para tablas-->
  <script type="text/javascript" src="{{ asset('js/datatables/query.dataTables.min.js') }}" ></script>
  <script type="text/javascript" src="{{ asset('js/datatables/dataTables.bootstrap.js') }}" ></script>
  <script type="text/javascript" src="{{ asset('js/datatables/dataTables.buttons.min.js') }}" ></script>
  <script type="text/javascript" src="{{ asset('js/datatables/buttons.bootstrap.min.js') }}" ></script>
  <script type="text/javascript" src="{{ asset('js/datatables/jszip.min.js') }}" ></script>
  <script type="text/javascript" src="{{ asset('js/datatables/pdfmake.min.js') }}" ></script>
  <script type="text/javascript" src="{{ asset('js/datatables/vfs_fonts.js') }}" ></script>
  <script type="text/javascript" src="{{ asset('js/datatables/buttons.html5.min.js') }}" ></script>
  <script type="text/javascript" src="{{ asset('js/datatables/buttons.print.min.js') }}" ></script>
  <script type="text/javascript" src="{{ asset('js/datatables/dataTables.scroller.min.js') }}" ></script>

  <div class="page-title">
    <div class="title_left">
      <h3>Perfil del Doctor</h3>
    </div>
    <div class="title_right">
      <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="row">
    <div class="col-m-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Datos Personales <small>{{ $usuario->name }}</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a href="#"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
              </li>
            </ul> 
        <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <img src="{{ asset('').$usuario->path }}" alt="Avatar" class="foto_perfil">
          <h3>{{ $usuario->name." ".$usuario->last_name }}</h3>

          <ul class="list-unstyled user_data">
            <li><i class="fa fa-map-marker user-profile-icon"></i> {{ $usuario->address }}
            </li>
            <li>
              <i class="fa fa-user-circle user-profile-icon">Edad:</i> {{ $usuario->age }}
            </li>
            <li>
              <i class="fa fa-mobile-phone user-profile-icon" aria-hidden="true"></i> {{ $usuario->telephone }}
            </li>
          </ul>
          <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Editar Datos</a>
        </div>
      </div>
    </div>
  </div>

@endsection
	
 