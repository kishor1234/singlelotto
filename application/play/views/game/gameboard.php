<html>

<head>
    <!--<meta http-equiv="Content-Language" content="en-us">-->
    <!--<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">-->
    <title><?= company ?></title>
    <!--<script src="posjs/mygame.js"></script>-->

    <link rel="stylesheet" href="assets/yatara/css/style.css" type="text/css">
    <style>
        html,
        body {
            margin: 0px;
            padding: 0px;
            height: 100% !important;
            width: 100% !important;

        }

        /*            input[type="textbox"],tdqty,tdamt,label{
                            width: 100% !important;
                            height: 100% !important;
                        }*/
    </style>
</head>
<!-nload="load_frm();-->

    <body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0" onload="load_frm();">
        <div style="width: 900px; border: 1px solid #000;margin: 0px auto;">
            <table>
                <tr>
                    <td class="brand">
                        <img class="img-board" src="<?= image ?>" border="5" align=middle>
                    </td>
                    <td>
                        <table>
                            <tr>
                                <td>
                                    <table>
                                        <tr>
                                            <td align="center" style="height: 46px;"><span class="tdr0" id="res0">S0</span></td>
                                            <td align="center"><span class="tdr1" id="res1">S1</span></td>
                                            <td align="center"><span class="tdr2" id="res2">S2</span></td>
                                            <td align="center"><span class="tdr3" id="res3">S3</span></td>
                                            <td align="center"><span class="tdr4" id="res4">S4</span></td>
                                            <td align="center"><span class="tdr5" id="res5">S5</span></td>
                                            <td align="center"><span class="tdr6" id="res6">S6</span></td>
                                            <td align="center"><span class="tdr7" id="res7">S7</span></td>
                                            <td align="center"><span class="tdr8" id="res8">S8</span></td>
                                            <td align="center"><span class="tdr9" id="res9">S9</span></td>
                                        </tr>
                                    </table>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <table>
                                        <tr>
                                            <td><button class="btn"> S0 </button></td>
                                            <td><button class="btn"> S1 </button></td>
                                            <td><button class="btn"> S2 </button></td>
                                            <td><button class="btn"> S3 </button></td>
                                            <td><button class="btn"> S4 </button></td>
                                            <td><button class="btn"> S5 </button></td>
                                            <td><button class="btn"> S6 </button></td>
                                            <td><button class="btn"> S7 </button></td>
                                            <td><button class="btn"> S8 </button></td>
                                            <td><button class="btn"> S9 </button></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table>
                                        <tr>
                                            <td><a href="/?r=result"><button class="bottombtn" id="btnbg0" style="background-color: #fbf180;width:100px;height: 30px; font-size: 14px;">Results</button></a></td>
                                            <td><a href="/?r=report"><button class="bottombtn" id="btnbg1" style="background-color: #fbf180;width:100px; height: 30px; font-size: 14px;">Accounts</button></a></td>
                                            <td><button class="bottombtn" id="btnbg1" style="background-color: #fbf180; width:100px; height: 30px; font-size: 14px;" onclick="changepasswordform()">Password</button></td>
                                            <td> <button class="bottombtn" id="btnbg0" style="background-color: #fbf180; height: 30px; font-size: 14px;" onclick="reprintlist();">Reprint</button></td>
                                            <td> <button class="bottombtn" id="btnbg0" style="background-color: #fbf180; height: 30px; font-size: 14px;" onclick="complianceForm()">Complaint</button></td>
                                            <td><button class="bottombtn" id="btncan" style="background-color: #fbf180;  height: 30px;font-size: 14px;" onclick="canlist();">Cancel</button></td>
                                            <td><a href="/?r=document"><button class="bottombtn" id="btnbg0" style="background-color: #fbf180; height: 30px; font-size: 14px;"> Legal Info</button></a></td>
                                            <td><button class="bottombtn" id="btnbg0" style="background-color: #fbf180; height: 30px; font-size: 14px;" onclick="direactClaim();">Auto Claim</button></td>
                                            <td><a href="/?r=mydocument"><button class="bottombtn" id="btnbg0" style="background-color: #fbf180; height: 30px; font-size: 14px;"> User GST </button></a></td>

                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <!--second row-->
                <tr>
                    <table>
                        <tr>
                            <td><span class="tdblack">Time To Draw</span></td>
                            <td><span class="tdblack">Draw Time</span></td>
                            <td><span class="tdblack">Draw Date</span></td>
                            <td><span class="tdblack">Credit Limit </span></td>
                            <td><span class="tdblack">last Tr. No.</span></td>
                            <td><span class="tdblack">last Tr. PT.</span></td>
                            <td style="display: none;"></td>
                        </tr>
                        <tr>
                            <td><span id="counter9" class="tdtimer">10:00</span></td>
                            <td><span id="nextdraw" class="tdtimer">10:00</span></td>
                            <td><span id="currdate" class="tdtimer">10:00</span></td>
                            <td><span id="creditlimit" class="tdtimer" onclick="BalanceStart();">**</span></td>
                            <td><span id="lasttsn" class="tdtimer">NA</span></td>
                            <td><span id="lasttamt" class="tdtimer">NA</span></td>
                            <td style="display: none;" class="tdtime" id="lastdraw"></td>
                        </tr>
                    </table>
                </tr>
                <!--third row-->
                <tr>
                    <table>
                        <tr>
                            <td class="tdtitle" id="currtime" style="display: none;">&nbsp;</td>
                            <td class="tbt-user">
                                <table class="tbt-user">
                                    <tr>
                                        <td class="tdaeob w150"><span id="agentdet">Sachin Online</span></td>
                                        <td class="tdaeob w50">
                                            <span>
                                                <label for="cbeven"> Even</label><br>
                                                <input type="checkbox" name="cbeven" id="cbeven" onclick="cbeven_Click();">
                                            </span>
                                        </td>
                                        <td class="tdaeob w50">
                                            <span>
                                                <label> Odd&nbsp;</label><br>
                                                <input type="checkbox" name="chodd" id="chodd" onclick="cbodd_Click();">
                                            </span>
                                        </td>
                                        <td class="tdaeob w50">
                                            <span>
                                                <label for="cbfp">FP</label><br>
                                                <input type="checkbox" name="cbfp" id="cbfp" onclick="cbfp_Click();">
                                            </span>
                                        </td>
                                        <td class="tdaeob w50" style="cursor: pointer;" id="lpclick" onclick="btnLuckyStone_Click()">
                                            <span>
                                                <label style="cursor: pointer;" for="lpclick">LP</label><br>
                                                <input type="text" name="txtLuckyStone" id="txtLuckyStone" style="width: 35px; background: #000; text-align: center; color: #FFF;">
                                            </span>
                                        </td>
                                        <td class="tdaeob w50" style="display: none;">
                                            <span>
                                                <label>All&nbsp;</label><br>
                                                <input type="checkbox" name="cballlow" id="cballlow" onclick="cballlow_click();">
                                            </span>
                                        </td>
                                        <td colspan="2" style=" width: 1031px;height: 30px;background: #FFF;text-align: center;"> <span id="gmsg"> GST</span> </td>
                                    </tr>

                                </table>
                            </td>
                            <!-- <td>
                            <table class="gsttable">
                                <tr>
                                    
                                </tr>
                            </table>
                        </td> -->

                        </tr>
                    </table>
                </tr>
                <!--Fourth row-->
                <tr>
                    <td>

                        <div id="gamepan">
                            <table>
                                <tr>
                                    <td>
                                        <table>
                                            <tr>
                                                <td>
                                                    <table>
                                                        <tr>
                                                            <td id="lobtn" onclick="showhide('L', 'L');" class=" color5l">
                                                                <p>LOW</p>
                                                            </td>
                                                            <td id="highbtn" onclick="showhide('L', 'H');" class=" color6h">
                                                                <p>HIGH</p>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td onclick="pageupre()" class=" color6h">Lotto UP</td>
                                                            <td onclick="pagedownre()" class=" color5l">Lotto DOWN</td>

                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td id="divplat">
                                                    <table>
                                                        <tr class="tdgw ">
                                                            <td colspan="2" class="tdgw" id="lblleft0" onclick="leftset(0);"><span> Lottoland </span></td>
                                                        </tr>
                                                        <tr class="tdgw ">
                                                            <td colspan="2" class="tdgw" id="lblleft1" onclick="leftset(1);"> <span> Lotto 247 </span></td>
                                                        </tr>
                                                        <tr class="tdgw ">
                                                            <td colspan="2" class="tdgw " id="lblleft2" onclick="leftset(2);"> <span> Lotto Keno </span></td>
                                                        </tr>
                                                        <tr class="tdgw ">
                                                            <td colspan="2" class="tdgw " id="lblleft3" onclick="leftset(3);"> <span> Multi Lotto </span></td>
                                                        </tr>
                                                        <tr class="tdgw ">
                                                            <td colspan="2" class="tdgw " id="lblleft4" onclick="leftset(4);"> <span> Fast Lotto </span></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2" class="tdgw" id="lblleft5" onclick="leftset(5);"> <span> Mega Jackpot </span></td>
                                                        </tr>
                                                        <tr class="tdgw ">
                                                            <td colspan="2" class="tdgw " id="lblleft6" onclick="leftset(6);"> <span> Super Lotto </span></td>
                                                        </tr>
                                                        <tr class="tdgw ">
                                                            <td colspan="2" class="tdgw " id="lblleft7" onclick="leftset(7);"> <span> Power Ball </span></td>
                                                        </tr>
                                                        <tr class="tdgw ">
                                                            <td colspan="2" class="tdgw " id="lblleft8" onclick="leftset(8);"> <span> Magic Lotto </span></td>
                                                        </tr>
                                                        <tr class="tdgw ">
                                                            <td colspan="2" class="tdgw " id="lblleft9" onclick="leftset(9);"> <span> Lotto Jackpot </span></td>

                                                        </tr>
                                                    </table>
                                                </td>
                                                <td id="divhigh" style="display: none;">
                                                    <table border="0" width="100%">
                                                        <tr>
                                                            <td class="tdg0">
                                                                <label for="cbhigh0"> (Rs. 2 * 1)</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="tdg1">
                                                                <label for="cbhigh1"> (Rs. 2 * 1)</label>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="tdg2">
                                                                <label for="cbhigh2"> (Rs. 2 * 2)</label>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="tdg3">
                                                                <label for="cbhigh3"> (Rs. 2 * 3)</label>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="tdg4">
                                                                <label for="cbhigh4"> (Rs. 2 * 5)</label>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="tdg5">
                                                                <label for="cbhigh5"> (Rs. 2 * 5)</label>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="tdg6">
                                                                <label for="cbhigh6"> (Rs. 2 * 10)</label>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="tdg7">
                                                                <label for="cbhigh7"> (Rs. 2 * 20)</label>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="tdg8">
                                                                <label for="cbhigh8"> (Rs. 2 * 25)</label>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="tdg9">
                                                                <label for="cbhigh9">(Rs. 2 * 25)</label>
                                                            </td>

                                                        </tr>
                                                    </table>
                                                </td>
                                                <td id="divlow" style="background-color: #d2ab66; display: none;">
                                                    <table>
                                                        <tr style="height: 35px;">
                                                            <td style="display: flex;">
                                                                &nbsp;
                                                            </td>
                                                        </tr>
                                                        <tr style="height: 35px;">
                                                            <td style="display: flex;">
                                                                <input type="radio" id="rbmul1" name="rbmul1" value="V1" checked onclick="rbmulall_Click(1);"><label style="font-size: 16px; font-weight: 600;" for="rbmul1">2.00</label>
                                                            </td>
                                                        </tr>
                                                        <tr style="height: 35px;">
                                                            <td style="display: flex;">
                                                                &nbsp;
                                                            </td>
                                                        </tr>
                                                        <tr style="height: 35px;">
                                                            <td style="display: flex;">
                                                                <input type="radio" id="rbmul2" name="rbmul2" value="V1" onclick="rbmulall_Click(2);"><label style="font-size: 16px; font-weight: 600;" for="rbmul2">4.00</label>
                                                            </td>
                                                        </tr>

                                                        <tr style="height: 35px;">
                                                            <td style="display: flex;">
                                                                &nbsp;
                                                            </td>
                                                        </tr>
                                                        <tr style="height: 35px;">
                                                            <td style="display: flex;">
                                                                <input type="radio" id="rbmul5" name="rbmul5" value="V1" onclick="rbmulall_Click(5);"><label style="font-size: 16px; font-weight: 600;" for="rbmul5">10.00</label>
                                                            </td>
                                                        </tr>

                                                        <tr style="height: 35px;">
                                                            <td style="display: flex;">
                                                                &nbsp;
                                                            </td>
                                                        </tr>
                                                        <tr style="height: 35px;">
                                                            <td style="display: flex;">
                                                                <input type="radio" id="rbmul10" name="rbmul10" value="V1" onclick="rbmulall_Click(10);"><label style="font-size: 16px; font-weight: 600;" for="rbmul10">20.00</label>
                                                            </td>
                                                        </tr>


                                                        <tr style="height: 35px;">
                                                            <td style="display: flex;">
                                                                &nbsp;
                                                            </td>
                                                        </tr>
                                                        <tr style="height: 35px;">
                                                            <td style="display: flex;">
                                                                <input type="radio" id="rbmul20" name="rbmul20" value="V1" onclick="rbmulall_Click(20);"><label style="font-size: 16px; font-weight: 600;" for="rbmul20">40.00</label>
                                                            </td>
                                                        </tr>

                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <button class="bottombtn" id="btnbg0" style="background-color: red;color: white;height: 30px; " onclick="betreg();">Buy</button>
                                                </td>

                                            </tr>
                                        </table>
                                    </td>
                                    <td>
                                        <table>
                                            <tr>

                                                <td class="tdaeob w50">
                                                    <span>
                                                        <label>All&nbsp;</label><br>
                                                        <input type="checkbox" name="cballlow" id="cballlow" onclick="cballlow_click();">
                                                    </span>
                                                </td>
                                                <td>&nbsp;</td>
                                                <td class="last-o"><span>tto</span></td>
                                                <td class="gptd">All</td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="tbv0" id="tbv0" class="tball" size=5 oninput="allvh(this,0,'V');" onfocus="myFunction(this, 'A');" onblur="myFunctionrev(this, 'A');" onkeydown="arrowmovev(window.event, 0);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="tbv1" id="tbv1" class="tball" size=5 oninput="allvh(this,1,'V');" onfocus="myFunction(this, 'A');" onblur="myFunctionrev(this, 'A');" onkeydown="arrowmovev(window.event, 1);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="tbv2" id="tbv2" class="tball" size=5 oninput="allvh(this,2,'V');" onfocus="myFunction(this, 'A');" onblur="myFunctionrev(this, 'A');" onkeydown="arrowmovev(window.event, 2);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="tbv3" id="tbv3" class="tball" size=5 oninput="allvh(this,3,'V');" onfocus="myFunction(this, 'A');" onblur="myFunctionrev(this, 'A');" onkeydown="arrowmovev(window.event, 3);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="tbv4" id="tbv4" class="tball" size=5 oninput="allvh(this,4,'V');" onfocus="myFunction(this, 'A');" onblur="myFunctionrev(this, 'A');" onkeydown="arrowmovev(window.event, 4);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="tbv5" id="tbv5" class="tball" size=5 oninput="allvh(this,5,'V');" onfocus="myFunction(this, 'A');" onblur="myFunctionrev(this, 'A');" onkeydown="arrowmovev(window.event, 5);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="tbv6" id="tbv6" class="tball" size=5 oninput="allvh(this,6,'V');" onfocus="myFunction(this, 'A');" onblur="myFunctionrev(this, 'A');" onkeydown="arrowmovev(window.event, 6);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="tbv7" id="tbv7" class="tball" size=5 oninput="allvh(this,7,'V');" onfocus="myFunction(this, 'A');" onblur="myFunctionrev(this, 'A');" onkeydown="arrowmovev(window.event, 7);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="tbv8" id="tbv8" class="tball" size=5 oninput="allvh(this,8,'V');" onfocus="myFunction(this, 'A');" onblur="myFunctionrev(this, 'A');" onkeydown="arrowmovev(window.event, 8);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="tbv9" id="tbv9" class="tball" size=5 oninput="allvh(this,9,'V');" onfocus="myFunction(this, 'A');" onblur="myFunctionrev(this, 'A');" onkeydown="arrowmovev(window.event, 9);">
                                                </td>
                                                <td class="last-o"><span>tto</span></td>
                                                <td class="white">QTY.</td>
                                                <td class="white">Point</td>
                                                <td class="white">Wining Ball</td>
                                            </tr>
                                            <tr>
                                                <td class="tdgwr"> <span> S0 </span></td>
                                                <td class="tdgw tdg0">
                                                    <input type="checkbox" name="cblow0" id="cblow0" value="0" onclick="cblow0_Click(0)" />
                                                    <input type="checkbox" name="cbhigh0" id="cbhigh0" value="0" onclick="cbhighall_click(0)">
                                                </td>
                                                <td class="first"><span>Lotto</span></td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="tbh0" id="tbh0" class="tball" size=5 oninput="allvh(this,0,'H');" onfocus="myFunction(this, 'A');" onblur="myFunctionrev(this, 'A');" onkeydown="arrowmoveh(window.event, 0);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num0" id="num0" class="tbmp" size=5 oninput="calculateamtqty(this,0)" onfocus="myFunction(this, 'N', '00');" onblur="myFunctionrev(this, 'N', '00');" placeholder="00" onkeydown="arrowmove(window.event, 0);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num1" id="num1" class="tbmp" size=5 oninput="calculateamtqty(this,1)" onfocus="myFunction(this, 'N', '01');" onblur="myFunctionrev(this, 'N', '01');" placeholder="01" onkeydown="arrowmove(window.event, 1);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num2" id="num2" class="tbmp" size=5 oninput="calculateamtqty(this,2)" onfocus="myFunction(this, 'N', '02');" onblur="myFunctionrev(this, 'N', '02');" placeholder="02" onkeydown="arrowmove(window.event, 2);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num3" id="num3" class="tbmp" size=5 oninput="calculateamtqty(this,3)" onfocus="myFunction(this, 'N', '03');" onblur="myFunctionrev(this, 'N', '03');" placeholder="03" onkeydown="arrowmove(window.event, 3);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num4" id="num4" class="tbmp" size=5 oninput="calculateamtqty(this,4)" onfocus="myFunction(this, 'N', '04');" onblur="myFunctionrev(this, 'N', '04');" placeholder="04" onkeydown="arrowmove(window.event, 4);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num5" id="num5" class="tbmp" size=5 oninput="calculateamtqty(this,5)" onfocus="myFunction(this, 'N', '05');" onblur="myFunctionrev(this, 'N', '05');" placeholder="05" onkeydown="arrowmove(window.event, 5);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num6" id="num6" class="tbmp" size=5 oninput="calculateamtqty(this,6)" onfocus="myFunction(this, 'N', '06');" onblur="myFunctionrev(this, 'N', '06');" placeholder="06" onkeydown="arrowmove(window.event, 6);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num7" id="num7" class="tbmp" size=5 oninput="calculateamtqty(this,7)" onfocus="myFunction(this, 'N', '07');" onblur="myFunctionrev(this, 'N', '07');" placeholder="07" onkeydown="arrowmove(window.event, 7);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num8" id="num8" class="tbmp" size=5 oninput="calculateamtqty(this,8)" onfocus="myFunction(this, 'N', '08');" onblur="myFunctionrev(this, 'N', '08');" placeholder="08" onkeydown="arrowmove(window.event, 8);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num9" id="num9" class="tbmp" size=5 oninput="calculateamtqty(this,9)" onfocus="myFunction(this, 'N', '09');" onblur="myFunctionrev(this, 'N', '09');" placeholder="09" onkeydown="arrowmove(window.event, 9);">
                                                </td>
                                                <td class="first"><span>Lotto</span></td>
                                                <td class="tdqty color12" id="tbqa">&nbsp;</td>
                                                <td class="tdamt color11" id="tbaa">&nbsp;</td>
                                                <td align="center"><span class="tdr0 color0" style="padding: 3px !important;" id="rres0">S0</span></td>
                                            </tr>
                                            <tr>
                                                <td class="tdgwr"> <span> S1 </span> </td>
                                                <td class="tdgw tdg1">
                                                    <input type="checkbox" name="cblow1" id="cblow1" value="0" onclick="cblow0_Click(1)" />
                                                    <input type="checkbox" name="cbhigh1" id="cbhigh1" value="0" onclick="cbhighall_click(1)">
                                                </td>
                                                <td class="last-o"><span>&nbsp;</span></td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="tbh1" id="tbh1" class="tball" size=5 oninput="allvh(this,10,'H');" onfocus="myFunction(this, 'A');" onblur="myFunctionrev(this, 'A');" onkeydown="arrowmoveh(window.event, 1);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num10" id="num10" class="tbmp" size=5 oninput="calculateamtqty(this,10)" onfocus="myFunction(this, 'N', '10');" onblur="myFunctionrev(this, 'N', '10');" placeholder="10" onkeydown="arrowmove(window.event, 10);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num11" id="num11" class="tbmp" size=5 oninput="calculateamtqty(this,11)" onfocus="myFunction(this, 'N', '11');" onblur="myFunctionrev(this, 'N', '11');" placeholder="11" onkeydown="arrowmove(window.event, 11);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num12" id="num12" class="tbmp" size=5 oninput="calculateamtqty(this,12)" onfocus="myFunction(this, 'N', '12');" onblur="myFunctionrev(this, 'N', '12');" placeholder="12" onkeydown="arrowmove(window.event, 12);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num13" id="num13" class="tbmp" size=5 oninput="calculateamtqty(this,13)" onfocus="myFunction(this, 'N', '13');" onblur="myFunctionrev(this, 'N', '13');" placeholder="13" onkeydown="arrowmove(window.event, 13);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num14" id="num14" class="tbmp" size=5 oninput="calculateamtqty(this,14)" onfocus="myFunction(this, 'N', '14');" onblur="myFunctionrev(this, 'N', '14');" placeholder="14" onkeydown="arrowmove(window.event, 14);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num15" id="num15" class="tbmp" size=5 oninput="calculateamtqty(this,15)" onfocus="myFunction(this, 'N', '15');" onblur="myFunctionrev(this, 'N', '15');" placeholder="15" onkeydown="arrowmove(window.event, 15);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num16" id="num16" class="tbmp" size=5 oninput="calculateamtqty(this,16)" onfocus="myFunction(this, 'N', '16');" onblur="myFunctionrev(this, 'N', '16');" placeholder="16" onkeydown="arrowmove(window.event, 16);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num17" id="num17" class="tbmp" size=5 oninput="calculateamtqty(this,17)" onfocus="myFunction(this, 'N', '17');" onblur="myFunctionrev(this, 'N', '17');" placeholder="17" onkeydown="arrowmove(window.event, 17);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num18" id="num18" class="tbmp" size=5 oninput="calculateamtqty(this,18)" onfocus="myFunction(this, 'N', '18');" onblur="myFunctionrev(this, 'N', '18');" placeholder="18" onkeydown="arrowmove(window.event, 18);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num19" id="num19" class="tbmp" size=5 oninput="calculateamtqty(this,19)" onfocus="myFunction(this, 'N', '19');" onblur="myFunctionrev(this, 'N', '19');" placeholder="19" onkeydown="arrowmove(window.event, 19);">
                                                </td>
                                                <td class="last-o"><span>&nbsp;</span></td>
                                                <td class="tdqty color12" id="tbqb">&nbsp;</td>
                                                <td class="tdamt color11" id="tbab">&nbsp;</td>
                                                <td align="center"><span class="tdr1 color1" id="rres1" style="padding: 3px !important;">S1</span></td>
                                            </tr>
                                            <tr>
                                                <td class="tdgwr"> <span> S2 </span></td>
                                                <td class="tdgw tdg2">
                                                    <input type="checkbox" name="cblow2" id="cblow2" value="0" onclick="cblow0_Click(2)" />
                                                    <input type="checkbox" name="cbhigh2" id="cbhigh2" value="0" onclick="cbhighall_click(2)">
                                                </td>
                                                <td class="last-o"><span>tto</span></td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="tbh2" id="tbh2" class="tball" size=5 oninput="allvh(this,20,'H');" onfocus="myFunction(this, 'A');" onblur="myFunctionrev(this, 'A');" onkeydown="arrowmoveh(window.event, 2);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num20" id="num20" class="tbmp" size=5 oninput="calculateamtqty(this,20)" onfocus="myFunction(this, 'N', '20');" onblur="myFunctionrev(this, 'N', '20');" placeholder="20" onkeydown="arrowmove(window.event, 20);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num21" id="num21" class="tbmp" size=5 oninput="calculateamtqty(this,21)" onfocus="myFunction(this, 'N', '21');" onblur="myFunctionrev(this, 'N', '21');" placeholder="21" onkeydown="arrowmove(window.event, 21);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num22" id="num22" class="tbmp" size=5 oninput="calculateamtqty(this,22)" onfocus="myFunction(this, 'N', '22');" onblur="myFunctionrev(this, 'N', '22');" placeholder="22" onkeydown="arrowmove(window.event, 22);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num23" id="num23" class="tbmp" size=5 oninput="calculateamtqty(this,23)" onfocus="myFunction(this, 'N', '23');" onblur="myFunctionrev(this, 'N', '23');" placeholder="23" onkeydown="arrowmove(window.event, 23);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num24" id="num24" class="tbmp" size=5 oninput="calculateamtqty(this,24)" onfocus="myFunction(this, 'N', '24');" onblur="myFunctionrev(this, 'N', '24');" placeholder="24" onkeydown="arrowmove(window.event, 24);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num25" id="num25" class="tbmp" size=5 oninput="calculateamtqty(this,25)" onfocus="myFunction(this, 'N', '25');" onblur="myFunctionrev(this, 'N', '25');" placeholder="25" onkeydown="arrowmove(window.event, 25);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num26" id="num26" class="tbmp" size=5 oninput="calculateamtqty(this,26)" onfocus="myFunction(this, 'N', '26');" onblur="myFunctionrev(this, 'N', '26');" placeholder="26" onkeydown="arrowmove(window.event, 26);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num27" id="num27" class="tbmp" size=5 oninput="calculateamtqty(this,27)" onfocus="myFunction(this, 'N', '27');" onblur="myFunctionrev(this, 'N', '27');" placeholder="27" onkeydown="arrowmove(window.event, 27);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num28" id="num28" class="tbmp" size=5 oninput="calculateamtqty(this,28)" onfocus="myFunction(this, 'N', '28');" onblur="myFunctionrev(this, 'N', '28');" placeholder="28" onkeydown="arrowmove(window.event, 28);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num29" id="num29" class="tbmp" size=5 oninput="calculateamtqty(this,29)" onfocus="myFunction(this, 'N', '29');" onblur="myFunctionrev(this, 'N', '29');" placeholder="29" onkeydown="arrowmove(window.event, 29);">
                                                </td>
                                                <td class="last-o"><span>tto</span></td>
                                                <td class="tdqty color12" id="tbqc">&nbsp;</td>
                                                <td class="tdamt color11" id="tbac">&nbsp;</td>
                                                <td align="center"><span class="tdr2 color2" id="rres2" style="padding: 3px !important;">S2</span></td>

                                            </tr>
                                            <tr>
                                                <td class="tdgwr"><span> S3 </span></td>
                                                <td class="tdgw tdg3">
                                                    <input type="checkbox" name="cblow3" id="cblow3" value="0" onclick="cblow0_Click(3)" />
                                                    <input type="checkbox" name="cbhigh3" id="cbhigh3" value="0" onclick="cbhighall_click(3)">
                                                </td>
                                                <td class="first"><span>Lotto</span></td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="tbh3" id="tbh3" class="tball" size=5 oninput="allvh(this,30,'H');" onfocus="myFunction(this, 'A');" onblur="myFunctionrev(this, 'A');" onkeydown="arrowmoveh(window.event, 3);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num30" id="num30" class="tbmp" size=5 oninput="calculateamtqty(this,30)" onfocus="myFunction(this, 'N', '30');" onblur="myFunctionrev(this, 'N', '30');" placeholder="30" onkeydown="arrowmove(window.event, 30);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num31" id="num31" class="tbmp" size=5 oninput="calculateamtqty(this,31)" onfocus="myFunction(this, 'N', '31');" onblur="myFunctionrev(this, 'N', '31');" placeholder="31" onkeydown="arrowmove(window.event, 31);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num32" id="num32" class="tbmp" size=5 oninput="calculateamtqty(this,32)" onfocus="myFunction(this, 'N', '32');" onblur="myFunctionrev(this, 'N', '32');" placeholder="32" onkeydown="arrowmove(window.event, 32);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num33" id="num33" class="tbmp" size=5 oninput="calculateamtqty(this,33)" onfocus="myFunction(this, 'N', '33');" onblur="myFunctionrev(this, 'N', '33');" placeholder="33" onkeydown="arrowmove(window.event, 33);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num34" id="num34" class="tbmp" size=5 oninput="calculateamtqty(this,34)" onfocus="myFunction(this, 'N', '34');" onblur="myFunctionrev(this, 'N', '34');" placeholder="34" onkeydown="arrowmove(window.event, 34);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 maxlength=3 name="num35" id="num35" class="tbmp" size=5 oninput="calculateamtqty(this,35)" onfocus="myFunction(this, 'N', '35');" onblur="myFunctionrev(this, 'N', '35');" placeholder="35" onkeydown="arrowmove(window.event, 35);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num36" id="num36" class="tbmp" size=5 oninput="calculateamtqty(this,36)" onfocus="myFunction(this, 'N', '36');" onblur="myFunctionrev(this, 'N', '36');" placeholder="36" onkeydown="arrowmove(window.event, 36);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num37" id="num37" class="tbmp" size=5 oninput="calculateamtqty(this,37)" onfocus="myFunction(this, 'N', '37');" onblur="myFunctionrev(this, 'N', '37');" placeholder="37" onkeydown="arrowmove(window.event, 37);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num38" id="num38" class="tbmp" size=5 oninput="calculateamtqty(this,38)" onfocus="myFunction(this, 'N', '38');" onblur="myFunctionrev(this, 'N', '38');" placeholder="38" onkeydown="arrowmove(window.event, 38);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num39" id="num39" class="tbmp" size=5 oninput="calculateamtqty(this,39)" onfocus="myFunction(this, 'N', '39');" onblur="myFunctionrev(this, 'N', '39');" placeholder="39" onkeydown="arrowmove(window.event, 39);">
                                                </td>
                                                <td class="first"><span>Lotto</span></td>
                                                <td class="tdqty color12" id="tbqd">&nbsp;</td>
                                                <td class="tdamt color11" id="tbad">&nbsp;</td>
                                                <td align="center"><span class="tdr3 color3" id="rres3" style="padding: 3px !important;">S3</span></td>

                                            </tr>
                                            <tr>
                                                <td class="tdgwr"><span> S4 </span></td>
                                                <td class="tdgw tdg4">
                                                    <input type="checkbox" name="cblow4" id="cblow4" value="0" onclick="cblow0_Click(4)" />
                                                    <input type="checkbox" name="cbhigh4" id="cbhigh4" value="0" onclick="cbhighall_click(4)">
                                                </td>
                                                <td class="last-o"><span>&nbsp;</span></td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="tbh4" id="tbh4" class="tball" size=5 oninput="allvh(this,40,'H');" onfocus="myFunction(this, 'A');" onblur="myFunctionrev(this, 'A');" onkeydown="arrowmoveh(window.event, 4);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num40" id="num40" class="tbmp" size=5 oninput="calculateamtqty(this,40)" onfocus="myFunction(this, 'N', '40');" onblur="myFunctionrev(this, 'N', '40');" placeholder="40" onkeydown="arrowmove(window.event, 40);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num41" id="num41" class="tbmp" size=5 oninput="calculateamtqty(this,41)" onfocus="myFunction(this, 'N', '41');" onblur="myFunctionrev(this, 'N', '41');" placeholder="41" onkeydown="arrowmove(window.event, 41);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num42" id="num42" class="tbmp" size=5 oninput="calculateamtqty(this,42)" onfocus="myFunction(this, 'N', '42');" onblur="myFunctionrev(this, 'N', '402');" placeholder="42" onkeydown="arrowmove(window.event, 42);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num43" id="num43" class="tbmp" size=5 oninput="calculateamtqty(this,43)" onfocus="myFunction(this, 'N', '43');" onblur="myFunctionrev(this, 'N', '43');" placeholder="43" onkeydown="arrowmove(window.event, 43);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num44" id="num44" class="tbmp" size=5 oninput="calculateamtqty(this,44)" onfocus="myFunction(this, 'N', '44');" onblur="myFunctionrev(this, 'N', '44');" placeholder="44" onkeydown="arrowmove(window.event, 44);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num45" id="num45" class="tbmp" size=5 oninput="calculateamtqty(this,45)" onfocus="myFunction(this, 'N', '45');" onblur="myFunctionrev(this, 'N', '45');" placeholder="45" onkeydown="arrowmove(window.event, 45);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num46" id="num46" class="tbmp" size=5 oninput="calculateamtqty(this,46)" onfocus="myFunction(this, 'N', '46');" onblur="myFunctionrev(this, 'N', '46');" placeholder="46" onkeydown="arrowmove(window.event, 46);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num47" id="num47" class="tbmp" size=5 oninput="calculateamtqty(this,47)" onfocus="myFunction(this, 'N', '47');" onblur="myFunctionrev(this, 'N', '47');" placeholder="47" onkeydown="arrowmove(window.event, 47);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num48" id="num48" class="tbmp" size=5 oninput="calculateamtqty(this,48)" onfocus="myFunction(this, 'N', '48');" onblur="myFunctionrev(this, 'N', '48');" placeholder="48" onkeydown="arrowmove(window.event, 48);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num49" id="num49" class="tbmp" size=5 oninput="calculateamtqty(this,49)" onfocus="myFunction(this, 'N', '49');" onblur="myFunctionrev(this, 'N', '49');" placeholder="49" onkeydown="arrowmove(window.event, 49);">
                                                </td>
                                                <td class="last-o"><span>&nbsp;</span></td>
                                                <td class="tdqty color12" id="tbqe">&nbsp;</td>
                                                <td class="tdamt color11" id="tbae">&nbsp;</td>
                                                <td align="center"><span class="tdr4 color4" id="rres4" style="padding: 3px !important;">S4</span></td>

                                            </tr>
                                            <tr>
                                                <td class="tdgwr"><span> S5 </span></td>
                                                <td class="tdgw tdg5">
                                                    <input type="checkbox" name="cblow5" id="cblow5" value="0" onclick="cblow0_Click(5)" />
                                                    <input type="checkbox" name="cbhigh5" id="cbhigh5" value="0" onclick="cbhighall_click(5)">
                                                </td>
                                                <td class="last-o"><span>tto</span></td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="tbh5" id="tbh5" class="tball" size=5 oninput="allvh(this,50,'H');" onfocus="myFunction(this, 'A');" onblur="myFunctionrev(this, 'A');" onkeydown="arrowmoveh(window.event, 5);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num50" id="num50" class="tbmp" size=5 oninput="calculateamtqty(this,50)" onfocus="myFunction(this, 'N', '50');" onblur="myFunctionrev(this, 'N', '50');" placeholder="50" onkeydown="arrowmove(window.event, 50);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num51" id="num51" class="tbmp" size=5 oninput="calculateamtqty(this,51)" onfocus="myFunction(this, 'N', '51');" onblur="myFunctionrev(this, 'N', '51');" placeholder="51" onkeydown="arrowmove(window.event, 51);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num52" id="num52" class="tbmp" size=5 oninput="calculateamtqty(this,52)" onfocus="myFunction(this, 'N', '52');" onblur="myFunctionrev(this, 'N', '52');" placeholder="52" onkeydown="arrowmove(window.event, 52);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num53" id="num53" class="tbmp" size=5 oninput="calculateamtqty(this,53)" onfocus="myFunction(this, 'N', '53');" onblur="myFunctionrev(this, 'N', '53');" placeholder="53" onkeydown="arrowmove(window.event, 53);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num54" id="num54" class="tbmp" size=5 oninput="calculateamtqty(this,54)" onfocus="myFunction(this, 'N', '54');" onblur="myFunctionrev(this, 'N', '54');" placeholder="54" onkeydown="arrowmove(window.event, 54);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num55" id="num55" class="tbmp" size=5 oninput="calculateamtqty(this,55)" onfocus="myFunction(this, 'N', '55');" onblur="myFunctionrev(this, 'N', '55');" placeholder="55" onkeydown="arrowmove(window.event, 55);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num56" id="num56" class="tbmp" size=5 oninput="calculateamtqty(this,56)" onfocus="myFunction(this, 'N', '56');" onblur="myFunctionrev(this, 'N', '56');" placeholder="56" onkeydown="arrowmove(window.event, 56);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num57" id="num57" class="tbmp" size=5 oninput="calculateamtqty(this,57)" onfocus="myFunction(this, 'N', '57');" onblur="myFunctionrev(this, 'N', '57');" placeholder="57" onkeydown="arrowmove(window.event, 57);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num58" id="num58" class="tbmp" size=5 oninput="calculateamtqty(this,58)" onfocus="myFunction(this, 'N', '58');" onblur="myFunctionrev(this, 'N', '58');" placeholder="58" onkeydown="arrowmove(window.event, 58);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num59" id="num59" class="tbmp" size=5 oninput="calculateamtqty(this,59)" onfocus="myFunction(this, 'N', '59');" onblur="myFunctionrev(this, 'N', '59');" placeholder="59" onkeydown="arrowmove(window.event, 59);">
                                                </td>
                                                <td class="last-o"><span>tto</span></td>
                                                <td class="tdqty color12" id="tbqf">&nbsp;</td>
                                                <td class="tdamt color11" id="tbaf">&nbsp;</td>
                                                <td align="center"><span class="tdr5 color5" id="rres5" style="padding: 3px !important;">S5</span></td>

                                            </tr>
                                            <tr>
                                                <td class="tdgwr"><span> S6 </span></td>
                                                <td class="tdgw tdg6">
                                                    <input type="checkbox" name="cblow6" id="cblow6" value="0" onclick="cblow0_Click(6)" />
                                                    <input type="checkbox" name="cbhigh6" id="cbhigh6" value="0" onclick="cbhighall_click(6)">
                                                </td>
                                                <td class="first"><span>Lotto</span></td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="tbh6" id="tbh6" class="tball" size=5 oninput="allvh(this,60,'H');" onfocus="myFunction(this, 'A');" onblur="myFunctionrev(this, 'A');" onkeydown="arrowmoveh(window.event, 6);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num60" id="num60" class="tbmp" size=5 oninput="calculateamtqty(this,60)" onfocus="myFunction(this, 'N', '60');" onblur="myFunctionrev(this, 'N', '60');" placeholder="60" onkeydown="arrowmove(window.event, 60);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num61" id="num61" class="tbmp" size=5 oninput="calculateamtqty(this,61)" onfocus="myFunction(this, 'N', '61');" onblur="myFunctionrev(this, 'N', '61');" placeholder="61" onkeydown="arrowmove(window.event, 61);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num62" id="num62" class="tbmp" size=5 oninput="calculateamtqty(this,62)" onfocus="myFunction(this, 'N', '62');" onblur="myFunctionrev(this, 'N', '62');" placeholder="62" onkeydown="arrowmove(window.event, 62);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num63" id="num63" class="tbmp" size=5 oninput="calculateamtqty(this,63)" onfocus="myFunction(this, 'N', '63');" onblur="myFunctionrev(this, 'N', '63');" placeholder="63" onkeydown="arrowmove(window.event, 63);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num64" id="num64" class="tbmp" size=5 oninput="calculateamtqty(this,64)" onfocus="myFunction(this, 'N', '64');" onblur="myFunctionrev(this, 'N', '64');" placeholder="64" onkeydown="arrowmove(window.event, 64);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num65" id="num65" class="tbmp" size=5 oninput="calculateamtqty(this,65)" onfocus="myFunction(this, 'N', '65');" onblur="myFunctionrev(this, 'N', '65');" placeholder="65" onkeydown="arrowmove(window.event, 65);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num66" id="num66" class="tbmp" size=5 oninput="calculateamtqty(this,66)" onfocus="myFunction(this, 'N', '66');" onblur="myFunctionrev(this, 'N', '66');" placeholder="66" onkeydown="arrowmove(window.event, 66);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num67" id="num67" class="tbmp" size=5 oninput="calculateamtqty(this,67)" onfocus="myFunction(this, 'N', '67');" onblur="myFunctionrev(this, 'N', '67');" placeholder="67" onkeydown="arrowmove(window.event, 67);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num68" id="num68" class="tbmp" size=5 oninput="calculateamtqty(this,68)" onfocus="myFunction(this, 'N', '68');" onblur="myFunctionrev(this, 'N', '68');" placeholder="68" onkeydown="arrowmove(window.event, 68);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num69" id="num69" class="tbmp" size=5 oninput="calculateamtqty(this,69)" onfocus="myFunction(this, 'N', '69');" onblur="myFunctionrev(this, 'N', '69');" placeholder="69" onkeydown="arrowmove(window.event, 69);">
                                                </td>
                                                <td class="first"><span>Lotto</span></td>
                                                <td class="tdqty color12" id="tbqg">&nbsp;</td>
                                                <td class="tdamt color11" id="tbag">&nbsp;</td>
                                                <td align="center"><span class="tdr6 color6" id="rres6" style="padding: 3px !important;">S6</span></td>

                                            </tr>
                                            <tr>
                                                <td class="tdgwr"><span> S7 </span></td>
                                                <td class="tdgw tdg7">
                                                    <input type="checkbox" name="cblow7" id="cblow7" value="0" onclick="cblow0_Click(7)" />
                                                    <input type="checkbox" name="cbhigh7" id="cbhigh7" value="0" onclick="cbhighall_click(7)">
                                                </td>
                                                <td class="last-o"><span>&nbsp;</span></td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="tbh7" id="tbh7" class="tball" size=5 oninput="allvh(this,70,'H');" onfocus="myFunction(this, 'A');" onblur="myFunctionrev(this, 'A');" onkeydown="arrowmoveh(window.event, 7);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num70" id="num70" class="tbmp" size=5 oninput="calculateamtqty(this,70)" onfocus="myFunction(this, 'N', '70');" onblur="myFunctionrev(this, 'N');" placeholder="70" onkeydown="arrowmove(window.event, 70);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num71" id="num71" class="tbmp" size=5 oninput="calculateamtqty(this,71)" onfocus="myFunction(this, 'N', '71');" onblur="myFunctionrev(this, 'N');" placeholder="71" onkeydown="arrowmove(window.event, 71);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num72" id="num72" class="tbmp" size=5 oninput="calculateamtqty(this,72)" onfocus="myFunction(this, 'N', '72');" onblur="myFunctionrev(this, 'N');" placeholder="72" onkeydown="arrowmove(window.event, 72);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num73" id="num73" class="tbmp" size=5 oninput="calculateamtqty(this,73)" onfocus="myFunction(this, 'N', '73');" onblur="myFunctionrev(this, 'N');" placeholder="73" onkeydown="arrowmove(window.event, 73);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num74" id="num74" class="tbmp" size=5 oninput="calculateamtqty(this,74)" onfocus="myFunction(this, 'N', '74');" onblur="myFunctionrev(this, 'N');" placeholder="74" onkeydown="arrowmove(window.event, 74);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num75" id="num75" class="tbmp" size=5 oninput="calculateamtqty(this,75)" onfocus="myFunction(this, 'N', '75');" onblur="myFunctionrev(this, 'N');" placeholder="75" onkeydown="arrowmove(window.event, 75);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num76" id="num76" class="tbmp" size=5 oninput="calculateamtqty(this,76)" onfocus="myFunction(this, 'N', '76');" onblur="myFunctionrev(this, 'N');" placeholder="76" onkeydown="arrowmove(window.event, 76);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num77" id="num77" class="tbmp" size=5 oninput="calculateamtqty(this,77)" onfocus="myFunction(this, 'N', '77');" onblur="myFunctionrev(this, 'N');" placeholder="77" onkeydown="arrowmove(window.event, 77);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num78" id="num78" class="tbmp" size=5 oninput="calculateamtqty(this,78)" onfocus="myFunction(this, 'N', '78');" onblur="myFunctionrev(this, 'N');" placeholder="78" onkeydown="arrowmove(window.event, 78);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num79" id="num79" class="tbmp" size=5 oninput="calculateamtqty(this,79)" onfocus="myFunction(this, 'N', '79');" onblur="myFunctionrev(this, 'N');" placeholder="79" onkeydown="arrowmove(window.event, 79);">
                                                </td>
                                                <td class="last-o"><span>&nbsp;</span></td>
                                                <td class="tdqty color12" id="tbqh">&nbsp;</td>
                                                <td class="tdamt color11" id="tbah">&nbsp;</td>
                                                <td align="center"><span class="tdr7 color7" id="rres7" style="padding: 3px !important;">S7</span></td>

                                            </tr>
                                            <tr>
                                                <td class="tdgwr"><span> S8 </span></td>
                                                <td class="tdgw tdg8">
                                                    <input type="checkbox" name="cblow8" id="cblow8" value="0" onclick="cblow0_Click(8)" />
                                                    <input type="checkbox" name="cbhigh8" id="cbhigh8" value="0" onclick="cbhighall_click(8)">
                                                </td>
                                                <td class="last-o"><span>tto</span></td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="tbh8" id="tbh8" class="tball" size=5 oninput="allvh(this,80,'H');" onfocus="myFunction(this, 'A');" onblur="myFunctionrev(this, 'A');" onkeydown="arrowmoveh(window.event, 8);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num80" id="num80" class="tbmp" size=5 oninput="calculateamtqty(this,80)" onfocus="myFunction(this, 'N', '80');" onblur="myFunctionrev(this, 'N', '80');" placeholder="80" onkeydown="arrowmove(window.event, 80);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num81" id="num81" class="tbmp" size=5 oninput="calculateamtqty(this,81)" onfocus="myFunction(this, 'N', '81');" onblur="myFunctionrev(this, 'N', '81');" placeholder="81" onkeydown="arrowmove(window.event, 81);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num82" id="num82" class="tbmp" size=5 oninput="calculateamtqty(this,82)" onfocus="myFunction(this, 'N', '82');" onblur="myFunctionrev(this, 'N', '82');" placeholder="82" onkeydown="arrowmove(window.event, 82);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num83" id="num83" class="tbmp" size=5 oninput="calculateamtqty(this,83)" onfocus="myFunction(this, 'N', '83');" onblur="myFunctionrev(this, 'N', '83');" placeholder="83" onkeydown="arrowmove(window.event, 83);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num84" id="num84" class="tbmp" size=5 oninput="calculateamtqty(this,84)" onfocus="myFunction(this, 'N', '84');" onblur="myFunctionrev(this, 'N', '84');" placeholder="84" onkeydown="arrowmove(window.event, 84);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num85" id="num85" class="tbmp" size=5 oninput="calculateamtqty(this,85)" onfocus="myFunction(this, 'N', '85');" onblur="myFunctionrev(this, 'N', '85');" placeholder="85" onkeydown="arrowmove(window.event, 85);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num86" id="num86" class="tbmp" size=5 oninput="calculateamtqty(this,86)" onfocus="myFunction(this, 'N', '86');" onblur="myFunctionrev(this, 'N', '86');" placeholder="86" onkeydown="arrowmove(window.event, 86);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num87" id="num87" class="tbmp" size=5 oninput="calculateamtqty(this,87)" onfocus="myFunction(this, 'N', '87');" onblur="myFunctionrev(this, 'N', '87');" placeholder="87" onkeydown="arrowmove(window.event, 87);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num88" id="num88" class="tbmp" size=5 oninput="calculateamtqty(this,88)" onfocus="myFunction(this, 'N', '88');" onblur="myFunctionrev(this, 'N', '88');" placeholder="88" onkeydown="arrowmove(window.event, 88);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num89" id="num89" class="tbmp" size=5 oninput="calculateamtqty(this,89)" onfocus="myFunction(this, 'N', '89');" onblur="myFunctionrev(this, 'N', '89');" placeholder="89" onkeydown="arrowmove(window.event, 89);">
                                                </td>
                                                <td class="last-o"><span>tto</span></td>
                                                <td class="tdqty color12" id="tbqi">&nbsp;</td>
                                                <td class="tdamt color11" id="tbai">&nbsp;</td>
                                                <td align="center"><span class="tdr8 color8" id="rres8" style="padding: 3px !important;">S8</span></td>

                                            </tr>
                                            <tr>
                                                <td class="tdgwr"><span> S9 </span></td>
                                                <td class="tdgw tdg9">
                                                    <input type="checkbox" name="cblow9" id="cblow9" value="0" onclick="cblow0_Click(9)" />
                                                    <input type="checkbox" name="cbhigh9" id="cbhigh9" value="0" onclick="cbhighall_click(9)">
                                                </td>
                                                <td class="first"><span>Lotto</span></td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="tbh9" id="tbh9" class="tball" size=5 oninput="allvh(this,90,'H');" onfocus="myFunction(this, 'A');" onblur="myFunctionrev(this, 'A');" onkeydown="arrowmoveh(window.event, 9);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num90" id="num90" class="tbmp" size=5 oninput="calculateamtqty(this,90)" onfocus="myFunction(this, 'N', '90');" onblur="myFunctionrev(this, 'N', '90');" placeholder="90" onkeydown="arrowmove(window.event, 90);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num91" id="num91" class="tbmp" size=5 oninput="calculateamtqty(this,91)" onfocus="myFunction(this, 'N', '91');" onblur="myFunctionrev(this, 'N', '91');" placeholder="91" onkeydown="arrowmove(window.event, 91);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num92" id="num92" class="tbmp" size=5 oninput="calculateamtqty(this,92)" onfocus="myFunction(this, 'N', '92');" onblur="myFunctionrev(this, 'N', '92');" placeholder="92" onkeydown="arrowmove(window.event, 92);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num93" id="num93" class="tbmp" size=5 oninput="calculateamtqty(this,93)" onfocus="myFunction(this, 'N', '93');" onblur="myFunctionrev(this, 'N', '93');" placeholder="93" onkeydown="arrowmove(window.event, 93);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num94" id="num94" class="tbmp" size=5 oninput="calculateamtqty(this,94)" onfocus="myFunction(this, 'N', '94');" onblur="myFunctionrev(this, 'N', '94');" placeholder="94" onkeydown="arrowmove(window.event, 94);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num95" id="num95" class="tbmp" size=5 oninput="calculateamtqty(this,95)" onfocus="myFunction(this, 'N', '95');" onblur="myFunctionrev(this, 'N', '95');" placeholder="95" onkeydown="arrowmove(window.event, 95);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num96" id="num96" class="tbmp" size=5 oninput="calculateamtqty(this,96)" onfocus="myFunction(this, 'N', '96');" onblur="myFunctionrev(this, 'N', '96');" placeholder="96" onkeydown="arrowmove(window.event, 96);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num97" id="num97" class="tbmp" size=5 oninput="calculateamtqty(this,97)" onfocus="myFunction(this, 'N', '97');" onblur="myFunctionrev(this, 'N', '97');" placeholder="97" onkeydown="arrowmove(window.event, 97);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num98" id="num98" class="tbmp" size=5 oninput="calculateamtqty(this,98)" onfocus="myFunction(this, 'N', '98');" onblur="myFunctionrev(this, 'N', '98');" placeholder="98" onkeydown="arrowmove(window.event, 98);">
                                                </td>
                                                <td align="center">
                                                    <input type="textbox" maxlength=3 name="num99" id="num99" class="tbmp" size=5 oninput="calculateamtqty(this,99)" onfocus="myFunction(this, 'N', '99');" onblur="myFunctionrev(this, 'N', '99');" placeholder="99" onkeydown="arrowmove(window.event, 99);">
                                                </td>
                                                <td class="first"><span>Lotto</span></td>
                                                <td class="tdqty color12" id="tbqj">&nbsp;</td>
                                                <td class="tdamt color11" id="tbaj">&nbsp;</td>
                                                <td align="center"><span class="tdr9 color9" id="rres9" style="padding: 3px !important;">S9</span></td>

                                            </tr>
                                            <tr>
                                                <td colspan="15">
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <button class="bottombtn" id="btnbg0" style="height: 30px; background-color:#f6accd;border:#f6accd" onclick="btnlow_Click();">Reset</button>

                                                            </td>

                                                            <td style="background-color: white;width:100px; height: 30px;">
                                                                <input type="text" placeholder="Scan Barcode" class="bottombtn" onkeyup="getClime(event)" id="scancode" name="scancode">

                                                            </td>
                                                            <td style="
                                                    background: #FFF;
                                                    border-radius: 4px;
                                                    height: 30px;
                                                    display: flex;
                                                    flex-direction: column;
                                                    align-content: center;
                                                    justify-content: center;
                                                    align-items: center;
                                                ">
                                                                <span id="msg" style="text-align: center;">MSG</span>
                                                            </td>
                                                            <td>
                                                                <button class="bottombtn" id="btnbets" style="background-color: #f48489;font-size: 20px; padding-left:10px; padding-right:10px; height: 30px;">Transaction</button>

                                                            </td>
                                                            <td>
                                                                <button class="bottombtn" id="btnadv" style="border-color:#8dd8f8; background-color: #8dd8f8;font-size: 20px;padding-left:10px; padding-right:10px;height: 30px;" onclick="adv_click();">AD Draw</button>


                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>

                                                <td class="tdqty color12" id="tblcqty">&nbsp;</td>
                                                <td class="tdamt color11" id="tblcamt">&nbsp;</td>
                                                <td align="center">&nbsp;</td>
                                                <td class="tdtime" style="display: none;" id="lastdrawr"></td>
                                                <td class="tdtitleright" style="display: none;"><a href="/?r=logout"><input type="button" class="buttonlogout" value="Logout"></a></td>
                                            </tr>
                                        </table>
                                    </td>

                                </tr>
                            </table>
                        </div>
                        <div id="advpan">
                            <table>
                                <tr>
                                    <td colspan="3">
                                        <table width="100%" border="0">
                                            <tr>
                                                <td align="center">
                                                    <table width="80%"></table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>

                                </tr>
                            </table>
                        </div>

                    </td>
                </tr>
                <tr>
                    <td>
                        <table>
                            <tr>
                                <td style="display: flex;">



                                </td>

                            </tr>
                        </table>
                    </td>

                </tr>
            </table>

            <table border="0" width="100%; display:none;">
                <tr id="game_series_list">
                    <td class="tdorange" nowrap valign=top><input type="checkbox" name="s0" id="s0" Checked value="0" onclick="seriesclick();"><label for="s0">&nbsp;&nbsp;0000-0999</label></td>
                    <td class="tdorange" nowrap valign=top><input type="checkbox" name="s1" id="s1" value="1" onclick="seriesclick();"><label for="s1">&nbsp;&nbsp;1000-1999</label></td>
                    <td class="tdorange" nowrap valign=top><input type="checkbox" name="s2" id="s2" value="2" onclick="seriesclick();"><label for="s2">&nbsp;&nbsp;2000-2999</label></td>
                    <td class="tdorange" nowrap valign=top><input type="checkbox" name="s3" id="s3" value="3" onclick="seriesclick();"><label for="s3">&nbsp;&nbsp;3000-3999</label></td>
                    <td class="tdorange" nowrap valign=top><input type="checkbox" name="s4" id="s4" value="4" onclick="seriesclick();"><label for="s4">&nbsp;&nbsp;4000-4999</label></td>
                    <td class="tdorange" nowrap valign=top><input type="checkbox" name="s5" id="s5" value="5" onclick="seriesclick();"><label for="s5">&nbsp;&nbsp;5000-5999</label></td>
                    <td class="tdorange" nowrap valign=top><input type="checkbox" name="s6" id="s6" value="6" onclick="seriesclick();"><label for="s6">&nbsp;&nbsp;6000-6999</label></td>
                    <td class="tdorange" nowrap valign=top><input type="checkbox" name="s7" id="s7" value="7" onclick="seriesclick();"><label for="s7">&nbsp;&nbsp;7000-7999</label></td>
                    <td class="tdorange" nowrap valign=top><input type="checkbox" name="s8" id="s8" value="8" onclick="seriesclick();"><label for="s8">&nbsp;&nbsp;8000-8999</label></td>
                    <td class="tdorange" nowrap valign=top><input type="checkbox" name="s9" id="s9" value="9" onclick="seriesclick();"><label for="s9">&nbsp;&nbsp;9000-9999</label></td>
                </tr>
            </table>
            <div style="display: none !important;">
                <table border="0" width="100%">
                    <tr>
                        <td class="tdaeogp" nowrap>
                            <input type="checkbox" name="cball" id="cball" Checked onclick="cball_Click();">&nbsp;
                            <label for="cball">All&nbsp;</label>
                        </td>
                        <td class="tdaeogp" nowrap>
                            <input type="checkbox" name="cbeven" id="cbeven" onclick="cbeven_Click();">&nbsp;
                            <label for="cbeven">Even</label>
                        </td>
                        <td class="tdaeogp" nowrap>
                            <input type="checkbox" name="chodd" id="chodd" onclick="cbodd_Click();">&nbsp;
                            <label for="chodd">Odd&nbsp; </label>
                        </td>
                        <td align="right">
                            <input type="textbox" name="txtLuckyStone" id="txtLuckyStone" class="tbmp-lucky" size=5 maxlength="2">&nbsp;&nbsp;
                        </td>
                        <td class="tdorange" onclick="btnLuckyStone_Click()">LP</td>

                    </tr>
                </table>

                <table border="0" width="100%" cellpadding="2">
                    <tr>
                        <td class="tdaeoo">
                            <input type="checkbox" name="sall" id="sall" value="A" onclick="___seriesclickall();">&nbsp;
                            <label for="sall">All&nbsp;</label>
                        </td>
                        <td class="tdaeob" style="display: none;">
                            <input type="checkbox" name="seven" id="seven" value="E" onclick="seriesclickeven();">&nbsp;
                            <label for="seven"> Even</label>
                        </td>
                        <td class="tdaeop" style="display:none;">
                            <input type="checkbox" name="sodd" id="sodd" value="O" onclick="seriesclickodd();">&nbsp;
                            <label for="sodd"> Odd&nbsp;</label>
                        </td>
                    </tr>
                </table>
            </div>
            <marquee bgcolor="#000000">
                <div id="spannews" class="newsdv">

                </div>
            </marquee>
        </div>



        <!--Bet Details modal-->
        <div id="modal">
            <div id="modal-content">
                <div class="modalr-header">
                    <span class="close" id="close-m">&nbsp;Close&nbsp;</span>
                </div>
                <div class="modalr-body">
                    <span id="betspan"></span>
                </div>
            </div>
        </div>
        <!--Bet Details modal ends here-->
        <style>
            /* The claim (background) */
            .claim {
                display: none;
                /* Hidden by default */
                position: fixed;
                /* Stay in place */
                z-index: 1;
                /* Sit on top */
                padding-top: 100px;
                /* Location of the box */
                left: 0;
                top: 0;
                width: 100%;
                /* Full width */
                height: 100%;
                /* Full height */
                overflow: auto;
                /* Enable scroll if needed */
                background-color: rgb(0, 0, 0);
                /* Fallback color */
                background-color: rgba(0, 0, 0, 0.4);
                /* Black w/ opacity */
            }

            /* claim Content */
            .claim-content {
                background-color: #fefefe;
                margin: auto;
                padding: 20px;
                border: 1px solid #888;
                width: 50%;
            }



            #claim-msg {
                font-size: 25px;
                text-align: center;
                font-weight: bolder;
                color: red;
            }

            body {
                background: #000;
                display: flex;
                width: 100%;
                align-content: center;
                align-items: center;
                flex-direction: column;
            }

            table tr td {
                background: transparent;
            }

            .claim-content-animation {
                background-color: #fefefe;
                margin: auto;
                padding: 2px;
                border: 1px solid #888;
                width: 100%;
            }

            .claim-animation {
                display: none;
                position: fixed;
                z-index: 1;
                padding-top: 0px;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                overflow: auto;
                background-color: rgb(0, 0, 0);
                background-color: rgba(0, 0, 0, 0.4);
            }
        </style>
        <!-- Trigger/Open The claim -->
        <!--<button id="myBtn">Open claim</button>-->

        <!-- The claim -->
        <div id="myClaim" class="claim">

            <!-- claim content -->
            <div class="claim-content">
                <span class="close" id="close-btn" onclick="closebtn()">&times;</span>
                <p id="claim-msg"></p>
                <div id="claim-msg2"></div>

            </div>

        </div>
        <div id="myOffer" class="claim">

            <!-- claim content -->
            <div class="claim-content" style="background:transparent !important; border:none !important;">
                <span class="close" id="close-btn" onclick="closebtn()">&times;</span>
                <p id="claim-msg"></p>
                <div id="claim-msgffer"></div>

            </div>

        </div>
        <div id="animation" class="claim-animation">

            <!-- claim content -->
            <div class="claim-content-animation" style="background:black !important; border:none !important;">
                <span class="close" id="close-btn" onclick="closebtn()">&times;</span>
                <p id="claim-msg"></p>
                <div id="claim-ms">
                    <iframe id="ani_rel" src="/lotto/" style="width: 100%; height:100%; border:none;"></iframe>
                </div>

            </div>

        </div>

        <!-- <div id="divhigh" style="display: none;">

        </div>
        <div id="divlow" style="display: none !important;">
            

        </div> -->
        <script>
            // Get the claim
            var claim = document.getElementById("myClaim");
            var myOffer = document.getElementById("myOffer");
            var animation = document.getElementById("animation");

            // Get the button that opens the claim
            //        var btn = document.getElementById("myBtn");

            // Get the <span> element that closes the claim
            var span_close = document.getElementById("close-btn");

            // When the user clicks the button, open the claim 
            //        btn.onclick = function () {
            //            claim.style.display = "block";
            //        };

            // When the user clicks on <span> (x), close the claim
            function closebtn() {

                claim.style.display = "none";
                myOffer.style.display = "none";
                animation.style.display = "none";
                document.getElementById("claim-msg").innerHTML = "";
            }

            // When the user clicks anywhere outside of the claim, close it
        </script>

        <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the button that opens the modal
            var btn = document.getElementById("btncan");

            // Get the No btn element that closes the modal
            var btnno = document.getElementById("btnno");

            // Get the No btn element that closes the modal
            var btnyes = document.getElementById("btnyes");

            // Get the <span> element that closes the modal
            var span = document.getElementById("closec");

            // When the user clicks the button, open the modal 

            // When the user clicks on <span> (x), close the modal


            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                //alert(event.target);
                if (event.target == modal) {
                    modal.style.display = "none";
                }

                if (event.target == modal1) {
                    modal1.style.display = "none";
                }

                if (event.target == claim) {
                    claim.style.display = "none";
                    document.getElementById("claim-msg").innerHTML = "";
                }


            }

            document.onkeypress = function(e) {
                e = e || window.event;
                // use e.keyCode
                // if (e.keyCode == 32) {
                //     claim.style.display = "none";
                //     document.getElementById("claim-msg").innerHTML = "";
                //     document.getElementById("claim-msg2").innerHTML = "";
                // }

            };


            //bet details js

            var modal1 = document.getElementById('modal');

            var btn1 = document.getElementById("btnbets");

            var span1 = document.getElementById("close-m");

            btn1.onclick = function() {
                //alert("hi1");
                if (inflag == "true") {
                    funclastbet1();
                    modal1.style.display = "block";
                } else {
                    document.getElementById("msg").innerHTML = "Please Login For Bet Details..";
                    msgctr = 8;

                }

            };

            span1.onclick = function() {
                modal1.style.display = "none";
            };





            //bet detail js ends



            var api_url = "<?= api_url ?>";
            var userid = "<?= $_SESSION["userid"] ?>";
            var id = "<?= $_SESSION["id"] ?>";
            var company = "<?= company ?>";
            var image = api_url + "<?= image ?>";


            function getClime(event) {
                event.preventDefault();
                document.getElementById("claim-msg").innerHTML = "";
                document.getElementById("claim-msg2").innerHTML = "";
                if (event.keyCode == 13) {
                    var barcode = document.getElementById("scancode").value;

                    claminBet(barcode);
                    //                console.log(JSON.stringify({"id": barcode.trim(), "userid": userid,"key":event.keyCode}));
                }
            }

            function setCookie(name, value, days) {
                var expires = "";
                if (days) {
                    var date = new Date();
                    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                    expires = "; expires=" + date.toUTCString();
                }
                document.cookie = name + "=" + (value || "") + expires + "; path=/";
            }

            function getCookie(name) {
                var nameEQ = name + "=";
                var ca = document.cookie.split(';');
                for (var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ')
                        c = c.substring(1, c.length);
                    if (c.indexOf(nameEQ) == 0)
                        return c.substring(nameEQ.length, c.length);
                }
                return null;
            }

            function eraseCookie(name) {
                document.cookie = name + '=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
            }
            var time = 300;

            setInterval(function() {
                if (time == 0) {
                    showOfferBanner();
                    time = 1200;
                } else {
                    time--;
                    //console.log(time);
                }
            }, 1000);

            function onLoadingPage() {
                setTimeout(function() {
                    var x = getCookie("once");
                    //console.log(x);
                    if (!x) {
                        setCookie("once", "offer", 1)
                        showOfferBanner();
                    }
                }, 2000);

            }

            function showOfferBanner() {
                var banner = '<div><center><img style="width:100%; height:auto;" src="/assets/yatara/dada.webp" alt="offer"/></center></div>';
                myOffer.style.display = "block";
                myOffer.style.background = "transparent";
                document.getElementById("claim-msgffer").innerHTML = banner;
                //                               
            }

            function showAnimation() {

                console.log("animation", animation);
                //document.getElementById("ani_rel").location.reload();
                document.getElementById('ani_rel').contentWindow.location.reload()
                animation.style.display = "block";
                setTimeout(function() {
                    animation.style.display = "none";
                }, 25000)
                console.log("animation", animation);

            }

            function claminBet(barcode) {
                document.getElementById("claim-msg2").innerHTML = "";
                var jsonData2;
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        if (this.responseText != "false") {
                            console.log(this.responseText);
                            var jsonData = JSON.parse(this.responseText);
                            var data;
                            if (jsonData.status === "1") {
                                document.getElementById("msg").innerHTML = jsonData.message;
                                document.getElementById("claim-msg").innerHTML = jsonData.message;
                                claim.style.display = "block";
                                document.getElementById("scancode").value = "";
                                jsonData2 = JSON.parse(this.responseText);
                                jsonData2 = JSON.parse(this.responseText);
                                if (jsonData2["0"]["recip"] != null) {
                                    data = "<br>" + jsonData2["0"]["recip"];
                                    document.getElementById("claim-msg2").innerHTML = data;
                                    //                                    claim.style.display = "block";
                                }

                                //                                printWinRecipt(this.responseText);
                            } else {
                                document.getElementById("msg").innerHTML = jsonData.message;
                                document.getElementById("claim-msg").innerHTML = jsonData.message;
                                claim.style.display = "block";
                                document.getElementById("scancode").value = "";
                                jsonData2 = JSON.parse(this.responseText);
                                if (jsonData2["0"]["recip"] != null) {
                                    data = "<br>" + jsonData2["0"]["recip"];
                                    document.getElementById("claim-msg2").innerHTML = data;
                                    // claim.style.display = "block";
                                }

                            }

                            updateBalance();
                        }
                    }
                };
                xhttp.open("POST", api_url + "/?r=checkWinner", false);
                xhttp.setRequestHeader("Content-type", "application/json");
                xhttp.send(JSON.stringify({
                    "id": barcode.trim(),
                    "userid": userid
                }));

            }
        </script>

        <!--<script src="assets/yatara/gb.js" type="text/javascript"></script>-->
        <script src="assets/yatara/main.js" type="text/javascript"></script>
        <script src="assets/yatara/render.js" type="text/javascript"></script>
    </body>

</html>