<div align="center" class="body">
    <table border="0" width="80%">
        <tr>
            <td colspan="3" align="center" class="headgame1">
                <br>
                <img border="0" style="width: 100px; height:auto;" class="img" src="<?= image ?>" border=3><br>
                &nbsp;</td>
        </tr>
        <tr>
            <td colspan="3" align="center" id="msg" class="headgame"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td class="tdorange">
               Compliance
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td align="center">
                <table border="0" cellpadding="10" cellspacing="0">
                    <tr>
                        <td align="right"></td>
                        <td> <span class="headgame" > Compliance Query <i style="color: red;">*</i></span> <br><textarea id="msgcmp" style="width: 100%; height:190px;" autofocus name="msg" size="20" tabindex="1" class="tb7"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="hidden" value="<?= $_SESSION["userid"] ?>" name="userid" id="userid">
                            <input type="hidden" value="create" name="action" id="action">
                            <button class="buttonred" style="width: 100%;" placeholder="Enter compliance message" onclick='complianceSbt("<?= api_url ?>?r=compliance");' tabindex="3">Submit Compliance</button>
                        </td>
                    </tr>

                </table>
            </td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td colspan="3" align="center" class="headgame1"><br>
                Only For Amusement</td>
        </tr>
    </table>

</div>