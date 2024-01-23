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

                <div class="app-card">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Basic Info</label>
                                <input type="text" class="form-control" value="SharpEnd (iott)">
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Location</label>
                                        <input type="text" class="form-control" value="W. Europe">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Founded Year</label>
                                        <input type="text" class="form-control" value="2017">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">URL</label>
                                <input type="text" class="form-control" value="https://bleenco.com/">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Discription(full)</label>
                                <textarea class="form-control">Analyzing human behavior and actions with simple cameras in order to avoid accidents and improve human well-being</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Discription(Short)</label>
                                <textarea class="form-control">Analyzing human behavior and actions with simple cameras in order to avoid accidents and improve human well-being</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Latest Round</label>
                                <input type="text" class="form-control" value="">
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Total Funding</label>
                                        <input type="text" class="form-control" value="30">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Source</label>
                                        <input type="text" class="form-control" value="Source - A">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            
                            <div class="mb-3">
                                <label class="form-label">Industries</label>
                                <input type="text" class="form-control" value="Industrial IT">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">In Charge</label>
                                <input type="text" class="form-control" value="Tsutsuki">
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Added Date</label>
                                        <input type="text" class="form-control" value="22-07-2021">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Modified Date</label>
                                        <input type="text" class="form-control" value="22-07-2021">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Member's Comments</label>
                                <textarea class="form-control">N/A</textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Current status</label>
                                        <input type="text" class="form-control" value="4">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Final progress</label>
                                        <input type="text" class="form-control" value="5">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Tag</label>
                                <textarea class="form-control">Digital, Robotics/Sensors,Materials/Chemicals/Biotechnology, PlantTechnology/Inspection,  EnergyManagement/Batteries, Mobility/Logistics, RenewableEnergy/Hydrogen</textarea>
                            </div>

                        </div>
                    </div>

                    <div class="d-flex gap-2 mt-3">
                        <a href="statupdb.php" class="btn btn-outline-primary"><i class="fa-solid fa-xmark"></i> Cancel</a>
                        <a href="statupdb.php" class="btn btn-primary"><i class="fa-solid fa-save"></i> Save</a>
                    </div>

                </div>

                <h3>Attachments</h3>

                <div class="app-card">
                    <div class="d-flex justify-content-between w-100">
                        <div class="d-flex gap-2 justify-content-start">
                            <button class="btn btn-outline-primary"><i class="fa-solid fa-folder"></i> Create Folder</button>
                            <button class="btn btn-primary"><i class="fa-solid fa-plus"></i> Upload Files</button>
                        </div>
                        <div class="d-flex gap-2 justify-content-end">
                            <button class="btn btn-outline-primary"><i class="fa-solid fa-trash-can"></i> Delete</button>
                            <button class="btn btn-primary"><i class="fa-solid fa-download"></i> Download</button>
                        </div>
                    </div>

                    <div class="row mt-3">
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

            </div>

        </div>
    </div>
</body>
</html>