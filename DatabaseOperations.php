<?php
include "databaseconnection.php";

class DatabaseOperation
{
    public function insertDataIntoDatabase(
        $name,
        $gender,
        $dateOfBirth,
        $contact,
        $email,
        $password,
        $confirmPassword,
        $databaseConnection
    ) {
        $query = "INSERT INTO `student` (`name`, `gender`, `dateOfBirth`, `contact`,
            `email`, `password`, `confirmPassword`) VALUES ('$name', '$gender', '$dateOfBirth', '$contact', 
            '$email', '$password', '$confirmPassword')";
        $resp = mysqli_query($databaseConnection, $query);
        return $resp;
    }
}

$databaseConnection = new DatabaseConnection();
$result = $databaseConnection->makeConnectionWithDatabase();
if ($result) {
    $databaseOperation = new DatabaseOperation();
    $resp = $databaseOperation->insertDataIntoDatabase("Shoaib", "Male", "2015-01-05", "123123123123", "shoaibmurtaza1@yahoo.com", "abc123", "abc123", $result);
    if ($resp) {
        echo "Data inserted into database!";
    } else {
        echo "Data not inserted into database!";
    }
} else {
    echo "No connection with database!";
}

?>