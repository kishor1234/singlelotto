<style>
    #grad1 {
        background-color: #201e1e;
        background-image: linear-gradient(141deg, #201e1e 0%, #201e1e 10%, #201e1e 50%, #201e1e 75%);
        color: white;
        display: flex;
        opacity: 0.95;
        flex-direction: column;
        flex-wrap: nowrap;
        align-content: center;
        justify-content: center;
        align-items: center;
    }

    img.img-response {
        width: 70%;
        height: auto;
    }

    .header,
    .footer {
        display: flex;
        flex-direction: column;
        flex-wrap: nowrap;
        align-content: center;
        justify-content: center;
        align-items: center;
    }

    .input-group {
        position: relative;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -ms-flex-align: stretch;
        align-items: center;
        width: 100%;
        align-content: center;
        justify-content: center;
    }

    .login-card-body,
    .register-card-body {
        background: #201e1e;
        border-top: 0;
        color: #fff;
        padding: 20px;
    }

    label {
        width: 180px;
        text-align: right;
        padding-right: 20px;
    }

    input.form-control,
    .btn {
        border-radius: 0px;
    }
</style>
<div class="hold-transition login-page" id="grad1">
    <script>
        $("document").ready(function() {

            $("#loginForm").submit(function(e) {
                e.preventDefault();
                var formdata = new FormData($("#loginForm")[0]);
                var object = {};
                formdata.forEach(function(value, key) {
                    object[key] = value;
                });
                var json = JSON.stringify(object);
                //console.log(json);
                $.ajax({
                    type: 'POST',
                    url: '<?= api_url ?>/?r=subAdminlogin',
                    dataType: "json",
                    data: json,
                    xhr: function() {
                        progressShow();
                        var xhr = new XMLHttpRequest();
                        xhr.upload.addEventListener('progress', function(e) {
                            var progressbar = Math.round((e.loaded / e.total) * 100);
                            $("#inner-progress").css('width', progressbar + '%');
                            $("#inner-progress").html("Please Wait... " + progressbar + '%');
                        });
                        return xhr;
                    },
                    success: function(obj) {
                        console.log(obj);
                        if (obj.message === "success") {
                            $.session.set('loginMobile', obj.mobile);
                            $.session.set('agent_id', obj._id);
                            $.session.set('userid', obj.user_id);
                            setSession(obj);
                            printMessage("Loggin successfully..", "success", ".msg");
                            checkLogin();
                            $("#loginForm")[0].reset();
                            progressHide();
                        } else {
                            printMessage("Invalid email or password", "danger", ".msg");
                            $("#loginForm")[0].reset();
                            progressHide()
                        }
                    },
                    error: function(request, status, error) {
                        printMessage("Error on " + error, "danger", ".msg");
                        $("#loginForm")[0].reset();
                        progressHide()
                    }
                });
            });

            function progressShow() {
                $("#btn_submit").attr("disabled", true);
                $("#progress").show();
            }

            function progressHide() {
                $("#btn_submit").attr("disabled", false);
                $("#progress").hide();
            }

            function setSession(obj) {

                $.post("/?r=C_SetSession", {
                    "email": obj.mobile,
                    "agent_id": obj._id,
                    "userid": obj.user_id,
                    "ap": obj.ap,
                    "commission": obj.commission,
                    "createBy": obj.createBy
                }, function(data) {
                    console.log(data);
                });
            }

            function printMessage(message, clas, display) {
                $(display).html("<div class='alert alert-dismissible alert-" + clas + "'><button type='button' class='close' data-dismiss='alert'>&times;</button>" + message + "</div>");
            }

            function checkLogin() {

                window.location.replace("/?r=dashboard&v=dashboard")
            }
        });
    </script>
    <div class="header">
        <img src="/header.jpg" class="img-response" />
    </div>
    <div class="login-box">
        <div class="msg">

        </div>
        <!-- <div class="login-logo" id="login-logo">
            <a href="#"><b>Agent</b> Login</a>
        </div> -->
        <!-- /.login-logo -->

        <div class="card">
            <div class="progress" id="progress">
                <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" id="inner-progress">Please wait....</div>
            </div>
            <div class="card-body login-card-body">


                <form action="javascript:void(0)" method="post" name="loginForm" for="loginForm" id="loginForm">
                    <div class="input-group mb-3">
                        <label>Terminal User Id :</label>
                        <input type="text" class="form-control" name="userName" placeholder="User Id ">
                    </div>
                    <div class="input-group mb-3">
                        <label>Terminal Password :</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <div class="icheck-primary">
                                <!--                                <a href="#">I forgot my password</a>-->
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" id="btn_submit" class="btn btn-primary btn-block">Login</button>
                        </div>
                        <div class="col-6">
                            <div class="icheck-primary">
                                <!--                                <a href="#">I forgot my password</a>-->
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <!-- /.social-auth-links -->
                <p class="mb-1">

                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <div class="footer">
        <img src="/footer.jpg" class="img-response" />
    </div>
    <!-- /.login-box -->
</div>