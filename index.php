<!DOCTYPE html>
<head>

  <meta charset="utf-8">
  <title>Processos & Processos</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="favicon.ico" rel="shortcut icon">
  <script
  src="https://code.jquery.com/jquery-migrate-3.0.1.min.js"
  integrity="sha256-F0O1TmEa4I8N24nY0bya59eP6svWcshqX1uzwaWC4F4="
  crossorigin="anonymous"></script>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <link href="css/login_style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Imperial
    Theme URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
  <script type="text/javascript">


    function login(form){
      //alert(form.cpf.value+" - "+form.password.value);
      var cpf = form.cpf.value;
      var senha = form.password.value;

      $.post("actions/action_usuario.php",{
        op:1,
        cpf:cpf,
        senha:senha
      },function(data){
        alert(data);
      });
      return false;
    }
    function login(form){
      alert(form.numoab.value+" - "+form.password.value);
      var numoab = form.numoab.value;
      var senha = form.password.value;

      $.post("actions/action_advogado.php",{
        op:1,
        num_oab:num_oab,
        senha:senha
      },function(data){
        alert(data);
      });
      return false;
    }
  </script>
</head>

<body>
  <div id="preloader"></div>

  <!--==========================
  Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <div class="wow fadeIn">
        <div class="hero-logo">
          <img class="" src="img/transparent.png" width="175" height="175"alt="Imperial">
        </div>

        <h1>Processos & Processos</h1>
        <h2><span class="rotating"> Transparência é o nosso princípio</span></h2>
        <div class="actions">
          <a href="#services" class="btn-services">Serviços</a>
          <a href="#" data-toggle="modal" data-target="#modal-advogado" class="btn-get-started">advogado</a>

        </div>
      </div>
    </div>
  </section>

  <!--==========================
  Header Section
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="img/transparent.png" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Header 1</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero"><b>Home </b> </a></li>
          <li><a href="#about"><b>Sobre Nós</b></a></li>
          <li><a href="#services"><b>Serviços</b></a></li>
          <li><a href="#portfolio"><b>Parceiros</b></a></li>
        <!--  <li><a href="#testimonials"><b>Testemunho</b></a></li>-->
          <li><a href="#team"><b>Equipe</b></a></li>
          <li class="menu-has-children"><a href=""><b>Consultar Processos</b></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="menu-has-children"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href="#contact"><b>Fale Conosco</b></a></li>
          <li><a href="#login" data-toggle="modal" data-target="#myModal"><b>Login</b></a></li>



  </form>
</div>

        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->

  <!--==========================
  About Section
  ============================-->
  <section id="about">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Nos Conheça</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Empresa pronta para tornar qualquer causa jurídica em algo simples!</p>
        </div>
      </div>
    </div>
    <div class="container about-container wow fadeInUp">
      <div class="row">
        <div class="col-md-6 col-md-push-6 about-content">
          <h2 class="about-title">We provide great services and ideass</h2>
          <p class="about-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            in reprehenderit in voluptate
          </p>
          <p class="about-text">
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
            id est laborum
          </p>
          <p class="about-text">
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
            id est laborum
          </p>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
  Services Section
  ============================-->
  <section id="services">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Serviços</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Presamos pela excelência no serviço prestado em todas as áreas de atuação</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-desktop"></i></div>
          <h4 class="service-title"><a href="">Trabalhista</a></h4>
          <p class="service-description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-bar-chart"></i></div>
          <h4 class="service-title"><a href="">Previdênciário</a></h4>
          <p class="service-description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-paper-plane"></i></div>
          <h4 class="service-title"><a href="">Família</a></h4>
          <p class="service-description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-photo"></i></div>
          <h4 class="service-title"><a href="">Consumidor</a></h4>
          <p class="service-description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-road"></i></div>
          <h4 class="service-title"><a href="">Imobiliário</a></h4>
          <p class="service-description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-shopping-bag"></i></div>
          <h4 class="service-title"><a href="">Administrativo</a></h4>
          <p class="service-description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-pagelines"></i></div>
          <h4 class="service-title"><a href="">Ambiental</a></h4>
          <p class="service-description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-handshake-o"></i></div>
          <h4 class="service-title"><a href="">Societário</a></h4>
          <p class="service-description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-money"></i></div>
          <h4 class="service-title"><a href="">Recuperação de crédito</a></h4>
          <p class="service-description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
  Subscrbe Section
  ============================-->
 <section id="subscribe">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-8">
          <h3 class="subscribe-title">Entre em contato para saber mais</h3>
          <p class="subscribe-text">Clientes precisam estar cadastrados para poder consultar os seus processos.</p>
        </div>
        <div class="col-md-4 subscribe-btn-container">
          <a class="subscribe-btn" href="#">Contate-nos</a>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
  Porfolio Section
  ============================-->
  <section id="portfolio">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Parceiros</h3>
          <div class="section-title-divider"></div>
          <p class="section-description"></p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/networklogo.png);" href="">
            <div class="details">
              <h4>Network</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/logostaff1.png);" href="">
            <div class="details">
              <h4>Staff</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/scorpion.png);" href="">
            <div class="details">
              <h4> Tecnologia Scorpion </h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>
        </div>

      </div>
    </div>
  </section>

  <!--==========================
  Testimonials Section
  ============================-->
  <!--
  <section id="testimonials">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Testemunhos</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Erdo lide, nora porodo filece, salvam esse se, quod concedimus ses haec dicturum fuisse</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <div class="profile">
            <div class="pic"><img src="img/client-1.jpg" alt=""></div>
            <h4>Saul Goodman</h4>
            <span>Lawless Inc</span>
          </div>
        </div>
        <div class="col-md-9">
          <div class="quote">
            <b><img src="img/quote_sign_left.png" alt=""></b> Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper. <small><img src="img/quote_sign_right.png" alt=""></small>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-9">
          <div class="quote">
            <b><img src="img/quote_sign_left.png" alt=""></b> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis architecto beatae. <small><img src="img/quote_sign_right.png" alt=""></small>
          </div>
        </div>
        <div class="col-md-3">
          <div class="profile">
            <div class="pic"><img src="img/client-2.jpg" alt=""></div>
            <h4>Sara Wilsson</h4>
            <span>Odeo Inc</span>
          </div>
        </div>
      </div>

    </div> -->
  </section>

  <!--==========================
  Team Section
  ============================-->
  <section id="team">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Nosso Time</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="img/team-1.jpg" alt=""></div>
            <h4>Walter White</h4>
            <span>Chief Executive Officer</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="img/team-2.jpg" alt=""></div>
            <h4>Sarah Jhinson</h4>
            <span>Product Manager</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="img/team-3.jpg" alt=""></div>
            <h4>William Anderson</h4>
            <span>CTO</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="img/team-4.jpg" alt=""></div>
            <h4>Amanda Jepson</h4>
            <span>Accountant</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!--==========================
  Contact Section
  ============================-->
  <section id="contact">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Fale conosco</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Solicite o seu orçamento por aqui!</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 col-md-push-2">
          <div class="info">
            <div>
              <i class="fa fa-map-marker"></i>
              <p> Rua Est. Valdir<br>New York, NY 535022</p>
            </div>

            <div>
              <i class="fa fa-envelope"></i>
              <p>info@example.com</p>
            </div>

            <div>
              <i class="fa fa-phone"></i>
              <p>+1 5589 55488 55s</p>
            </div>

          </div>
        </div>

        <div class="col-md-5 col-md-push-2">
          <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Seu Nome" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Seu Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensagem"></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit">Enviar</button></div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!--==========================
  Footer
============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright<strong> Processos & Processo</strong>
          </div>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Imperial
            -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/morphext/morphext.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/easing/easing.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>

  <script src="contactform/contactform.js"></script>

  <div class="container">
    <!-- Modal de login -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">


            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><b>Área do Clientes</b></h4>
          </div>

          <div class="modal-body">

            <div class="form-content">

      <form method="post" onsubmit="return login(this)">

        <div class="col-md-6">
          <div class="form-group sign-in">
            <label for="username"><b>CPF</b></label>
            <input type="text" class="sign-in" id="cpf" name="cpf" required="required"/>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group sign-in">
            <label for="password"><b>Senha</b></label>
            <input type="password" class="sign-in" id="password" name="password" required="required"/>
          </div>
        </div>
        <div class="col-md-8">

        </div>
      </form>
    </div>
          <div class="modal-footer">
            <div class="col-md-4">
              <div class="form-group">
                <button id="bt-login" type="submit">Log In</button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>

  <!--Fim do modal de login-->

<!--Modal do advogado-->
  <div class="modal fade" id="modal-advogado" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><b>Área do Advogado</b></h4>
        </div>
        <div class="modal-body">

          <div class="form-content">

    <form method="post" onsubmit="return cadastrarAdvogado(this)">

              <input type="radio" name="rg"  style="display:none"/>
              <input type="radio" name="rg" style="display:none"/>
              <input type="radio" name="rg"  style="display:none"/>

              <label for="sign-in" id="sign-in-adv" onclick="loginAdv()">Login</label>
              <label for="sign-up" id="sign-up-adv" onclick="cadastroAdv()">Cadastre-se</label>
              <label for="reset" id="reset-adv" onclick="resetAdv()"> Mudar senha</label>
              <div class="row">
                <div class="col-md-12" id="div-nome">
                  <div class="form-group">
                    <input type="text" class="sign-up sign-in reset" id="nome-adv" placeholder="NOME" name="nome" required="required"/>
                  </div>
                </div>
                <div class="col-md-6" id="div-cpf">
                  <div class="form-group">
                    <input type="text" class="sign-up sign-in reset" id="cpf-adv"  name="cpf" placeholder="CPF" required="required"/>
                  </div>
                </div>
                <div class="col-md-6" id="div-rg">
                  <div class="form-group">
                    <input type="text" class="sign-up sign-in reset" id="rg-adv" placeholder="RG" name="rg" required="required"/>
                  </div>
                </div>

                <div class="col-md-6" id="div-numoab">
                  <div class="form-group">
                    <input type="text" class="sign-up sign-in reset" id="numoab" name="numoab" placeholder="NUM. OAB" required="required"/>
                  </div>
                </div>
                <div class="col-md-6" id="div-nacionalidade">
                  <div class="form-group">
                    <input type="text" class="sign-up sign-in reset" id="nacionalidade" placeholder="NACIONALIDADE" name="nacionalidade" required="required"/>
                  </div>
                </div>

                <div class="col-md-6" id="div-profissao">
                  <div class="form-group">
                    <input type="text" class="sign-up sign-in reset" id="profissao" name="profissao" placeholder="PROFISSÃO" required="required"/>
                  </div>
                </div>
                <div class="col-md-6" id="div-estadocivil">
                  <div class="form-group">
                    <select class="form-control" name="estadocivil">
                      <option value="1">Solteiro</option>
                      <option value="2">Casado</option>
                      <option value="3">Divorciado</option>
                      <option value="4">Viuvo</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-12" id="div-email">
                  <div class="form-group">
                    <input type="email" class="" id="email-adv" placeholder="EMAIL" name="email-adv" required="required"/>
                  </div>
                </div>


                <div class="col-md-6" id="div-senha">
                  <div class="form-group">
                    <input type="password" id="senha" name="senha" placeholder="SENHA" required="required"/>
                  </div>
                </div>

                <div class="col-md-6" id="div-confirmarsenha">
                  <div class="form-group">
                    <input type="password" id="confirmarsenha" name="confirmarsenha" placeholder="CONFIRMAR SENHA" required="required"/>
                  </div>
                </div>

                <div class="col-md-8">

                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <button id="bt-login-adv" type="submit">Log In</button>
                  </div>
                </div>

              </div>

    </form>
  </div>
      </div>

    </div>
  </div>

</div>

<!--Fim do modal de login-->

<script type="text/javascript">
$(document).ready(function($){
  document.getElementById("div-nome").style.display = "none";
  document.getElementById("div-cpf").style.display = "none";
  document.getElementById("div-rg").style.display = "none";

  document.getElementById("div-nacionalidade").style.display = "none";
  document.getElementById("div-profissao").style.display = "none";
  document.getElementById("div-estadocivil").style.display = "none";
  document.getElementById("div-email").style.display = "none";
  document.getElementById("div-confirmarsenha").style.display = "none";
});
function loginAdv() {
  document.getElementById("div-nome").style.display = "none";
  document.getElementById("div-cpf").style.display = "none";
  document.getElementById("div-rg").style.display = "none";

  document.getElementById("div-numoab").style.display = "block";
  document.getElementById("div-senha").style.display = "block";
  document.getElementById("div-nacionalidade").style.display = "none";
  document.getElementById("div-profissao").style.display = "none";
  document.getElementById("div-estadocivil").style.display = "none";
  document.getElementById("div-email").style.display = "none";
  document.getElementById("div-confirmarsenha").style.display = "none";

}

function cadastroAdv() {
  document.getElementById("div-nome").style.display = "block";
  document.getElementById("div-cpf").style.display = "block";
  document.getElementById("div-rg").style.display = "block";
  document.getElementById("div-numoab").style.display = "block";
  document.getElementById("div-nacionalidade").style.display = "block";
  document.getElementById("div-profissao").style.display = "block";
  document.getElementById("div-estadocivil").style.display = "block";
  document.getElementById("div-email").style.display = "block";
  document.getElementById("div-senha").style.display = "block";
  document.getElementById("div-confirmarsenha").style.display = "block";
}

function resetAdv() {
  document.getElementById("div-nome").style.display = "none";
  document.getElementById("div-cpf").style.display = "none";
  document.getElementById("div-rg").style.display = "none";
  document.getElementById("div-numoab").style.display = "none";
  document.getElementById("div-senha").style.display = "none";
  document.getElementById("div-nacionalidade").style.display = "none";
  document.getElementById("div-profissao").style.display = "none";
  document.getElementById("div-estadocivil").style.display = "none";
  document.getElementById("div-email").style.display = "block";
  document.getElementById("div-confirmarsenha").style.display = "none";
}
</script>
</body>

</html>
