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
    <title><?= $config['hotelName'] ?>: <?= User::userData('username') ?></title>
</head>
<?php 
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
 
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</body>