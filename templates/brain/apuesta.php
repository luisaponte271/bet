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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
$(document).ready(function(e) {
    $.ajaxSetup({
        cache: true
    });
    setInterval(function() {
        $('#onlinecount').load('/onlinecount');
    }, 1500);
    $("#onlinecount").click(function() {
        $('#onlinecount').load('/onlinecount');
    });
});
</script>
<script type="text/javascript">
$(document).ready(function(e) {
    $.ajaxSetup({
        cache: true
    });
    setInterval(function() {
        $('#roomcount').load('/roomcount');
    }, 5500);
    $("#roomcount").click(function() {
        $('#roomcount').load('/roomcount');
    });
});
</script>

<head>
    <meta charset="utf-8">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="../../templates/brain/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../templates/brain/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../../templates/brain/assets/css/apuesta.css">
    <title><?= $config['hotelName'] ?>: <?= User::userData('username') ?></title>
</head>
<?php  
  include_once 'classes/class.confrontation.php';
  include_once 'includes/alerts.php';
?>

<body>
    <div id="container">
        <div class="wrapper">

            <?php include_once 'includes/header.php'; ?>

            <div class="content">
                <div class="wrapper" style="overflow: auto;">
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

                                <div class="container">
                                    <div class="row">
                                        <?php
                                      $row = Apuesta::getAll();
                                      $num = count($row);  ?>
                                        <?php if(count($row) > 0 ){ ?>
                                        <?php for($i=0;$i<count($row);$i++){ ?>
                                        <div class="card" style="width: 25rem;">
                                            <div class="col-sm">
                                                <div class="card-body">
                                                    <h5 class="card-title"><?php echo $row[$i]['title']; ?></h5>
                                                    <div class="row justify-content-md-center">
                                                        <div class="col-md-4 ">
                                                            <div class="text-center">
                                                                <div
                                                                    class="text-center col-md-4 columna-img-center columna-img-tamaño">
                                                                    <?php $img1 = base64_encode($row[$i]['team1imagen']);  
                                                                    echo '<img src="data:image/jpeg;base64,'.$img1.'" alt="..."/>';?>
                                                                </div>
                                                                <div class="text-center col-md-4 columna-txt">
                                                                    <p><?php echo $row[$i]['team1']; ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 columna-img-center">
                                                            <div class="text-center">
                                                                <img src="https://png.pngtree.com/png-clipart/20190828/ourlarge/pngtree-versus-vs-letters-fight-text-with-comic-fighting-cartoon-style-for-png-image_1701514.jpg"
                                                                    alt="...">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="text-center">
                                                                <div
                                                                    class="text-center col-md-4 columna-img-center columna-img-tamaño">
                                                                    <?php $img2 = base64_encode($row[$i]['team2imagen']);  
                                                                    echo '<img src="data:image/jpeg;base64,'.$img2.'" alt="..."/>';?>
                                                                </div>
                                                                <div class="text-center col-md-4 columna-txt">
                                                                    <p><?php echo $row[$i]['team2']; ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-10">
                                                            <div class="text-center">
                                                                <p><?php echo $row[$i]['date_hour_confrontation']; ?>
                                                                </p>

                                                                <button type="button" class="btn btn-primary"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#create_<?php echo $row[$i]['id']; ?>">
                                                                    Apuesta
                                                                </button>

                                                                <div class="modal fade"
                                                                    id="create_<?php echo $row[$i]['id']; ?>"
                                                                    tabindex="-1" role="dialog"
                                                                    aria-labelledby="myModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title">Alige tu apuesta
                                                                                </h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                 <form method="POST" action="apuestaddmodal?id=<?php echo $row[$i]['id']; ?>"> 
                                                                                <label>Tipo de moneda</label>
                                                                                <input type="text" class="form-control"
                                                                                    placeholder="USDT" disabled="true">
                                                                                <label>Total dinero</label>
                                                                                <input type="text" class="form-control"
                                                                                    value="<?= User::userData('credits') ?>"
                                                                                    disabled="true">
                                                                                <label>Profit</label>
                                                                                <input type="text" class="form-control"
                                                                                    name="profit"
                                                                                    id="profit<?php echo $row[$i]['id']; ?>"
                                                                                    value=" <?php echo $row[$i]['profit']/100; ?> "
                                                                                    disabled="true">
                                                                                <label>Monto</label>
                                                                                <input type="text" class="form-control"
                                                                                    name="amount"
                                                                                    id="amount<?php echo $row[$i]['id']; ?>"
                                                                                    onkeyup="keyup(<?php echo $row[$i]['id']; ?>)">
                                                                                <label>Ganancia</label>
                                                                                <input type="text" class="form-control"
                                                                                    name="ganancia"
                                                                                    id="ganancia<?php echo $row[$i]['id']; ?>"
                                                                                    disabled="true">
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Cerrar</button>

                                                                                <button type="submit" name="Submit"
                                                                                    onclick="return confirmapuesta()"
                                                                                    class="btn btn-primary">Save
                                                                                    changes</button> 
                                                                               </form>  
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        <?php } else { ?>
                                        <p>data field is empty.</p>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="templates/brain/js/apuesta.js"></script>