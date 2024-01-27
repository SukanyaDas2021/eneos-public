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
            include 'inc/sidebar.php';
            include 'DbConfig.php';

            $id = $_GET['id'];

            $sql = "SELECT * FROM startupdb WHERE id = $id";
            $result = $db->query($sql);
            $data = $result->fetchArray(SQLITE3_ASSOC);

            //print_r($data);
            // exit;
        ?>
        <div class="app-content">
            <div class="app-header">
                <div class="title-block">
                    <h1>Startup DB</h1>
                </div>
                <div class="d-flex gap-2 justify-content-end">
                    <a href="statupdb-edit.php?id=<?php echo $data['id']; ?>" class="btn btn-outline-primary"><i class="fa-solid fa-pencil"></i> Edit</a>
                    <a href="statupdb.php" class="btn btn-primary"><i class="fa-solid fa-chevron-left"></i> Back</a>
                </div>
            </div>

            <div class="pt-3 w-100 d-flex flex-column gap-3">

                <?php include 'inc/alert.php'; ?>

                <div class="app-card">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Company Name</label>
                                <p class="details-text"><?php echo $data['name']; ?></p>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Industries</label>
                                <p class="details-text"><?php echo $data['industry']; ?></p>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">URL</label>
                                        <p class="details-text"><?php echo $data['url']; ?></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Founded Year</label>
                                        <p class="details-text"><?php echo $data['founded_year']; ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <p class="details-text"><?php echo $data['address']; ?></p>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Competitors</label>
                                <p class="details-text"><?php echo $data['competitors']; ?></p>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Description(full)</label>
                                <p class="details-text"><?php echo $data['full_description']; ?></p>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Description(Short)</label>
                                <p class="details-text"><?php echo $data['short_description']; ?></p>
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="mb-3">
                                <label class="form-label">Latest Round</label>
                                <p class="details-text"><?php echo $data['latest_round_data']; ?></p>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Total Funding</label>
                                        <p class="details-text"><?php echo $data['total_funding']; ?></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Source</label>
                                        <p class="details-text"><?php echo $data['source']; ?></p>
                                    </div>
                                </div>
                            </div>
                            
                            

                            <div class="mb-3">
                                <label class="form-label">In Charge</label>
                                <p class="details-text"><?php echo $data['in_charge']; ?></p>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Added Date</label>
                                        <p class="details-text"><?php echo $data['created_at']; ?></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Modified Date</label>
                                        <p class="details-text"><?php echo $data['updated_at']; ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Member's Comments</label>
                                <p class="details-text"><?php echo $data['comments']; ?></p>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Current status</label>
                                        <p class="details-text"><?php echo $data['current_status']; ?></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Final progress</label>
                                        <p class="details-text"><?php echo $data['final_progress']; ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Tag</label>
                                <p class="details-text"><?php echo $data['tag']; ?></p>
                            </div>

                        </div>
                    </div>

                    <div class="d-flex gap-2 mt-3">
                        <a href="statupdb.php" class="btn btn-outline-primary"><i class="fa-solid fa-chevron-left"></i> Back</a>
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