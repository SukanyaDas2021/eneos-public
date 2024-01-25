<?php 

class MyDB extends SQLite3 {
    function __construct() {
       $this->open('eneos.db');
    }
}

$db = new MyDB();

if(!$db) {
    echo $db->lastErrorMsg();   
}


// connect mySQL database using opps

$mydb = new mysqli('localhost', 'root', '', 'eneos');

if(!$mydb) {
    echo $mydb->connect_error;
}


?>