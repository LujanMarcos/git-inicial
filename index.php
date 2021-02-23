<?php session_start();?>
<!doctype html>
<?php
    unset($GLOBALS['_SESSION']);
$_SESSION['sesion']='1';
 ?>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>

<style type="text/css">
body {
    background-image: url(dir\logo recorte.png)!important;
    background-repeat: no-repeat!important;
    background-position: top center!important;
    background-attachment: fixed!important;
}



</style>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title>Aula Virtual CEADe</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }

.footer   {
 width: 30%;
 margin: 0 auto;
}
    .embed-container {
    position: relative;
    padding-bottom: 115%;
    padding-left: 85%;
        padding-right: 23%;
    height: 0;
    overflow: hidden;
}
.embed-container object {
    position: absolute;
    top:10;
    left: 0;
    width: 100%;


}

.embed-container iframe {
    position: absolute;
    top:10;
    left: 0;
    width: 98%;
    height: 100%;
    padding-top: 0%;

}
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
    <!-- Fonts Roboto -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>


        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Aula Virtual CEADE</a>
        </div>
       <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php?State=registro#reg"><span class="glyphicon glyphicon-user"></span> Registrarse</a></li>
      <li><a href="index.php?State=login#login"><span class="glyphicon glyphicon-log-in"></span> Ingresar</a></li>
      </ul>



      </div>
      </nav>

<?php

        $estado='';
        if (!empty($_GET['State'])){

          $estado=$_GET['State'];
        //echo($estado);
        }
        echo($estado);
        if($estado=='registro'){
          echo'<div  vertical-align="middle" class="container-fluid">';
          echo'<div  class="row-fluid">';
          echo' <div  class="col-sm-12">';
          echo' <div vertical-align="middle" class="col-sm-3">';

          include('dir/inc/portada_cursos.php') ;
          echo'<br>';
          echo'<br>';
          echo'     </div>';
          echo'  <div vertical-align="middle" class="col-sm-5">';

          include('dir/inc/mostrar_portada_opciones.php') ;
          echo'<br>';
          echo'<br>';
          echo'       </div>';
          echo'      <div  vertical-align="middle" class="col-sm-4">';
          echo'<br>';
          echo'<br>';
          echo '<a name="reg"></a>';
          include ('dir/inc/form_register_final.php');
          echo'<br>';
          echo'<br>';
          echo'      </div>';
          echo'  </div>';
          echo' </div>';
          echo'</div>';
        }elseif($estado=='Con'){
          echo'<div  vertical-align="middle" class="container-fluid">';
          echo'<div  class="row-fluid">';
          echo' <div  class="col-sm-12">';
          echo' <div  vertical-align="middle" class="col-sm-3">';
          include('dir/inc/portada_cursos.php') ;

          echo'<br>';
          echo'<br>';
          echo'     </div>';

          echo'  <div vertical-align="middle" class="col-sm-5">';

          include('dir/inc/mostrar_portada_opciones.php') ;
          echo'<br>';
          echo'<br>';
          echo'       </div>';

          echo'      <div  vertical-align="middle" vertical-align="middle" class="col-sm-4">';
          echo '<a name="rec"></a>';
          include ('dir/inc/form_recuperar_con.php');

          echo'<br>';
          echo'<br>';
          echo'      </div>';
          echo'  </div>';
          echo' </div>';
          echo'</div>';
      }elseif($estado=='login'){

        echo'<div  vertical-align="middle" class="container-fluid">';
        echo'<div  class="row-fluid">';
        echo' <div  class="col-sm-12">';
        echo' <div  vertical-align="middle" class="col-sm-3">';
        include('dir/inc/portada_cursos.php') ;
        echo'<br>';
        echo'<br>';
        echo'     </div>';
        echo'  <div vertical-align="middle" class="col-sm-5">';
          include('dir/inc/mostrar_portada_opciones.php') ;
          echo'<br>';
          echo'<br>';
        echo'       </div>';


        echo'      <div  vertical-align="middle" vertical-align="middle" class="col-sm-4">';
        echo '<a name="login"></a>';
        include ('dir/inc/form_login.php');
        echo'<br>';
        echo'<br>';
        echo'      </div>';
        echo'  </div>';
        echo' </div>';
        echo'</div>';

      }else{

        echo'<div  vertical-align="middle" class="container-fluid">';
        echo'<div  class="row-fluid">';
        echo' <div  class="col-sm-12">';
        echo' <div  vertical-align="middle" class="col-sm-3">';

        include('dir/inc/portada_cursos.php') ;

        echo'<br>';
        echo'<br>';
        echo'     </div>';

        echo'  <div vertical-align="middle" class="col-sm-5">';

        include('dir/inc/mostrar_portada_opciones.php') ;
        echo'<br>';
        echo'<br>';
        echo'       </div>';

        echo'      <div  vertical-align="middle" vertical-align="middle" class="col-sm-4">';
        echo '<a name="login"></a>';
        include ('dir/inc/form_login.php');
        echo'<br>';
        echo'<br>';
        echo'      </div>';
        echo'  </div>';
        echo' </div>';
        echo'</div>';
      }

      var_dump($estado);
?>
<script>

console.log(document);
/*$(document).ready(function() {
    var heights = $(".well").map(function() {
        return $(this).height();
    }).get(),

    maxHeight = Math.max.apply(null, heights);

    $(".well").height(maxHeight);
});*/
</script>

<?php
 session_destroy();
  ?>

    </body>
<?php include 'dir/inc/footer.php'; ?>
</html>
