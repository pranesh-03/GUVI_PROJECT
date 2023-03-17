<?php
echo "login successfull <br>";

echo "your Data from mysql <br><br>";


    $host ="localhost";
    $username="root";
    $password="";
    $database="register";
    $conn=mysqli_connect($host,$username,$password,$database);
   
    $sql = "SELECT * FROM signin_page"; 
    $result=mysqli_query($conn,$sql);

    $json_array=array();
    while($data=mysqli_fetch_assoc($result)){
        $json_array[]=$data;
        
    }
    echo json_encode($json_array)
?>
