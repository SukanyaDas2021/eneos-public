<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deal Flow</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="app.css">
</head>
<body>
    <div class="app-wrapper">
        <?php 
            $menu = "dealflow.php";
            include 'inc/sidebar.php' 
        ?>
        <div class="app-content">
            <div class="app-header">
                <div class="title-block">
                    <h1>Deal Flow</h1>
                    <h5>10 entries found</h5>
                </div>
                <div class="d-flex gap-2 justify-content-end">
                    <a href="dealflow-import.php" class="btn btn-outline-primary"><i class="fa-regular fa-file"></i> Import </a>
                    <a href="dealflow-edit.php" class="btn btn-primary"><i class="fa-regular fa-plus"></i> Create new entry</a>
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
                        <a href="dealflow.php" class="filter-data">IT Industries <i class="fa-solid fa-xmark"></i></a>
                        <a href="dealflow.php" class="filter-data">USA <i class="fa-solid fa-xmark"></i></a>
                        <a href="dealflow.php" class="filter-data">Early <i class="fa-solid fa-xmark"></i></a>
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
                                <a href="dealflow.php" class="btn btn-outline-primary">Cancel</a>
                                <a href="dealflow.php?filter=applied" class="btn btn-primary">Apply</a>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="d-flex gap-2 justify-content-end">
                        <a href="dealflow-excel.php" class="grid-buttons"><i class="fa-solid fa-file-excel"></i> Open in Excel</a>
                        <a href="#" class="grid-buttons"><i class="fa-solid fa-table-cells-large"></i> Expand Grid</a>
                    </div>
                </div>

                <div class="alert alert-warning" role="alert">This page contains only dummy data for demonstration purposes.</div>

                <div class="app-card">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Company Name</th>
                                    <th scope="col">Date Received</th>
                                    <th scope="col">Industry</th>
                                    <th scope="col">Business Model</th>
                                    <th scope="col">Website</th>
                                    <th scope="col">Country</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for($i=1; $i<6; $i++) { ?>
                                <tr>
                                    <th scope="row"><?php echo $i; ?></th>
                                    <td><a href="dealflow-view.php">Doppl Ai</a></td>
                                    <td>01-08-2023</td>
                                    <td>IT Industry</td>
                                    <td>Developing AI to create the highest quality AI simulation of any individual that grows with the individual over time</td>
                                    <td>www.doppl.ai</td>
                                    <td>USA</td>
                                    <td class="d-flex justify-content-center gap-2">
                                        <a href="dealflow-view.php" title="view" class="grid-list"><i class="fa-solid fa-eye"></i></a>
                                        <a href="report.php" title="Report" class="grid-list"><i class="fa-regular fa-clipboard"></i></a>
                                        <a href="dealflow.php?delete=1" class="grid-list" title="Delete"><i class="fa-solid fa-trash-can"></i></a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="d-flex justify-content-between w-100">

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
                </div>

            </div>

        </div>
    </div>
</body>
</html>