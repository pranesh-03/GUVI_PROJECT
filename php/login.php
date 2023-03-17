  <?php
 
$host = "localhost";
$username = "root";
$password = "";
$dbname="register";
$conn = mysqli_connect($host, $username, $password, $dbname);
// try{
//     $conn = new PDO("mysql:host=$host;dbname=register",$username,$password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//     echo "Connected Successfully";
// }
// catch(PDOException $e){
//     echo "Connection Failed" . $e->getMessage();
// }

// echo $_POST['action'];

 if(isset($_POST['action']) && $_POST['action']=='login'){
  $lemail=$_POST['useremail'];
  $lpassword=$_POST['password'];
  $query = "SELECT email , password FROM signin_page WHERE email='$lemail' AND password='$lpassword'";
  $result = mysqli_query($conn, $query);
  $row=mysqli_num_rows($result);
  if($row<=0){
    echo 0;
  }
  else{
    echo 1;
  }
 }


 ?> 