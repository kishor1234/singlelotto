<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?= $main->isLoadView(array("header" => "webheader", "main" => "banner", "footer" => "webfooter", "error" => "page_404"), false, array("title" => $title, "link" => $link)); ?>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <div class="card-title mb-2">
                                <!-- Button to Open the Modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" onclick="$('#myMainForm')[0].reset();" data-target="#myMain">
                                    Upload Company Document <i class="fas fa-plus"></i>
                                </button>
                                <div class="modal fade preview-modal" data-backdrop="" id="myMain" role="dialog" aria-labelledby="preview-modal" aria-hidden="true">

                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Add New Document</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <style>
                                                            .uploader {
                                                                display: block;
                                                                clear: both;
                                                                margin: 0 auto;
                                                                width: 100%;
                                                                max-width: 600px;
                                                            }

                                                            .uploader label {
                                                                float: left;
                                                                clear: both;
                                                                width: 100%;
                                                                padding: 2rem 1.5rem;
                                                                text-align: center;
                                                                background: #fff;
                                                                border-radius: 7px;
                                                                border: 3px solid #eee;
                                                                transition: all 0.2s ease;
                                                                user-select: none;
                                                            }

                                                            .uploader label:hover {
                                                                border-color: #454cad;
                                                            }

                                                            .uploader label.hover {
                                                                border: 3px solid #454cad;
                                                                box-shadow: inset 0 0 0 6px #eee;
                                                            }

                                                            .uploader label.hover #start i.fa {
                                                                transform: scale(0.8);
                                                                opacity: 0.3;
                                                            }

                                                            .uploader #start {
                                                                float: left;
                                                                clear: both;
                                                                width: 100%;
                                                            }

                                                            .uploader #start.hidden {
                                                                display: none;
                                                            }

                                                            .uploader #start i.fa {
                                                                font-size: 50px;
                                                                margin-bottom: 1rem;
                                                                transition: all 0.2s ease-in-out;
                                                            }

                                                            .uploader #response {
                                                                float: left;
                                                                clear: both;
                                                                width: 100%;
                                                            }

                                                            .uploader #response.hidden {
                                                                display: none;
                                                            }

                                                            .uploader #response #messages {
                                                                margin-bottom: 0.5rem;
                                                            }

                                                            .uploader #file-image {
                                                                display: inline;
                                                                margin: 0 auto 0.5rem auto;
                                                                width: auto;
                                                                height: auto;
                                                                max-width: 180px;
                                                            }

                                                            .uploader #file-image.hidden {
                                                                display: none;
                                                            }

                                                            .uploader #notimage {
                                                                display: block;
                                                                float: left;
                                                                clear: both;
                                                                width: 100%;
                                                            }

                                                            .uploader #notimage.hidden {
                                                                display: none;
                                                            }

                                                            .uploader progress,
                                                            .uploader .progress {
                                                                display: inline;
                                                                clear: both;
                                                                margin: 0 auto;
                                                                width: 100%;
                                                                max-width: 180px;
                                                                height: 8px;
                                                                border: 0;
                                                                border-radius: 4px;
                                                                background-color: #eee;
                                                                overflow: hidden;
                                                            }

                                                            .uploader .progress[value]::-webkit-progress-bar {
                                                                border-radius: 4px;
                                                                background-color: #eee;
                                                            }

                                                            .uploader .progress[value]::-webkit-progress-value {
                                                                background: linear-gradient(to right, #393f90 0%, #454cad 50%);
                                                                border-radius: 4px;
                                                            }

                                                            .uploader .progress[value]::-moz-progress-bar {
                                                                background: linear-gradient(to right, #393f90 0%, #454cad 50%);
                                                                border-radius: 4px;
                                                            }

                                                            .uploader input[type="file"] {
                                                                display: none;
                                                            }

                                                            .uploader div {
                                                                margin: 0 0 0.5rem 0;
                                                                color: #5f6982;
                                                            }

                                                            .uploader .btn {
                                                                display: inline-block;
                                                                margin: 0.5rem 0.5rem 1rem 0.5rem;
                                                                clear: both;
                                                                font-family: inherit;
                                                                font-weight: 700;
                                                                font-size: 14px;
                                                                text-decoration: none;
                                                                text-transform: initial;
                                                                border: none;
                                                                border-radius: 0.2rem;
                                                                outline: none;
                                                                padding: 0 1rem;
                                                                height: 36px;
                                                                line-height: 36px;
                                                                color: #fff;
                                                                transition: all 0.2s ease-in-out;
                                                                box-sizing: border-box;
                                                                background: #454cad;
                                                                border-color: #454cad;
                                                                cursor: pointer;
                                                            }
                                                        </style>
                                                        <form action="#" method="post" id="myMainForm">
                                                            <div class="form-group">
                                                                <label class="form-control-label">Name <span class="text-danger">*</span></label>
                                                                <!-- <input type="hidden" name="userid" id="userid" required autocomplete="off" value="<?= $_SESSION['id'] ?>" class="form-control"> -->
                                                                <input type="text" name="name" id="name" placeholder="Enter Document Name" title="Document Name" required autocomplete="off" class="form-control">
                                                                <span id="error_name" class=""></span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-control-label">Document Type <span class="text-danger">*</span></label>
                                                                <select class="form-control" name="entity" id="entity" title="Document Type" onchange="loadUser()">
                                                                    <option>---select--</option>
                                                                    <option value="Company">Company</option>
                                                                    <option value="User">User</option>
                                                                    <option value="Agent">Agent</option>
                                                                    <option value="SubAdmin">SubAdmin</option>
                                                                    <option value="Dealer">Dealer</option>
                                                                </select>
                                                                <span id="error_name" class=""></span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-control-label">User ID <span class="text-danger">*</span></label>
                                                                <select class="form-control" name="userid" id="userid" title="User Id">
                                                                    <?php
                                                                    // $user_json = $main->jsonRespon(api_url . "/?r=CAddUser", array("action" => "loaduserAll", "sectionid" => $_SESSION['userid']));
                                                                    // $user = json_decode($user_json, true);
                                                                    // foreach ($user as $key => $users) {
                                                                    //     echo "<option value='{$users['userid']}'>{$users['userid']}|{$users['name']}</option>";
                                                                    // }
                                                                    ?>
                                                                </select>
                                                                <span id="error_name" class=""></span>
                                                            </div>
                                                            <div class="form-group uploader" id="file-upload-form">
                                                                <h2>Upload Document</h2>

                                                                <!-- Upload  -->

                                                                <input id="file-upload" type="file" name="document" required accept="image/*" />

                                                                <label for="file-upload" id="file-drag">
                                                                    <img id="file-image" src="#" alt="Preview" class="hidden">
                                                                    <div id="start">
                                                                        <i class="fa fa-download" aria-hidden="true"></i>
                                                                        <div>Select a file or drag here</div>
                                                                        <div id="notimage" class="hidden">Please select an image</div>
                                                                        <span id="file-upload-btn" class="btn btn-primary">Select a file</span>
                                                                    </div>
                                                                    <div id="response" class="hidden">
                                                                        <div id="messages"></div>
                                                                        <progress class="progress" id="file-progress" value="0">
                                                                            <span>0</span>%
                                                                        </progress>
                                                                    </div>
                                                                </label>

                                                            </div>
                                                            <div class="form-group">
                                                                <input type="hidden" name="create_by" id="create_by" value="<?= $_SESSION["id"] ?>">
                                                                <input type="hidden" name="action" id="action" value="document">
                                                                <button class="btn btn-primary btn-sm form-control" id="myMainSubmit">Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="progress" id="progress">
                                                    <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" id="inner-progress mainpro1">Please wait....</div>
                                                </div>
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">


                            <div class="card-text">
                                <table class="stripe hover display responsive nowrap" id="myTable" cellspacing='0'>
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>User Id</th>
                                            <th>Document Name</th>
                                            <th>Created By</th>
                                            <th>Modify By</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>User Id</th>
                                            <th>Document Name</th>
                                            <th>Created By</th>
                                            <th>Modify By</th>
                                            <th>Action</th>

                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script type="text/javascript">
    var table;
    $(document).ready(function() {
        table = $('#myTable').DataTable({
            serverSide: true,
            Processing: true,
            dom: 'Bfrtip',
            order: [
                [0, "desc"]
            ],
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            ajax: {
                url: '<?= api_url ?>/?r=CAddUser',
                type: "post", // method  , by default get
                dataType: "json",
                data: {
                    action: "loaddocument",
                    create_by: "<?= $_SESSION["id"] ?>"
                },
                error: function() { // error handling
                    $(".data-grid-error").html("");
                    $("#data-grid").append('<tbody class="data-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
                    $("#data-grid_processing").css("display", "none");
                }
            },
            scrollCollapse: true,
            autoWidth: false,
            responsive: true,
            columnDefs: [{
                targets: "datatable-nosort",
                orderable: false
            }],
            lengthMenu: [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            language: {
                info: "_START_-_END_ of _TOTAL_ entries",
                searchPlaceholder: "Search"
            }
        });



        $("#myMainForm").submit(function() {
            $("#myMainSubmit").attr("disabled", true);
            var formdata = new FormData($("#myMainForm")[0]);
            $.ajax({
                url: '<?= api_url ?>/?r=CAddUser',
                type: 'post',
                data: formdata,
                enctype: "multipart/form-data",
                contentType: false,
                cache: false,
                processData: false,
                xhr: function() {
                    $("#mainloadimg").show();
                    $("#progress").show();
                    var xhr = new XMLHttpRequest();
                    xhr.upload.addEventListener('progress', function(e) {
                        var progressbar = Math.round((e.loaded / e.total) * 100);
                        $("#mainpro1").css('width', progressbar + '%');
                        $("#mainpro1").html(progressbar + '%');
                    });
                    return xhr;
                },
                success: function(data) {
                    console.log(data);
                    $("#myMainSubmit").attr("disabled", false);
                    $("#mainloadimg").hide();
                    var json = JSON.parse(data);
                    if (json.status === 1) {
                        swal("Success", json.msg, "success");


                    } else {
                        swal("Error", json.msg, "error");
                    }
                    $('#myMainForm')[0].reset();
                    $.toaster({
                        priority: json.toast[0],
                        title: json.toast[1],
                        message: json.toast[2]
                    });
                    $("#mainpro1").css('width', '0%');
                    $("#mainpro1").html('0%');
                    $("#progress").hide();
                    table.ajax.reload(null, false);

                },
                error: function(xhr, error, code) {
                    console.log(xhr);
                    console.log(code);
                }
            });
            return false;
        });
    });

    function deletedocument(id) {
        swal({
                title: "Are you sure?",
                text: "want to delete docuemnt?",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, Delete it!",
                closeOnConfirm: true
            },
            function() {
                $.post('<?= api_url ?>/?r=CAddUser', {
                    id: id,
                    action: 'deletedocument'
                }, function(data) {
                    console.log(data);
                    table.ajax.reload(null, false);
                    var json = JSON.parse(data);
                    $.toaster({
                        priority: json.toast[0],
                        title: json.toast[1],
                        message: json.toast[2]
                    });
                    table.ajax.reload(null, false);
                });

            });
    }

    // File Upload
    // 
    function ekUpload() {
        function Init() {

            console.log("Upload Initialised");

            var fileSelect = document.getElementById('file-upload'),
                fileDrag = document.getElementById('file-drag'),
                submitButton = document.getElementById('submit-button');

            fileSelect.addEventListener('change', fileSelectHandler, false);

            // Is XHR2 available?
            var xhr = new XMLHttpRequest();
            if (xhr.upload) {
                // File Drop
                fileDrag.addEventListener('dragover', fileDragHover, false);
                fileDrag.addEventListener('dragleave', fileDragHover, false);
                fileDrag.addEventListener('drop', fileSelectHandler, false);
            }
        }

        function fileDragHover(e) {
            var fileDrag = document.getElementById('file-drag');

            e.stopPropagation();
            e.preventDefault();

            fileDrag.className = (e.type === 'dragover' ? 'hover' : 'modal-body file-upload');
        }

        function fileSelectHandler(e) {
            // Fetch FileList object
            var files = e.target.files || e.dataTransfer.files;

            // Cancel event and hover styling
            fileDragHover(e);

            // Process all File objects
            for (var i = 0, f; f = files[i]; i++) {
                parseFile(f);
                uploadFile(f);
            }
        }

        // Output
        function output(msg) {
            // Response
            var m = document.getElementById('messages');
            m.innerHTML = msg;
        }

        function parseFile(file) {

            console.log(file.name);
            output(
                '<strong>' + encodeURI(file.name) + '</strong>'
            );

            // var fileType = file.type;
            // console.log(fileType);
            var imageName = file.name;

            var isGood = (/\.(?=gif|jpg|png|jpeg)/gi).test(imageName);
            if (isGood) {
                document.getElementById('start').classList.add("hidden");
                document.getElementById('response').classList.remove("hidden");
                document.getElementById('notimage').classList.add("hidden");
                // Thumbnail Preview
                document.getElementById('file-image').classList.remove("hidden");
                document.getElementById('file-image').src = URL.createObjectURL(file);
            } else {
                document.getElementById('file-image').classList.add("hidden");
                document.getElementById('notimage').classList.remove("hidden");
                document.getElementById('start').classList.remove("hidden");
                document.getElementById('response').classList.add("hidden");
                document.getElementById("file-upload-form").reset();
            }
        }

        function setProgressMaxValue(e) {
            var pBar = document.getElementById('file-progress');

            if (e.lengthComputable) {
                pBar.max = e.total;
            }
        }

        function updateFileProgress(e) {
            var pBar = document.getElementById('file-progress');

            if (e.lengthComputable) {
                pBar.value = e.loaded;
            }
        }

        //   function uploadFile(file) {

        //     var xhr = new XMLHttpRequest(),
        //       fileInput = document.getElementById('class-roster-file'),
        //       pBar = document.getElementById('file-progress'),
        //       fileSizeLimit = 1024; // In MB
        //     if (xhr.upload) {
        //       // Check if file is less than x MB
        //       if (file.size <= fileSizeLimit * 1024 * 1024) {
        //         // Progress bar
        //         pBar.style.display = 'inline';
        //         xhr.upload.addEventListener('loadstart', setProgressMaxValue, false);
        //         xhr.upload.addEventListener('progress', updateFileProgress, false);

        //         // File received / failed
        //         xhr.onreadystatechange = function(e) {
        //           if (xhr.readyState == 4) {
        //             // Everything is good!

        //             // progress.className = (xhr.status == 200 ? "success" : "failure");
        //             // document.location.reload(true);
        //           }
        //         };

        //         // Start upload
        //         xhr.open('POST', document.getElementById('file-upload-form').action, true);
        //         xhr.setRequestHeader('X-File-Name', file.name);
        //         xhr.setRequestHeader('X-File-Size', file.size);
        //         xhr.setRequestHeader('Content-Type', 'multipart/form-data');
        //         xhr.send(file);
        //       } else {
        //         output('Please upload a smaller file (< ' + fileSizeLimit + ' MB).');
        //       }
        //     }
        //   }

        // Check for the various File API support.
        if (window.File && window.FileList && window.FileReader) {
            Init();
        } else {
            document.getElementById('file-drag').style.display = 'none';
        }
    }

    function loadUser() {
        var entity = $("#entity").val();
        var body = JSON.stringify({
            "action": "loaduserAll",
            "entity": entity
        });
        let option;
        $.ajax({
            url: '<?= api_url ?>/?r=CAddUser',
            type: "post", // method  , by default get
            dataType: "json",
            data: body,
            enctype: "multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(data) {
                let option="";
                $.each(data, function(index, value) {
                    if (value.userid) {
                        option = option + `<option value=${value.userid} >${value.name} | ${value.userid}</option>`;
                    } else {
                        option = option + `<option value=${value.id} >${value.user} | ${value.id}</option>`;
                    }

                });
                $("#userid").html(option);
            },
            error: function(xhr, error, code) {
                console.log(xhr);
                console.log(code);
            }
        });
    }
    ekUpload();
</script>