<pre>
<?php 

ob_start();

include "DbConfig.php";
include 'inc/functions.php';

print_r($_POST);
//print_r($_POST['choose']);

$total_inseted = 0;

foreach ($_POST['choose'] as $key => $value) {
    
    // echo $_POST['name'][$value]."----".$_POST['url'][$value];
    // echo "<br>";

    $url = ensureHttpScheme($_POST['url'][$value]);

    $compnay_data = getCompanyData($_POST['name'][$value], $url);

    print_r($compnay_data);

    $name = dataFormating($compnay_data['name']);
    $industry = dataFormating($compnay_data['Category/Industry']);
    $address = dataFormating($compnay_data['Company Address']);
    $competitors = dataFormating($compnay_data['Competitors']);
    $full_description = dataFormating($compnay_data['Full Description']);
    $latest_round_data = dataFormating($compnay_data['Latest Round Data']);
    $short_description = dataFormating($compnay_data['Short Description']);

    $tag = dataFormating($compnay_data['Tags']);
    $total_funding = dataFormating($compnay_data['Total Funding']);
    $founded_year = dataFormating($compnay_data['Year Founded']);
    $url = dataFormating($compnay_data['url']);

    $created_at = date('Y-m-d');
    $in_charge = NULL;
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

header("Location: statupdb.php?type=success&msg=$total_inseted Record Created Succesfully");

?>
</pre>