<?php
try {
    $conn = new PDO("sqlsrv:server = tcp:vanserver.database.windows.net,1433; Database = vandb", "azureuser", "Akshada@12345");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
?>