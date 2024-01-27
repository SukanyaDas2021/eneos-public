<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startup DB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="app.css">
</head>
<body>
    <div class="app-wrapper">
        <?php 
            $menu = "statupdb.php";
            include 'inc/sidebar.php' 
        ?>
        <div class="app-content">
            <div class="app-header">
                <div class="title-block">
                    <h1>Startup DB</h1>
                </div>
                <div class="d-flex gap-2 justify-content-end">
                    <a href="statupdb.php" class="btn btn-primary"><i class="fa-solid fa-chevron-left"></i> Back</a>
                </div>
            </div>

            <div class="pt-3 w-100 d-flex flex-column gap-3">

                <div class="app-card" id="upload-area">
                    <h6>Upload File</h6>
                    <div class="import-box" id="drop-area">
                        <i class="fa-solid fa-file-excel"></i> <br>
                        <!-- Click to select an Excel file or drag and drop in this area -->

                        <label for="file-input" id="file-label">Choose a file or drag it here</label>
                        <input type="file" id="file-input" accept=".pdf">
                    </div>
                    <p id="selected-file" class="pt-2"></p>
                    <div class="d-flex justify-content-center">
                        <button id="upload-button" class="btn btn-primary"><i class="fa-regular fa-file"></i> Import </button>
                        <button id="uploading-button" class="btn btn-primary" type="button" disabled style="display: none;">
                            <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                            <span role="status">Uploading...</span>
                        </button>
                    </div>
                </div>

                
                <form action="statupdb-import-file.php" method="POST">
                    <div id="result-box"></div>

                    <div class="pt-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary" id="import-submit" style="display: none;">Submit</button>

                        <button id="importing-submit" class="btn btn-primary" type="button" disabled style="display: none;">
                            <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                            <span role="status">Importing...</span>
                        </button>
                    </div>

                </form>

            </div>

        </div>



    </div>

    <pre id="result-box"></pre>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {

            $("#import-submit").click(function() {
                $("#import-submit").hide();
                $("#importing-submit").show();
            });

            var dropArea = $("#drop-area");
            var fileInput = $("#file-input")[0];

            dropArea.on("dragover", function(event) {
                event.preventDefault();
                dropArea.addClass("highlight");
            });

            dropArea.on("dragleave", function(event) {
                event.preventDefault();
                dropArea.removeClass("highlight");
            });

            dropArea.on("drop", function(event) {
                event.preventDefault();
                dropArea.removeClass("highlight");

                var files = event.originalEvent.dataTransfer.files;
                handleFiles(files);
            });

            fileInput.addEventListener("change", function() {
                var files = this.files;
                handleFiles(files);
            });

            $("#upload-button").on("click", function() {
                var file = fileInput.files[0];

                $("#upload-button").hide();
                $("#uploading-button").show();                

                if (file) {
                    var formData = new FormData();
                    formData.append('file', file);

                    $.ajax({
                        url: 'http://52.203.56.207:8081/upload', // Replace with your server URL
                        type: 'POST',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(response) {
                            // console.log('File uploaded successfully:', response);
                            // Handle the success response

                            $("#upload-area").fadeOut();
                            $("#import-submit").fadeIn();

                            console.log('Received response:', response);

                            console.log('splite data:', response[1].company);
                            

                            var count = response.length;
                            console.log('Number of uploaded files:', count);
                            

                            var html = "";

                            for (var i = 0; i < count; i++) {
                                
                                html += `<div class="app-card mb-3">
                                            <div class="d-flex gap-3">
                                                <input type="checkbox" value="`+i+`" name="choose[]">
                                                <div class="flex-grow-1">
                                                    <h3 class="mb-3">`+response[i].company+`</h3>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="form-label">Company Name</label>
                                                                <input type="text" class="form-control" name="name[]" value="`+response[i].company+`">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="form-label">Contact</label>
                                                                <input type="text" class="form-control" name="in_charge[]" value="`+response[i].contact+`">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="form-label">URL</label>
                                                                <input type="text" class="form-control" name="url[]" value="`+response[i].url+`">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Industry</label>
                                                                <input type="text" class="form-control" name="industry[]" value="`+response[i].industry+`">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Location</label>
                                                                <input type="text" class="form-control" name="address[]" value="`+response[i].location+`">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label class="form-label">Discription</label>
                                                                <textarea class="form-control" name="full_description[]">`+response[i].description+`</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>`;

                            }

                            $("#result-box").html(html);

                        },
                        error: function(error) {
                            console.error('Error uploading file:', error);
                            // Handle the error response
                        }
                        
                    });
                } else {
                    console.error('No file selected');
                }
            });

            function handleFiles(files) {
                if (files.length > 0) {
                    var fileName = files[0].name;
                    console.log("Selected file:", fileName);
                    $("#selected-file").text(fileName);
                }
            }
        });
    </script>

</body>
</html>