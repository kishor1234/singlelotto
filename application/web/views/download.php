<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Welcome to <?= company ?> Download</title>

    <style type="text/css">
        ::selection {
            background-color: #E13300;
            color: white;
        }

        ::-moz-selection {
            background-color: #E13300;
            color: white;
        }

        body {
            background-color: red;
            margin: 40px;
            font: 13px/20px normal Helvetica, Arial, sans-serif;
            color: #4F5155;
            background-image: url('/lotto add.jpeg');
            background-repeat: no-repeat;
            color: #FFF !important;
            background-size: cover;
        }

        a {
            color: #FFF;
            /* background-color: transparent; */
            font-weight: normal;
        }

        h1 {
            color: #FFF;
    background-color: transparent;
    border-bottom: 1px solid #D0D0D0;
    font-size: 19px;
    font-weight: normal;
    margin: 0 0 14px 0;
    padding: 9px 3px 9px 9px;
        }

        code {
            font-family: Consolas, Monaco, Courier New, Courier, monospace;
            font-size: 12px;
            background-color: #f9f9f9;
            border: 1px solid #D0D0D0;
            color: #002166;
            display: block;
            margin: 14px 0 14px 0;
            padding: 12px 10px 12px 10px;
        }

        #body {
            margin: 0 15px 0 15px;
        }

        p.footer {
            text-align: right;
            font-size: 11px;
            border-top: 1px solid #D0D0D0;
            line-height: 32px;
            padding: 0 10px 0 10px;
            margin: 20px 0 0 0;
        }

        #container {
            margin: 10px;
            border: 1px solid #D0D0D0;
            box-shadow: 0 0 8px #d0d0d0;
            width: 167px;
            margin-top: 26.2%;
        }
    </style>
</head>

<body>

    <div id="container">
        <h1>Welcome to <?= company ?>!</h1>

        <div id="body">
            <div class="row">
                <?php

                foreach ($row as $key => $val) {
                    echo "<div class='col-lg-2'>";
                    echo "<sapn><a class='buttons' href='{$val["url"]}'>{$val["game"]}</a>";
                    echo "</div>";
                }
                ?>
            </div>
        </div>

        <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
    </div>

</body>

</html>