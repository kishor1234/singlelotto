/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function currentTime() {
    var date = new Date(); /* creating object of Date class */
    var hour = date.getHours();
    var min = date.getMinutes();
    var sec = date.getSeconds();
    hour = updateTime(hour);
    min = updateTime(min);
    sec = updateTime(sec);
    document.getElementById("currtime").innerHTML = "Current Time : " + hour + ":" + min + ":" + sec; /* adding time to the div */
    setTimeout(function () {
        currentTime();
    }, 1000); /* setting timer */
}

function updateTime(k) {
    if (k < 10) {
        return "0" + k;
    } else {
        return k;
    }
}

currentTime(); /* calling currentTime() function to initiate the process */

/* showhide divhigh and divlow*/
let fun_array;
var mrp;
var waitTimeOut = 0;
var seconds = 0;
var minutes = 0;
var hours = 0;
var currseconds = 0;
var currminutes = 0;
var currhours = 0;
var gmcd;
var schcd;
var lastres = "";
var lastdrtm = "";
var starttime = "";
var advstr = "";
var interval = "";
var locadd;
var resstr = "";
var firstcall = true;
var multiplier0 = 1;
var multiplier1 = 1;
var multiplier2 = 1;
var multiplier3 = 1;
var multiplier4 = 1;
var multiplier5 = 1;
var multiplier6 = 1;
var multiplier7 = 1;
var multiplier8 = 1;
var multiplier9 = 1;
var advflag = false;
var audiox;
var uname = "";
var climit = 0;
var lasttsn = "";
var lastamt = 0;
var lastbetstr = "";
var msgctr = 0;
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth() + 1;
var yyyy = today.getFullYear();
var inflag = "";
var rescounter = 0;
var resflag = "false";
var curtm = "";
var ctm = "";
var newsstr = "";
var bets = [];
var agentname = "";
var rpflag = "R";
var seriesa = "0";
var seriesloc = 0;
var systm;
var gmtm;
var playarea = "1";
var highlowstatus = "l";
var totalqtylc = 0;
var alltxtlc = "",
        alltxta = "",
        alltxtb = "",
        alltxtc = "",
        alltxtd = "",
        alltxte = "",
        alltxtf = "",
        alltxtg = "",
        alltxth = "",
        alltxti = "",
        alltxtj = "";
var finaltotalqtya = 0,
        finaltotalqtyb = 0,
        finaltotalqtyc = 0,
        finaltotalqtyd = 0,
        finaltotalqtye = 0,
        finaltotalqtyf = 0,
        finaltotalqtyg = 0,
        finaltotalqtyh = 0,
        finaltotalqtyi = 0,
        finaltotalqtyj = 0;
var aClicked = false,
        bClicked = false,
        cClicked = false,
        dClicked = false,
        eClicked = false,
        fClicked = false,
        gClicked = false,
        hClicked = false,
        iClicked = false,
        jClicked = false;
var finaltotalamta = 0,
        finaltotalamtb = 0,
        finaltotalamtc = 0,
        finaltotalamtd = 0,
        finaltotalamte = 0,
        finaltotalamtf = 0,
        finaltotalamtg = 0,
        finaltotalamth = 0,
        finaltotalamti = 0,
        finaltotalamtj = 0;
var fpflag = false;
var fpstart = false;
var fpstart = false;
var temptotal = 0;
var tempqty = 0;
var qtya = 0;
var qtyb = 0;
var qtyc = 0;
var qtyd = 0;
var qtye = 0;
var amta = 0;
var amtb = 0;
var amtc = 0;
var amtd = 0;
var amte = 0;
var qty = 0;
var amt = 0;

function load_frm() {
    document.getElementById("divhigh").style.display = "none";
    document.getElementById("divlow").style.display = "block";
    document.getElementById("resdiv").style.display = "none";
    document.getElementById("qtyamt").style.display = "block";
    document.getElementById("btnadv").disabled = true;
    document.getElementById("advpan").style.display = "none";
    document.getElementById("gamepan").style.display = "block";
    var xhttp = new XMLHttpRequest();
    for (i = 0; i < 100; i++) {
        bets[i] = 0;
    }
    today = dd + "/" + mm + "/" + yyyy;
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText != "false") {
                var response = this.responseText.split("!");
                systm = response[0];
                gmtm = response[1];
                schcd = response[2];
                gmcd = response[3];
                mrp = response[4];
                lastdrtm = response[5];
                lastres = response[6];
                resstr = response[7];
                uname = response[8];
                climit = response[9];
                inflag = response[10];
                newsstr = response[11];
                agentname = response[12];
                advstr = response[13];
                document.getElementById("lastdraw").innerHTML = lastdrtm;
                document.getElementById("lastdrawr").innerText = lastdrtm;
                document.getElementById("nextdraw").innerHTML = gmtm;
                document.getElementById("spannews").innerHTML = newsstr;
                document.getElementById("currdate").innerHTML = today;
                if (lastres != "") {
                    var _0x18D47;
                    _0x18D47 = lastres.split(",");
                    document.getElementById("res0").innerHTML = _0x18D47[0];
                    document.getElementById("res1").innerHTML = _0x18D47[1];
                    document.getElementById("res2").innerHTML = _0x18D47[2];
                    document.getElementById("res3").innerHTML = _0x18D47[3];
                    document.getElementById("res4").innerHTML = _0x18D47[4];
                    document.getElementById("res5").innerHTML = _0x18D47[5];
                    document.getElementById("res6").innerHTML = _0x18D47[6];
                    document.getElementById("res7").innerHTML = _0x18D47[7];
                    document.getElementById("res8").innerHTML = _0x18D47[8];
                    document.getElementById("res9").innerHTML = _0x18D47[9];
                    document.getElementById("rres0").innerHTML = _0x18D47[0];
                    document.getElementById("rres1").innerHTML = _0x18D47[1];
                    document.getElementById("rres2").innerHTML = _0x18D47[2];
                    document.getElementById("rres3").innerHTML = _0x18D47[3];
                    document.getElementById("rres4").innerHTML = _0x18D47[4];
                    document.getElementById("rres5").innerHTML = _0x18D47[5];
                    document.getElementById("rres6").innerHTML = _0x18D47[6];
                    document.getElementById("rres7").innerHTML = _0x18D47[7];
                    document.getElementById("rres8").innerHTML = _0x18D47[8];
                    document.getElementById("rres9").innerHTML = _0x18D47[9];
                }
                if (gmtm != "") {
                    timediff(systm, gmtm, "H7");
                }
                timediffcurr(systm);
                clearInterval(waitTimeOut);
                waitTimeOut = setInterval(displaycurr, 1000);
                if (inflag == "true") {
                    document.getElementById("creditlimit").innerHTML = climit;
                    document.getElementById("agentdet").innerHTML = "   WELCOME " + uname + " (" + agentname + ")";
                } else {
                }
                btnlow_Click();
                leftset(0);
                if (gmtm != "") {
                    if (firstcall) {
                        firstcall = false;
                    }
                } else {
                    document.getElementById("msg").innerHTML = "Draw Over";
                }
            } else {
                window.location = "index.asp";
            }
        }
    };
    xhttp.open("GET", "game1param.asp", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send();
}
function showhide(L, H) {
    let divHigh = document.getElementById('divhigh');
    let divLow = document.getElementById('divlow');
    let divRes = document.getElementById('resdiv');
    let divPot = document.getElementById('qtyamt');
    if (H === "H") {
        if (divHigh.style.display === "none") {
            divHigh.style.display = "block";
            divLow.style.display = "none";
        }
    } else if (H === "L") {
        if (divLow.style.display === "none") {
            divHigh.style.display = "none";
            divLow.style.display = "block";
        }
    } else if (H === "P") {
        if (divPot.style.display === "none") {
            divPot.style.display = "block";
            divRes.style.display = "none";
        } else {
            divRes.style.display = "block";
            divPot.style.display = "none";
        }
    }
}

function rbmulall_Click(key) {
    mulfunc(key);
}
function mulfunc(key) {
    document.getElementById("rbmul1").checked = false;
    document.getElementById("rbmul2").checked = false;
    document.getElementById("rbmul5").checked = false;
    document.getElementById("rbmul10").checked = false;
    document.getElementById("rbmul20").checked = false;
    var mrp = "";
    if (key == 1) {
        document.getElementById("rbmul1").checked = true;
        multiplier0 = 1;
        multiplier1 = 1;
        multiplier2 = 1;
        multiplier3 = 1;
        multiplier4 = 1;
        multiplier5 = 1;
        multiplier6 = 1;
        multiplier7 = 1;
        multiplier8 = 1;
        multiplier9 = 1;
        mrp = "(Rs.   2 )";
    } else {
        if (key == 2) {
            document.getElementById("rbmul2").checked = true;
            multiplier = 2;
            multiplier0 = 2;
            multiplier1 = 2;
            multiplier2 = 2;
            multiplier3 = 2;
            multiplier4 = 2;
            multiplier5 = 2;
            multiplier6 = 2;
            multiplier7 = 2;
            multiplier8 = 2;
            multiplier9 = 2;
            mrp = "(Rs.   4 )";
        } else {
            if (key == 5) {
                document.getElementById("rbmul5").checked = true;
                multiplier = 5;
                multiplier0 = 5;
                multiplier1 = 5;
                multiplier2 = 5;
                multiplier3 = 5;
                multiplier4 = 5;
                multiplier5 = 5;
                multiplier6 = 5;
                multiplier7 = 5;
                multiplier8 = 5;
                multiplier9 = 5;
                mrp = "(Rs.   10 )";
            } else {
                if (key == 10) {
                    document.getElementById("rbmul10").checked = true;
                    multiplier = 10;
                    multiplier0 = 10;
                    multiplier1 = 10;
                    multiplier2 = 10;
                    multiplier3 = 10;
                    multiplier4 = 10;
                    multiplier5 = 10;
                    multiplier6 = 10;
                    multiplier7 = 10;
                    multiplier8 = 10;
                    multiplier9 = 10;
                    mrp = "(Rs.   20 )";
                } else {
                    if (key == 20) {
                        document.getElementById("rbmul20").checked = true;
                        multiplier = 20;
                        multiplier0 = 20;
                        multiplier1 = 20;
                        multiplier2 = 20;
                        multiplier3 = 20;
                        multiplier4 = 20;
                        multiplier5 = 20;
                        multiplier6 = 20;
                        multiplier7 = 20;
                        multiplier8 = 20;
                        multiplier9 = 20;
                        mrp = "(Rs.   40 )";
                    }
                }
            }
        }
    }
    document.getElementById("lbllow0").innerText = mrp;
    document.getElementById("lbllow1").innerText = mrp;
    document.getElementById("lbllow2").innerText = mrp;
    document.getElementById("lbllow3").innerText = mrp;
    document.getElementById("lbllow4").innerText = mrp;
    document.getElementById("lbllow5").innerText = mrp;
    document.getElementById("lbllow6").innerText = mrp;
    document.getElementById("lbllow7").innerText = mrp;
    document.getElementById("lbllow8").innerText = mrp;
    document.getElementById("lbllow9").innerText = mrp;
    betcollectionlc();
    calcalllc();
}
function betcollectionlc() {
    if (alltxtlc != "") {
        if (aClicked) {
            alltxta = alltxtlc;
            finaltotalqtya = totalqtylc;
            finaltotalamta = totalqtylc * mrp * multiplier0;
            document.getElementById("tbqa").innerText = finaltotalqtya.toString();
            document.getElementById("tbaa").innerText = finaltotalamta.toString();
        } else {
            if (cblowcheck("l") || cblowcheck("h")) {
                alltxta = "";
                finaltotalqtya = 0;
                finaltotalamta = 0;
                document.getElementById("tbqa").innerText = "";
                document.getElementById("tbaa").innerText = "";
            }
        }
        if (bClicked) {
            alltxtb = alltxtlc;
            finaltotalqtyb = totalqtylc;
            finaltotalamtb = totalqtylc * mrp * multiplier1;
            document.getElementById("tbqb").innerText = finaltotalqtyb.toString();
            document.getElementById("tbab").innerText = finaltotalamtb.toString();
        } else {
            if (cblowcheck("l") || cblowcheck("h")) {
                alltxtb = "";
                finaltotalqtyb = 0;
                finaltotalamtb = 0;
                document.getElementById("tbqb").innerText = "";
                document.getElementById("tbab").innerText = "";
            }
        }
        if (cClicked) {
            alltxtc = alltxtlc;
            finaltotalqtyc = totalqtylc;
            finaltotalamtc = totalqtylc * mrp * multiplier2;
            document.getElementById("tbqc").innerText = finaltotalqtyc.toString();
            document.getElementById("tbac").innerText = finaltotalamtc.toString();
        } else {
            if (cblowcheck("l") || cblowcheck("h")) {
                alltxtc = "";
                finaltotalqtyc = 0;
                finaltotalamtc = 0;
                document.getElementById("tbqc").innerText = "";
                document.getElementById("tbac").innerText = "";
            }
        }
        if (dClicked) {
            alltxtd = alltxtlc;
            finaltotalqtyd = totalqtylc;
            finaltotalamtd = totalqtylc * mrp * multiplier3;
            tbqd.Text = finaltotalqtyd.toString();
            tbad.Text = finaltotalamtd.toString();
        } else {
            if (cblowcheck("l") || cblowcheck("h")) {
                alltxtd = "";
                finaltotalqtyd = 0;
                finaltotalamtd = 0;
                document.getElementById("tbqd").innerText = "";
                document.getElementById("tbad").innerText = "";
            }
        }
        if (eClicked) {
            alltxte = alltxtlc;
            finaltotalqtye = totalqtylc;
            finaltotalamte = totalqtylc * mrp * multiplier4;
            document.getElementById("tbqe").innerText = finaltotalqtye.toString();
            document.getElementById("tbae").innerText = finaltotalamte.toString();
        } else {
            if (cblowcheck("l") || cblowcheck("h")) {
                alltxte = "";
                finaltotalqtye = 0;
                finaltotalamte = 0;
                document.getElementById("tbqe").innerText = "";
                document.getElementById("tbae").innerText = "";
            }
        }
        if (fClicked) {
            alltxtf = alltxtlc;
            finaltotalqtyf = totalqtylc;
            finaltotalamtf = totalqtylc * mrp * multiplier5;
            document.getElementById("tbqf").innerText = finaltotalqtyf.toString();
            document.getElementById("tbaf").innerText = finaltotalamtf.toString();
        } else {
            if (cblowcheck("l") || cblowcheck("h")) {
                alltxtf = "";
                finaltotalqtyf = 0;
                finaltotalamtf = 0;
                document.getElementById("tbqf").innerText = "";
                document.getElementById("tbaf").innerText = "";
            }
        }
        if (gClicked) {
            alltxtg = alltxtlc;
            finaltotalqtyg = totalqtylc;
            finaltotalamtg = totalqtylc * mrp * multiplier6;
            document.getElementById("tbqg").innerText = finaltotalqtyg.toString();
            document.getElementById("tbag").innerText = finaltotalamtg.toString();
        } else {
            if (cblowcheck("l") || cblowcheck("h")) {
                alltxtg = "";
                finaltotalqtyg = 0;
                finaltotalamtg = 0;
                document.getElementById("tbqg").innerText = "";
                document.getElementById("tbag").innerText = "";
            }
        }
        if (hClicked) {
            alltxth = alltxtlc;
            finaltotalqtyh = totalqtylc;
            finaltotalamth = totalqtylc * mrp * multiplier7;
            document.getElementById("tbqh").innerText = finaltotalqtyh.toString();
            document.getElementById("tbah").innerText = finaltotalamth.toString();
        } else {
            if (cblowcheck("l") || cblowcheck("h")) {
                alltxth = "";
                finaltotalqtyh = 0;
                finaltotalamth = 0;
                document.getElementById("tbqh").innerText = "";
                document.getElementById("tbah").innerText = "";
            }
        }
        if (iClicked) {
            alltxti = alltxtlc;
            finaltotalqtyi = totalqtylc;
            finaltotalamti = totalqtylc * mrp * multiplier8;
            document.getElementById("tbqi").innerText = finaltotalqtyi.toString();
            document.getElementById("tbai").innerText = finaltotalamti.toString();
        } else {
            if (cblowcheck("l") || cblowcheck("h")) {
                alltxti = "";
                finaltotalqtyi = 0;
                finaltotalamti = 0;
                document.getElementById("tbqi").innerText = "";
                document.getElementById("tbai").innerText = "";
            }
        }
        if (jClicked) {
            alltxtj = alltxtlc;
            finaltotalqtyj = totalqtylc;
            finaltotalamtj = totalqtylc * mrp * multiplier9;
            document.getElementById("tbqj").innerText = finaltotalqtyj.toString();
            document.getElementById("tbaj").innerText = finaltotalamtj.toString();
        } else {
            if (cblowcheck("l") || cblowcheck("h")) {
                alltxtj = "";
                finaltotalqtyj = 0;
                finaltotalamtj = 0;
                document.getElementById("tbqj").innerText = "";
                document.getElementById("tbaj").innerText = "";
            }
        }
    } else {
        if (aClicked == true) {
            alltxta = "";
            finaltotalqtya = 0;
            finaltotalamta = 0;
            document.getElementById("tbqa").innerText = "";
            document.getElementById("tbaa").innerText = "";
        }
        if (bClicked == true) {
            alltxtb = "";
            finaltotalqtyb = 0;
            finaltotalamtb = 0;
            document.getElementById("tbqb").innerText = "";
            document.getElementById("tbab").innerText = "";
        }
        if (cClicked == true) {
            alltxtc = "";
            finaltotalqtyc = 0;
            finaltotalamtc = 0;
            document.getElementById("tbqc").innerText = "";
            document.getElementById("tbac").innerText = "";
        }
        if (dClicked == true) {
            alltxtd = "";
            finaltotalqtyd = 0;
            finaltotalamtd = 0;
            document.getElementById("tbqd").innerText = "";
            document.getElementById("tbad").innerText = "";
        }
        if (eClicked == true) {
            alltxte = "";
            finaltotalqtye = 0;
            finaltotalamte = 0;
            document.getElementById("tbqe").innerText = "";
            document.getElementById("tbae").innerText = "";
        }
        if (fClicked == true) {
            alltxtf = "";
            finaltotalqtyf = 0;
            finaltotalamtf = 0;
            document.getElementById("tbqf").innerText = "";
            document.getElementById("tbaf").innerText = "";
        }
        if (gClicked == true) {
            alltxtg = "";
            finaltotalqtyg = 0;
            finaltotalamtg = 0;
            document.getElementById("tbqg").innerText = "";
            document.getElementById("tbag").innerText = "";
        }
        if (hClicked == true) {
            alltxth = "";
            finaltotalqtyh = 0;
            finaltotalamth = 0;
            document.getElementById("tbqh").innerText = "";
            document.getElementById("tbah").innerText = "";
        }
        if (iClicked == true) {
            alltxti = "";
            finaltotalqtyi = 0;
            finaltotalamti = 0;
            document.getElementById("tbqi").innerText = "";
            document.getElementById("tbai").innerText = "";
        }
        if (jClicked == true) {
            alltxtj = "";
            finaltotalqtyj = 0;
            finaltotalamtj = 0;
            document.getElementById("tbqj").innerText = "";
            document.getElementById("tbaj").innerText = "";
        }
    }
}
function calcalllc() {
    var tbqa = 0,
            tbqb = 0,
            tbqc = 0,
            tbqd = 0,
            tbqe = 0,
            tbqf = 0,
            tbqg = 0,
            tbqh = 0,
            tbqi = 0,
            tbqj = 0;
    var series = seriesa.split(",");
    tbqa = finaltotalqtya * series.length;
    document.getElementById("tbqa").innerText = tbqa.toString();
    document.getElementById("tbaa").innerText = (tbqa * mrp * multiplier0).toString();
    tbqb = finaltotalqtyb * series.length;
    document.getElementById("tbqb").innerText = tbqb.toString();
    document.getElementById("tbab").innerText = (tbqb * mrp * multiplier1).toString();
    tbqc = finaltotalqtyc * series.length;
    document.getElementById("tbqc").innerText = tbqc.toString();
    document.getElementById("tbac").innerText = (tbqc * mrp * multiplier2).toString();
    tbqd = finaltotalqtyd * series.length;
    document.getElementById("tbqd").innerText = tbqd.toString();
    document.getElementById("tbad").innerText = (tbqd * mrp * multiplier3).toString();
    tbqe = finaltotalqtye * series.length;
    document.getElementById("tbqe").innerText = tbqe.toString();
    document.getElementById("tbae").innerText = (tbqe * mrp * multiplier4).toString();
    tbqf = finaltotalqtyf * series.length;
    document.getElementById("tbqf").innerText = tbqf.toString();
    document.getElementById("tbaf").innerText = (tbqf * mrp * multiplier5).toString();
    tbqg = finaltotalqtyg * series.length;
    document.getElementById("tbqg").innerText = tbqg.toString();
    document.getElementById("tbag").innerText = (tbqg * mrp * multiplier6).toString();
    tbqh = finaltotalqtyh * series.length;
    document.getElementById("tbqh").innerText = tbqh.toString();
    document.getElementById("tbah").innerText = (tbqh * mrp * multiplier7).toString();
    tbqi = finaltotalqtyi * series.length;
    document.getElementById("tbqi").innerText = tbqi.toString();
    document.getElementById("tbai").innerText = (tbqi * mrp * multiplier8).toString();
    tbqj = finaltotalqtyj * series.length;
    document.getElementById("tbqj").innerText = tbqj.toString();
    document.getElementById("tbaj").innerText = (tbqj * mrp * multiplier9).toString();
    document.getElementById("tblcqty").innerText = (tbqa + tbqb + tbqc + tbqd + tbqe + tbqf + tbqg + tbqh + tbqi + tbqj).toString();
    document.getElementById("tblcamt").innerText = (tbqa * mrp * multiplier0 +
            tbqb * mrp * multiplier1 +
            tbqc * mrp * multiplier2 +
            tbqd * mrp * multiplier3 +
            tbqe * mrp * multiplier4 +
            tbqf * mrp * multiplier5 +
            tbqg * mrp * multiplier6 +
            tbqh * mrp * multiplier7 +
            tbqi * mrp * multiplier8 +
            tbqj * mrp * multiplier9).toString();
    temptotal = parseFloat(document.getElementById("tblcamt").innerText);
    tempqty = parseFloat(document.getElementById("tblcqty").innerText);
    if (tempqty > 0) {
        document.getElementById("btnadv").disabled = false;
    } else {
        document.getElementById("btnadv").disabled = true;
    }
}
function myFunction(index, N, KEY) {
    if (fpflag) {
        if (N == "N") {
            index.className = "tbmppink";
            fpstart = true;
            if (KEY.substr(0, 1) == KEY.substr(1, 1)) {
                if (parseInt(KEY.substr(1, 1)) < 5) {
                    KEY = (parseInt(KEY) + 5).toString();
                } else {
                    KEY = (parseInt(KEY) - 5).toString();
                }
                document.getElementById("num" + KEY).className = "tbmppink";
                KEY = KEY.padStart(2, 0);
                KEY = parseInt(KEY.substr(1, 1) + KEY.substr(0, 1)).toString();
                document.getElementById("num" + KEY).className = "tbmppink";
                KEY = KEY.padStart(2, 0);
                if (parseInt(KEY.substr(1, 1)) < 5) {
                    KEY = (parseInt(KEY) + 5).toString();
                } else {
                    KEY = (parseInt(KEY) - 5).toString();
                }
                document.getElementById("num" + KEY).className = "tbmppink";
            } else {
                KEY = parseInt(KEY.substr(1, 1) + KEY.substr(0, 1)).toString();
                document.getElementById("num" + KEY).className = "tbmppink";
                KEY = KEY.padStart(2, 0);
                if (parseInt(KEY.substr(1, 1)) < 5) {
                    KEY = (parseInt(KEY) + 5).toString();
                } else {
                    KEY = (parseInt(KEY) - 5).toString();
                }
                document.getElementById("num" + KEY).className = "tbmppink";
                KEY = KEY.padStart(2, 0);
                KEY = parseInt(KEY.substr(1, 1) + KEY.substr(0, 1)).toString();
                document.getElementById("num" + KEY).className = "tbmppink";
                KEY = KEY.padStart(2, 0);
                if (parseInt(KEY.substr(1, 1)) < 5) {
                    KEY = (parseInt(KEY) + 5).toString();
                } else {
                    KEY = (parseInt(KEY) - 5).toString();
                }
                document.getElementById("num" + KEY).className = "tbmppink";
                KEY = parseInt(KEY.substr(1, 1) + KEY.substr(0, 1)).toString();
                document.getElementById("num" + KEY).className = "tbmppink";
                KEY = KEY.padStart(2, 0);
                if (parseInt(KEY.substr(1, 1)) < 5) {
                    KEY = (parseInt(KEY) + 5).toString();
                } else {
                    KEY = (parseInt(KEY) - 5).toString();
                }
                document.getElementById("num" + KEY).className = "tbmppink";
                KEY = KEY.padStart(2, 0);
                KEY = parseInt(KEY.substr(1, 1) + KEY.substr(0, 1)).toString();
                document.getElementById("num" + KEY).className = "tbmppink";
            }
        } else {
            index.className = "tbmpyel";
        }
    } else {
        index.className = "tbmpyel";
    }
}
function myFunctionrev(index, N, KEY) {
    if (!fpflag) {
        if (N == "N") {
            index.className = "tbmp";
        } else {
            index.className = "tball";
        }
    } else {
        if (N == "N") {
            if (index.value == "") {
                fpstart = true;
                index.className = "tbmp";
                if (KEY.substr(0, 1) == KEY.substr(1, 1)) {
                    if (parseInt(KEY.substr(1, 1)) < 5) {
                        KEY = (parseInt(KEY) + 5).toString();
                    } else {
                        KEY = (parseInt(KEY) - 5).toString();
                    }
                    document.getElementById("num" + KEY).className = "tbmp";
                    KEY = KEY.padStart(2, 0);
                    KEY = parseInt(KEY.substr(1, 1) + KEY.substr(0, 1)).toString();
                    document.getElementById("num" + KEY).className = "tbmp";
                    KEY = KEY.padStart(2, 0);
                    if (parseInt(KEY.substr(1, 1)) < 5) {
                        KEY = (parseInt(KEY) + 5).toString();
                    } else {
                        KEY = (parseInt(KEY) - 5).toString();
                    }
                    document.getElementById("num" + KEY).className = "tbmp";
                } else {
                    KEY = parseInt(KEY.substr(1, 1) + KEY.substr(0, 1)).toString();
                    document.getElementById("num" + KEY).className = "tbmp";
                    KEY = KEY.padStart(2, 0);
                    if (parseInt(KEY.substr(1, 1)) < 5) {
                        KEY = (parseInt(KEY) + 5).toString();
                    } else {
                        KEY = (parseInt(KEY) - 5).toString();
                    }
                    document.getElementById("num" + KEY).className = "tbmp";
                    KEY = KEY.padStart(2, 0);
                    KEY = parseInt(KEY.substr(1, 1) + KEY.substr(0, 1)).toString();
                    document.getElementById("num" + KEY).className = "tbmp";
                    KEY = KEY.padStart(2, 0);
                    if (parseInt(KEY.substr(1, 1)) < 5) {
                        KEY = (parseInt(KEY) + 5).toString();
                    } else {
                        KEY = (parseInt(KEY) - 5).toString();
                    }
                    document.getElementById("num" + KEY).className = "tbmp";
                    KEY = parseInt(KEY.substr(1, 1) + KEY.substr(0, 1)).toString();
                    document.getElementById("num" + KEY).className = "tbmp";
                    KEY = KEY.padStart(2, 0);
                    if (parseInt(KEY.substr(1, 1)) < 5) {
                        KEY = (parseInt(KEY) + 5).toString();
                    } else {
                        KEY = (parseInt(KEY) - 5).toString();
                    }
                    document.getElementById("num" + KEY).className = "tbmp";
                    KEY = KEY.padStart(2, 0);
                    KEY = parseInt(KEY.substr(1, 1) + KEY.substr(0, 1)).toString();
                    document.getElementById("num" + KEY).className = "tbmp";
                }
            }
        } else {
            index.className = "tball";
        }
    }
}
function arrowmove(event, key) {
    var def = 0;
    switch (event.keyCode) {
        case 37:
            def = key / 10;
            if (key % 10 != 0) {
                document.getElementById("num" + (key - 1)).focus();
            } else {
                document.getElementById("tbh" + def).focus();
            }
            break;
        case 38:
            if (!(key >= 0 && key < 10)) {
                document.getElementById("num" + (key - 10)).focus();
            } else {
                document.getElementById("tbv" + key).focus();
            }
            break;
        case 39:
            if (key != 99) {
                document.getElementById("num" + (key + 1)).focus();
            }
            break;
        case 40:
            if (!(key >= 90 && key < 100)) {
                document.getElementById("num" + (key + 10)).focus();
            }
            break;
    }
}
function arrowmoveh(event, key) {
    var def = 0;
    switch (event.keyCode) {
        case 37:
            document.getElementById("num" + (key * 10 + 9)).focus();
            break;
        case 38:
            if (key != 0) {
                document.getElementById("tbh" + (key - 1)).focus();
            } else {
                document.getElementById("tbh9").focus();
            }
            break;
        case 39:
            document.getElementById("num" + key * 10).focus();
            break;
        case 40:
            if (key != 9) {
                document.getElementById("tbh" + (key + 1)).focus();
            } else {
                document.getElementById("tbh0").focus();
            }
            break;
    }
}
function arrowmovev(event, key) {
    var def = 0;
    switch (event.keyCode) {
        case 37:
            if (key != 0) {
                document.getElementById("tbv" + (key - 1)).focus();
            } else {
                document.getElementById("tbv9").focus();
            }
            break;
        case 38:
            document.getElementById("num" + (key + 90)).focus();
            break;
        case 39:
            if (key != 9) {
                document.getElementById("tbv" + (key + 1)).focus();
            } else {
                document.getElementById("tbv0").focus();
            }
            break;
        case 40:
            document.getElementById("num" + key).focus();
            break;
    }
// timediff(systm, gmtm, "H7");
    function timediff(systm, gmtm, HX) {
        var _0x18F3F = {h1: "", m1: "", s1: ""};
        var _0x18F2D = systm.split(":");
        var _0x18E55 = parseInt(_0x18F2D[0], 10);
        var _0x18E67 = parseInt(_0x18F2D[1], 10);
        var _0x18E79 = parseInt(_0x18F2D[2], 10);
        var _0x18EE5 = gmtm.split(" ");
        var _0x18EF7 = _0x18EE5[0].split(":");
        var _0x18EC1 = parseInt(_0x18EF7[0], 10);
        var _0x18ED3 = parseInt(_0x18EF7[1], 10);
        if (_0x18EE5[1] == "PM" || _0x18EE5[1] == "pm") {
            if (_0x18EC1 < 12) {
                _0x18EC1 = _0x18EC1 + 12;
            }
        }
        var _0x18E8B = 0;
        var _0x18E9D = 0;
        var _0x18EAF = 0;
        _0x18EAF = 60 - parseInt(_0x18E79, 10);
        if (_0x18ED3 > 0) {
            _0x18ED3 = _0x18ED3 - 1;
        } else {
            _0x18EC1 = _0x18EC1 - 1;
            _0x18ED3 = _0x18ED3 + 59;
        }
        if (_0x18ED3 < _0x18E67) {
            _0x18ED3 = _0x18ED3 + 60;
            _0x18EC1 = _0x18EC1 - 1;
        }
        _0x18E9D = _0x18ED3 - _0x18E67;
        _0x18E8B = _0x18EC1 - _0x18E55;
        hours = _0x18E8B;
        minutes = _0x18E9D;
        seconds = _0x18EAF;
    }
    function timediffcurr(systm) {
        var _0x18F2D = systm.split(":");
        var _0x18E55 = parseInt(_0x18F2D[0], 10);
        var _0x18E67 = parseInt(_0x18F2D[1], 10);
        var _0x18E79 = parseInt(_0x18F2D[2], 10);
        currhours = _0x18E55;
        currminutes = _0x18E67;
        currseconds = _0x18E79;
    }
    function displaycurr() {
        if (currseconds > 59) {
            currseconds = 0;
            currminutes = currminutes + 1;
        }
        if (currminutes > 59) {
            currseconds = 0;
            currminutes = 0;
            currhours = currhours + 1;
        }
        if (hours >= 24) {
            currseconds = 0;
            currminutes = 0;
            currhours = currhours + 1;
        }
        curtm = "";
        if (currhours <= 9) {
            curtm = curtm + "0" + currhours;
        } else {
            curtm = curtm + currhours;
        }
        if (currminutes <= 9) {
            curtm = curtm + ":0" + currminutes;
        } else {
            curtm = curtm + ":" + currminutes;
        }
        if (currseconds <= 9) {
            curtm = curtm + ":0" + currseconds;
        } else {
            curtm = curtm + ":" + currseconds;
        }
        document.getElementById("currtime").innerText = "Current Time : " + curtm;
        currseconds = currseconds + 1;
        if (msgctr != 0) {
            msgctr = msgctr - 1;
            if (msgctr == 0) {
                document.getElementById("msg").innerHTML = "<br>";
            }
        }
        if (gmtm != "") {
            if (seconds < 0) {
                seconds = 59;
                minutes = minutes - 1;
            }
            if (minutes < 0) {
                seconds = 59;
                minutes = 59;
                hours = hours - 1;
            }
            if (hours <= -1) {
                seconds = 0;
                minutes = 0;
                hours = hours + 1;
            }
            ctm = "";
            if (hours <= 9) {
                ctm = ctm + "0" + hours;
            } else {
                ctm = ctm + hours;
            }
            if (minutes <= 9) {
                ctm = ctm + ":0" + minutes;
            } else {
                ctm = ctm + ":" + minutes;
            }
            if (seconds <= 9) {
                ctm = ctm + ":0" + seconds;
            } else {
                ctm = ctm + ":" + seconds;
            }
            document.getElementById("counter9").innerText = ctm;
            seconds = seconds - 1;
            if (hours == 0 && minutes == 0 && seconds < 0) {
                load_frm();
                rescounter = 63;
                resflag = "true";
            } else {
                if (hours == 0 && minutes == 0 && seconds < 16) {
                }
            }
        }
    }
}