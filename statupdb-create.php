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

<?php 

// turn off error reporting
error_reporting(0);
ob_start();

include 'inc/functions.php';

if(isset($_POST['company_name'])) {
    extract($_POST);
    $url = ensureHttpScheme($url);
    $company_data = getCompanyData($company_name, $url);
} else{
    header("Location: statupdb.php?type=danger&msg=Please Enter Company Name & URL");
}

// echo "<pre>";
// print_r($company_data);
// echo "</pre>";

// $company_data = array(
//     'name' => 'Cadd centre',
//     'url' => 'https://caddcentre.com/',
//     'Category/Industry' => 'CAD',
//     'Company Address' => 'India, Tamil Nadu, Chennai',
//     'Competitors' => 'dreamzone',
//     'Full Description' => 'CADD Centre is a CAD-focused training provider offering courses covering the entire gamut of CAD spectrum. They provide professional training and delivery of skill-based courses to meet critical skill development needs in CAD, CAM, CAE, and Project Management programs. CADD Centre offers training in popular software such as Pro/Engineer, CATIA, Solid Edge, Solid Works, PC Schematic EL Automation, OrCAD, STAAD.Pro, ANSYS, ArchiCAD, Revit, AutoCAD, Civil 3D, Microsoft Project, PRIMAVERA, F2D, CADian, MAYA & 3DS Max. They are the preferred training partner of more than 5500 corporate houses in India and abroad. CADD Centre also offers tailor-made programs for corporate houses to address their specific CAD skill gaps and training needs of employees.',
//     'Latest Round Data' => 'N/A',
//     'Short Description' => 'CADD Centre is a CAD-focused training provider offering courses in CAD, CAM, CAE, and Project Management programs.',
//     'Tags' => 'CAD, Corporate, Delivery, Design, Development, EdTech, Management, Service, Software, Training',
//     'Total Funding' => '100000',
//     'Year Founded' => '1987',
//     'request_id' => '1706088669336499',
// );
?>            

            <div class="pt-3 w-100 d-flex flex-column gap-3">

                <form action="action-statupdb-create.php" method="post">

                    <div class="app-card">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Company Name</label>
                                    <input type="text" class="form-control" name="name" value="<?php echo $company_data['name']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Industries</label>
                                    <input type="text" class="form-control" name="industry" value="<?php echo $company_data['Category/Industry']; ?>">
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">URL</label>
                                            <input type="text" class="form-control" name="url" value="<?php echo $company_data['url']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Founded Year</label>
                                            <input type="text" class="form-control" name="founded_year" value="<?php echo $company_data['Year Founded']; ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Address</label>
                                    <textarea class="form-control" name="address"><?php echo $company_data['Company Address']; ?></textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Competitors</label>
                                    <textarea class="form-control" name="competitors"><?php echo dataFormating($company_data['Competitors']); ?></textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Description(full)</label>
                                    <textarea class="form-control" name="full_description"><?php echo $company_data['Full Description']; ?></textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Description(Short)</label>
                                    <textarea class="form-control" name="short_description"><?php echo $company_data['Short Description']; ?></textarea>
                                </div>

                            </div>
                            <div class="col-md-6">

                                <div class="mb-3">
                                    <label class="form-label">Latest Round</label>
                                    <input type="text" class="form-control" name="latest_round_data" value="<?php echo dataFormating($company_data['Latest Round Data']); ?>">
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Total Funding</label>
                                            <input type="text" class="form-control" name="total_funding" value="<?php echo $company_data['Total Funding']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Source</label>
                                            <input type="text" class="form-control" name="source" value="">
                                        </div>
                                    </div>
                                </div>
                                
                                

                                <div class="mb-3">
                                    <label class="form-label">In Charge</label>
                                    <input type="text" class="form-control" name="in_charge" value="">
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Added Date</label>
                                            <input type="text" class="form-control" name="created_at" value="<?php echo date("Y-m-d"); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Modified Date</label>
                                            <input type="text" class="form-control" name="updated_at" value="">
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Member's Comments</label>
                                    <textarea class="form-control" name="comments"></textarea>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Current status</label>
                                            <input type="text" class="form-control" name="current_status" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Final progress</label>
                                            <input type="text" class="form-control" name="final_progress" value="">
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Tag</label>
                                    <textarea class="form-control" name="tag"><?php echo dataFormating($company_data['Tags']); ?></textarea>
                                </div>

                            </div>
                        </div>

                        <div class="d-flex gap-2 mt-3">
                            <a href="statupdb.php" class="btn btn-outline-primary"><i class="fa-solid fa-xmark"></i> Cancel</a>
                            <button type="submit" name="save" class="btn btn-primary"><i class="fa-solid fa-save"></i> Save</button>
                        </div>

                    </div>
                
                </form>

                <!-- <h3>Attachments</h3>

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

                </div> -->

            </div>

        </div>
    </div>
</body>
</html>