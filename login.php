<?php
$server = "localhost";
$username = "root";
$database = "sign_up";
$password ="";

$conn = mysqli_connect($server, $username, $password ,$database);
if($conn){
    echo = "Connected!";
}
else
 echo = "Not Connected";

?>