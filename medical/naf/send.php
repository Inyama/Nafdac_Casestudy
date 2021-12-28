<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <!-- bar color-->
    <meta name="theme-color" content="#12326b" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#12326b" />
    <meta name="msapplication-navbutton-color" content="#12326b" />


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/utilities.css">
    <link rel="stylesheet" href="css/account.css">
    <title>Nairon | account</title>
</head>

<body>

    <section class="mobile-header-section sticky-top hide-on-desktop">
        <div class="title"> <i class="fa fa-angle-left back-icon"></i> Send</div>
    </section>
    <section class="send-page">

        <section class="choose-method-section">
            <a class="box" id="scan_qrcode_btn">Scan QRcode <i class="fa fa-qrcode"></i> <i class="fa fa-angle-right angle-right"></i></a>
            <a class="box bottom-slider-modal-open-btn" bottom_slider_modal_id="via_wallet_address">Enter wallet address <i class="fa fa-google-wallet"></i> <i class="fa fa-angle-right angle-right"></i></a>
            <a class="box bottom-slider-modal-open-btn" bottom_slider_modal_id="via_wallet_screenshot">Upload screenshot <i class="fa fa-qrcode"></i> <i class="fa fa-angle-right angle-right"></i></a>
        </section>
        <section class="qrcode-scanner-section">
            <i class="fa fa-arrow-left back-btn scan-qrcode-back-btn"></i>
            <div class="qrcode-video-container">
                <video id="qrcode-video" src="" class="qrcode-video"></video>
            </div>
            <div class="info-container">
                <div class="info-box">Scan QRcode to send <i class="fa fa-qrcode"></i>
                    <div class="triangle"></div>
                </div>
            </div>
            <div class="target-container">
                <div class="target-box">
                    <div class="top-left"></div>
                    <div class="top-left-top"></div>
                    <div class="top-right"></div>
                    <div class="top-right-top"></div>
                    <div class="bottom-left"></div>
                    <div class="bottom-left-bottom"></div>
                    <div class="bottom-right"></div>
                    <div class="bottom-right-bottom"></div>
                    <div class="mover"></div>
                </div>
            </div>
            <div class="select-camera-container">
                <div class="select-container">
                    <select name="" id="select_camera">
                        <option value="">Switch Camera</option>
                    </select>
                </div>
            </div>
        </section>





        <div class="bottom-slider-modal-background" id="via_wallet_address"></div>
        <section class="bottom-slider-modal" id="via_wallet_address">
            <div class="modal-title">Send via wallet address</div>
            <div class="modal-body">
                <section class="send-via-wallet-address-section">
                    <form action="" onsubmit="return false">
                        <fieldset class="wallet-address-fieldset active" visible="true">
                            <legend class="active">Wallet address</legend>
                            <input type="text" class="field" placeholder="" id="wallet_address">
                        </fieldset>
                        <div class="submit-btn-container">
                            <button class="submit-btn loading-btn">Send</button>
                        </div>
                    </form>
                </section>
            </div>
        </section>



        <div class="bottom-slider-modal-background" id="via_wallet_screenshot"></div>
        <section class="bottom-slider-modal" id="via_wallet_screenshot">
            <div class="modal-title">Send via wallet screenshot</div>
            <div class="modal-body">
                <section class="send-via-wallet-address-screenshot-section">
                    <form action="" id="wallet_screenshot_upload_form">
                        <div class="upload-container">
                            <div class="upload-box">
                                <span class="info">Choose file <i class="fa fa-upload"></i></span>
                            </div>
                            <input type="file" name="wallet_screenshot" class="screenshot-file" style="display:none;">
                            <img src="" style="display:none;" alt="" id="screenshot_preview">
                        </div>
                    </form>
                </section>
            </div>
        </section>
    </section>



    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/account.js"></script>
    <script src="js/utilities.js"></script>
    <script src="js/instascan.min.js"></script>

    <script src="js/qr-scanner.min.js"></script>
    <script src="js/qr-scanner.umd.min.js"></script>
    <script src="js/qr-scanner-worker.min.js"></script>





    <script>
        var select_camera = document.getElementById("select_camera");
        var camera_count = 0;
        let opts = {
            continuous: true,
            video: document.getElementById('qrcode-video'),
            mirror: true,
            captureImage: false,
            backgroundScan: true,
            refractoryPeriod: 5000,
            scanPeriod: 1
        };

        let scanner = new Instascan.Scanner(opts)

        scanner.addListener('scan', function(content) {
            console.log(content);
            alert("The code is: " + content)
        });


        function scan_qrcode_start() {
            Instascan.Camera.getCameras().then(function(cameras) {
                if (cameras.length > 0) {
                    scanner.start(cameras[0]);
                    for (i = 0; i < cameras.length; i++) {
                        const option = document.createElement('option');
                        option.value = camera_count;
                        const label = cameras[i].name;
                        const textNode = document.createTextNode(label);
                        option.appendChild(textNode);
                        select_camera.appendChild(option);
                        camera_count++;
                    }
                } else {

                    alert("no camera found")
                }
            }).catch(function(e) {
                console.error(e);
            });
        }


        $("#select_camera").change(function() {
            var selected_camera = $(this).val();
            if (selected_camera == "") {
                selected_camera[0];
            }

            scanner.stop()
            Instascan.Camera.getCameras().then(function(cameras) {
                scanner.start(cameras[selected_camera])
            }).catch(function(e) {
                console.error(e);
            });
        })

        $("#scan_qrcode_btn").click(function() {
            if (confirm("You may be prompted to allow Nairon use your camera, please click on allow")) {
                window.location.href = "#start_qrcode_scan";
            }
        })

        $(".scan-qrcode-back-btn").click(function() {
            window.history.back();
        })

        console.log(window.location.hash);
        $(window).on("hashchange", function() {
            if (window.location.hash == "#start_qrcode_scan") {
                $(".qrcode-scanner-section").slideDown();
                $(".qrcode-scanner-section").css("display", "flex")
                scan_qrcode_start();
            } else {
                scanner.stop();
                $(".qrcode-scanner-section").slideUp();
            }
        })



        /*** WALLET ADDRESS SCREENSHOT START ** */
        $(".upload-box").click(function() {
            $(".screenshot-file").click()
        })

        $(".screenshot-file").change(function() {
            $("#wallet_screenshot_upload_form").submit()
        });


        $("#wallet_screenshot_upload_form").submit(function(e) {
            $(".upload-box .info").html("<img src='../assets/images/loader1.gif' style='width:30px;height:30px;'>")
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({

                url: "upload-wallet-screenshot.php",
                method: "POST",
                async: true,
                contentType: false,
                processData: false,
                data: formData,
                success: function(data) {
                    $("#screenshot_preview").attr("src", data)
                    QrScanner.scanImage(document.getElementById("screenshot_preview"))
                        .then(result => {
                            console.log(result)
                            alert("wallet address: " + result)
                        })
                        .catch(error => console.log(error || 'No QR code found.'));

                }

            });
        })
        /*** WALLET ADDRESS SCREENSHOT END ** */
    </script>

</body>

</html>