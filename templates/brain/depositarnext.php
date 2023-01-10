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
                            <div class="row mbr-justify-content-center">
                                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                                    <div class="d-flex flex-column flex-column-fluid">
                                        <div id="kt_app_content" class="app-content flex-column-fluid">
                                            <div id="kt_app_content_container" class="app-container container-fluissd">
                                                <br>
                                                <h1 class="text-black">
                                                    <div style="vertical-align: inherit;">
                                                        <h1 style="vertical-align: inherit;">Agregar depósito</h1>
                                                    </div>
                                                </h1>
                                                <div class="card" id="kt_pricing">
                                                    <div class="card-body p-lg-17"
                                                        style="padding: 2rem 0rem !important;">
                                                        <div class="container">
                                                            <div class="mb-13 text-center">
                                                                <h1 class="fs-2hx fw-bold mb-5">Comprar USDT</h1>
                                                            </div>
                                                            <div
                                                                class="d-flex justify-content-center align-self-center">
 
                                                                <div id="buyHashAjaxContent" style="overflow: hidden;">
                                                                    <div class="custom-col web">
                                                                        <div class="single-portfolio-box">
                                                                            <div class="part-txt"
                                                                                style="padding: 15px;">
                                                                                <b class="category"><span
                                                                                        id="timer-minutes">00<span
                                                                                            class="label">
                                                                                            Min.</span></span> <span
                                                                                        id="timer-seconds">00<span
                                                                                            class="label">
                                                                                            Sec.</span></span></b><br>

                                                                                <ul class="mt-3 info" style="">
                                                                                    <li class="section-title"
                                                                                        style="font-size: 18px !important;margin-bottom: 0px !important;color: #edaa29 !important;">
                                                                                        <span
                                                                                            style="color:#eaeaea !important;font-size: 18px;font-weight: 400;">Coin:</span><br>
                                                                                        USDT
                                                                                    </li>
                                                                                    <li class="section-title"
                                                                                        style="font-size: 18px !important;margin-bottom: 0px !important;color: #edaa29 !important;">
                                                                                        <span
                                                                                            style="color:#eaeaea !important;font-size: 18px;font-weight: 400;">Network:</span><br>
                                                                                        TRON (TRC-20)
                                                                                    </li>
                                                                                </ul>
                                                                                <ul class="info"
                                                                                    style="justify-content: space-evenly !important;">
                                                                                    <li class="section-title"
                                                                                        style="font-size: 18px !important;margin-bottom: 0px !important;color: #edaa29 !important;">
                                                                                        <span
                                                                                            style="color:#eaeaea !important;font-size: 18px;font-weight: 400;">Amount:</span><br>
                                                                                        1875 Usdt
                                                                                    </li>
                                                                                </ul>
                                                                                <span
                                                                                    style="background: linear-gradient(313deg, #e91919, #27b923);-webkit-background-clip: text;background-clip: text;color:transparent;margin-left: 0px !important;margin-bottom: 5px !important;font-weight: bold !important;">Payment
                                                                                    Wallet</span>
                                                                                <div
                                                                                    class="input-group mb-3 form-group">
                                                                                    <input readonly="" type="text"
                                                                                        class="form-control"
                                                                                        value="TWLyCHriFP2RcQHFrYXJVvR1AjJ8sBgDaG"
                                                                                        id="walletInputCopy">
                                                                                    <!-- <div class="input-group-append">
                                                                                        <button
                                                                                            class="btn btn-secondary btn-clipboard"
                                                                                            data-clipboard-action="copy"
                                                                                            data-clipboard-target="#walletInputCopy"><i
                                                                                                class="fa fa-copy"></i></button>
                                                                                    </div> -->
                                                                                </div>
                                                                            </div>

                                                                            <ul class="info mt-5">
                                                                                <li class="text-black">If you deposit
                                                                                    <strong class="text-warning">1875
                                                                                        Usdt</strong>, <strong
                                                                                        class="text-success">250000
                                                                                        TH/s</strong> will be added to
                                                                                    your account.
                                                                                </li>
                                                                            </ul>
                                                                            <ul class="info mt-5">
                                                                                <li>
                                                                                    <button type="button"
                                                                                        class="btn btn-danger btn-xs mt-2"
                                                                                        onclick="cancelDeposit()"
                                                                                        id="cancelDeposit">Cancel</button>
                                                                                </li>
                                                                            </ul>

                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- #region -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</body>