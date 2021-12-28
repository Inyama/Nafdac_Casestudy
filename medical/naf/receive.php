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
        <div class="title"> <i class="fa fa-angle-left back-icon"></i> Receive</div>
    </section>
    <section class="receive-page">

        <section class="scan-container">
            <div class="section-title">Scan to receive</div>
            <div class="qrcode-container">
                <div id="qrcode"></div>
            </div>
            <div class="nairon-address-title">YOUR NAIRON ADDRESS <i class="fa fa-copy"></i></div>
            <div class="nairon-address">FAJHFJ7847834843JHJHFJHFJLK23HSDSHFSD</div>
            <div class="form-container">
                <form action="">
                    <div class="field-container">
                        <fieldset class="currency-fieldset" visible="true">
                            <legend>Currency</legend>
                            <select name="" id="">
                                <option value="">NGN</option>
                            </select>
                        </fieldset>
                        <fieldset class="amount-fieldset active" visible="true">
                            <legend class="active">Amount</legend>
                            <input type="text" placeholder="0.00" id="amount">
                        </fieldset>
                    </div>
                    <div class="btn-container">
                        <button class="submit-btn">Set Amount</button>
                    </div>
                </form>
            </div>
        </section>
    </section>



    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/account.js"></script>
    <script src="js/utilities.js"></script>
    <script src="js/qrcode.min.js"></script>




    <script>
        var wallet_address = "SDHASKJHD37473647GHDGH232387";
        var amount = 0;
        var qrcode = new QRCode(document.getElementById("qrcode"), {
            text: wallet_address + amount,
            width: 150,
            height: 150,
            colorDark: "#12326b", //"#000000",
            colorLight: "#ffffff",
            padding: 1,
            correctLevel: QRCode.CorrectLevel.H
        });

        // qrcode.clear(); // clear the code.
        // qrcode.makeCode("HI THERE MY NAME IS EMMANUEL"); // make another code.



        $("#amount").keyup(function() {
            var amount = $(this).val();
            if (amount == "") {
                amount = 0;
            }
            qrcode.clear(); // clear the code.
            qrcode.makeCode(wallet_address + amount); // make another code.
        })


        $("#amount").change(function() {
            var amount = $(this).val();
            console.log(wallet_address + amount);
        })



        // setTimeout(function() {
        //     var img = document.getElementsByTagName("img")[0];

        //     document.getElementById("download-btn").setAttribute("href", img.getAttribute("src"))


        // }, 1000)
    </script>

</body>

</html>