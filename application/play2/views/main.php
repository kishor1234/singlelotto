<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Language" content="en-us">
    <title><?= company ?> - Play and Win</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="assets/plugins/jquery/jquery.min.js" type="text/javascript"></script>

    <link rel="stylesheet" href="assets/yatara/css/main.css" type="text/css">
    <style>
        .center {
            margin: 0px 20px;
            width: 80%;

        }

        .center2 {
            margin: 0px 20px;
            width: 100%;
            display: flex;
            flex-direction: column;
            flex-wrap: nowrap;
            align-content: center;
            justify-content: center;
            align-items: center;

        }

        .img {
            width: 100%;
            height: auto;
        }
    </style>
</head>

<body class="body" onload="onload();">
    <div align="center">

        <table border="0" width="50%">
            <tr>
                <td colspan="3" align="center" class="headgame">
                    <br>

                    <img border="0" class="img" src="/header.jpg" border=3><br>
                    &nbsp;
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center" id="msg" class="headgame"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td class="tdoransge">
                    <!-- <?= company ?></td> -->
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td align="center">
                    <table border="0" cellpadding="10" cellspacing="0">
                        <tr>
                            <td align="right" class="headgame">Terminal User Id :</td>
                            <td><input type="text" id="uname" autofocus name="uname" size="20" tabindex="1" value="<?= $_SESSION["uname"] ?>" class="tb7"></td>
                        </tr>
                        <tr>
                            <td align="right" class="headgame">Terminal Password :</td>
                            <td><input type="password" id="passwd" name="passwd" size="20" tabindex="2" class="tb7"></td>
                        </tr>
                        <tr>
                            <input type="hidden" value="web" id="device">
                            <td><button class="buttonred btn-danger" onclick='loadlogin("<?= api_url ?>?r=gamelogin");' tabindex="3">Login</button></td>
                            <td><button class="buttonred btn-primary" style="width: 100%;" onclick='quit();' tabindex="4">Quit (Ctrl+Q)</button></td>
                        </tr>
                    </table>
                </td>
                <td>&nbsp;</td>

            </tr>
            <tr>
                <td colspan="3" align="center" class="headgame1"><br>
                    Only For Amusement</td>
            </tr>
            <tr>
                <td colspan="3">
                    <br>
                    <div class="center2">
                        <img border="0" class="img" src="/footer.jpg" border=3><br>
                    </div>

                </td>
            </tr>
        </table>

        <table style="width:100%; bottom: 0;left: 0;right: 0; margin-bottom: 50px; ">

            <tr>
                <td class="center-btn"><button class="buttonred center btn-primary" onclick='quit();' tabindex="5">Disconnect</button></td>

                <td class="center-btn"><button class="buttonred center btn-primary" onclick='quit();' tabindex="6">Shutdown</button></td>

                <td class="center-btn"><button class="buttonred center btn-primary" onclick='quit();' tabindex="7">Restart</button></td>

            </tr>
        </table>



    </div>

    <script src="assets/yatara/login.js" type="text/javascript"></script>
    <script src="assets/yatara/loginrender.js" type="text/javascript"></script>
    <style>
        .btn-danger {
            background-color: #ed3237;
            color: #FFF;
            border: #FFF;
        }

        .btn-danger:hover {
            background-color: #ed3237;
            color: #FFF;
            border: #FFF;
        }

        .btn-primary {
            background-color: #0098da;
            color: #FFF;
            border: #FFF;
        }

        .btn-primary:hover {
            background-color: #0098da;
            color: #FFF;
            border: #FFF;
        }

        button.buttonred.center.btn-primary {
            width: 80%;
        }
    </style>
</body>

</html>