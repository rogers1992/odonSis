<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Gentallela Alela! | </title>

  <!-- Bootstrap core CSS -->

  <link rel="stylesheet" href=" {{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href=" {{ asset('fonts/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href=" {{ asset('css/animate.min.css') }}">
  <!-- Custom styling plus plugins -->
  <link rel="stylesheet" href=" {{ asset('css/custom.css') }}">
  <link rel="stylesheet" href=" {{ asset('css/icheck/flat/green.css') }}">

  <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}" ></script>

  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}" ></script>


  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body style="background:#F7F7F7;">

  <div class="">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
      <div id="login" class="animate form">
        <section class="login_content">
          <form role="form" method="POST" action="{{ url('doctores.create') }}">
            {{ csrf_field() }}
            <h1>Entrar al Sistema</h1>
            <div>
              <input type="text" class="form-control" placeholder="Telofono" required="" />
            </div>
            <div>
              <input type="password" class="form-control" placeholder="Contraseña" required="" />
            </div>    
            <div class="clearfix"></div>
            <div>
              <button id="send" type="submit" class="btn btn-success">Ingresar</button>
            </div>
            <div class="separator">
              <br />
              <div>
                <p>©2017 All Rights Reserved. Privacy and Terms</p>
              </div>
            </div>
          </form>
          <!-- form -->
        </section>
        <!-- content -->
      </div>
      
    </div>
  </div>

</body>

</html>