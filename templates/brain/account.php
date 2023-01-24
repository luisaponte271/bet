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
                            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                                <div class="d-flex flex-column flex-column-fluid">
                                    <div id="kt_app_content" class="app-content flex-column-fluid">
                                        <div id="kt_app_content_container" class="app-container container-fluissd"><br>
                                            <h1 class="text-black">Account</h1>
                                            <div class="card mb-5 mb-xl-10 mt-5">

                                                <div class="card-header cursor-pointer">
                                                    <div class="card-title m-0">
                                                        <h3 class="fw-bold m-0">Account Details</h3>
                                                    </div>
                                                </div>

                                                <div class="card-body p-9">
                                                    <div class="row mb-7">
                                                        <label class="col-lg-4 fw-semibold text-muted">Username</label>
                                                        <div class="col-lg-8">
                                                            <span class="fw-bold fs-6 text-gray-800">test999</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-7">
                                                        <label class="col-lg-4 fw-semibold text-muted">Email</label>
                                                        <div class="col-lg-8">
                                                            <span
                                                                class="fw-bold fs-6 text-gray-800">i201221462@gmail.com</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-7">
                                                        <label class="col-lg-4 fw-semibold text-muted">Register
                                                            IP</label>
                                                        <div class="col-lg-8">
                                                            <span
                                                                class="fw-bold fs-6 text-gray-800">201.240.37.90</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-7">
                                                        <label class="col-lg-4 fw-semibold text-muted">Login IP</label>
                                                        <div class="col-lg-8">
                                                            <span
                                                                class="fw-bold fs-6 text-gray-800">201.240.37.90</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-7">
                                                        <label class="col-lg-4 fw-semibold text-muted">Register
                                                            Time</label>
                                                        <div class="col-lg-8">
                                                            <span class="fw-bold fs-6 text-gray-800">2023-01-09
                                                                00:49</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="card mb-5 mb-xl-10 mt-5">
                                                <div class="card-header border-0 cursor-pointer" role="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#kt_account_profile_details" aria-expanded="true"
                                                    aria-controls="kt_account_profile_details">
                                                    <div class="card-title m-0">
                                                        <h3 class="fw-bold m-0">Change Password</h3>
                                                    </div>
                                                </div>
                                                <div id="kt_account_settings_profile_details" class="collapse show"
                                                    data-select2-id="select2-data-kt_account_settings_profile_details">
                                                    <form id="kt_account_profile_details_form"
                                                        class="form fv-plugins-bootstrap5 fv-plugins-framework"
                                                        onsubmit="return false;">
                                                        <div class="card-body border-top p-9">
                                                            <div class="row mb-6">

                                                                <div class="row mb-6">
                                                                    <label
                                                                        class="col-lg-4 col-form-label required fw-semibold fs-6">Your
                                                                        Old Password</label>
                                                                    <div
                                                                        class="col-lg-4 fv-row fv-plugins-icon-container">
                                                                        <input type="password" id="oldPassword"
                                                                            class="form-control form-control-lg form-control-solid"
                                                                            placeholder="Old Password">
                                                                        <div
                                                                            class="fv-plugins-message-container invalid-feedback">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-6">
                                                                    <label
                                                                        class="col-lg-4 col-form-label required fw-semibold fs-6">Your
                                                                        New Password</label>
                                                                    <div
                                                                        class="col-lg-4 fv-row fv-plugins-icon-container">
                                                                        <input type="password" id="newPassword"
                                                                            class="form-control form-control-lg form-control-solid"
                                                                            placeholder="New Password">
                                                                        <div
                                                                            class="fv-plugins-message-container invalid-feedback">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-6">
                                                                    <label
                                                                        class="col-lg-4 col-form-label required fw-semibold fs-6">Your
                                                                        New Password</label>
                                                                    <div
                                                                        class="col-lg-4 fv-row fv-plugins-icon-container">
                                                                        <input type="password" id="newPassword2"
                                                                            class="form-control form-control-lg form-control-solid"
                                                                            placeholder="New Password">
                                                                        <div
                                                                            class="fv-plugins-message-container invalid-feedback">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="changePasswordResult"></div>
                                                            </div>
                                                            <div
                                                                class="card-footer d-flex justify-content-end py-6 px-9">
                                                                <button type="submit" class="btn btn-primary"
                                                                    onclick="changePassword()">Save Changes</button>
                                                            </div>

                                                        </div>
                                                    </form>
                                                </div>


                                                <div class="modal fade" id="kt_modal_bidding" tabindex="-1"
                                                    style="display: none;" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered mw-900px">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h2>Confirm Your Account</h2>
                                                                <div class="btn btn-sm btn-icon btn-active-color-primary"
                                                                    data-bs-dismiss="modal">
                                                                    <span class="svg-icon svg-icon-1">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <rect opacity="0.5" x="6" y="17.3137"
                                                                                width="16" height="2" rx="1"
                                                                                transform="rotate(-45 6 17.3137)"
                                                                                fill="currentColor"></rect>
                                                                            <rect x="7.41422" y="6" width="16"
                                                                                height="2" rx="1"
                                                                                transform="rotate(45 7.41422 6)"
                                                                                fill="currentColor"></rect>
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="modal-body py-lg-10 px-lg-10">
                                                                <span class="text-warning">The code required to verify
                                                                    your account will be sent to your email
                                                                    address.</span><br>
                                                                <span class="text-white">Click the <strong
                                                                        style="color:bisque;">Send Code</strong> button
                                                                    to receive the code.</span>
                                                                <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid"
                                                                    id="kt_modal_create_app_stepper"
                                                                    data-kt-stepper="true">
                                                                    <div class="flex-row-fluid py-lg-5 px-lg-15">
                                                                        <div class="current"
                                                                            data-kt-stepper-element="content">
                                                                            <div class="w-100">
                                                                                <form class="pricing-form mt-2"
                                                                                    onsubmit="return false">
                                                                                    <div class="row g-4">
                                                                                        <div class="row mb-6">
                                                                                            <label
                                                                                                class="col-lg-4 col-form-label required fw-semibold fs-6">Enter
                                                                                                the code</label>
                                                                                            <div
                                                                                                class="col-lg-4 fv-row fv-plugins-icon-container">
                                                                                                <input type="number"
                                                                                                    id="code"
                                                                                                    class="form-control form-control-lg form-control-solid"
                                                                                                    placeholder="Enter Code Here">
                                                                                                <div
                                                                                                    class="fv-plugins-message-container invalid-feedback">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row mb-6">
                                                                                            <label
                                                                                                class="col-lg-4 col-form-label fw-semibold fs-6"></label>
                                                                                            <div
                                                                                                class="col-lg-4 fv-row fv-plugins-icon-container">
                                                                                                <span
                                                                                                    id="resultLabel"></span><br>
                                                                                                <button
                                                                                                    class="btn btn-warning text-black btn-sm"
                                                                                                    onclick="sendCode()"
                                                                                                    style="display"
                                                                                                    id="sendCodeButton">Send
                                                                                                    Code</button>
                                                                                                <button
                                                                                                    class="btn btn-info btn-sm mt-2 "
                                                                                                    onclick="nextCode()"
                                                                                                    style="display:none;"
                                                                                                    id="nextCodeButton">Next</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <script type="text/javascript">
                                                function sendCode() {

                                                    document.getElementById('sendCodeButton').style.display = 'none';


                                                    $.ajax({
                                                        data: {},
                                                        type: "post",
                                                        url: "ajax/sendCode.php",
                                                        success: function(e) {
                                                            $("#resultLabel").html("");
                                                            $("#resultLabel").html(e);
                                                        },
                                                        error: function(xhr, ajaxOptions, thrownError) {
                                                            console.log(xhr);
                                                            console.log(ajaxOptions);
                                                            console.log(thrownError);
                                                        }
                                                    });

                                                    setTimeout(function() {
                                                        document.getElementById('nextCodeButton').style
                                                            .display = ''
                                                    }, 2000);

                                                }

                                                function nextCode() {
                                                    var code = document.getElementById('code').value;
                                                    if (code == "") {
                                                        $("#resultLabel").html("");
                                                        $("#resultLabel").html("You forgot to write the code.");
                                                    }
                                                    if (code != "") {
                                                        $.ajax({
                                                            data: {
                                                                "code": code
                                                            },
                                                            type: "post",
                                                            url: "ajax/checkCode.php",
                                                            success: function(e) {
                                                                $("#resultLabel").html("");
                                                                $("#resultLabel").html(e);
                                                            },
                                                            error: function(xhr, ajaxOptions, thrownError) {
                                                                console.log(xhr);
                                                                console.log(ajaxOptions);
                                                                console.log(thrownError);
                                                            }
                                                        });
                                                    }
                                                }
                                                </script>
                                            </div>
                                            <!--end::Content container-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Content wrapper-->

                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</body>