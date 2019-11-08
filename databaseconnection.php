<?php
// echo "Hello world";
class DatabaseConnection
{
    private $host;
    private $user;
    private $database;
    private $password;

    private $response;

    public function __construct()
    {
        $this->host = "localhost";
        $this->user = "root";
        $this->password = "";
        $this->database = "campus_recruitment_student";
    }

    public function makeConnectionWithDatabase()
    {
        $this->response = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        // if ($this->response) {
        //     echo "\nconnected with database";
        // } else {
        //     echo "\nnot connected with database";
        // }
        return $this->response;
    }
}
// $obj = new DatabaseConnection();
// $obj->makeConnectionWithDatabase();

// $name = "";
// $gender = "";
// $dateOfBirth = "";
// $contact = "";
// $email = "";
// $password = "";
// $confirmPassword = "";

// if (isset($_POST['name']) && isset($_POST['gender']) && isset($_POST['dateOfBirth']) && isset($_POST['contact']) && isset($_POST['email'])
//     && isset($_POST['password']) && isset($_POST['confirmPassword'])) {
//     $name = $_POST['name'];
//     $gender = $_POST['gender'];
//     $dateOfBirth = $_POST['dateOfBirth'];
//     $contact = $_POST['contact'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     $confirmPassword = $_POST['confirmPassword'];
// }
// $obj->insertDataIntoDatabase($name, $gender, $dateOfBirth, $contact, $email, $password, $confirmPassword);
?>