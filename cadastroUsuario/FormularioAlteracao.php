<!doctype html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DDE.XP-Atualização</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="../apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="../plugins/bootstrap/bootstrap.min.css">
    <!-- ThemeFisher Icon -->
    <link rel="stylesheet" href="../plugins/themefisher-fonts/themefisher-fonts.css">
    <!-- Light Box -->
    <link rel="stylesheet" href="../plugins/magnific-popup/magnific-popup.css">
    <!-- animation css -->
    <link rel="stylesheet" href="../plugins/animate/animate.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="../plugins/slick/slick.css">

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="../css/style.css">

    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map_canvas {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
    </style>
    <script src="../plugins/modernizr.min.js"></script>
  </head>
  <body>
    <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <!-- Loader to display before content Load-->
  <div class="loading">

    <!-- <img src="img/loader.gif" alt=""> -->

    <div class="windows8 loading-position">
      <div class="wBall" id="wBall_1">
        <div class="wInnerBall"></div>
      </div>
      <div class="wBall" id="wBall_2">
        <div class="wInnerBall"></div>
      </div>
      <div class="wBall" id="wBall_3">
        <div class="wInnerBall"></div>
      </div>
      <div class="wBall" id="wBall_4">
        <div class="wInnerBall"></div>
      </div>
      <div class="wBall" id="wBall_5">
        <div class="wInnerBall"></div>
      </div>
    </div>
  </div> 


 <!-- Navigation -section
  =========================-->
<nav class="navbar navbar-fixed-top navigation" >
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand logo" href="../index.html">
        <img src="../images/DDE.XP logo.jpeg" alt="">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav navbar-right menu">
        <li><a href="../index.html">Home</a></li>
        <li><a href="../services.html">Serviços</a></li>
        <li><a href="../portfolio.html">Portfólio</a></li>
        <li><a href="../blog.html">Blog</a></li>
        <li><a href="../contact.html">Contato</a></li>
        <li><a class="btn btn-default btn-main" href="../login/login.php" role="button">Login</a></li>
      <li><a class="btn btn-default btn-main" href="cadastro.php" role="button">Cadastrar</a></li>
      <li><a class="btn btn-default btn-main" href="consulta.php" style=background-color:null>Consultar</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>

<!-- Contact header-section 
  =========================-->
<section class="page-header services-header" data-parallax="scroll" data-image-src="../images/header/contact-folding-img.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center">Tela de alteração de dados!</h1>
      </div>
    </div>
  </div>
</section>

    <!-- Contact From Study Sections 
  =========================-->
 <section class="contact-form">
   <div class="container">
     <form action="atualizar.php">
     <div class="row">
       <div class="title text-center">
         <h2>Atualização</h2>
         <br>
          <form action="atualizar.php">
           <div class="col-md-6">
         </div>
        <br>
         <div class="col-md-12">
           <div class="contact-btn text-center">
             <input class="btn btn-default btn-main" type="submit" value="Atualizar"> &emsp;&emsp;&emsp;&emsp;
             <a class="btn btn-default btn-main" href= "consulta.php" role="button">Cancelar</a>
           </div>
         </div>
       
  
     

      <?php

      include_once("../Service/Banco.php");

      if (isset($_GET['id']) ) {

          $id = $_GET['id'];

        echo "<input type='hidden' name='id' value='$id'> ";
        
          $banco = new Banco();
          $sql = "select * from usuario
                  where id = $id";
          $registros = $banco->query($sql);

           if (isset($registros)) {
              foreach ($registros as $linha) { 
                echo '
                  <div class="col-md-6">
                    <label for="idnome" class="form-label">Nome</label>
                    <input type="text" class="form-control"       id="idnome" name="nome" value='.$linha['nome'].'>
                  </div>

                  <div class="col-md-6">
                    <label for="idsenha" class="form-label">Senha</label>
                    <input type="text" class="form-control" id="idsenha" name="senha" value='.$linha['senha'].'>
                   </div>
             ';
              }
           }else {
             echo '<div class="alert alert-danger" role="alert">
    Registro não encontrado.
</div>';
           }   
      }
   
      ?>
      </form>
    </div>
   </div>
     </form>
   </div>
   </section>
     <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="footer-top">
                        <div class="col-md-4">
                            <!-- footer About section
                            ========================== -->
    
      
    
   <div class="footer-about">
                                <h3 class="footer-title">Sobre</h3>
                                <p>Há 13 anos desenvolvendo metodologias personalizadas. <br>
                                    Modalidades de ensino particular: presencial e a distância.<br> Ensino a distância através da plataforma Zoom Cloud Meetings.<br>
                                                       </div>
                        <div class="col-md-4">
                            <!-- footer Address section
                            ========================== -->
                            <div class="footer-address">
                                <h3 class="footer-title">Endereço</h3>
                                <p>Rio de Janeiro, RJ, Brasil.</p>
                                <p class="contact-address">
                                    Contate-nos : <a href="tel:+5521993903875">+55 (21) 99390-3875 </a><br>
                                    Nos escreva : <a href="mailto:estudde.xp@gmail.com">estudde.xp@gmail.com</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <!-- footer Media link section
                            ========================== -->
                            <div class="footer-social-media">
                                <h3 class="footer-title">Contatos</h3>
                                <ul class="footer-media-link">
                                    <li><a href="https://l.wl.co/l?u=https%3A%2F%2Fwww.facebook.com%2FDDExp-103143964858655%2F"><i class="tf-ion-social-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="tf-ion-social-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="https://www.linkedin.com/in/daniel-d-3344b310a/"><i class="tf-ion-social-linkedin-outline"
                                                aria-hidden="true"></i></a></li>
                                    <li><a href="https://www.gostudent.org/br/referrals?referral_id=1b6fdb6c-da6b-4133-b8fa-28edbff38b75"><i class="tf-ion-social-google-outline" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="https://l.wl.co/l?u=https%3A%2F%2Fwww.instagram.com%2Fdde.xp%2F%3Ffbclid%3DIwAR1hDnGbcm_WkgElEjN73RkEv125OHJO-M1kDjpc09ge4Dbyr0OeCe46sd0"><i class="tf-ion-social-instagram-outline"
                                                aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer-nav text-center">
                        <div class="col-md-12">
                            <ul>
                                <li><a href="../index.html">Home</a></li>
                                <li><a href="../services.html">Serviços</a></li>
                                <li><a href="../portfolio.html">Portfólio</a></li>
                                <li><a href="../blog.html">Sobre Nós</a></li>
                                <li><a href="../contact.html">Contato</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>&copy; 2013-2022 All rights reserved. <br>
                                    Design and Developed By <a href="https://themefisher.com">DDE.XP Group</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
        </div>

    <script src="../plugins/jquery.min.js"></script>

    <script src="../plugins/bootstrap/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="../plugins/slick/slick.min.js"></script>
    <!-- filter -->
    <script src="../plugins/filterizr/jquery.filterizr.min.js"></script>
    <!-- Lightbox -->
    <script src="../plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Parallax -->
    <script src="../plugins/parallax.min.js"></script>
    <!-- Video -->
    <script src="../plugins/jquery.vide.js"></script>
    <!-- google map -->
    <script src="../https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
    <script src="../plugins/google-map/gmap.js"></script>

    <script src="../js/script.js"></script>
    </body>

    </html>
