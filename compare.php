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
            $menu = "compare.php";
            include 'inc/sidebar.php' 
        ?>
        <div class="app-content">
            <div class="app-header mb-5">
                <div class="title-block">
                    <h1>Compare (3)</h1>
                </div>
                <div class="d-flex gap-2 justify-content-end">
                    <a href="dealflow.php" class="btn btn-primary"><i class="fa-solid fa-chevron-left"></i> Back</a>
                </div>
            </div>

<?php 
$lists = array(
    "Market Opportunity",
    "Business Model",
    "Assess the Product or Service",
    "Competitive Landscape",
    "Financials",
    "Market Traction",
    "Risk Analysis",
    "Team",
    "Exit Strategy",
    "Legal and Compliance",
    "Social and Environmental Impact"
);
?>            

            <?php include 'inc/dummy.php'; ?>

            <div class="app-card">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <td><h3>Compare Company</h3></td>
                            <td><img src="img/client1.png"></td>
                            <td><img src="img/client2.png"></td>
                            <td><img src="img/client3.png"></td>
                        </tr>
                        <tr style="background:#EAF9F7;">
                            <td></td>
                            <td><h6>B2U Storage Solutions (US)</h6></td>
                            <td><h6>Rerectrify (Australia)</h6></td>
                            <td><h6>Rejoule (US)</h6></td>
                        </tr>
                        <?php foreach($lists as $list) { ?>
                        <tr>
                            <td><b><?php echo $list; ?></b></td>
                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>    


        </div>
    </div>
</body>
</html>