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
            $menu = "mydrive.php";
            include 'inc/sidebar.php' 
        ?>
        <div class="app-content">
            <div class="app-header">
                <div class="title-block">
                    <h1>My Drive</h1>
                </div>
                <div class="d-flex gap-2 justify-content-end">
                    <a href="mydrive.php?upload=1" class="btn btn-outline-primary"><i class="fa-solid fa-plus"></i> Add new folder</a>
                    <a href="mydrive.php?upload=1" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add new assets</a>
                </div>
            </div>

            <?php if(isset($_GET['upload']) && $_GET['upload']==1) { ?>
                <div class="black-drop"></div>
                <div class="upload-block">
                    <div class="import-box">
                        <i class="fa-solid fa-file"></i> <br>
                        Click to select an file or drag and drop in this area
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="mydrive.php" class="btn btn-primary"><i class="fa-regular fa-file"></i> Upload </a>
                    </div>
                </div>
            <?php } ?>
            
            <div class="row w-100 pt-3">
                <div class="col-12">
                    <div class="alert alert-warning" role="alert">This page contains only dummy data for demonstration purposes.</div>
                </div>
            </div>

            <h5 class="mt-5">Folder</h5>

            <div class="w-100">
                <div class="row">
                    <div class="col-md-3">
                        <div class="files d-flex justify-content-between w-100">
                            <div class="d-flex justify-content-start align-items-center gap-2 w-100">
                                <i class="fa-solid fa-folder"></i>
                                <div class="d-flex flex-column">
                                    <span>Folder Name</span>
                                    <small>7 Folder, 15 Files</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="files d-flex justify-content-between w-100">
                            <div class="d-flex justify-content-start align-items-center gap-2 w-100">
                                <i class="fa-solid fa-folder"></i>
                                <div class="d-flex flex-column">
                                    <span>Folder Name</span>
                                    <small>7 Folder, 15 Files</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="files d-flex justify-content-between w-100">
                            <div class="d-flex justify-content-start align-items-center gap-2 w-100">
                                <i class="fa-solid fa-folder"></i>
                                <div class="d-flex flex-column">
                                    <span>Folder Name</span>
                                    <small>7 Folder, 15 Files</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="files d-flex justify-content-between w-100">
                            <div class="d-flex justify-content-start align-items-center gap-2 w-100">
                                <i class="fa-solid fa-folder"></i>
                                <div class="d-flex flex-column">
                                    <span>Folder Name</span>
                                    <small>7 Folder, 15 Files</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <h5 class="mt-3">Files</h5>

            <div class="w-100">
                <div class="row">
                    <div class="col-md-3">
                        <div class="files d-flex justify-content-between w-100">
                            <div class="d-flex justify-content-start align-items-center gap-2 w-100">
                                <i class="fa-regular fa-file-word"></i>
                                <div class="d-flex flex-column">
                                    <span>file Name.word</span>
                                    <small>12 MB</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="files d-flex justify-content-between w-100">
                            <div class="d-flex justify-content-start align-items-center gap-2 w-100">
                                <i class="fa-solid fa-file-excel"></i>
                                <div class="d-flex flex-column">
                                    <span>Folder Name</span>
                                    <small>12 MB</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="files d-flex justify-content-between w-100">
                            <div class="d-flex justify-content-start align-items-center gap-2 w-100">
                                <i class="fa-solid fa-file-pdf"></i>
                                <div class="d-flex flex-column">
                                    <span>Folder Name</span>
                                    <small>12 MB</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="files d-flex justify-content-between w-100">
                            <div class="d-flex justify-content-start align-items-center gap-2 w-100">
                                <i class="fa-solid fa-file-pdf"></i>
                                <div class="d-flex flex-column">
                                    <span>Folder Name</span>
                                    <small>12 MB</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
</body>
</html>