<html>

<head>
    <meta http-equiv="Content-Language" content="en-us">
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <title> <?= company ?> RESULTS</title>
    <!-- <link rel="stylesheet" href="assets/yatara/css/style.css" type="text/css"> -->
    
    <link rel="stylesheet" href="assets/yatara/css/main.css" type="text/css">

</head>

<body bgcolor="#FFCCFF" topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0">
    <div style=" display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; ">

        <img style=" width: 80%; height:auto; " src="/header.jpg" border="5" align=middle>
        <table border="0" width="100%" cellspacing="0" cellpadding="0">
            <tr>
                <td width="7%" align=center></td>
                <td style="display: none;" class="tdtitle" width="14%" valign="top">&nbsp;<?= company ?></td>
                <td id="agentdet" class="tdtitle"></td>
                <td class="tdtitleright" valign="top">
                    <a href="/?r=download"><input type="button" class="buttonlogout" value="Download"></a>
                </td>
            </tr>
        </table>
    </div>
    <form method="POST" action="/" name="taxform">
        <div align="center">
            <table border="0" cellpadding="2" id="table1" cellspacing="0" width="100%">
                <tr>
                    <td align="center">
                        <table border="0" width="100%" id="table2">
                            <tr>
                                <td align="right" width="50%">Select Date :<input type="date" id="indate" name="indate" autocomplete=off value="<?= $date ?>" min="<?= date('Y-m-d', (strtotime('-7 day', strtotime(date("Y-m-d"))))) ?>" max="<?= date("Y-m-d") ?>"></td>
                                <td colspan=" 3" align="left"><button type="submit" id="btnok" class="buttongreen">Get Boll</button>
                            </tr>
                        </table>

                        <table border="0" width="100%" id="table1" cellspacing="1" cellpadding="2">
                            <tr>
                                <td align="center" class="tdseries"><?= date('l', strtotime($date)) . " " . date("F, d, Y", strtotime($date)) ?>&nbsp;Boll</td>
                            </tr>
                            <?php
                            $jsonResponse = json_decode($response, true);
                            foreach ($jsonResponse as $k => $v) {
                            ?>
                                <tr>
                                    <td>
                                        <table border=0 bordercolor="#000000" cellspacing=4 cellpadding=1 width="100%">


                                            <tr>
                                                <td colspan=10 class="tdtitle"><?= date("h:i A", strtotime($v["etime"])) ?></td>
                                            </tr>

                                            <?php
                                            $i = 0;
                                            foreach ($v["data"] as $s => $sr) {
                                            ?>
                                                <tr>
                                                    <td>
                                                        <table width="100%">
                                                            <tr>
                                                                <?php
                                                                foreach ($sr as $key => $val) {
                                                                ?>
                                                                    <td class="tdrs<?= $i ?>"><span class="tdr<?= $i ?>" id="res<?= $i ?>"><?= $val ?></span></td>
                                                                <?php
                                                                    $i++;
                                                                }
                                                                ?>

                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            <?php
                                                $i++;
                                            }
                                            ?>



                                        </table>
                                    </td>

                                </tr>
                            <?php
                            }
                            ?>



                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </form>

    <style>
        .tdtitle {
            font-size: 24px !important;
        }

        body {
            background: black;
        }

        table tr td {
            background: black;
        }
    </style>

</body>

</html>