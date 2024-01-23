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
                    <a href="statupdb-edit.php" class="btn btn-outline-primary"><i class="fa-solid fa-pencil"></i> Edit</a>
                    <a href="statupdb.php" class="btn btn-primary"><i class="fa-solid fa-chevron-left"></i> Back</a>
                </div>
            </div>

            <div class="pt-3 w-100 d-flex flex-column gap-3">

                <div class="app-card">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Basic Info</label>
                                <p class="details-text">SharpEnd (iott)</p>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Location</label>
                                        <p class="details-text">W. Europe</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Founded Year</label>
                                        <p class="details-text">2017</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">URL</label>
                                <p class="details-text">https://bleenco.com/</p>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Discription(full)</label>
                                <p class="details-text">Analyzing human behavior and actions with simple cameras in order to avoid accidents and improve human well-being</p>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Discription(Short)</label>
                                <p class="details-text">Analyzing human behavior and actions with simple cameras in order to avoid accidents and improve human well-being</p>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Latest Round</label>
                                <p class="details-text"></p>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Total Funding</label>
                                        <p class="details-text">30</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Source</label>
                                        <p class="details-text">Source - A</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            
                            <div class="mb-3">
                                <label class="form-label">Industries</label>
                                <p class="details-text">Industrial IT</p>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">In Charge</label>
                                <p class="details-text">Tsutsuki</p>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Added Date</label>
                                        <p class="details-text">22-07-2021</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Modified Date</label>
                                        <p class="details-text">22-07-2021</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Member's Comments</label>
                                <p class="details-text">N/A</p>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Current status</label>
                                        <p class="details-text">4</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Final progress</label>
                                        <p class="details-text">5</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Tag</label>
                                <p class="details-text">Digital, Robotics/Sensors,Materials/Chemicals/Biotechnology, PlantTechnology/Inspection,  EnergyManagement/Batteries, Mobility/Logistics, RenewableEnergy/Hydrogen</p>
                            </div>

                        </div>
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