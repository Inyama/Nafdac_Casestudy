

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1"><title>
	NAPAMS | Administrator Dashboard
</title>
    <style>
        .radio-inline-nap tbody {
            display: inline-flex !important;
        }
        .radio-inline-nap td{
                min-width: 12em;
        }
        .btn-bg{
            font-size:1.4em !important;
            width: 40% !important;
            border-radius: 4px !important;
        }
        /*.nap-bg {
            font-size:2em !important;
        }*/
        .nap-bg select,input{
            font-size:1em !important;
        }
        textarea{
            font-size: 1em !important;
        }
    </style>


    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no" />

    <!-- Favicon -->
    


    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css" />

     <script src="../assets/vendor/jquery-ui/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="../assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js" type="text/javascript"></script>
    <script src="../assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>

    <!-- Vendor CSS -->
    
    <link rel="stylesheet" href="../App_MasterPages/assetdefault/vendor/font-awesome/css/fontawesome-all.min.css" /><link rel="stylesheet" href="../App_MasterPages/assetdefault/vendor/animate/animate.min.css" /><link rel="stylesheet" href="../App_MasterPages/assetdefault/vendor/simple-line-icons/css/simple-line-icons.min.css" /><link rel="stylesheet" href="../App_MasterPages/assetdefault/vendor/owl.carousel/assets/owl.carousel.min.css" /><link rel="stylesheet" href="../App_MasterPages/assetdefault/vendor/owl.carousel/assets/owl.theme.default.min.css" /><link rel="stylesheet" href="../App_MasterPages/assetdefault/vendor/magnific-popup/magnific-popup.min.css" /><link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.css" />
    <script src="../assets/vendor/bootstrap/js/bootstrap.js" type="text/javascript"></script>

    <!-- Theme CSS -->
    <link rel="stylesheet" href="../App_MasterPages/assetdefault/css/theme.css" /><link rel="stylesheet" href="../App_MasterPages/assetdefault/css/theme-elements.css" /><link rel="stylesheet" href="../App_MasterPages/assetdefault/css/theme-blog.css" /><link rel="stylesheet" href="../App_MasterPages/assetdefault/css/theme-shop.css" />

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="../App_MasterPages/assetdefault/vendor/rs-plugin/css/settings.css" /><link rel="stylesheet" href="../App_MasterPages/assetdefault/vendor/rs-plugin/css/layers.css" /><link rel="stylesheet" href="../App_MasterPages/assetdefault/vendor/rs-plugin/css/navigation.css" />

    <!-- Demo CSS -->


    <!-- Skin CSS -->
    <link rel="stylesheet" href="../App_MasterPages/assetdefault/css/skins/skin-corporate-hosting.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="../App_MasterPages/assetdefault/css/custom.css" />

    <!-- Head Libs -->
    <script src="assetdefault/vendor/modernizr/modernizr.min.js"></script>

    <script src="../assets/js/rightclick.js"></script>


</head>
<body data-spy="scroll" data-target="#navSecondary" data-offset="170">

    <form method="post" action="./ApplicantRegister.aspx" id="SignupForm" enctype="multipart/form-data">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwULLTE5NTE5NDExNzIPZBYCZg9kFgICAw8WAh4HZW5jdHlwZQUTbXVsdGlwYXJ0L2Zvcm0tZGF0YRYGAgMPDxYCHgRUZXh0BQ9Db21wYW55IFByb2ZpbGVkZAIFDw8WAh8BBQ5DcmVhdGUgUHJvZmlsZWRkAgcPZBYCAgUPZBYCZg9kFhACBQ8QDxYIHhRBcHBlbmREYXRhQm91bmRJdGVtc2ceDURhdGFUZXh0RmllbGQFDkFnZW5jeVR5cGVOYW1lHg5EYXRhVmFsdWVGaWVsZAUMQWdlbmN5VHlwZUlEHgtfIURhdGFCb3VuZGdkEBUCCkdvdmVybm1lbnQQTm9uLUdvdmVybm1lbnRhbBUCATEBMhQrAwJnZxYBAgFkAgkPEA8WCB8CZx8DBQ9Db21wYW55VHlwZU5hbWUfBAUNQ29tcGFueVR5cGVJRB8FZ2QQFQQMLS0gU2VsZWN0IC0tC1NtYWxsIFNjYWxlE01lZGl1bSAvTGFyZ2UgU2NhbGUQTWljcm8gRW50ZXJwcmlzZRUEATABMQEyATMUKwMEZ2dnZ2RkAg8PDxYCHg5WYWx1ZVRvQ29tcGFyZQUKMjAyMS8xMC8xMWRkAhUPDxYIHgJUVGUeAlRWBQFWHgJURQUBRR4CVFIFASpkZAIXDw8WAh8BBQoyMDIxLzEwLzExZGQCIQ8QDxYIHwJnHwMFBE5hbWUfBAUHU3RhdGVJRB8FZ2QQFScMLS0gU2VsZWN0IC0tBEFiaWEHQWRhbWF3YQlBa3dhIElib20HQW5hbWJyYQZCYXVjaGkHQmF5ZWxzYQVCZW51ZQVCb3JubwtDcm9zcyBSaXZlcgVEZWx0YQZFYm9ueWkDRWRvBUVraXRpBUVudWd1CUZDVCBBYnVqYQVHb21iZQNJbW8GSmlnYXdhBkthZHVuYQRLYW5vB0thdHNpbmEFS2ViYmkES29naQVLd2FyYQVMYWdvcwlOYXNzYXJhd2EFTmlnZXIET2d1bgRPbmRvBE9zdW4Fb3RoZXIDT3lvB1BsYXRlYXUGUml2ZXJzBlNva290bwZUYXJhYmEEWW9iZQdaYW1mYXJhFScBMAExATIBMwE0ATUBNgE3ATgBOQIxMAIxMQIxMgIxMwIxNAIxNQIxNgIxNwIxOAIxOQIyMAIyMQIyMgIyMwIyNAIyNQIyNgIyNwIyOAIyOQIzMAIzOAIzMQIzMgIzMwIzNAIzNQIzNgIzNxQrAydnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dkZAJfD2QWAgIDDw8WCB8HZR8IBQFWHwkFAUUfCgUBKmRkAmMPDxYIHwdlHwgFAVYfCQUBRR8KBQEqZGRkP5rtoUnAVJIrBAkrtBYAHNQTIkax7wq0pbAIxMe9FT0=" />

<script type='text/javascript' src='/PopCalendar2005/PopCalendar.js'></script><script type='text/javascript' src='/PopCalendar2005/PopCalendarFunctions.js'></script>
<script type='text/javascript'>var PopCal_enUS_DaysShort=['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];</script>
<script type='text/javascript'>var PopCal_enUS_MonthsShort=['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];var PopCal_enUS_MonthsFull=['January','February','March','April','May','June','July','August','September','October','November','December'];</script>
<span id='ContentPlaceHolder1_PopCalendar2_MessageError' dir='ltr' style='display:none;position:absolute;top:0px;left:0px;white-space:nowrap;z-index:+1000;color:red;' controltovalidate='ContentPlaceHolder1_txtDateInc' display='Dynamic' evaluationfunction='__PopCalCustomValidatorEvaluateIsValid' clientvalidationfunction='__PopCalValidateOnSubmit'></span>
<span id='ContentPlaceHolder1_PopCalendar1_MessageError' dir='ltr' style='display:none;position:absolute;top:0px;left:0px;white-space:nowrap;z-index:+1000;color:red;' controltovalidate='ContentPlaceHolder1_txtPharmacistLicenseExpiry' display='Dynamic' evaluationfunction='__PopCalCustomValidatorEvaluateIsValid' clientvalidationfunction='__PopCalValidateOnSubmit'></span>
<span id='ContentPlaceHolder1_PopCalendar3_MessageError' dir='ltr' style='display:none;position:absolute;top:0px;left:0px;white-space:nowrap;z-index:+1000;color:red;' controltovalidate='ContentPlaceHolder1_txtPremiseLicenseExpiry' display='Dynamic' evaluationfunction='__PopCalCustomValidatorEvaluateIsValid' clientvalidationfunction='__PopCalValidateOnSubmit'></span>
<script src="/ScriptResource.axd?d=hX3x7wMYTOB7VuHnzxauWn-bpfLJ3192mnczyf6LWRxLO-YYLwolBVYDoBJHkqPRjcUsdP1tTDwEJPWxAChmGHjQhXpzkzIkctB9_uteRSgCm2DqlpylE_Jq4eCtGv7yWXSXBQd-mU7uRfJAE-TJd5F2sBmaY3bz-q-l2584z0w1&amp;t=363be08" type="text/javascript"></script>
<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="1716FA53" />
<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdAEI19EB+v+Y3TL/nmJt7qPU+3o1Mi35JeXbDJimCuyMdEYQetieoS6ysz+bOPHJG7KUzkVE5BwT2VEE4PZSv7uzvayTYnBEJCXW7/A5zaLLaXUh4RTZuh4w0JDKtheXiGK8scnUOmp/IwTMjlGOONXqW52fCWZg77M72igN58cCcxKKoCOk9jaEKSIEoUiuQ7z/Xn5vtGA4qoOm0FpE33IKBWUY2vshUizn/8RDONTTz+3oeLyo3Aqo7u4uKausamwo22Eh97qRQDJcKBfkYt4NypStN+AFm27krVLT00XChibczWVcLH+zA9134kpesuBq0sfRvdljnKQ7p1FLqvp6uT73Ukdyja8DoGbK/yuBhvezFxH5tSitOsmd8QyYIYhcNEep0cPDtDkw3EXyqhDaI9lrTRpG82FNbvIb4jIZ0KqFUbjqazbNBHoWvgkJlt4U0YW0VQHValmLs1HtgC4iB1BUdYjCobz5An2LvqXelKF4tuUYZY9PwcHVQIv/o0bSucH2r8IZB0Wcvib8qeLZ+H6pznfs+/Z2YeSlhvPG1szQCobON4wn1hcFcSSy0F5+A4URPFyrLEyLvrYh2uWRJLWytp/Jc1prl5H6qtNaTFMv41q1y+Nin5Aq7iXOMD8zWBBlJIKL9WIivSWEXy4mauAU4ozEHdflvjYVDLWHLRPPpXfHeKnQecTXPIE4mHCZudnqkjSvj5A2m++5pqwfBNgWTt8tZC40ovcRy3+hW7dh4LONwmDz3u/qwHyG2J+ac4NTI5soNdaPMTSK6vVudnloGtSDeWaffds3Q8zBuCt97Bunh8cPoyAO4dMOXFk+1KayhpIYAuGZck7BrPJRl1oam+ZU+oUskJI4vOHy/MboEGHAOdKqwv3z27S/mDtnRNQ1opAm1BD1ahp8zKxPzEmhHrAOnNy6M4FBSF8Za3AvH7YIuXJ042xX6FSF9uzV6yco4+ay52LaYB+yfXfSOvXhopsZtzIXOUa0W08FN5A54SmjH2JAaqyyoRxPyJsTpqDJZ8pgkpn404E9BPxnAhIN76RbbXHcbyJbxVshsAkprTCRbuCFGB3Fmd82YzLZ2c/TgwvqjPu1qh0AfSN6laKpJdS6udF9HDItnI9V1Zxwm6s2cC9PJsllxsin/DiGXd2w03C9og5wz07zmmZ2vlIa2FBcsjQf5x522fkgJUlf1tIAwDpA/p3iQAE0sdDt4HiMlkzEeP52zllNki3MozxJJl+hsKqZqkdGlHxV5jL0sExyjMOSiDH0RvQBAKiib/lQaf3gaKsku6UaxWBMSeOOzCLKGb6Doqh3ChsL98y0N0vDe+PH35UKOc1qei3ob7cD2VY3kqOKfyIcooOy1Kras8FKEJxI7wVXBxYKO4cuo1RFu8xwss4OiPHNjbtl2j7UC3pqjow7S0F+AXkJfHf0+4sZ9q+OXipj7IBAx0Q==" />
        <div class="body">
            
            

            <header id="header" class="header-narrow" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 57, 'stickySetTop': '-55px', 'stickyChangeLogo': false}">
				<div class="header-body">
					
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="https://www.napams.org/">
											<img alt="Porto" width="300" height="80" src="assets/images/originallogo.jpg">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav">
										<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown">
														<a class="" href="https://www.napams.org/">
															Home
														</a>
														
													</li>
													<li class="dropdown">
														<a class="" href="#">
															About NAPAMS
														</a>
														
													</li>
													<li class="dropdown">
														<a class="" href="https://www.napams.org/#search-domain">
															Verify Products
														</a>
													
														
													</li>
													
                                                    <li class="dropdown">
														<a class="" href="https://www.napams.org/#plans">
															Register
														</a>
														
													</li>
													<li class="dropdown">
														<a class="" href="#">
															Contact Us
														</a>
														
													</li>
                                                    
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

            <section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col">
								<ul class="breadcrumb">
									<li><a href="https://www.napams.org/">Home</a></li>
									<li class="active"><span id="lblPageTitle">Company Profile</span> |   <span id="lblPageDescription">Create Profile</span>
									</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<h1>Register as a Client</h1>
							</div>
						</div>
					</div>
				</section>

            <div role="main" class="main">
                
    <button id="btnModal" type="button" class="btn btn-primary" data-toggle="modal" data-target="#sampleModal" style="display: none">
        Launch Modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="sampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        data-backdrop="static" data-keyboard="false" aria-hidden="true">
        <div class="modal-dialog" role="document" style="margin-top: 80px; padding: 20px 0px">
            <div class="modal-content">
                <div class="modal-header text-center" style="background-color: forestgreen">
                    
                    <span id="ContentPlaceHolder1_Label1" class="label label-forestgreen"><font size="6"> NAFDAC Account Created </font></span>
                    <button type="button" class="close label label-default" style="opacity: 1.0" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="padding: 5px 15px">
                    <p>Account Created Successfully. Please proceed to your email to verify your account.</p>
                    <div class="form-group nap-bg center-70">
                        <a id="ContentPlaceHolder1_btnRedirectToLogin" class="btn btn-success btn-lg btn-block" href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$btnRedirectToLogin&#39;,&#39;&#39;)">OK</a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div id="ContentPlaceHolder1_UpdatePanel1">
	

            <div class="container">
                <div class="row">
                    
                    <div class="panel panel-success">
                        <div class="panel-heading">Company Details</div>
                        <div class="panel-body">
                            <div class="col-md-6">
                                <div class="form-group nap-bg">
                                    <label>
                                        Company Name:
                            &nbsp;
                                    </label>
                                    <input name="ctl00$ContentPlaceHolder1$txtApplicantName" type="text" id="ContentPlaceHolder1_txtApplicantName" class="form-control" />
                                </div>
                                <div class="form-group nap-bg">
                                    <label>
                                        Type of Agency:
                                    </label>
                                    <span id="ContentPlaceHolder1_rblAgency" class="radio-inline-nap"><input id="ContentPlaceHolder1_rblAgency_0" type="radio" name="ctl00$ContentPlaceHolder1$rblAgency" value="1" onclick="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$ContentPlaceHolder1$rblAgency$0\&#39;,\&#39;\&#39;)&#39;, 0)" /><label for="ContentPlaceHolder1_rblAgency_0">Government</label><br /><input id="ContentPlaceHolder1_rblAgency_1" type="radio" name="ctl00$ContentPlaceHolder1$rblAgency" value="2" checked="checked" /><label for="ContentPlaceHolder1_rblAgency_1">Non-Governmental</label></span>
                                </div>
                                <div class="form-group nap-bg">
                                    <label>
                                        Company Type:
                            &nbsp;
                                    </label>
                                    <select name="ctl00$ContentPlaceHolder1$drpCompanyType" id="ContentPlaceHolder1_drpCompanyType" class="form-control">
		<option value="0">-- Select --</option>
		<option value="1">Small Scale</option>
		<option value="2">Medium /Large Scale</option>
		<option value="3">Micro Enterprise</option>

	</select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div id="ContentPlaceHolder1_divTIN" class="form-group nap-bg">
                                    <label>
                                        TIN:
                                &nbsp;
                                    </label>
                                    <input name="ctl00$ContentPlaceHolder1$txtTIN" type="text" id="ContentPlaceHolder1_txtTIN" class="form-control" />
                                </div>
                                <div id="ContentPlaceHolder1_divRCNo" class="form-group nap-bg">
                                    <label>
                                        RC Number:
                                &nbsp;
                                    </label>
                                    <input name="ctl00$ContentPlaceHolder1$txtRcNo" type="text" id="ContentPlaceHolder1_txtRcNo" class="form-control" />
                                </div>
                                <div class="form-group nap-bg">
                                    <label>
                                        Date of Incorporation:
                            &nbsp;
                                        &nbsp;
                                    </label>
                                    <input name="ctl00$ContentPlaceHolder1$txtDateInc" type="text" id="ContentPlaceHolder1_txtDateInc" class="form-control" Calendar="ContentPlaceHolder1_PopCalendar2" Format="yyyy/mm/dd" dir="ltr" autocomplete="off" onfocus="__PopCalSetFocus(this, event);" />
                                    <span id='ContentPlaceHolder1_PopCalendar2_Control' onclick='__PopCalShowCalendar("ContentPlaceHolder1_txtDateInc",this)' style='cursor:pointer;'><img src='/PopCalendar2005/Calendar.gif' border='0' align='absmiddle' /></span><link type='text/css' rel='stylesheet' href='/PopCalendar2005/CSS/Classic.css' /><script type='text/javascript'>var ContentPlaceHolder1_PopCalendar2=PopCalendar.newCalendar('ContentPlaceHolder1_PopCalendar2');ContentPlaceHolder1_PopCalendar2.imgDir='/PopCalendar2005/CSS/Classic_Images/';ContentPlaceHolder1_PopCalendar2.CssClass='ClassicStyle';ContentPlaceHolder1_PopCalendar2.startAt=0;ContentPlaceHolder1_PopCalendar2.todayString='Monday, October 11, 2021';ContentPlaceHolder1_PopCalendar2.selectDateMessage='[Date]';ContentPlaceHolder1_PopCalendar2.centuryLimit=40;ContentPlaceHolder1_PopCalendar2.forcedToday('2021-10-11','yyyy-mm-dd');ContentPlaceHolder1_PopCalendar2.dayName=PopCal_enUS_DaysShort;ContentPlaceHolder1_PopCalendar2.monthName=PopCal_enUS_MonthsFull;ContentPlaceHolder1_PopCalendar2.monthNameShort=PopCal_enUS_MonthsShort;ContentPlaceHolder1_PopCalendar2.initCalendar();__PopCalAddCalendarRange('ContentPlaceHolder1_txtDateInc','1900-01-01',0,'','2099-12-31',0,'');</script><link type='text/css' rel='stylesheet' href='/PopCalendar2005/CSS/Classic.css' />
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="panel panel-success">
                        <div class="panel-heading">Company Contact Information</div>
                        <div class="panel-body">
                            <div class="col-md-6">
                                
                                <div class="form-group nap-bg">
                                    <label>
                                        Address:
                                    &nbsp;
                                    </label>
                                    <textarea name="ctl00$ContentPlaceHolder1$txtAddress" rows="2" cols="20" id="ContentPlaceHolder1_txtAddress" class="form-control">
</textarea>
                                </div>
                                <div class="form-group nap-bg">
                                    <label>
                                        Mailing Address:
                                    </label>
                                    <textarea name="ctl00$ContentPlaceHolder1$txtMailingAddress" rows="2" cols="20" id="ContentPlaceHolder1_txtMailingAddress" class="form-control">
</textarea>
                                </div>
                                <div class="form-group nap-bg">
                                    <label>
                                        State:
                                    &nbsp;
                                    </label>
                                    <select name="ctl00$ContentPlaceHolder1$drpState" id="ContentPlaceHolder1_drpState" class="form-control">
		<option value="0">-- Select --</option>
		<option value="1">Abia</option>
		<option value="2">Adamawa</option>
		<option value="3">Akwa Ibom</option>
		<option value="4">Anambra</option>
		<option value="5">Bauchi</option>
		<option value="6">Bayelsa</option>
		<option value="7">Benue</option>
		<option value="8">Borno</option>
		<option value="9">Cross River</option>
		<option value="10">Delta</option>
		<option value="11">Ebonyi</option>
		<option value="12">Edo</option>
		<option value="13">Ekiti</option>
		<option value="14">Enugu</option>
		<option value="15">FCT Abuja</option>
		<option value="16">Gombe</option>
		<option value="17">Imo</option>
		<option value="18">Jigawa</option>
		<option value="19">Kaduna</option>
		<option value="20">Kano</option>
		<option value="21">Katsina</option>
		<option value="22">Kebbi</option>
		<option value="23">Kogi</option>
		<option value="24">Kwara</option>
		<option value="25">Lagos</option>
		<option value="26">Nassarawa</option>
		<option value="27">Niger</option>
		<option value="28">Ogun</option>
		<option value="29">Ondo</option>
		<option value="30">Osun</option>
		<option value="38">other</option>
		<option value="31">Oyo</option>
		<option value="32">Plateau</option>
		<option value="33">Rivers</option>
		<option value="34">Sokoto</option>
		<option value="35">Taraba</option>
		<option value="36">Yobe</option>
		<option value="37">Zamfara</option>

	</select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group nap-bg">
                                    <label>
                                        Company Phone:
                                    &nbsp;
                                        &nbsp;

                                    </label>
                                    <input name="ctl00$ContentPlaceHolder1$txtMobile" type="text" id="ContentPlaceHolder1_txtMobile" class="form-control" />
                                </div>
                                <div class="form-group nap-bg">
                                    <label>
                                        Contact Phone:
                                    &nbsp;
                                    </label>
                                    <input name="ctl00$ContentPlaceHolder1$txtPhone" type="text" id="ContentPlaceHolder1_txtPhone" class="form-control" />
                                </div>
                                <div class="form-group nap-bg">
                                    <label>
                                        Company Email:
                                    &nbsp;
                                        &nbsp;
                                    </label>
                                    <input name="ctl00$ContentPlaceHolder1$txtEmail" type="text" id="ContentPlaceHolder1_txtEmail" class="form-control" />
                                </div>
                                <div class="form-group nap-bg">
                                    <label>
                                        Contact Email:                            
                                    &nbsp;
                                    </label>
                                    <input name="ctl00$ContentPlaceHolder1$txtAltEmail" type="text" id="ContentPlaceHolder1_txtAltEmail" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="panel panel-success">
                        <div class="panel-heading">Applicant Information</div>
                        <div class="panel-body">
                            <div class="col-md-6">
                                <div class="form-group nap-bg">
                                    <label>
                                        Representative First Name:
                                    &nbsp;
                                    </label>
                                    <input name="ctl00$ContentPlaceHolder1$txtFirstName" type="text" id="ContentPlaceHolder1_txtFirstName" class="form-control" />
                                </div>
                                <div class="form-group nap-bg">
                                    <label>
                                        Representative Middle Name:
                                    &nbsp;
                                    </label>
                                    <input name="ctl00$ContentPlaceHolder1$txtMiddleName" type="text" id="ContentPlaceHolder1_txtMiddleName" class="form-control" />
                                </div>
                                <div class="form-group nap-bg">
                                    <label>
                                        Representative Last Name:
                                    &nbsp;
                                    </label>
                                    <input name="ctl00$ContentPlaceHolder1$txtLastName" type="text" id="ContentPlaceHolder1_txtLastName" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group nap-bg">
                                    <label>
                                        Password:
                                    &nbsp;
                                    </label>
                                    <input name="ctl00$ContentPlaceHolder1$txtPassword" type="password" id="ContentPlaceHolder1_txtPassword" class="form-control" />
                                </div>
                                <div class="form-group nap-bg">
                                    <label>
                                        Confirmation Password:
                                    &nbsp;
                                    </label>
                                    <input name="ctl00$ContentPlaceHolder1$txtConfPassword" type="password" id="ContentPlaceHolder1_txtConfPassword" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="panel panel-success">
                        <div class="panel-heading">Applicant Documentation</div>
                        <div class="panel-body">
                            <div class="col-md-6">
                                <div class="form-group nap-bg">
                                    <label>
                                        <a id="ContentPlaceHolder1_hlnkCertificateOfIncorporation" target="_blank">Certificate Of Incorporation: [<b style="color: red">PDF</b>]</a>
                                        &nbsp;
                                    </label>
                                    <input type="file" name="ctl00$ContentPlaceHolder1$imgCertificateOfIncorporation" id="ContentPlaceHolder1_imgCertificateOfIncorporation" class="form-control" />
                                    <span>
                                        </span>
                                </div>
                                <div class="form-group nap-bg">
                                    <label>
                                        <a id="ContentPlaceHolder1_hlnkPharmacistsLicense" target="_blank">Pharmacist's License to Practise or Receipt of Payment for Renewal [Drug Only]: [<b style="color: red">PDF</b>]</a>
                                        
                                    </label>
                                    <input type="file" name="ctl00$ContentPlaceHolder1$imgPharmacistsLicense" id="ContentPlaceHolder1_imgPharmacistsLicense" class="form-control" />
                                    <span>
                                        </span>
                                </div>
                                <div class="form-group nap-bg">
                                    <label>
                                        <a id="ContentPlaceHolder1_hlnkCurrentPremisesLicense" target="_blank">Current Premises License [Drug Only]: [<b style="color: red">PDF</b>]</a>
                                        
                                    </label>
                                    <input type="file" name="ctl00$ContentPlaceHolder1$imgCurrentPremisesLicense" id="ContentPlaceHolder1_imgCurrentPremisesLicense" class="form-control" />
                                    <span>
                                        </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group nap-bg">
                                    <label>
                                        Pharmacist's License to Practise or Receipt of Payment for Renewal Expiry Date:
                                    </label>
                                    <input name="ctl00$ContentPlaceHolder1$txtPharmacistLicenseExpiry" type="text" id="ContentPlaceHolder1_txtPharmacistLicenseExpiry" class="form-control" Calendar="ContentPlaceHolder1_PopCalendar1" Format="yyyy/mm/dd" dir="ltr" autocomplete="off" onfocus="__PopCalSetFocus(this, event);" />
                                    <span id='ContentPlaceHolder1_PopCalendar1_Control' onclick='__PopCalShowCalendar("ContentPlaceHolder1_txtPharmacistLicenseExpiry",this)' style='cursor:pointer;'><img src='/PopCalendar2005/Calendar.gif' border='0' align='absmiddle' /></span><link type='text/css' rel='stylesheet' href='/PopCalendar2005/CSS/Classic.css' /><script type='text/javascript'>var ContentPlaceHolder1_PopCalendar1=PopCalendar.newCalendar('ContentPlaceHolder1_PopCalendar1');ContentPlaceHolder1_PopCalendar1.imgDir='/PopCalendar2005/CSS/Classic_Images/';ContentPlaceHolder1_PopCalendar1.CssClass='ClassicStyle';ContentPlaceHolder1_PopCalendar1.startAt=0;ContentPlaceHolder1_PopCalendar1.todayString='Monday, October 11, 2021';ContentPlaceHolder1_PopCalendar1.selectDateMessage='[Date]';ContentPlaceHolder1_PopCalendar1.centuryLimit=40;ContentPlaceHolder1_PopCalendar1.forcedToday('2021-10-11','yyyy-mm-dd');ContentPlaceHolder1_PopCalendar1.dayName=PopCal_enUS_DaysShort;ContentPlaceHolder1_PopCalendar1.monthName=PopCal_enUS_MonthsFull;ContentPlaceHolder1_PopCalendar1.monthNameShort=PopCal_enUS_MonthsShort;ContentPlaceHolder1_PopCalendar1.initCalendar();__PopCalAddCalendarRange('ContentPlaceHolder1_txtPharmacistLicenseExpiry','1900-01-01',0,'','2099-12-31',0,'');</script><link type='text/css' rel='stylesheet' href='/PopCalendar2005/CSS/Classic.css' />
                                </div>
                                <div class="form-group nap-bg">
                                    <label>
                                        Current Premises License Expiry Date:
                                    </label>
                                    <input name="ctl00$ContentPlaceHolder1$txtPremiseLicenseExpiry" type="text" id="ContentPlaceHolder1_txtPremiseLicenseExpiry" class="form-control" Calendar="ContentPlaceHolder1_PopCalendar3" Format="yyyy/mm/dd" dir="ltr" autocomplete="off" onfocus="__PopCalSetFocus(this, event);" />
                                    <span id='ContentPlaceHolder1_PopCalendar3_Control' onclick='__PopCalShowCalendar("ContentPlaceHolder1_txtPremiseLicenseExpiry",this)' style='cursor:pointer;'><img src='/PopCalendar2005/Calendar.gif' border='0' align='absmiddle' /></span><link type='text/css' rel='stylesheet' href='/PopCalendar2005/CSS/Classic.css' /><script type='text/javascript'>var ContentPlaceHolder1_PopCalendar3=PopCalendar.newCalendar('ContentPlaceHolder1_PopCalendar3');ContentPlaceHolder1_PopCalendar3.imgDir='/PopCalendar2005/CSS/Classic_Images/';ContentPlaceHolder1_PopCalendar3.CssClass='ClassicStyle';ContentPlaceHolder1_PopCalendar3.startAt=0;ContentPlaceHolder1_PopCalendar3.todayString='Monday, October 11, 2021';ContentPlaceHolder1_PopCalendar3.selectDateMessage='[Date]';ContentPlaceHolder1_PopCalendar3.centuryLimit=40;ContentPlaceHolder1_PopCalendar3.forcedToday('2021-10-11','yyyy-mm-dd');ContentPlaceHolder1_PopCalendar3.dayName=PopCal_enUS_DaysShort;ContentPlaceHolder1_PopCalendar3.monthName=PopCal_enUS_MonthsFull;ContentPlaceHolder1_PopCalendar3.monthNameShort=PopCal_enUS_MonthsShort;ContentPlaceHolder1_PopCalendar3.initCalendar();__PopCalAddCalendarRange('ContentPlaceHolder1_txtPremiseLicenseExpiry','1900-01-01',0,'','2099-12-31',0,'');</script><link type='text/css' rel='stylesheet' href='/PopCalendar2005/CSS/Classic.css' />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12" align="center" style="margin-top: 20px;">
                        <div class="form-group nap-bg">
                            <span id="ContentPlaceHolder1_lblInfo"></span>
                            <br />
                            <a id="ContentPlaceHolder1_btnSave" class="btn btn-success btn-lg btn-block btn-bg" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceHolder1$btnSave&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))">Save</a>
                            &nbsp;
                            
                            <div id="ContentPlaceHolder1_UpdateProgress1" style="display:none;">
		
                                    <img src="~/App_Images/Update.gif" alt="" />
                                    <span id="ContentPlaceHolder1_Labelsave" class="Label">Please wait...</span>
                                
	</div>
                        </div>
                    </div>
                </div>
            </div>





        
</div>

    <script type="text/javascript">
        function showPopup(which) {
            //console.warn("modal here... "+which);
            if (which === "Others") {
                // console.warn("modal here 1 : "+which);
                $("#btnModal").click();
            }
            else if (which === "B&V") {
                // console.warn("modal here 2:   "+which);
                $("#btnModalSuccess").click();
            }
        }
    </script>


            </div>

            <footer id="footer" class="mt-0">
				

				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							
							<div class="col-lg-7">
								<p>© Copyright 2021. All Rights Reserved.</p>
							</div>
							<div class="col-lg-4">
								<nav id="sub-menu">
									<ul>
										<li><a href="#">FAQ's</a></li>
										<li><a href="#">Privacy Statement</a></li>
										<li><a href="#">Contact Us</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</footer>






            <!-- Vendor -->
            <script src="assetdefault/vendor/jquery/jquery.min.js"></script>
            <script src="assetdefault/vendor/jquery.appear/jquery.appear.min.js"></script>
            <script src="assetdefault/vendor/jquery.easing/jquery.easing.min.js"></script>
            <script src="assetdefault/vendor/jquery-cookie/jquery-cookie.min.js"></script>
            <script src="assetdefault/vendor/popper/umd/popper.min.js"></script>
            <script src="assetdefault/vendor/bootstrap/js/bootstrap.min.js"></script>
            <script src="assetdefault/vendor/common/common.min.js"></script>
            <script src="assetdefault/vendor/jquery.validation/jquery.validation.min.js"></script>
            <script src="assetdefault/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
            <script src="assetdefault/vendor/jquery.gmap/jquery.gmap.min.js"></script>
            <script src="assetdefault/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
            <script src="assetdefault/vendor/isotope/jquery.isotope.min.js"></script>
            <script src="assetdefault/vendor/owl.carousel/owl.carousel.min.js"></script>
            <script src="assetdefault/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
            <script src="assetdefault/vendor/vide/vide.min.js"></script>

            <!-- Theme Base, Components and Settings -->
            <script src="assetdefault/js/theme.js"></script>

            <!-- Current Page Vendor and Views -->
            <script src="assetdefault/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
            <script src="assetdefault/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

            <!-- Theme Custom -->
            <script src="assetdefault/js/custom.js"></script>

            <!-- Theme Initialization Files -->
            <script src="assetdefault/js/theme.init.js"></script>

            <!-- Demo -->
            <script>
                (function ($) {

                    'use strict';

                    // Domain Search Form
                    $('#domainSearchForm').validate({
                        errorPlacement: function (error, element) {
                            error.appendTo(element.parent().parent());
                        }
                    });

                    // Domain Dropdown
                    $('#tldBtn').php($('input[name=tld]').val() + ' <span class="caret"></span>')

                    $('#tld a').on('click', function (e) {
                        e.preventDefault();
                        $('input[name=tld]').val($(this).text());
                        $('#tldBtn').php($(this).text() + ' <span class="caret"></span>')
                    });

                }).apply(this, [jQuery]);
            </script>

            <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->



        </div>

    

<script type='text/javascript'><!--
if((typeof(PopCalendar)=='undefined')||(PopCalendar.majorVersion==null)||(PopCalendar.minorVersion==null))
    alert('Unable to find script library "/PopCalendar2005/PopCalendar.js".\n\nTry placing this file manually');
else if((PopCalendar.majorVersion<8)||((PopCalendar.majorVersion=8)&&(PopCalendar.minorVersion<0.9)))
    alert('This page uses an incorrect version of PopCalendar.js.\n\nThe page expects version 8.0.9 or greater. The script library is ' + PopCalendar.majorVersion + '.' + PopCalendar.minorVersion + '.');
else if((typeof(PopCalendarFunctions)=='undefined')||(PopCalendarFunctions.majorVersion==null)||(PopCalendarFunctions.minorVersion==null))
    alert('Unable to find script library "/PopCalendar2005/PopCalendarFunctions.js".\n\nTry placing this file manually');
else if((PopCalendarFunctions.majorVersion<8)||((PopCalendarFunctions.majorVersion=8)&&(PopCalendarFunctions.minorVersion<1.2)))
    alert('This page uses an incorrect version of PopCalendarFunctions.js.\n\nThe page expects version 8.1.2 or greater. The script library is ' + PopCalendarFunctions.majorVersion + '.' + PopCalendarFunctions.minorVersion + '.');
// --></script></form>

</body>
</html>
