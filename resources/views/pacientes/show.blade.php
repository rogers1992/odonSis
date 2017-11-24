@extends('layouts.principal1')
@section('content')
  <!--cs para las tablas-->
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
      <h3>Perfil del paciente</h3>
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
          <h2>Datos Personales <small>{{ $user->name }}</small></h2>
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
          <div class="col-m-6 col-sm-4 col-xs-12">
            <img src="{{ asset('').$user->path }}" alt="No tiene una foto" class="foto_perfil">
          </div>
          <div class="col-m-6 col-sm-8 col-xs-12">
            <!--en este div falta modificar que los datos se vayan a la izquierda para que no se solapen-->
            <h3>{{ $user->name." ".$user->last_name }}</h3>
            <ul class="list-unstyled user_data">
              <li><i class="fa fa-map-marker user-profile-icon"></i> {{ $user->address }}
              </li>
              <li>
                <i class="fa fa-user-circle user-profile-icon">Edad:</i> {{ $user->age }}
              </li>
              <li>
                <i class="fa fa-mobile-phone user-profile-icon" aria-hidden="true"></i> {{ $user->telephone }}
              </li>
            </ul>
            <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Editar Datos</a>
          </div>

        </div>
      </div>
    </div>
  </div>
  <div class="x_panel">
    <div class="x_title">
      <h2>Historia Clinica <small>{{ $user->name }}</small></h2>
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
      <div class="" role="tabpanel" data-example-id="togglable-tabs">
        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Anniamesis</a>
          </li>
          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">odontograma</a>
          </li>
          <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Historia de tratamientos</a>
          </li>
        </ul>
        <div id="myTabContent" class="tab-content">
          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
            <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
              booth letterpress, commodo enim craft beer mlkshk aliquip</p>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
            <p class="text-muted font-13 m-b-30">Lista de tratamientos realizados del hasta ahora.</p>
                        <table id="datatable" class="table table-striped table-bordered">
                          <thead>
                            <tr>
                              <th>Fecha</th>
                              <th>Hora</th>
                              <th>Tratamiento</th>
                              <th>Descripción del Tratamiento</th>
                              <th>Start date</th>
                              <th>Salary</th>
                            </tr>
                          </thead>


                          <tbody>
                            <tr>
                              <td>Tiger Nixon</td>
                              <td>System Architect</td>
                              <td>Edinburgh</td>
                              <td>61</td>
                              <td>2011/04/25</td>
                              <td>$320,800</td>
                            </tr>
                            <tr>
                              <td>Garrett Winters</td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>63</td>
                              <td>2011/07/25</td>
                              <td>$170,750</td>
                            </tr>
                            <tr>
                              <td>Ashton Cox</td>
                              <td>Junior Technical Author</td>
                              <td>San Francisco</td>
                              <td>66</td>
                              <td>2009/01/12</td>
                              <td>$86,000</td>
                            </tr>
                            <tr>
                              <td>Cedric Kelly</td>
                              <td>Senior Javascript Developer</td>
                              <td>Edinburgh</td>
                              <td>22</td>
                              <td>2012/03/29</td>
                              <td>$433,060</td>
                            </tr>
                            <tr>
                              <td>Airi Satou</td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>33</td>
                              <td>2008/11/28</td>
                              <td>$162,700</td>
                            </tr>
                            <tr>
                              <td>Brielle Williamson</td>
                              <td>Integration Specialist</td>
                              <td>New York</td>
                              <td>61</td>
                              <td>2012/12/02</td>
                              <td>$372,000</td>
                            </tr>
                            <tr>
                              <td>Herrod Chandler</td>
                              <td>Sales Assistant</td>
                              <td>San Francisco</td>
                              <td>59</td>
                              <td>2012/08/06</td>
                              <td>$137,500</td>
                            </tr>
                          </tbody>
                        </table>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                  @include('graficos.odontograma')
                </div>
            </div>
          </div>
        </div>
      </div>



@endsection
