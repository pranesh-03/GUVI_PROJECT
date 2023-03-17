<?php 
$uri = 'mongodb://localhost:27017';
$manager = new MongoDB\Driver\Manager($uri);
$database = "GUVI_PROJ";
$collection = "signin_page";
$bulk = new MongoDB\Driver\BulkWrite;

$document = [
    'email' => $_POST['email'],
    'password' => $_POST['password'],
    'username' => $_POST['username'],
    'age' => $_POST['age'],
    'contact' => $_POST['phone'],
    'D.O.B' => $_POST['date'],
];
$bulk = new MongoDB\Driver\BulkWrite;
$bulk->insert($document);
// Create MongoDB write concern object
$writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 1000);
// Execute bulk write operation
$result = $manager->executeBulkWrite("$database.$collection", $bulk, $writeConcern);
// Print result
printf("Inserted %d document(s)\n", $result->getInsertedCount());
?>
<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname="register";
$conn = mysqli_connect($host, $username, $password, $dbname);
if (isset($_POST['email']) && $_POST['email']!="" && isset($_POST['password']) && $_POST['password']!=""){
   $sql = "INSERT into signin_page(email,password) VALUES('".addslashes($_POST['email'])."','".addslashes($_POST['password'])."')";
  if($conn->query($sql)===true){
    echo 1;
  }
  else{
    echo 0;
  }  
}
?>