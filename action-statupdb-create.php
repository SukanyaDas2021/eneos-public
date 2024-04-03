<?php 
ob_start();

include "DbConfig.php";
include "inc/functions.php";

if(isset($_POST['save'])) {
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

    $sql = "INSERT INTO startupdb (`name`, `industry`, `address`, `competitors`, `full_description`, `latest_round_data`, `short_description`, `tag`, `total_funding`, `founded_year`, `url`, `created_at`, `in_charge`, `source`, `final_progress`, `current_status`, `comments`, `updated_at`) 
    VALUES ('$name', '$industry', '$address', '$competitors', '$full_description', '$latest_round_data', '$short_description', '$tag', '$total_funding', '$founded_year', '$url', '$created_at', '$in_charge', '$source', '$final_progress', '$current_status', '$comments', '$updated_at')";

    $result = $db->exec($sql);

    if($result) {
        header("Location: statupdb.php?type=success&msg=Record Created Succesfully");
        // echo "success";
    } else {
        header("Location: statupdb.php?type=danger&msg=Record Not Created Try Again");
        // echo "error";
    }
    $db->close();
}

?>