<!--
Developed by
 _   _   _   _   _____   _____  __    __  _   __   _  
| | | | | | | | /  ___| /  _  \ \ \  / / | | |  \ | |
| |_| | | | | | | |     | | | |  \ \/ /  | | |   \| |
|  _  | | | | | | |  _  | | | |   \  /   | | | |\   |
| | | | | |_| | | |_| | | |_| |   / /    | | | | \  |
|_| |_| \_____/ \_____/ \_____/  /_/     |_| |_|  \_|

-----------------------------------------------------
      EDITADO Y LANZADO CON <3 by SrThrone
          www.youtube.com/SrThroneIT
-----------------------------------------------------
-->
<!DOCTYPE html>
<html lang="es" dir="es">
<!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-latest.js"></script>
  <script type="text/javascript">
        $(document).ready(function(e) {
            $.ajaxSetup({
                cache:true
      });
            setInterval(function() {
                $('#onlinecount').load('/onlinecount');
      }, 1500);
            $( "#onlinecount").click(function() {
        $('#onlinecount').load('/onlinecount');
      });
    });
  </script>
  <script type="text/javascript">
        $(document).ready(function(e) {
            $.ajaxSetup({
                cache:true
      });
            setInterval(function() {
                $('#roomcount').load('/roomcount');
      }, 5500);
            $( "#roomcount").click(function() {
        $('#roomcount').load('/roomcount');
      });
    });
  </script>

  <head>
    <meta charset="utf-8">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../templates/brain/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../../templates/brain/assets/css/apuesta.css"> 
    <title><?= $config['hotelName'] ?>: <?= User::userData('username') ?></title>
  </head>
<?php 
  include_once 'includes/alerts.php';
?>
  <body>
    <div id="container">
      <div class="wrapper">

      <?php include_once 'includes/header.php'; ?>

        <!-- inicio - content -->
        <div class="content">
            <div class="wrapper" style="overflow: auto;">
              <!--<div class="hotel"> -->
                <!-- selection -->
                <section>
                <div class="container">
                    <div class="row mbr-justify-content-center">
                      <h3>Lista de enfrentamientos</h3>
                      <ul class="nav">
                          <li class="nav-item">
                            <div class="layout text-center justify-center align-center column">
                                <div><i aria-hidden="true"
                                  class="v-icon notranslate text-current-color v-icon--left mdi mdi-calendar theme--dark"
                                  style="font-size: 10px;"></i>lunes </div>
                                <div>07-04 (37)</div>
                            </div>
                          </li>
                          <li class="nav-item">
                            <div class="layout text-center justify-center align-center column">
                                <div><i aria-hidden="true"
                                  class="v-icon notranslate text-current-color v-icon--left mdi mdi-calendar theme--dark"
                                  style="font-size: 10px;"></i>Martes </div>
                                <div>08-04 (37)</div>
                            </div>
                          </li>
                          <li class="nav-item">
                            <div class="layout text-center justify-center align-center column">
                                <div><i aria-hidden="true"
                                  class="v-icon notranslate text-current-color v-icon--left mdi mdi-calendar theme--dark"
                                  style="font-size: 10px;"></i>Miercoles </div>
                                <div>09-04 (37)</div>
                            </div>
                          </li>
                      </ul>
                      <!-- agregando container para la lista de partidos-->
                      <div class="container">
                          <div class="row">
                            <div class="col-sm">
                                <!-- card example 1*-->
                                <div class="card" style="width: 25rem;">
                                  <div class="card-body">
                                      <h5 class="card-title"> 【China Super League de la Asociación de Fútbol】 </h5>
                                      <!-- card imagen de test -->
                                      <div class="row justify-content-md-center">
                                        <div class="col-md-4 ">
                                            <div class="text-center">
                                              <div class="text-center col-md-4 columna-img-center columna-img-tamaño">
                                                  <img
                                                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/FC_Barcelona_2002.png/190px-FC_Barcelona_2002.png"
                                                    alt="...">
                                              </div>
                                              <div class="text-center col-md-4 columna-txt">
                                                  <p>Fútbol femenino de Qingzhou FC</p>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 columna-img-center">
                                            <div class="text-center ">
                                              <img
                                                  src="https://png.pngtree.com/png-clipart/20190828/ourlarge/pngtree-versus-vs-letters-fight-text-with-comic-fighting-cartoon-style-for-png-image_1701514.jpg"
                                                  alt="...">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="text-center">
                                              <div class="text-center col-md-4 columna-img-center columna-img-tamaño">
                                                  <img src="https://upload.wikimedia.org/wikipedia/commons/a/ab/FPF.svg" alt="...">
                                              </div>
                                              <div class="text-center col-md-4 columna-txt">
                                                  <p>Fútbol femenino de Peru FC</p>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-10">
                                            <div class="text-center">
                                              <p> 2022-07-04 23:00 </p>
                                              <button type="button" id="abrirModal" class="btn btn-success">Apuesta</button>
                                              <!--inicio - modal -->
                                              <div id="ventanaModal" class="modal">
                                              <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" >Alige tu apuesta</h5>
                                                  <button type="button" class="close" onclick="closeModal()" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                <label>Tipo de moneda</label>
                                                <input type="text" class="form-control" placeholder="USDT" disabled="true">
                                                <label>Total dinero</label>
                                                <input type="text" class="form-control" placeholder="#00.00" disabled="true">
                                                <label>Porcentaje profit</label>
                                                <input type="text" class="form-control" placeholder="%0.05" disabled="true">
                                                <label>Cantidad</label>
                                                <input type="text" class="form-control" placeholder="0" disabled="true">
                                                <label>Ganancia</label>
                                                <input type="text" class="form-control" placeholder="10000" disabled="true">
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-primary">Save changes</button>
                                                  <button type="button" class="btn btn-secondary" onclick="closeModal()">Close</button>
                                                </div>
                                              </div>
                                            </div>
                                            </div>
                                              <!--fin - modal -->
                                            </div>
                                        </div>
                                      </div>
                                  </div>
                                </div>
                                <!--end-->
                            </div>
                            <div class="col-sm">
                                <!-- card example 1*-->
                                <div class="card" style="width: 25rem;">
                                  <div class="card-body">
                                      <h5 class="card-title"> 【China Super League de la Asociación de Fútbol】 </h5>
                                      <!-- card imagen de test -->
                                      <div class="row justify-content-md-center">
                                        <div class="col-md-4 ">
                                            <div class="text-center">
                                              <div class="text-center col-md-4 columna-img-center columna-img-tamaño">
                                                  <img
                                                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/FC_Barcelona_2002.png/190px-FC_Barcelona_2002.png"
                                                    alt="...">
                                              </div>
                                              <div class="text-center col-md-4 columna-txt">
                                                  <p>Fútbol femenino de Qingzhou  FC</p>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 columna-img-center">
                                            <div class="text-center ">
                                              <img
                                                  src="https://png.pngtree.com/png-clipart/20190828/ourlarge/pngtree-versus-vs-letters-fight-text-with-comic-fighting-cartoon-style-for-png-image_1701514.jpg"
                                                  alt="...">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="text-center">
                                              <div class="text-center col-md-4 columna-img-center columna-img-tamaño">
                                                  <img src="https://upload.wikimedia.org/wikipedia/commons/a/ab/FPF.svg" alt="...">
                                              </div>
                                              <div class="text-center col-md-4 columna-txt">
                                                  <p>Fútbol femenino de Peru FC</p>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-10">
                                            <div class="text-center">
                                              <p> 2022-07-04 23:00 </p>
                                              <button type="button" class="btn btn-success">Apuesta</button>
                                            </div>
                                        </div>
                                      </div>
                                  </div>
                                </div>
                                <!--end-->
                            </div>
                            <div class="col-sm">
                                <!-- card example 1*-->
                                <div class="card" style="width: 25rem;">
                                  <div class="card-body">
                                      <h5 class="card-title"> 【China Super League de la Asociación de Fútbol】 </h5>
                                      <!-- card imagen de test -->
                                      <div class="row justify-content-md-center">
                                        <div class="col-md-4 ">
                                            <div class="text-center">
                                              <div class="text-center col-md-4 columna-img-center columna-img-tamaño">
                                                  <img
                                                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/FC_Barcelona_2002.png/190px-FC_Barcelona_2002.png"
                                                    alt="...">
                                              </div>
                                              <div class="text-center col-md-4 columna-txt">
                                                  <p>Fútbol femenino de Qingzhou FC</p>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 columna-img-center">
                                            <div class="text-center ">
                                              <img
                                                  src="https://png.pngtree.com/png-clipart/20190828/ourlarge/pngtree-versus-vs-letters-fight-text-with-comic-fighting-cartoon-style-for-png-image_1701514.jpg"
                                                  alt="...">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="text-center">
                                              <div class="text-center col-md-4 columna-img-center columna-img-tamaño">
                                                  <img src="https://upload.wikimedia.org/wikipedia/commons/a/ab/FPF.svg" alt="...">
                                              </div>
                                              <div class="text-center col-md-4 columna-txt">
                                                  <p>Fútbol femenino de Peru FC</p>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-10">
                                            <div class="text-center">
                                              <p> 2022-07-04 23:00 </p>
                                              <button type="button" class="btn btn-success">Apuesta</button>
                                            </div>
                                        </div>
                                      </div>
                                  </div>
                                </div>
                                <!--end-->
                            </div>
                          </div>
                      </div>
                    </div>
                </div>
              </section> 
                <!-- fin selection -->
              <!--</div> -->
            </div>   
        </div> 
         <!-- fin - content -->




       </div>   
    </div>
  </body>

  <script src="templates/brain/js/apuesta.js"></script>