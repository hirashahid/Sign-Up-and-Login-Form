<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "sign_up";

$conn = mysqli_connect($servername, $username, $password, $database);

/*if($conn){
echo "<h3>Connected!</h3>";
}
else 
echo "<h3>Not Connected!</h3>";
*/

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "insert into reg_form(fname, lname, email, username, password)values('$fname', '$lname', '$email', '$username', '$password')";

    if(mysqli_query($conn, $query)){
        echo "<h2>Inserted!</h2>";
    }
    else
    echo "<h2>Not Inserted!</h2>";
    header("refresh:2; url = SignUpForm.html");


    
?>