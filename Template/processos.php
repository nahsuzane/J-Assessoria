<?php
require_once '../models/advogado.php';
require_once '../models/usuario.php';
require_once '../models/vara.php';

$adv = new Advogado();
$usr = new Usuario();
$vara = new Vara();
 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Vendor styles -->
        <link rel="stylesheet" href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="vendors/bower_components/animate.css/animate.min.css">
        <link rel="stylesheet" href="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css">
        <link rel="stylesheet" href="vendors/bower_components/select2/dist/css/select2.min.css">
        <link rel="stylesheet" href="vendors/bower_components/dropzone/dist/dropzone.css">
        <link rel="stylesheet" href="vendors/bower_components/flatpickr/dist/flatpickr.min.css" />
        <link rel="stylesheet" href="vendors/bower_components/nouislider/distribute/nouislider.min.css">
        <link rel="stylesheet" href="vendors/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.css">
        <link rel="stylesheet" href="vendors/bower_components/trumbowyg/dist/ui/trumbowyg.min.css">
        <link rel="stylesheet" href="vendors/bower_components/rateYo/min/jquery.rateyo.min.css">
          <link rel="stylesheet" href="vendors/bower_components/fullcalendar/dist/fullcalendar.min.css">

        <!-- App styles -->
        <link rel="stylesheet" href="css/app.min.css">
        <link rel="stylesheet" href="demo/css/demo.css">

        <script type="text/javascript">
          function adicionarProcesso(form){
            var numero_processo = document.getElementById("numero-processo").value;
            var advogado = document.getElementById("advogado").value;
            var cliente = document.getElementById("cliente").value;
            var autor = document.getElementById("autor").value;
            var reu = document.getElementById("reu").value;
            var vara = document.getElementById("vara").value;
            var municipio = document.getElementById("municipio").value;
            var estado = document.getElementById("estado").value;
            var data_abertura = document.getElementById("data-abertura").value;

            $.post("../actions/action_processo.php",
            {
              op:1,
              numero_processo:numero_processo,
              advogado:advogado,
              usuario:cliente,
              caminho: 'caminho',
              sts:1,
              autor:autor,
              reu:reu,
              vara:vara,
              municipio:municipio,
              estado:estado,
              data_abertura:data_abertura

            },function(data){
              alert(data);
            });
            return false;
          }

        </script>

    </head>

    <body data-sa-theme="7">
        <main class="main">
            <div class="page-loader">
                <div class="page-loader__spinner">
                    <svg viewBox="25 25 50 50">
                        <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                    </svg>
                </div>
            </div>

            <header class="header">
                <div class="navigation-trigger hidden-xl-up" data-sa-action="aside-open" data-sa-target=".sidebar">
                    <i class="zmdi zmdi-menu"></i>
                </div>

                <div class="logo hidden-sm-down">
                    <h1><a href="index.html">Processos & Processos</a></h1>
                </div>

                <form class="search">
                    <div class="search__inner">
                        <input type="text" class="search__text" placeholder="Procurar...">
                        <i class="zmdi zmdi-search search__helper" data-sa-action="search-close"></i>
                    </div>
                </form>

                <ul class="top-nav">
                    <li class="hidden-xl-up"><a href="" data-sa-action="search-open"><i class="zmdi zmdi-search"></i></a></li>

                    <li class="dropdown">
                        <a href="" data-toggle="dropdown" class="top-nav__notify"><i class="zmdi zmdi-email"></i></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                            <div class="dropdown-header">
                                Mensagens

                                <div class="actions">
                                    <a href="messages.html" class="actions__item zmdi zmdi-plus"></a>
                                </div>
                            </div>

                            <div class="listview listview--hover">
                                <a href="" class="listview__item">
                                    <img src="demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            David Belle <small>12:01 PM</small>
                                        </div>
                                        <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                    </div>
                                </a>

                                <a href="" class="listview__item">
                                    <img src="demo/img/profile-pics/2.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            Jonathan Morris
                                            <small>02:45 PM</small>
                                        </div>
                                        <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                    </div>
                                </a>

                                <a href="" class="listview__item">
                                    <img src="demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            Fredric Mitchell Jr.
                                            <small>08:21 PM</small>
                                        </div>
                                        <p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</p>
                                    </div>
                                </a>

                                <a href="" class="listview__item">
                                    <img src="demo/img/profile-pics/4.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            Glenn Jecobs
                                            <small>08:43 PM</small>
                                        </div>
                                        <p>Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</p>
                                    </div>
                                </a>

                                <a href="" class="listview__item">
                                    <img src="demo/img/profile-pics/5.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            Bill Phillips
                                            <small>11:32 PM</small>
                                        </div>
                                        <p>Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</p>
                                    </div>
                                </a>

                                <a href="" class="view-more">View all messages</a>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown top-nav__notifications">
                        <a href="" data-toggle="dropdown" class="top-nav__notify">
                            <i class="zmdi zmdi-notifications"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                            <div class="dropdown-header">
                                Notificações

                                <div class="actions">
                                    <a href="" class="actions__item zmdi zmdi-check-all" data-sa-action="notifications-clear"></a>
                                </div>
                            </div>

                            <div class="listview listview--hover">
                                <div class="listview__scroll scrollbar-inner">
                                    <a href="" class="listview__item">
                                        <img src="demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">David Belle</div>
                                            <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                        </div>
                                    </a>

                                    <a href="" class="listview__item">
                                        <img src="demo/img/profile-pics/2.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Jonathan Morris</div>
                                            <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                        </div>
                                    </a>

                                    <a href="" class="listview__item">
                                        <img src="demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Fredric Mitchell Jr.</div>
                                            <p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</p>
                                        </div>
                                    </a>

                                    <a href="" class="listview__item">
                                        <img src="demo/img/profile-pics/4.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Glenn Jecobs</div>
                                            <p>Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</p>
                                        </div>
                                    </a>

                                    <a href="" class="listview__item">
                                        <img src="demo/img/profile-pics/5.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Bill Phillips</div>
                                            <p>Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</p>
                                        </div>
                                    </a>

                                    <a href="" class="listview__item">
                                        <img src="demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">David Belle</div>
                                            <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                        </div>
                                    </a>

                                    <a href="" class="listview__item">
                                        <img src="demo/img/profile-pics/2.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Jonathan Morris</div>
                                            <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                        </div>
                                    </a>

                                    <a href="" class="listview__item">
                                        <img src="demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Fredric Mitchell Jr.</div>
                                            <p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="p-1"></div>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown hidden-xs-down">
                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-apps"></i></a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
                            <div class="row app-shortcuts">
                                <a class="col-4 app-shortcuts__item" href="">
                                    <i class="zmdi zmdi-calendar"></i>
                                    <small class="">Calendárior</small>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="">
                                    <i class="zmdi zmdi-file-text"></i>
                                    <small class="">Files</small>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="">
                                    <i class="zmdi zmdi-email"></i>
                                    <small class="">Email</small>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="">
                                    <i class="zmdi zmdi-trending-up"></i>
                                    <small class="">Reports</small>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="">
                                    <i class="zmdi zmdi-view-headline"></i>
                                    <small class="">News</small>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="">
                                    <i class="zmdi zmdi-image"></i>
                                    <small class="">Gallery</small>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>

                <div class="clock hidden-md-down">
                    <div class="time">
                        <span class="time__hours"></span>
                        <span class="time__min"></span>
                        <span class="time__sec"></span>
                    </div>
                </div>
            </header>

            <aside class="sidebar">
                <div class="scrollbar-inner">

                    <div class="user">
                        <div class="user__info" data-toggle="dropdown">
                            <img class="user__img" src="demo/img/profile-pics/8.jpg" alt="">
                            <div>
                                <div class="user__name">Malinda Hollaway</div>
                                <div class="user__email">malinda-h@gmail.com</div>
                            </div>
                        </div>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="">View Profile</a>
                            <a class="dropdown-item" href="">Settings</a>
                            <a class="dropdown-item" href="">Logout</a>
                        </div>
                    </div>

                    <ul class="navigation">
                        <li class="@@indexactive"><a href="index.html"><i class="zmdi zmdi-home"></i> Home</a></li>
                        </li>
                        <li class="navigation__sub @@samplepagesactive">
                            <a href=""><i class="zmdi zmdi-folder-star"></i> Processos</a>
                            <ul>
                                <li class="@@newcontactsactive"><a href="processos.php">Cadastre Processo</a></li>
                            </ul>
                        </li>


                        <li class="navigation__active"><a href="calendar.html"><i class="zmdi zmdi-calendar"></i> Calendário
                        </a></li>



                        <li class="navigation__sub @@samplepagesactive">
                            <a href=""><i class="zmdi zmdi-accounts-list"></i> Entre em contato</a>

                            <ul>

                                <li class="@@profileactive"><a href="profile-about.html">Perfis</a></li>
                                <li class="@@messagesactive"><a href="messages.html">Mensagem</a></li>
                                <li class="@@contactsactive"><a href="contacts.html">Agenda</a></li>
                                <li class="@@groupsactive"><a href="groups.html">Grupos</a></li>
                                <li class="@@notesactive"><a href="notes.html">Anotações</a></li>
<!--((Talves usar esse como movimentaçao)          <li class="@@issuesactive"><a href="issue-tracker.html">Issues Tracker</a></li> -->
                                <li class="@@teamactive"><a href="team.html">Team</a></li>

                            </ul>
                        </li>
                    </ul>

                </div>
            </aside>


            <section class="content">
                <div class="content__inner content__inner--sm">
                    <header class="content__title">
                        <h1>Cadastre um Processo</h1>
                        <div class="actions">
                            <a href="" class="actions__item zmdi zmdi-trending-up"></a>
                            <a href="" class="actions__item zmdi zmdi-check-all"></a>

                            <div class="dropdown actions__item">
                                <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="" class="dropdown-item">Refresh</a>
                                    <a href="" class="dropdown-item">Manage Widgets</a>
                                    <a href="" class="dropdown-item">Settings</a>
                                </div>

                            </div>
                        </div>

                    </header>
                  <form class="" action="" method="post" onsubmit="return adicionarProcesso(this)">
                    <!--inicio do card-->
                      <div class="card new-contact">


                          <div class="card-body">
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Número do Processo</label>
                                          <input type="text" name="numero-processo" id="numero-processo" class="form-control" placeholder="ex: João">
                                          <i class="form-group__bar"></i>
                                      </div>
                                  </div>

                                  <div class="col-sm-6 col-md-4">
                                      <div class="form-group">
                                          <label>Advogado</label>

                                          <select class="select2" name="advogado" id="advogado">
                                              <option>Selecione um advogado</option>
                                              <?php
                                                foreach ($adv->listar() as $key => $value) {
                                                  ?>
                                                    <option value="<?php echo $value->id ?>"><?php echo $value->nome ?></option>
                                                  <?php
                                                }
                                               ?>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="col-sm-6 col-md-6">
                                      <div class="form-group">
                                          <label>Cliente</label>

                                          <select class="select2" name="cliente" id="cliente">
                                              <option>Selecione um cliente</option>
                                              <?php
                                                foreach ($usr->listar() as $key => $value) {
                                                  ?>
                                                    <option value="<?php echo $value->id ?>"><?php echo $value->nome ?></option>
                                                  <?php
                                                }
                                               ?>
                                          </select>
                                      </div>
                                  </div>

                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Nome do Autor</label>
                                          <input type="text" name="autor" id="autor" class="form-control" placeholder="i.e. Google Inc.">
                                          <i class="form-group__bar"></i>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Nome do Réu</label>
                                          <input type="text" name="reu" id="reu" class="form-control" placeholder="i.e. Google Inc.">
                                          <i class="form-group__bar"></i>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Vara</label>
                                          <select class="select2" name="vara" id="vara">
                                              <option>Selecione uma vara</option>
                                              <?php
                                                foreach ($vara->listar() as $key => $value) {
                                                  ?>
                                                    <option value="<?php echo $value->id ?>"><?php echo $value->vara ?></option>
                                                  <?php
                                                }
                                               ?>
                                          </select>
                                      </div>
                                  </div>

                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Município</label>
                                          <input type="text" name="municipio" id="municipio" class="form-control" placeholder="ex: Natal">
                                          <i class="form-group__bar"></i>
                                      </div>
                                  </div>
                                  <div class="col-sm-4 col-md-4">
                                      <div class="form-group">
                                          <labe>Estado</label>
                                            <select class="select2" name="estado" id="estado">
                                                <option>Selecione um estado</option>
                                                <option value="RN">RN</option>
                                            </select>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Abertura do Processo</label>
                                          <input type="text" name="data-abertura" id="data-abertura" class="form-control input-mask" data-mask="00/00/0000" placeholder="ex: 23/05/2014">
                                          <i class="form-group__bar"></i>
                                      </div>
                                  </div>
                                </div>
                            </div>
                              <div class="card">
                                  <div class="card-body">
                                      <h4 class="card-title">Arraste e solte o upload do arquivo</h4>

                                      <form class="dropzone" id="dropzone-upload">
                                      </form>
                                  </div>
                              </div>
                              <div class="clearfix"></div>
                              <div class="mt-5 text-center">
                                  <button type="submit" class="btn btn-light" align="right">Salvar novo processo</button>
                                  <button type="reset" class="btn btn-light"align="right">Limpar</button>
                              </div>
                              <br>
                          </div>

                          <!--final do card-->
                  </form>



                    </div>

                    <footer class="footer hidden-xs-down">


                    <ul class="nav footer__nav">
                        <a class="nav-link" href="">Homepage</a>

                        <a class="nav-link" href="">Company</a>

                        <a class="nav-link" href="">Support</a>

                        <a class="nav-link" href="">News</a>

                        <a class="nav-link" href="">Contacts</a>
                    </ul>
                </footer>
                </div>
            </section>
        </main>

        <!-- Older IE warning message -->
            <!--[if IE]>
                <div class="ie-warning">
                    <h1>Warning!!</h1>
                    <p>You are using an outdated version of Internet Explorer, please upgrade to any of the following web browsers to access this website.</p>

                    <div class="ie-warning__downloads">
                        <a href="http://www.google.com/chrome">
                            <img src="img/browsers/chrome.png" alt="">
                        </a>

                        <a href="https://www.mozilla.org/en-US/firefox/new">
                            <img src="img/browsers/firefox.png" alt="">
                        </a>

                        <a href="http://www.opera.com">
                            <img src="img/browsers/opera.png" alt="">
                        </a>

                        <a href="https://support.apple.com/downloads/safari">
                            <img src="img/browsers/safari.png" alt="">
                        </a>

                        <a href="https://www.microsoft.com/en-us/windows/microsoft-edge">
                            <img src="img/browsers/edge.png" alt="">
                        </a>

                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="img/browsers/ie.png" alt="">
                        </a>
                    </div>
                    <p>Sorry for the inconvenience!</p>
                </div>
            <![endif]-->

        <!-- Javascript -->
        <!-- Vendors -->
        <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="vendors/bower_components/popper.js/dist/umd/popper.min.js"></script>
        <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>

        <script src="vendors/bower_components/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
        <script src="vendors/bower_components/select2/dist/js/select2.full.min.js"></script>
        <script src="vendors/bower_components/dropzone/dist/min/dropzone.min.js"></script>
        <script src="vendors/bower_components/moment/min/moment.min.js"></script>
        <script src="vendors/bower_components/flatpickr/dist/flatpickr.min.js"></script>
        <script src="vendors/bower_components/nouislider/distribute/nouislider.min.js"></script>
        <script src="vendors/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
        <script src="vendors/bower_components/trumbowyg/dist/trumbowyg.min.js"></script>
        <script src="vendors/bower_components/rateYo/min/jquery.rateyo.min.js"></script>
        <script src="vendors/bower_components/jquery-text-counter/textcounter.min.js"></script>
        <script src="vendors/bower_components/autosize/dist/autosize.min.js"></script>
        <script src="vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>

        <!-- App functions and actions -->
        <script src="js/app.min.js"></script>
    </body>
</html>
