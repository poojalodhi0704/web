<?php

$con = mysqli_connect("localhost","vikram","vikram","property");
if(mysqli_connect_errno()){
    echo"The connection to the db failed".  mysqli_error($con);
}