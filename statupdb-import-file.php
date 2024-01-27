<pre>
<?php 

ob_start();

include "DbConfig.php";
include 'inc/functions.php';

// print_r($_POST);
//print_r($_POST['choose']);

$total_inseted = 0;

foreach ($_POST['choose'] as $key => $value) {
    
    // echo $_POST['name'][$value]."----".$_POST['url'][$value];
    // echo "<br>";

    $url = ensureHttpScheme($_POST['url'][$value]);

    $compnay_data = getCompanyData($_POST['name'][$value], $url);

    // print_r($compnay_data);

    $name = (isset($_POST['name'][$value]) && !empty($_POST['name'][$value])) ? $_POST['name'][$value] : dataFormating($compnay_data['name']);
    $industry = (isset($_POST['industry'][$value]) && !empty($_POST['industry'][$value])) ? $_POST['industry'][$value] : dataFormating($compnay_data['Category/Industry']);
    $address = (isset($_POST['address'][$value]) && !empty($_POST['address'][$value])) ? $_POST['address'][$value] : dataFormating($compnay_data['Company Address']);
    $competitors = dataFormating($compnay_data['Competitors']);
    $full_description = (isset($_POST['full_description'][$value]) && !empty($_POST['full_description'][$value])) ? $_POST['full_description'][$value] : dataFormating($compnay_data['Full Description']);
    $latest_round_data = dataFormating($compnay_data['Latest Round Data']);
    $short_description = dataFormating($compnay_data['Short Description']);

    $tag = dataFormating($compnay_data['Tags']);
    $total_funding = dataFormating($compnay_data['Total Funding']);
    $founded_year = dataFormating($compnay_data['Year Founded']);
    $url = (isset($_POST['url'][$value]) && !empty($_POST['url'][$value])) ? $_POST['url'][$value] : dataFormating($compnay_data['url']);

    $created_at = date('Y-m-d');
    $in_charge = (isset($_POST['in_charge'][$value]) && !empty($_POST['in_charge'][$value])) ? $_POST['in_charge'][$value] : NULL;
    $source = NULL;
    $final_progress = NULL;
    $current_status = NULL;
    $comments = NULL;
    $comments = NULL;
    $updated_at = NULL;

    $sql = "INSERT INTO startupdb (`name`, `industry`, `address`, `competitors`, `full_description`, `latest_round_data`, `short_description`, `tag`, `total_funding`, `founded_year`, `url`, `created_at`, `in_charge`, `source`, `final_progress`, `current_status`, `comments`, `updated_at`) 
    VALUES ('$name', '$industry', '$address', '$competitors', '$full_description', '$latest_round_data', '$short_description', '$tag', '$total_funding', '$founded_year', '$url', '$created_at', '$in_charge', '$source', '$final_progress', '$current_status', '$comments', '$updated_at')";

    // echo $sql."<br>";

    $result = $db->exec($sql);

    if($result) {
        $total_inseted++;
    }

}

$db->close();

echo '<script> location.replace("statupdb.php?type=success&msg='.$total_inseted.' Record Created Succesfully"); </script>';

// exit(header("Location: statupdb.php?type=success&msg=$total_inseted Record Created Succesfully"));

ob_end_flush();

?>
</pre>