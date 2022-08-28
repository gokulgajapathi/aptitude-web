<?php
    $rollnumber = $_POST['roll'];
    $password = $_POST['password'];

    //database connection here
    $con =new mysqli("localhost","root","","aptitude");
    if($con->connect_error){
        die("Failed to connect : ".$con->connect_error);
    } else{
                // to prevent from mysqli injection  
                $rollnumber = stripcslashes($rollnumber);  
                $password = stripcslashes($password);  
                $rollnumber = mysqli_real_escape_string($con, $rollnumber);  
                $password = mysqli_real_escape_string($con, $password);  
              
                $sql = "select *from registration where name = '$username' and password = '$password'";  
                $result = mysqli_query($con, $sql);  
                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);  
                $count = mysqli_num_rows($result);  
        
                  
                if($count == 1){  
                    echo "<h1><center> Login successful </center></h1>";  
                }  
                else{  
                    echo "<h1> Login failed. Invalid username or password.</h1>";  
                }     
        
    }
    