<html>

<head>
    <meta http-equiv="Content-Language" content="en-us">
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <title> <?= company ?> RESULTS</title>
    <link rel="stylesheet" href="assets/yatara/css/main.css" type="text/css">
</head>

<body bgcolor="#FFCCFF" topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0">
    <table border="0" width="100%" cellspacing="0" cellpadding="0">
        <tr>
            <td width="7%" align=center><img class="img-board" src="<?= image ?>" border="5" align=middle></td>
            <td style="display: none;" class="tdtitle" width="14%" valign="top">&nbsp;<?= company ?></td>
            <td id="agentdet" class="tdtitle"></td>
            <td class="tdtitleright" valign="top"><a href="/?r=gameboard"><input type="button" value="Back" class="buttonback"></a>
                <a href="/?r=logout"><input type="button" class="buttonlogout" value="Logout"></a>
            </td>
        </tr>
    </table>
    <table >
      <tr>
        <th>#</th>
        <th>Document Name</th>
        <th>Image</th>
      </tr>  
    
    <?php
    $jsonResponse = json_decode($response, true);
   
    foreach ($jsonResponse as $k => $v) {
        echo "<tr>";
        echo "<th>$k </th>";
        echo "<th> {$v['name']}</th>";
        echo "<td><img src='{$v['url']}' style='width:100%;height:auto;' alt='{$v['name']}'/></td>";
        echo "</tr>";
    }
    ?>
    </table>
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