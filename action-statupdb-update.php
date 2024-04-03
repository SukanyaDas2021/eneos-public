<?php 
ob_start();

include "DbConfig.php";
include "inc/functions.php";

if(isset($_POST['update'])) {
    // echo "Hello";

    extract($_POST);

    $full_description = removeQoute($full_description);
    $short_description = removeQoute($short_description);
    $tag = removeQoute($tag);
    $in_charge = removeQoute($in_charge);
    $competitors = removeQoute($competitors);
    $address = removeQoute($address);
    $latest_round_data = removeQoute($latest_round_data);
    $source = removeQoute($source);
    $final_progress = removeQoute($final_progress);
    $current_status = removeQoute($current_status);
    $comments = removeQoute($comments);

    $sql = "UPDATE startupdb SET `name` = '$name', `industry` = '$industry', `address` = '$address', `competitors` = '$competitors', `full_description` = '$full_description', `latest_round_data` = '$latest_round_data', `short_description` = '$short_description', `tag` = '$tag', `total_funding` = '$total_funding', `founded_year` = '$founded_year', `url` = '$url', `created_at` = '$created_at', `in_charge` = '$in_charge', `source` = '$source', `final_progress` = '$final_progress', `current_status` = '$current_status', `comments` = '$comments', `updated_at` = '$updated_at'  WHERE id = $id";
   
    $result = $db->exec($sql);

    if($result) {
        header("Location: statupdb-view.php?id=$id&type=success&msg=Record Updated Succesfully");
    } else {
        header("Location: statupdb-view.php?id=$id&type=danger&msg=Record Not Updated Try Again");
    }
    $db->close();
}

?>