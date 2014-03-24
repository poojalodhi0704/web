<?php
    include_once '../dbconnect.php';
    $uploaddir = '../images/';
    $file = $_FILES['image'];
    $file_name = $file['name'];
    $temp_path = $file['tmp_name'];
    $file_size = $file['size'];
    $file_type = $file['type'];
    $name = $_POST['propname'];
    $desc = $_POST['description'];
    $city_name = $_POST['city_list'];
    
    $final_path= $uploaddir.$file_name;
    $final_result = move_uploaded_file($temp_path, $final_path);
    if(!$final_result){
        echo 'Error uploading file'.UPLOAD_ERR_PARTIAL;
    }
    
    $query_i = "INSERT INTO propdetail (name,img,description,city_name) values ('$name','$final_path','$desc','$city_name')";
    mysqli_query($con, $query_i);
    if(!mysqli_query($con, $query_i)){
        die('Error'.mysqli_error($con));
    }
    