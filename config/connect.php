
// $hostname="localhost";
// $username="root";
// $password="";
// $database="onlineweb";
// $con=mysqli_connect($hostname,$username,$password,$database);
// if(mysqli_connect_errno()){
//     echo("not connected");


// $hostname="localhost";
// $username="id21743933_vanduu";
// $password="Vandana@02";
// $database="id21743933_jewellery";
// $con=mysqli_connect($hostname,$username,$password,$database);
// if(mysqli_connect_errno()){
//     echo("not connected");
// }

<!-- $serverName = getenv('DB_SERVER');
$username = getenv('DB_USERNAME');
$password = getenv('DB_PASSWORD');
$database = getenv('DB_DATABASE');

$conn = mysqli_connect($serverName, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} -->

<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:vanserver.database.windows.net,1433; Database = vandatabase", "azureuser", "Van12345");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "azureuser", "pwd" => "Van12345", "Database" => "vandatabase", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:vanserver.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>
