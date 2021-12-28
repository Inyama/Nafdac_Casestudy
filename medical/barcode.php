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
  <link href="../medical/Bar_code/maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> 
  <link rel="stylesheet" href="../medical/Bar_code/maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../medical/Bar_code/maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
  <link rel="stylesheet" type='text/css' href="Bar_code/lindell.me/JsBarcode/generator/style.css">
  <link rel="stylesheet" type='text/css' href="../medical/Bar_code/lindell.me/JsBarcode/generator/rangeslider.css">
  <link rel="stylesheet" href="../medical/Bar_code/lindell.me/JsBarcode/generator/sweetalert2.css">

  <script src="../Bar_code/lindell.me/JsBarcode/generator/sweetalert2.all.min.js"></script>
  <script src="../medical/Bar_code/code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="../medical/Bar_code/cdn.jsdelivr.net/jsbarcode/3.3.20/JsBarcode.all.min.js"></script>
  <script src="../medical/Bar_code/lindell.me/JsBarcode/generator/javascripts/rangeslider.min.js"></script>
  <script src="../medical/Bar_code/lindell.me/JsBarcode/generator/javascripts/jqColorPicker.min.js"></script>
  <script src="../medical/Bar_code/lindell.me/JsBarcode/generator/javascripts/script.js"></script>
  </style>
  
 <?php 
 $notice="";
if (isset($_POST['saveSetting'])) {
if ($con->query("update users SET name='$_POST[name]',number='$_POST[number]' where id='$_SESSION[userId]'")) {
  $notice ="<div class='alert alert-success'>Successfully Saved</div>";
  header("location:barcode.php?notice=Successfully saved");
}
else{
  $notice ="<div class='alert alert-danger'>Error is:".$con->error."</div>";
}
}
if (isset($_GET['notice'])) {
  $notice = "<div class='alert alert-success'>Successfully Saved</div>";
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
       <a href="addnew.php"><li ><i class="fa fa-circle-o fa-fw"></i> Add New Item</li></a>
       <a href="scan.php"><li><i class="fa fa-circle-o fa-fw"></i> Scan Barcode</li></a>
        <!-- <a href="newsell"><li><i class="fa fa-circle-o fa-fw"></i> New Sell</li></a> -->
        <a href="reports.php"><li><i class="fa fa-circle-o fa-fw"></i> Report</li></a>
      </ul><
    </div>
  </div>
  <div style="background:#1E282C;color: white;padding: 13px 17px;border-left: 3px solid #3C8DBC;"><span><i class="fa fa-globe fa-fw"></i> Other Menu</span></div>
  <div class="item">
      <ul class="nostyle zero">
        <a href="sitesetting.php"><li ><i class="fa fa-circle-o fa-fw"></i> Site Setting</li></a>
       <a href="profile.php"><li><i class="fa fa-circle-o fa-fw"></i> Profile Setting</li></a>
        <a href="accountSetting.php"><li><i class="fa fa-circle-o fa-fw"></i> Account Setting</li></a>
        <a href="Barcode.php"><li style="color: white"><i class="fa fa-circle-o fa-fw"></i> Barcode Setting</li></a>
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

  <div class="content2">
    <ol class="breadcrumb ">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Generate Users Barcode</li>
    </ol>
    <?php echo $notice ?>
    <!-- <div style="width: 55%;margin: auto;padding: 22px;" class="well well-sm center">

      <h4>Generate Users Barcode</h4><hr>
      <form method="POST">
         <div class="form-group">
            <label for="some" class="col-form-label">Name</label>
            <input type="text" name="name" class="form-control" value="<?php echo $user['name'] ?>" id="some" required>
          </div>
          <div class="form-group">
            <label for="some" class="col-form-label">Number</label>
            <input type="text" name="number" value="<?php echo $user['number'] ?>" class="form-control" id="some"  required>
          </div>
          <div class="center">
            <button class="btn btn-primary btn-sm btn-block" name="saveSetting">Save Setting</button>
          </div>   
        </form>
    </div> -->

    <div id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div id="title">
              <h1>Barcode Generator</h1>
             <h4> Please ensure that your barcode is generated sucessfully according to Industry Policy and it's saved on the inventries page.</h4>
                 <!-- <a href="https://github.com/lindell/JsBarcode">JsBarcode</a> -->
            </div>
          </div>
        </div>
      </div>
      <div class="barcode-container">
        <svg id="barcode"></svg>
        <span id="invalid">Not valid data for this barcode type!</span>
      </div>
      <div class="container">
        <div class="row search-bar">
          <div class="col-md-10 col-md-offset-1">
            <div class="input-group margin-bottom-sm">
              <span class="input-group-addon"><i class="fa fa-barcode fa-fw"></i></span>
              <input class="form-control" id="userInput" type="text" value="Example 1234" placeholder="Barcode" autofocus>
              <span class="input-group-btn">
                <select class="btn barcode-select" id="barcodeType" title="CODE128">
                  <option value="CODE128">CODE128 auto</option>
                  <option value="CODE128A">CODE128 A</option>
                  <option value="CODE128B">CODE128 B</option>
                  <option value="CODE128C">CODE128 C</option>
                  <option value="EAN13">EAN13</option>
                  <option value="EAN8">EAN8</option>
                  <option value="UPC">UPC</option>
                  <option value="CODE39">CODE39</option>
                  <option value="ITF14">ITF14</option>
                  <option value="ITF">ITF</option>
                  <option value="MSI">MSI</option>
                  <option value="MSI10">MSI10</option>
                  <option value="MSI11">MSI11</option>
                  <option value="MSI1010">MSI1010</option>
                  <option value="MSI1110">MSI1110</option>
                  <option value="pharmacode">Pharmacode</option>
                </select>
              </span>
            </div>
          </div>
        </div>
        <!-- Bar width -->
        <div class="row">
          <div class="col-md-2 col-xs-12 col-md-offset-1 description-text"><p>Bar Width</p></div>
          <div class="col-md-7 col-xs-11 slider-container"><input id="bar-width" type="range" min="1" max="4" step="1" value="2"/></div>
          <div class="col-md-1 col-xs-1 value-text"><p><span id="bar-width-display"></span></p></div>
        </div>
        <!-- Height -->
        <div class="row">
          <div class="col-md-2 col-xs-12 col-md-offset-1 description-text"><p>Height</p></div>
          <div class="col-md-7 col-xs-11 slider-container"><input id="bar-height" type="range" min="10" max="150" step="5" value="100"/></div>
          <div class="col-md-1 col-xs-1 value-text"><p><span id="bar-height-display"></span></p></div>
        </div>
        <!-- Margin -->
        <div class="row">
          <div class="col-md-2 col-xs-12 col-md-offset-1 description-text"><p>Margin</p></div>
          <div class="col-md-7 col-xs-11 slider-container"><input id="bar-margin" type="range" min="0" max="25" step="1" value="10"/></div>
          <div class="col-md-1 col-xs-1 value-text"><p><span id="bar-margin-display"></span></p></div>
        </div>
        <!-- Background (color) -->
        <div class="row">
          <div class="col-md-2 col-xs-12 col-md-offset-1 description-text"><p>Background</p></div>
          <div class="col-md-7 col-xs-11 input-container"><input id="background-color" class="form-control color" value="#FFFFFF"/></div>
          <div class="col-md-1 col-xs-1 value-text"></div>
        </div>
        <!-- Line color -->
        <div class="row">
          <div class="col-md-2 col-xs-12 col-md-offset-1 description-text"><p>Line Color</p></div>
          <div class="col-md-7 col-xs-11 input-container"><input id="line-color" class="form-control color" value="#000000"/></div>
          <div class="col-md-1 col-xs-1 value-text"></div>
        </div>
        <!-- Show text -->
        <div class="row checkbox-options">
          <div class="col-md-2 col-md-offset-1 col-xs-12 col-xs-offset-0 description-text"><p>Show text</p></div>
          <div class="col-md-7 col-xs-12 center-text">
            <div class="btn-group btn-group-md" role="toolbar">
              <button type="button" class="btn btn-default btn-primary display-text" value="true">Show</button>
              <button type="button" class="btn btn-default display-text" value="false">Hide</button>
            </div>
          </div>
          <div class="col-md-1 col-xs-0"></div>
        </div>
        <div id="font-options">
          <!-- Text align -->
          <div class="row checkbox-options">
            <div class="col-md-2 col-md-offset-1 col-xs-12 col-xs-offset-0 description-text"><p>Text Align</p></div>
            <div class="col-md-7 center-text">
              <div class="btn-group btn-group-md" role="toolbar">
                <button type="button" class="btn btn-default text-align" value="left">Left</button>
                <button type="button" class="btn btn-default btn-primary text-align" value="center">Center</button>
                <button type="button" class="btn btn-default text-align" value="right">Right</button>
              </div>
            </div>
            <div class="col-md-1"></div>
          </div>
          <!-- Font -->
          <div class="row">
            <div class="col-md-2 col-md-offset-1 col-xs-12 col-xs-offset-0 description-text"><p>Font</p></div>
            <div class="col-md-7 center-text">
              <select class="form-control" id="font" style="font-family: monospace">
                <option value="monospace" style="font-family: monospace" selected="selected">Monospace</option>
                <option value="sans-serif" style="font-family: sans-serif">Sans-serif</option>
                <option value="serif" style="font-family: serif">Serif</option>
                <option value="fantasy" style="font-family: fantasy">Fantasy</option>
                <option value="cursive" style="font-family: cursive">Cursive</option>
              </select>
            </div>
            <div class="col-md-1"></div>
          </div>
          <!-- Font options -->
          <div class="row checkbox-options">
            <div class="col-md-2 col-md-offset-1 col-xs-12 col-xs-offset-0 description-text"><p>Font Options</p></div>
            <div class="col-md-7 center-text">
              <div class="btn-group btn-group-md" role="toolbar">
                <button type="button" class="btn btn-default font-option" value="bold" style="font-weight: bold">Bold</button>
                <button type="button" class="btn btn-default font-option" value="italic" style="font-style: italic">Italic</button>
              </div>
            </div>
            <div class="col-md-1"></div>
          </div>
          <!-- Font size -->
          <div class="row">
            <div class="col-md-2 col-md-offset-1 col-xs-12 col-xs-offset-0 description-text"><p>Font Size</p></div>
            <div class="col-md-7 col-xs-11 slider-container"><input id="bar-fontSize" type="range" min="8" max="36" step="1" value="20"/></div>
            <div class="col-md-1 col-xs-1 value-text"><p><span id="bar-fontSize-display"></span></p></div>
          </div>
          <!-- Text margin -->
          <div class="row">
            <div class="col-md-2 col-md-offset-1 col-xs-12 col-xs-offset-0 description-text"><p>Text Margin</p></div>
            <div class="col-md-7 col-xs-11 slider-container"><input id="bar-text-margin" type="range" min="-15" max="40" step="1" value="0"/></div>
            <div class="col-md-1 col-xs-1 col-xs-11 value-text"><p><span id="bar-text-margin-display"></span></p></div>
          </div>
        </div>
      </div>
    </div>
    <div class="final">
    <a><button onclick="validation();" type="button" class="btn btn-default btn-primary display-text"> Save </button></a> 
    </div>

</div>

<script type="text/javascript">
      function validation(){
        Swal.fire({
        icon: 'success',
        title: 'Saved',
        text: 'Barcodes have been Generated Successfully........ Please endeavour to save the Assigned Codes !',
        // footer: '<a href="/casestudy_nafdac/manoj/dashboard/index.php">Go to your Dashboard</a>'
})
      }
</script>

 <script>
 		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 		  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

 		  ga('create', 'UA-80112650-1', 'auto');
 		  ga('send', 'pageview');

 		</script>

</body>
</html>

<script type="text/javascript">
  $(document).ready(function(){$(".rightAccount").click(function(){$(".account").fadeToggle();});});
</script>

