<?php
session_start();

if(!isset($_SESSION['userId']))
{
  header('location:login.php');
}
 ?>
<?php require "assets/function.php" ?>
<?php require 'assets/db.php';?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo siteTitle(); ?></title>
  <?php require "assets/autoloader.php" ?>
  <style type="text/css">
  <?php include 'css/customStyle.css'; ?>
  </style>

    <link rel="stylesheet" href="../medical/naf/css/animate.min.css">
    <!-- <link rel="stylesheet" href="../medical/naf/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="../medical/naf/css/aos.css">
    <link rel="stylesheet" href="../medical/naf/css/font-awesome.min.css">
    <link rel="stylesheet" href="../medical/naf/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../medical/naf/css/utilities.css">
    <link rel="stylesheet" href="../medical/naf/css/account.css">

    </style>
  <?php 
  $notice="";
  if (isset($_POST['safeIn'])) 
  {
    $filename = $_FILES['inPic']['name'];
    move_uploaded_file($_FILES["inPic"]["tmp_name"], "photo/".$_FILES["inPic"]["name"]);
    if ($con->query("insert into categories (name,pic) value ('$_POST[name]','$filename')")) {
      $notice ="<div class='alert alert-success'>Successfully Saved</div>";
    }
    else
      $notice ="<div class='alert alert-danger'>Not saved Error:".$con->error."</div>";
  }

   ?>
</head>
<body style="background: #ECF0F5;padding:0;margin:0">
<div class="dashboard" style="position: fixed;width: 18%;height: 100%;background:#222D32">
  <div style="background:#357CA5;padding: 14px 3px;color:white;font-size: 15pt;text-align: center;text-shadow: 1px 1px 11px black">
    <a href="index.php" style="color: white;text-decoration: none;"><?php echo strtoupper(siteName()); ?> </a>
  </div>
  <div class="flex" style="padding: 3px 7px;margin:5px 2px;">
    <div><img src="photo/<?php echo $user['pic'] ?>" class='img-circle' style='width: 77px;height: 66px'></div>
    <div style="color:lightgreen;font-size: 13pt;padding: 14px 7px;margin-left: 11px;"><?php echo ucfirst($user['name']); ?></div>
  </div>
  <div style="background: #1A2226;font-size: 10pt;padding: 11px;color: #79978F">MAIN NAVIGATION</div>
  <div>
    <div style="background:#1E282C;color: white;padding: 13px 17px;border-left: 3px solid #3C8DBC;"><span><i class="fa fa-dashboard fa-fw"></i> Dashboard</span></div>
    <div class="item">
      <ul class="nostyle zero">
        <a href="index.php"><li ><i class="fa fa-circle-o fa-fw"></i> Home</li></a>
        <a href="inventeries.php"><li><i class="fa fa-circle-o fa-fw"></i> Inventeries</li></a>
       <a href="addnew.php"><li><i class="fa fa-circle-o fa-fw"></i> Add New Item</li></a>
       <a href="scan.php"><li style="color: white"><i class="fa fa-circle-o fa-fw"></i> Scan Barcode</li></a>
        <!-- <a href="newsell"><li><i class="fa fa-circle-o fa-fw"></i> New Sell</li></a> -->
        <a href="reports.php"><li><i class="fa fa-circle-o fa-fw"></i> Report</li></a>
      </ul><
    </div>
  </div>
  <div style="background:#1E282C;color: white;padding: 13px 17px;border-left: 3px solid #3C8DBC;"><span><i class="fa fa-globe fa-fw"></i> Other Menu</span></div>
  <div class="item">
      <ul class="nostyle zero">
        <a href="sitesetting.php"><li><i class="fa fa-circle-o fa-fw"></i> Site Setting</li></a>
       <a href="profile.php"><li><i class="fa fa-circle-o fa-fw"></i> Profile Setting</li></a>
        <a href="accountSetting.php"><li><i class="fa fa-circle-o fa-fw"></i> Account Setting</li></a>
        <a href="barcode.php"><li><i class="fa fa-circle-o fa-fw"></i> Barcode Setting</li></a>
        <a href="logout.php"><li><i class="fa fa-circle-o fa-fw"></i> Sign Out</li></a>
      </ul><
    </div>
</div>
<div class="marginLeft" >
  <div style="color:white;background:#3C8DBC" >
    <div class="pull-right flex rightAccount" style="padding-right: 11px;padding: 7px;">
      <div><img src="photo/<?php echo $user['pic'] ?>" style='width: 41px;height: 33px;' class='img-circle'></div>
      <div style="padding: 8px"><?php echo ucfirst($user['name']) ?></div>
    </div>
    <div class="clear"></div>
  </div>
<div class="account" style="display: none;">
  <div style="background: #3C8DBC;padding: 22px;" class="center">
    <img src="photo/<?php echo $user['pic'] ?>" style='width: 100px;height: 100px; margin:auto;' class='img-circle img-thumbnail'>
    <br><br>
    <span style="font-size: 13pt;color:#CEE6F0"><?php echo $user['name'] ?></span><br>
    <span style="color: #CEE6F0;font-size: 10pt">Member Since:<?php echo $user['date']; ?></span>
  </div>
  <div style="padding: 11px;">
    <a href="profile.php"><button class="btn btn-default" style="border-radius:0">Profile</button>
    <a href="logout.php"><button class="btn btn-default pull-right" style="border-radius: 0">Sign Out</button></a>
  </div>
</div>
<?php 
if (isset($_POST['saveProduct'])) {
if ($con->query("insert into inventeries (catId,supplier,name,unit,price,description,company) values ('$_POST[catId]','$_POST[supplier]','$_POST[name]','$_POST[unit]','$_POST[price]','$_POST[discription]','$_POST[company]')")) {
  $notice ="<div class='alert alert-success'>Successfully Saved</div>";
}
else{
  $notice ="<div class='alert alert-danger'>Error is:".$con->error."</div>";
}
}

 ?>
  <div class="content2">
<ol class="breadcrumb ">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Scan Barcode</li>
    </ol>
    <?php echo $notice ?>
    <!-- <div style="width: 55%;margin: auto;padding: 22px;" class="well well-sm center">

      <h4>Add New Product</h4><hr>
      <form method="POST">
         <div class="form-group">
            <label for="some" class="col-form-label">Name</label>
            <input type="text" name="name" class="form-control" id="some" required>
          </div>
          <div class="form-group">
            <label for="some" class="col-form-label">Unit</label>
            <input type="text" name="unit" placeholder="i.e 50mg" class="form-control" id="some" required>
          </div>
          <div class="form-group">
            <label for="some" class="col-form-label">Price Per Unit</label>
            <input type="number" name="price"  class="form-control" id="some" required>
          </div>
          <div class="form-group">
            <label for="some" class="col-form-label">Generated Barcode</label>
            <input type="text" name="supplier"  class="form-control" id="some" required>
          </div>
          <div class="form-group">
            <label for="some" class="col-form-label">Medicine Company Name</label>
            <input type="text" name="company"  class="form-control" id="some" required>
          </div>
          <div class="form-group">
            <label for="some" class="col-form-label">Select Category</label>
            <select class="form-control" required name="catId">
              <option selected disabled value="">Please Select Category</option>
            <?php getAllCat(); ?>
              
            </select>
          </div>
           <div class="form-group">
            <label for="some" class="col-form-label">Discription</label>
          <textarea class="form-control" name="discription" required placeholder="Write some discription"></textarea> 
          </div>
          <div class="center">
            <button type="submit" name="saveProduct" class="btn btn-primary">Save</button>
            <button type="reset" class="btn btn-success">Reset</button>
          </div>
        </form>
    </div> -->

    <section class="mobile-header-section sticky-top hide-on-desktop">
        <div class="title"> <i class="fa fa-angle-left back-icon"></i> Send</div>
    </section>
    <section class="send-page">

        <section class="choose-method-section">
            <a class="box" id="scan_qrcode_btn">Scan BarCode <i class="fa fa-barcode"></i> <i class="fa fa-angle-right angle-right"></i></a>
            <!-- <a class="box bottom-slider-modal-open-btn" bottom_slider_modal_id="via_wallet_address">Enter wallet address <i class="fa fa-google-wallet"></i> <i class="fa fa-angle-right angle-right"></i></a> -->
            <!-- <a class="box bottom-slider-modal-open-btn" bottom_slider_modal_id="via_wallet_screenshot">Upload screenshot <i class="fa fa-qrcode"></i> <i class="fa fa-angle-right angle-right"></i></a> -->
            
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

</div>

    <script src="../medical/naf/js/jquery.min.js"></script>
    <script src="../medical/naf/js/bootstrap.min.js"></script>
    <script src="../medical/naf/js/aos.js"></script>
    <script src="../medical/naf/js/owl.carousel.min.js"></script>
    <script src="../medical/naf/js/account.js"></script>
    <script src="../medical/naf/js/utilities.js"></script>
    <script src="../medical/naf/js/instascan.min.js"></script>

    <script src="../medical/naf/js/qr-scanner.min.js"></script>
    <script src="../medical/naf/js/qr-scanner.umd.min.js"></script>
    <script src="../medical/naf/js/qr-scanner-worker.min.js"></script>


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

<script type="text/javascript">
  $(document).ready(function(){$(".rightAccount").click(function(){$(".account").fadeToggle();});});
</script>

