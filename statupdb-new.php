<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startup DB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="app.css">

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Include DataTables CSS and JS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>

</head>
<body>
    <div class="app-wrapper">
        <?php 
            $menu = "statupdb.php";
            include 'inc/sidebar.php';

            include 'DbConfig.php';
            $table_sql = "SELECT COUNT(*) as count FROM `startupdb`";
            $table_result = $db->query($table_sql);
            $table_data = $table_result->fetchArray();
        ?>
        <div class="app-content">
            <div class="app-header">
                <div class="title-block">
                    <h1>Startup DB</h1>
                    <h5><?php echo $table_data['count']; ?> entries found</h5>
                </div>
                <div class="d-flex gap-2 justify-content-end">
                    <a href="statupdb-import.php" class="btn btn-outline-primary"><i class="fa-regular fa-file"></i> Import </a>
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create-entry"><i class="fa-regular fa-plus"></i> Create new entry</a>
                </div>
            </div>

            <div class="pt-3 w-100 d-flex flex-column gap-3">
                <div class="d-flex justify-content-between w-100">
                    <?php if(isset($_GET['filter']) && $_GET['filter']==1) { ?>
                        <div class="black-drop"></div>
                    <?php } ?>
                    <div class="grid-filter d-flex justify-content-start gap-2">
                        <a href="?filter=1" class="grid-buttons"><i class="fa-solid fa-filter"></i> Filter</a>

                        <?php if(isset($_GET['filter']) && $_GET['filter']=="applied") { ?>
                        <a href="statupdb.php" class="filter-data">IT Industries <i class="fa-solid fa-xmark"></i></a>
                        <a href="statupdb.php" class="filter-data">USA <i class="fa-solid fa-xmark"></i></a>
                        <a href="statupdb.php" class="filter-data">Early <i class="fa-solid fa-xmark"></i></a>
                        <?php } ?>
                        
                        <?php if(isset($_GET['filter']) && $_GET['filter']==1) { ?>
                        <div class="filter-block">
                            <h5 class="m-0">Filter Options</h5>
                            <input type="text" class="form-control" placeholder="Search Keyword">
                            <input type="text" class="form-control" placeholder="Industry" value="IT Industry">
                            <input type="text" class="form-control" placeholder="Location" value="USA">

                            <div class="d-flex flex-column gap-2">
                                <label for="">Stage</label>
                                <label><input type="checkbox"> Early</label>
                                <label><input type="checkbox"> Expansion</label>
                            </div>
                            <div class="d-flex justify-content-between gap-2 w-100">
                                <a href="statupdb.php" class="btn btn-outline-primary">Cancel</a>
                                <a href="statupdb.php?filter=applied" class="btn btn-primary">Apply</a>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="d-flex gap-2 justify-content-end">
                        <a href="startupdb-excel.php" class="grid-buttons"><i class="fa-solid fa-file-excel"></i> Open in Excel</a>
                        <a href="#" class="grid-buttons"><i class="fa-solid fa-table-cells-large"></i> Expand Grid</a>
                    </div>
                </div>

                <?php include 'inc/alert.php'; ?>

                <div class="app-card">
                    <div class="table-responsive-0">

                        <?php 

                            if ($table_data['count'] > 0) {
                                
                            ?>
                            <table class="table" id="startupdb">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Company Name</th>
                                        <th scope="col">Company Address</th>
                                        <th scope="col">Company URL</th>
                                        <th scope="col">Contact Info</th>
                                        <th scope="col">Year Founded</th>
                                        <th scope="col">Category/Industry</th>
                                        <th scope="col">Tags</th>
                                        <th scope="col">Short Description</th>
                                        <th scope="col" style="width: 250px;">Full Description</th>
                                        <th scope="col">Latest Round Data</th>
                                        <th scope="col">Total Funding</th>
                                        <th scope="col">Competitors</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                            <?php 

                            $sql = "SELECT * FROM `startupdb` ORDER BY `id` DESC";
                            $result = $db->query($sql);
                            $sno=0;
                            while($row = $result->fetchArray(SQLITE3_ASSOC)) { 
                                $sno++;
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $sno; ?></th>
                                    <td><a href="statupdb-view.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></td>
                                    <td><?php echo $row['address']; ?></td>
                                    <td><?php echo $row['url']; ?></td>
                                    <td><?php echo $row['in_charge']; ?></td>
                                    <td><?php echo $row['founded_year']; ?></td>
                                    <td><?php echo $row['industry']; ?></td>
                                    <td><?php echo $row['tag']; ?></td>
                                    <td><?php echo $row['short_description']; ?></td>
                                    <td><?php echo $row['full_description']; ?></td>
                                    <td><?php echo $row['latest_round_data']; ?></td>
                                    <td><?php echo $row['total_funding']; ?></td>
                                    <td><?php echo $row['competitors']; ?></td>
                                    <td>
                                        <a href="statupdb-view.php?id=<?php echo $row['id']; ?>" class="grid-list" title="view"><i class="fa-solid fa-eye"></i></a>
                                        <a href="statupdb-delete.php?id=<?php echo $row['id']; ?>" class="grid-list" title="Delete"><i class="fa-solid fa-trash-can"></i></a>
                                    </td>
                                </tr>

                                    
                            <?php } ?>

                                </tbody>
                            </table>

                            <?php

                            } else {
                                
                            }

                            $db->close();
                        ?>

                        <!-- <table class="table" id="startupdb">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Basic Info</th>
                                    <th scope="col">URL</th>
                                    <th scope="col">Description (Short)</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Founded Year</th>
                                    <th scope="col">Latest Round</th>
                                    <th scope="col">Total Funding</th>
                                    <th scope="col">Industries</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                

                                <?php for($i=1; $i<6; $i++) { ?>
                                <tr>
                                    <th scope="row"><?php echo $i; ?></th>
                                    <td><a href="statupdb-view.php">Yank Technologies</a></td>
                                    <td>www.yanktechnologies.com</td>
                                    <td>Yank Technologies develops customizable wireless power solutions for Automotive, Industrial...</td>
                                    <td>USA</td>
                                    <td>29-08-2023</td>
                                    <td></td>
                                    <td>10</td>
                                    <td>IT industries</td>
                                    <td>
                                        <a href="statupdb-view.php" class="grid-list" title="view"><i class="fa-solid fa-eye"></i></a>
                                        <a href="statupdb.php?delete=1" class="grid-list" title="Delete"><i class="fa-solid fa-trash-can"></i></a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table> -->
                    </div>
                </div>

                <!-- <div class="d-flex justify-content-between w-100">

                    <div>
                        <select class="form-control">
                            <option>5</option>
                            <option>10</option>
                            <option>15</option>
                        </select>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                            </li>
                        </ul>
                    </nav>
                </div> -->

            </div>

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="create-entry" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form action="statupdb-create.php" method="POST">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Create Startup DB</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                        <div class="mb-3">
                            <label class="form-label">Company Name</label>
                            <input type="text" class="form-control" name="company_name" value="">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">URL</label>
                            <input type="text" class="form-control" name="url" value="">
                        </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button id="upload-button" type="submit" class="btn btn-primary">Get Started</button>
                    <button id="uploading-button" class="btn btn-primary" type="button" disabled style="display: none;">
                        <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                        <span role="status">Creating Data...</span>
                    </button>
                </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            $('#startupdb').DataTable({
                "columnDefs": [
                    { "width": "550px", "targets": 9 }, // Set the width for the eighth (last) column
                ]
            });
        });
    </script>

    
</body>
</html>