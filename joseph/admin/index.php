<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
            <?php include '../dbconnect.php' ?>
            <form action="addproperty.php" method="post" enctype="multipart/form-data">
            Fill in the form below. Every field is mandatory:-<br/>
            <select name="city_list" id="city_list">
                <option value="Select City">Select City</option>
                <?php 
                $getcities = "SELECT city_name from city";
                $list_citits = mysqli_query($con, $getcities);
                while($iterate_row=  mysqli_fetch_array($list_citits))
                {   
                    echo "<option value=\"{$iterate_row['city_name']}\">";
                    echo $iterate_row['city_name'];
                    echo "</option>";
                }
                ?>
               
                                
            </select>
            
            <input type="file" name="image" id="image" accept="img/png,img/jpeg,image/x-png">
            Name of the property:-
            
            <input type="text" name="propname" id="propname"><br/>
            Description:-
            <input type="text" name="description" id="description"><br/>
            <input type="submit" name="submit" id="submit">
            </form>
    </body>
</html>
