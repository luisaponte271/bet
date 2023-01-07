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
                           
                                <!-- card example 1*-->
                                
                                  
                                  <?php
                                      $user_id = $_SESSION['id'];
                                      $sql = $dbh->prepare("SELECT * FROM confrontation"); 
                                      $sql->execute();
                                      $i = 1;
                                  while ($news = $sql->fetch()) {
                                    echo '<div class="card" style="width: 25rem;">';
                                    echo '<div class="col-sm">';
                                    echo '<div class="card-body">';
                                    echo '<h5 class="card-title">' . $news["title"] . ' </h5>';
                                    echo '<div class="row justify-content-md-center">';
                                    echo '<div class="col-md-4 ">';
                                    echo '<div class="text-center">';
                                    echo '<div class="text-center col-md-4 columna-img-center columna-img-tamaño">';

                                    $profile_picture = base64_encode($news['team1imagen']);
                                    echo '<img src="data:image/jpeg;base64,' . $profile_picture . '" alt="..."/>';

                                    echo '</div>';
                                    echo '<div class="text-center col-md-4 columna-txt">';
                                    echo '<p>' . $news['team1'] . '</p>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '<div class="col-md-2 columna-img-center">';
                                    echo '<div class="text-center ">';
                                    echo '<img src="https://png.pngtree.com/png-clipart/20190828/ourlarge/pngtree-versus-vs-letters-fight-text-with-comic-fighting-cartoon-style-for-png-image_1701514.jpg" alt="...">';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '<div class="col-md-4">';
                                    echo '<div class="text-center">';
                                    echo '<div class="text-center col-md-4 columna-img-center columna-img-tamaño">';

                                    $profile_picture = base64_encode($news['team2imagen']);
                                    echo '<img src="data:image/jpeg;base64,' . $profile_picture . '" alt="..."/>';
                                    echo '</div>';
                                    echo '<div class="text-center col-md-4 columna-txt">';
                                    echo '<p>' . $news['team2'] . '</p>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '<div class="col-lg-10">';
                                    echo '<div class="text-center">';
                                    echo '<p>' . $news['date_hour_confrontation'] . '</p>';
                                    echo '<button type="button" onclick="abrirModal(' . $i . ')" class="btn btn-success">Apuesta</button>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';  
                                    $sql2 = $dbh->prepare("CALL sp_confrontation_users(:user,:confrontation)");
                                    $sql2->bindParam(':user', $user_id);
                                    $sql2->bindParam(':confrontation', $news['id']);
                                    $sql2->execute();
                                    while ($modal = $sql2->fetch()) {
                                     
                                      echo '<div id="ventanaModal' . $i . '" class="modal">';
                                      echo '<div class="modal-dialog" role="document">';
                                      echo '<div class="modal-content">';
                                      echo '<div class="modal-header">';
                                      echo '<h5 class="modal-title" >Alige tu apuesta</h5>';
                                      echo '<button type="button" class="close" onclick="closeModal(' . $i . ')" aria-label="Close">';
                                      echo '<span aria-hidden="true">&times;</span>';
                                      echo '</button>';
                                      echo '</div>';
                                      echo '<div class="modal-body">';
                                     // echo '<form  method="post" name="formajax" id="frmajax" enctype="multipart/form-data">';
                                      echo '<form action="apuestadd2"  enctype="multipart/form-data">';
                                      echo '<label>Tipo de moneda</label>';
                                      echo '<input type="text" class="form-control" placeholder="USDT" disabled="true">';
                                      echo '<label>Total dinero</label>'; 
                                      echo '<input type="text" class="form-control" name="saldo" id="saldo'. $i . '" value="' . $modal['saldo'] . '" disabled="true">';
                                      echo '<label>Profit</label>';
                                      echo '<input type="text" class="form-control" name="profit" id="profit'. $i . '" value="' . $modal['profit']/100 . '" disabled="true">';
                                      echo '<label>Cantidad</label>'; 
                                      echo '<input type="text" class="form-control" name="cantidad" id="cantidad'. $i . '" onkeyup="keyup(' .$i.')">';
                                      echo '<label>Ganancia</label>';
                                      echo '<input type="text" class="form-control" name="ganancia" id="ganancia'. $i . '" disabled="true">';
                                      echo '<div class="modal-footer">';
                                      echo '<button type="submit" name="Submit" class="btn btn-primary">Save changes</button>';
                                      echo '<button type="button" class="btn btn-secondary" onclick="closeModal(' . $i . ')">Close</button>';
                                      echo '</div>';
                                      echo '</form>';
                                      echo '</div>'; 
                                      echo '</div>';
                                      echo '</div>';
                                      echo '</div>';
                                     
                                      $i++;
                                    }
                                  }
                                  ?>
                                    
                                </div>
                                <!--end-->
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