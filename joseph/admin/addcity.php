<?php

require_once '../dbconnect.php';

$city=$_POST['city_name'];
$city_query = "INSERT INTO city (city_name) values('$city')";

//mysqli_query($con, $city_query);
if(!mysqli_query($con, $city_query))
        die ('Error occurred'.mysqli_error($con));

mysqli_close($con);
