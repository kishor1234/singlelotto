/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//var script = document.createElement('script');
//script.src = 'http://web.yatara.lcl/assets/plugins/jquery/jquery.min.js';
//script.type = 'text/javascript';
//document.getElementsByTagName('head')[0].appendChild(script);


function ajaxCall(data, url) {
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", url, true);
    xhttp.setRequestHeader("Content-Type", "application/json");
    xhttp.send(JSON.stringify(data));
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            // Response
            var response = this.responseText;
            console.log(response);
            return response;
        }
    };

}
function loadlogin(url) {
    var uname = document.querySelector("#uname").value;
    var passwd = document.querySelector("#passwd").value;
    var device = document.querySelector("#device").value;
    let data = {userid: uname, password: passwd, device: device};
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", url, true);
    xhttp.setRequestHeader("Content-Type", "application/json");
    xhttp.send(JSON.stringify(data));
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            // Response
            var response = this.responseText;
            var rsp = JSON.parse(response);
            
            localStorage.setItem("userid", rsp.userid);
            console.log(rsp);
            if (rsp.status === 1) {
                xhttp = new XMLHttpRequest();
                xhttp.open("POST", '/?r=setSec', true);
                xhttp.setRequestHeader("Content-Type", "application/json");
                xhttp.send(JSON.stringify(rsp));
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        // Response
                        var resp = JSON.parse(this.responseText);
                        console.log(resp);
                        if (resp.status === 1) {

                            window.location.reload();
                        }
                    }
                };


                document.querySelector("#msg").innerHTML = rsp.message;
            } else {
                document.querySelector("#msg").innerHTML = "Error " + rsp.message;
            }
        }
    };


}
function loadloginajax(url) {
    var uname = document.querySelector("#uname").value;
    var passwd = document.querySelector("#passwd").value;
    var device = document.querySelector("#device").value;
    $.ajax({
        url: url,
        method: "POST",
        dataType: 'json',
        type: 'post',
        contentType: 'application/json',
        async: true,
        data: JSON.stringify({userid: uname, password: passwd, device: device}),
        success: function (response) {

            if (response.status === 1) {
                $.ajax({
                    url: '/?r=setSec',
                    method: "POST",
                    dataType: 'json',
                    type: 'post',
                    contentType: 'application/json',
                    async: true,
                    data: JSON.stringify(response),
                    success: function (respo) {
                        console.log(respo);
                        window.location.reload();
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log(jqXHR);
                        console.log(textStatus);
                        console.log(errorThrown);
                    }
                });
                document.querySelector("#msg").innerHTML = response.message;
            } else {
                document.querySelector("#msg").innerHTML = "Eroro" + response.message;
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            // Empty most of the time...
            console.log(jqXHR);
            console.log(textStatus);
            console.log(errorThrown);
        }
    });

}