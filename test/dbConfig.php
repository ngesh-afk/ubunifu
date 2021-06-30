<?php
//database variables
$db_host = "localhost";
$db_user="root";
$db_pass="";
$db_name="testDB";

//query to connecting to mysql database
$conn= new mysqli ($db_host,$db_user,$db_pass,$db_name) or die ("unable to connect");


?>