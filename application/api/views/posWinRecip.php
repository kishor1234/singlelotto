<div class="ticketContainer">
    <style>
        .table-se {
            border: none !important;
            /* border-spacing: unset; */
            border-spacing: 1px 2px !important;
            text-align: left !important;

        }

        .ticketContainer {
            width: 200px;
            padding: 0px 0px 0px 5px !important;
        }

        .mb1 {
            margin-bottom: 1px !important;
        }

        .w2 {
            width: 28px !important;
        }

        .auth {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            align-content: center;
            flex-wrap: nowrap;

        }
    </style>

    <div class="drawTime">
        <img style="width: 60px;height: auto;" src='data:image/webp;base64,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' />
        <?php
        echo "<p width: 170px;'><b>" . company . " Game of chance</b><br>";
        echo "18+ Amusement only<br>";
        echo "<b>Draw.</b> {$row["drawid"]} | <b>Date:</b> {$row["date"]}</p>"
        ?>
    </div>
    <table class="numbers-played table-se" style="padding: 0px;">
        <thead>
            <tr style='border:none;'>
                <th style='font-size:15px; margin:0px; padding:0px;color:#000;text-align: left;'> <strong>NUM</strong> </th>
                <th style='font-size:15px; margin:0px; padding:0px;color:#000;text-align: left;'> <strong>QT</strong> </th>
                <th style='font-size:15px; margin:0px; padding:0px;color:#000;text-align: left;'> <strong>NUM</strong> </th>
                <th style='font-size:15px; margin:0px; padding:0px;color:#000;text-align: left;'> <strong>QT</strong> </th>
                <th style='font-size:15px; margin:0px; padding:0px;color:#000;text-align: left;'> <strong>NUM</strong> </th>
                <th style='font-size:15px; margin:0px; padding:0px;color:#000;text-align: left;'> <strong>QT</strong> </th>
            </tr>
        </thead>
        <tbody class="numbers-played-data">
            <?php
            $limit = 1;
            //$json = json_decode($row["point"], true);
            $json = $row["winPoint"];
            foreach ($json as $key => $val) {
                //                foreach ($val1 as $key => $val) {
                //$knum = str_pad($key, 4, "0", STR_PAD_LEFT);
                $knum1 = str_pad($key, 3, "0", STR_PAD_LEFT);
                $knum = "S" . $knum1;
                $sx = str_split($knum);
                $knums = $sx[0] . $sx[1];
                $knumb = $sx[2] . $sx[3];
                if ($limit == 1) {
                    echo "<tr style='border:none;'>";
                }
                if ($limit == 3) {

                    // echo "<td style='font-size:15px; margin:0px; padding:0px;color:#000;'> <strong>{$knum}</strong> </td> <td style='font-size:15px; margin:0px; padding:0px;'> <strong>{$val} </strong></td></tr>";
            ?>
                    <td class="w2">
                        <table class="table-se">
                            <tr>
                                <td class='qt'>
                                    <span style=" border: 1px solid;  "> <?= $knums ?>
                                    </span>
                                </td>
                                <td class='aqt'>
                                    <span style=" border: 1px solid; border-radius: 50%; "><?= $knumb ?> </span>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td><?= $val ?></td>
                    </tr>
                <?php
                    $limit = 0;
                } else {

                    // echo "<td style='font-size:15px; margin:0px; padding:0px;color:#000;'> <strong>{$knum}</strong> </td> <td style='font-size:15px; margin:0px; padding:0px;'> <strong>{$val}</strong> </td>";
                ?>
                    <td class="w2">
                        <table class="table-se">
                            <tr>
                                <td class='qt'>
                                    <span style=" border: 1px solid; "> <?= $knums ?>
                                    </span>
                                </td>
                                <td class='aqt'>
                                    <span style=" border: 1px solid; border-radius: 50%; "><?= $knumb ?> </span>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td><?= $val ?></td>
            <?php
                }
                $limit++;
                //                }
            }
            ?>
        </tbody>
    </table>
    <p>
        <b>Per ticket price .</b><span class="perTickt"> 2 . 00</span>
        <br>
        <b>Win AMT Rs. </b><span class="amount"><?= $row["amount"] ?></span>
        <br>
        <b>TAC. : </b>
        <span class="qty"><?= $row["utrno"] ?></span>

        <br>
        <b>Retailer Code</b>
        <span class="retailer_code">
            <?= $row["own"] ?>
        </span>

    </p>
</div>