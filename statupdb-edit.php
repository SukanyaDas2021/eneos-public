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
        ?>
        <div class="app-content">
            <div class="app-header">
                <div class="title-block">
                    <h1>Startup DB</h1>
                </div>
                <div class="d-flex gap-2 justify-content-end">
                    <a href="statupdb-view.php?id=<?php echo $_GET['id']; ?>" class="btn btn-primary"><i class="fa-solid fa-chevron-left"></i> Back</a>
                </div>
            </div>

            <div class="pt-3 w-100 d-flex flex-column gap-3">
            
            <form action="action-statupdb-update.php" method="post">
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                <div class="app-card">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Company Name</label>
                                <input type="text" class="form-control" name="name" value="<?php echo $data['name']; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Industries</label>
                                <input type="text" class="form-control" name="industry" value="<?php echo $data['industry']; ?>">
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">URL</label>
                                        <input type="text" class="form-control" name="url" value="<?php echo $data['url']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Founded Year</label>
                                        <input type="text" class="form-control" name="founded_year" value="<?php echo $data['founded_year']; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <textarea class="form-control" name="address"><?php echo $data['address']; ?></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Competitors</label>
                                <textarea class="form-control" name="competitors"><?php echo $data['competitors']; ?></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Discription(full)</label>
                                <textarea class="form-control" name="full_description"><?php echo $data['full_description']; ?></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Discription(Short)</label>
                                <textarea class="form-control" name="short_description"><?php echo $data['short_description']; ?></textarea>
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="mb-3">
                                <label class="form-label">Latest Round</label>
                                <input type="text" class="form-control" name="latest_round_data" value="<?php echo $data['latest_round_data']; ?>">
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Total Funding</label>
                                        <input type="text" class="form-control" name="total_funding" value="<?php echo $data['total_funding']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Source</label>
                                        <input type="text" class="form-control" name="source" value="<?php echo $data['source']; ?>">
                                    </div>
                                </div>
                            </div>
                            
                            

                            <div class="mb-3">
                                <label class="form-label">In Charge</label>
                                <input type="text" class="form-control" name="in_charge" value="<?php echo $data['in_charge']; ?>">
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Added Date</label>
                                        <input type="text" class="form-control" name="created_at" value="<?php echo $data['created_at']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Modified Date</label>
                                        <input type="text" class="form-control" name="updated_at" value="<?php echo $data['updated_at']; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Member's Comments</label>
                                <textarea class="form-control" name="comments"><?php echo $data['comments']; ?></textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Current status</label>
                                        <input type="text" class="form-control" name="current_status" value="<?php echo $data['current_status']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Final progress</label>
                                        <input type="text" class="form-control" name="final_progress" value="<?php echo $data['final_progress']; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Tag</label>
                                <textarea class="form-control" name="tag"><?php echo $data['tag']; ?></textarea>
                            </div>

                        </div>
                    </div>

                    <div class="d-flex gap-2 mt-3">
                        <a href="statupdb-view.php?id=<?php echo $data['id']; ?>" class="btn btn-outline-primary"><i class="fa-solid fa-xmark"></i> Cancel</a>
                        <button type="submit" name="update" class="btn btn-primary"><i class="fa-solid fa-save"></i> Update</button>
                    </div>

                </div>

            </form>


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