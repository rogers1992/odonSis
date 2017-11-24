<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Clinica Jesucristo da Vida</title>
	<meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">

	<!--link rel="stylesheet" href=" {{ asset('css/style.css') }}"-->
	<!--link rel="stylesheet" href=" {{ asset('css/style1.css') }}"-->

	<!--link rel="stylesheet" href=" {{ asset('css/tooltips.css') }}"-->
	<link rel="stylesheet" href=" {{ asset('bower_components/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href=" {{ asset('css/bootstrap-datetimepicker.css') }}">
	<link rel="stylesheet" href=" {{ asset('css/animate.min.css') }}">
	<link rel="stylesheet" href=" {{ asset('css/custom.css') }}">

        <!-- MetisMenu CSS -->
	<!--link rel="stylesheet" href=" {{ asset('bower_components/metisMenu/dist/metisMenu.min.css') }}"-->

        <!-- Timeline CSS -->
	<link rel="stylesheet" href=" {{ asset('dist/css/timeline.css') }}">
  <!-- Custom CSS -->
	<link rel="stylesheet" href=" {{ asset('dist/css/sb-admin-2.css') }}">
        <!-- Morris Charts CSS -->
	<link rel="stylesheet" href=" {{ asset('bower_components/morrisjs/morris.css') }}">

        <!-- Custom Fonts -->
	<link rel="stylesheet" href=" {{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href=" {{ asset('css/style-div.css') }}">
	<!--link rel="stylesheet" href=" {{ asset('css/styles.css') }}"-->
	<link rel="stylesheet" href=" {{ asset('sass/footer.css') }}">
	<link rel="stylesheet" href=" {{ asset('js/dateranger/daterangepicker.css') }}">

	<!--script type="text/javascript" src="{{ asset('js/transition.js') }}" ></script>
	<script type="text/javascript" src="{{ asset('js/collapse.js') }}" ></script-->
	<script type="text/javascript" src="{{ asset('js/custom.js') }}" ></script>
	<!-- icheck -->
	<script type="text/javascript" src="{{ asset('js/icheck/icheck.min.js') }}"></script>
	<!-- image cropping -->
	<script type="text/javascript" src="{{ asset('js/cropping/cropper.min.js') }}" ></script>
	<script type="text/javascript" src="{{ asset('js/cropping/main.js') }}" ></script>
	<!-- daterangepicker -->
	<script type="text/javascript" src="{{ asset('js/bootstrap-datetimepicker.min.js') }}" ></script>
	<script type="text/javascript" src="{{ asset('js/moment.js') }}" ></script>
	<!-- moris js -->
	<script type="text/javascript" src="{{ asset('js/moris/raphael-min.js') }}" ></script>
	<script type="text/javascript" src="{{ asset('js/jquery-3.0.0.min.js') }}" ></script>
	<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}" ></script>
	<script type="text/javascript" src="{{ asset('js/dateranger/moment.min.js') }}" ></script>
	<script type="text/javascript" src="{{ asset('js/dateranger/daterangepicker.js') }}" ></script>
		<script type="text/javascript" src="{{ asset('bower_components/bootstrap/js/bootstrap.min.js') }}" ></script>


	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
  <header>
	<div class="r-navbar">
	  <ul class="r-navbar-sup">
	  	<li class="pacientes"><a href="#">Pacientes</a></li>
		  <li class="r-dropdown"><a href="#" class="r-dropbtn">Almacen</a>
		  <div class="r-dropdown-content">
		  	<a href="#">insumos</a>
		  	<a href="#">productos</a>
		  	<a href="#">tratamientos</a>
		  </div>
		  </li>
		  <li><a href="#">Clinicas</a></li>

	  </ul>
	  <div class="r-logotipo">
			<img class="r-img-portada" src="images/portada1.jpg" alt=""/>
	  	<h2>Una buena opcion para tu paladar.</h2>
	  </div>

	 <div class="r-menu-secundario">
		 <ul class="r-navbar-inf">
		 	<li><a href="#">Datos Personales</a></li>
			<li><a href="#">Odontograma</a></li>
			<li><a href="#">Hisotirial</a></li>
			<li><a href="#">Cuentas</a></li>
		</ul>
		<form  action="index.html" metdod="post">
			<input class="r-search-in" type="text" name="search" placeholder="Buscar Paciente......">
			<input class="r-search-go" type="button" name="name" value="Buscar">
		</form>

	 </div>
	</div>
  </header>
	<div class="r-row">
		<div class="r-col-2 r-col-m-6">
			<div class="r-container">
				<div class="r-container-card">
					<div class="r-card-header r-blue-light-3">
						<h4 class="r-text-white">Navegaci&oacute;n</h4>
					</div>
					<div class="r-card-body ">
						<div class="navbar-collapse sidebar-nav">
								<li>
		          		<a href="#"><i class="fa fa-user fa-fw"></i> Pacientes <span class="fa arrow"></span></a>
		              <ul class="nav nav-second-level">
		                <li>
		    							<a href=""><i class="fa fa-plus-circle fa-fw"></i>Nuevo Paciente</a>
		                </li>
		                <li>
		                  <a href=""><i class="fa fa-list-alt fa-fw"></i>Listar Pacientes</a>
		                </li>
										<li>
		                  <a href="">Tratamientos</a>
		                </li>
		             </ul>
		            </li>
								<li>
		          		<a href="#">Consultorios <span class="fa arrow"></span></a>
		              <ul class="nav nav-second-level">
		                <li>
		    							<a href=""><i class="fa fa-plus-circle fa-fw"></i> Añadir Consultorio</a>
		                </li>
		                <li>
		                  <a href=""><i class="fa fa-list-alt fa-fw"></i>Listar Consultorios</a>
		                </li>
		             </ul>
		            </li>
								<li>
		          		<a href="#"><i class="fa fa-male fa-fw"></i> Doctores <span class="fa arrow"></span></a>
		              <ul class="nav nav-second-level">
		                <li>
		    							<a href=""><i class="fa fa-plus-circle fa-fw"></i> Añadir Doctor</a>
		                </li>
		                <li>
		                  <a href=""><i class="fa fa-list-alt fa-fw"></i>Listar Doctores</a>
		                </li>
		             </ul>
		            </li>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!--hasta aqui es una fila de 3 columnas x-->
		@yield('content')
	</div>



  <div class="r-row">
     <div class="r-col-12 r-col-m-12">
       <div class="r-footer">
         <div class="r-container r-blue-darken-3">
           <h3 class="r-text-white">INFORMACION</h3>
         </div>
         <div class="r-footer-lic r-blue-darken-4">

         </div>
       </div>
     </div>
   </div>

</body>
<!--script>
 $(document).ready(function(){
   $(".pacientes").click(function(){
     $(".r-menu-secundario").slideToggle("slow");
   });
 });
</script-->
</html>
