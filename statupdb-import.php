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
                    <h6>Excel File</h6>
                    <div class="import-box">
                        <i class="fa-solid fa-file-excel"></i> <br>
                        Click to select an Excel file or drag and drop in this area
                    </div>
                    <p>Formats: xls, csv, xml</p>
                    <div class="d-flex justify-content-center">
                        <a href="statupdb.php" class="btn btn-primary"><i class="fa-regular fa-file"></i> Import </a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</body>
</html>