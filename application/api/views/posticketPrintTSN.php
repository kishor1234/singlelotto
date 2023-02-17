<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> -->
    <style>
        * {
            font-weight: 600;
            padding: 1px 1px 2px 0px !important;
            margin: 0px !important;
            max-width: 170px;

        }

        table {
            border: none !important;
            /* border-spacing: unset; */
            border-spacing: 0px 1px !important;
            text-align: left !important;

        }

        thead,
        tr,
        td,
        th,
        tbody {
            border: none !important;
            text-align: left !important;
            font-size: 10px !important;
            margin-top: 2px !important;
        }

        .ticketContainer {
            padding: 0px 0px 0px 20px !important;
            max-width: 219px !important;
        }

        .mb1 {
            margin-bottom: 1px !important;
        }

        .w2 {
            width: 28px !important;
        }

        .w170,
        p {
            width: 170px !important;
            font-size: 10px !important;
        }

        body {
            width: 170px !important;
            margin-left: 0px !important;
        }

        .auth {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            align-content: center;
            flex-wrap: nowrap;

        }

        .p2 {
            margin-bottom: 2px !important;

        }
    </style>
</head>

<body>
    <div class="ticketContainer">


        <div class="drawTime">
            <img style="width: 60px;height: auto;" src='data:image/webp;base64,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' />
            <?php
            $date = new \DateTime($row["gameendtime"]);
            $drtime = date_format($date, 'h:i A');

            echo "<p width: 170px;'><b>" . company . " Game of chance</b><br>";
            echo "18+ Amusement only<br>";
            //                echo "GST No. issued by Govt. of INDIA<br>";
            //                echo "GST No. ".GST."<br>";
            echo "Draw. {$row["gametimeid"]} <br> Date: {$row["enterydate"]} {$drtime}</p>";
            ?>
        </div>
        <table class="w170">
            <thead>
                <tr>
                    <td> NUM&nbsp; </td>
                    <td> QT&nbsp; </td>
                    <td> NUM&nbsp; </td>
                    <td> QT&nbsp; </td>
                    <td> NUM&nbsp; </td>
                    <td> QT&nbsp; </td>
                </tr>
            </thead>
            <tbody class="numbers-played-data">
                <?php
                $limit = 1;
                $json = json_decode($row["point"], true);
                foreach ($json as $key1 => $val1) {
                    foreach ($val1 as $key => $val) {
                        $knum1 = str_pad($key, 3, "0", STR_PAD_LEFT);
                        $knum = "S" . $knum1;
                        $sx = str_split($knum);
                        $knums = $sx[0] . $sx[1];
                        $knumb = $sx[2] . $sx[3];
                        if ($limit == 1) {
                            echo "<tr class='p2'>";
                        }
                        if ($limit == 3) {

                ?>
                            <td class="w2">
                                <table>
                                    <tr>
                                        <td class='qt'>
                                            <span style=" border: 1px dotted;padding: 1px !important;  "> <?= $knums ?>
                                            </span>
                                        </td>
                                        <td class='aqt'>
                                            <span style=" border: 1px dotted; border-radius: 50%;padding: 1px !important; "><?= $knumb ?> </span>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td><?= $val ?></td>
                            </tr>
                        <?php

                            // echo "<td><p id='pkr' style='display:flex;'><span class='qt' style=' margin:2px; padding:2px;color:#000;border: 1px solid;display: flex; border: 1px solid;'> {$knums} </span> <span class='aqt' style=' margin:2px; padding:2px; border: 1px solid; border-radius: 10px;'>{$knumb} </span> </p> </td> <td > <span class='aqt' style=' margin:2px; padding:2px; border: 0px solid; border-radius: 10px;'>{$val} </span> </td></tr>";
                            $limit = 0;
                        } else {
                        ?>
                            <td class="w2">
                                <table>
                                    <tr>
                                        <td class='qt'>
                                            <span style=" border: 1px dotted; padding: 1px !important; "> <?= $knums ?>
                                            </span>
                                        </td>
                                        <td class='aqt'>
                                            <span style=" border: 1px dotted; border-radius: 50%; padding: 1px !important; "><?= $knumb ?> </span>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td><?= $val ?></td>
                <?php
                            // echo "<td><p id='pkr' style='display:flex;'><span class='qt' style=' margin:2px; padding:2px;color:#000;border: 1px solid;display: flex; border: 1px solid;'> {$knums} </span> <span class='aqt' style=' margin:2px; padding:2px; border: 1px solid; border-radius: 10px;'>{$knumb} </span> </p> </td> <td > <span class='aqt' style=' margin:2px; padding:2px; border: 0px solid; border-radius: 10px;'>{$val} </span> </td>";
                        }
                        $limit++;
                    }
                }
                ?>
            </tbody>
        </table>
        <p>
            Per ticket price .<span class="perTickt"> 2 . 00</span>
            <br>
            Qty. : <span class="qty"><?= $row["totalpoint"] ?></span>
            <br>
            Gross Rs. <span class="amount"><?= $row["amount"] ?></span>
            <br>
            <?php
            $gst = (float)$row["amount"] * 0.28;
            $total = (float)$row["amount"] + $gst;
            ?>
            GST (28%). <span class="amount"><?= $gst ?></span>
            <br>
            Total Rs. <span class="amount"><?= $total ?></span>
            <br>
            Bet Date: <span class="platTime"><?= $row["isDate"] ?></span>
            <br>
            Retailer Code
            <span class="retailer_code">
                <?= $row["own"] ?>
            </span>

        </p>
        <p class="auth"><img style="width: 60px; height:auto;" src='data:image/webp;base64,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' />
            <strong style="border: 2px solid;padding: 1px;margin-bottom: 5px;">Lotto Game authority</strong>
        </p>
        <p> <b>This game involves element of financial risk and may be addictive. Please play responsibly and at your own risk</b>
        </p>
        <div id="barcode<?= $row["id"] ?>">

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jsbarcode/3.11.0/JsBarcode.all.min.js" integrity="sha256-BjqnfACYltVzhRtGNR2C4jB9NAN0WxxzECeje7/XpwE=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $("#barcode<?= $row["id"] ?>").html("<img style='width:50%; heigt:100px;' src='" + textToBase64Barcode('<?= $row["game"] ?>') + "'>");
        });

        function textToBase64Barcode(text) {
            var canvas = document.createElement("canvas");
            JsBarcode(canvas, text, {
                format: "CODE39"
            });

            return canvas.toDataURL("image/png");
        }
    </script>

</body>

</html>