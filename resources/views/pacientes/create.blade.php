@extends('layouts.principal1')
@section('content')

      <script type="text/javascript" src="{{ asset('js/validator/validator.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/webcam/webcam.min.js') }}" ></script>

      <div class="page-title">
        <div class="title_left">
          <h3>Ingresar Paciente</h3>
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
              <h2>Llene los datos del paciente <small>(*) dato requerido</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    </li>
                  </ul>
            <div class="clearfix"></div>
            </div>
            <div class="x_content">
              {{ Form::open(['route' => 'pacientes.store', 'method'=>'POST', 'files' => 'true', 'class'=>'form-horizontal form-label-left']) }}
              {!! csrf_field() !!}

                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Nombre <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="name" name="name" placeholder="ingrese nombre.." required="required" class="form-control col-md-7 col-xs-12">
                  </div>
              </div><br>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Apellidos <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="last_name" name="last_name" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div><br>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Dirección <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="address" name="address" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div><br>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Edad <span class="required">*</span>
                        </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="number" id="age" name="age" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                  </div>
                </div><br>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Fecha de nacimiento <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="birthday" name="birthday" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div><br>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Telefono <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="telephone" name="telephone" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div><br>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Sexo <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select class="" name="genero" class="form-control"  required="required">
                          <option value="" selected="selected">Seleccione..</option>
                          <option value="hombre">Hombre</option>
                          <option value="mujer">Mujer</option>
                    </select>
                  </div>
                </div><br>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Tomar Fotografía <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#foto">
                      Tomar Foto
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="foto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            <h5 class="modal-title" id="exampleModalLabel">Tomar fotografía:</h5>
                          </div>
                          <div class="modal-body">
                            <div id="my-camera"></div>
                          </div>

                          <div class="modal-footer">
                            <button type="button" class="btn btn-primary" onclick="take_snapshot()">Capturar Foto</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div id="results"></div>

                  </div>
                </div>
                <input type="hidden" name="rol" value="cliente">
                <input id="fotoPerfil" type="hidden" name="fotoPerfil"  value="">
                <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-md-offset-3">
                        <button type="submit" class="btn btn-primary">Cancelar</button>
                        <button id="send" type="submit" class="btn btn-success">Guardar</button>
                      </div>
                    </div>
              {{ Form::close() }}
            </div>
          </div>
        </div>
      </div>




      <script language="JavaScript">
    		Webcam. set({
    			width: 300,
    			height: 300,
    			image_format: 'jpeg',
    			jpeg_quality: 90
    		});
    		Webcam.attach( '#my-camera' );
    	</script>

      <script language="JavaScript">
    		function take_snapshot() {
    			// take snapshot and get image data
    			Webcam.snap( function(data_uri) {
    				// display results in page
    				document.getElementById('results').innerHTML =
    					'<h4>Imagen a Guardar:</h4>' +
    					'<img src="'+data_uri+'" class="foto_perfil"/>';

            var image_data = data_uri.replace(/^data\:image\/\w+\;base64\,/, '');
            document.getElementById('fotoPerfil').value = image_data;

    			} );
    		}
	   </script>

      <!--script type="text/javascript">
        $('#myModal').on('shown.bs.modal', function () {
          $('#myInput').focus()
        });
      </script-->

      <script type="text/javascript">
        $(document).ready(function() {
          $('#birthday').daterangepicker({
            singleDatePicker: true,
            calender_style: "picker_4"
          }, function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
          });
        });
      </script>
      <!--script de validación-->
      <script>
        // initialize the validator function
        validator.message['date'] = 'not a real date';

        // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
        $('form')
          .on('blur', 'input[required], input.optional, select.required', validator.checkField)
          .on('change', 'select.required', validator.checkField)
          .on('keypress', 'input[required][pattern]', validator.keypress);

        $('.multi.required')
          .on('keyup blur', 'input', function() {
            validator.checkField.apply($(this).siblings().last()[0]);
          });

        // bind the validation to the form submit event
        //$('#send').click('submit');//.prop('disabled', true);

        $('form').submit(function(e) {
          e.preventDefault();
          var submit = true;
          // evaluate the form using generic validaing
          if (!validator.checkAll($(this))) {
            submit = false;
          }

          if (submit)
            this.submit();
          return false;
        });

        /* FOR DEMO ONLY */
        $('#vfields').change(function() {
          $('form').toggleClass('mode2');
        }).prop('checked', false);

        $('#alerts').change(function() {
          validator.defaults.alerts = (this.checked) ? false : true;
          if (this.checked)
            $('form .alert').remove();
        }).prop('checked', false);
      </script>
@endsection
