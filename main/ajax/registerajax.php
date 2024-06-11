<?php
include("../../config/connect.php");

if (
    !empty($_POST['firstName']) &&
    !empty($_POST['lastName']) &&
    !empty($_POST['email']) &&
    !empty($_POST['phoneNumber']) &&
    !empty($_POST['password'])
) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $password = $_POST['password'];

    // Using prepared statement to prevent SQL injection
    $registerQuery = "INSERT INTO `customer` (`cus_email`, `cus_password`, `cus_fname`, `cus_lname`, `cus_phone`) VALUES (?, ?, ?, ?, ?)";
    $statement = mysqli_prepare($con, $registerQuery);
    mysqli_stmt_bind_param($statement, "sssss", $email, $password, $firstName, $lastName, $phoneNumber);
    $executeQuery = mysqli_stmt_execute($statement);

    if ($executeQuery) {
        echo "1"; // Success
    } else {
        echo "2"; // Failure
    }
} else {
    echo "0"; // Invalid input
}
?>
