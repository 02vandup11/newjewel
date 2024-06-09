

<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:akshserver.database.windows.net,1433; Database = akshdatabase", "azureuser", "Aksh@12345");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "azureuser", "pwd" => "Aksh@12345", "Database" => "akshdatabase", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:akshserver.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>
