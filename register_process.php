<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash the password for security
    
    // TODO: Store the user information in a database
    
    echo "Registration successful! You can now log in.";

    // Redirect the user to the login page
    header("Location: index.php");
    exit(); // Ensure that the script stops executing after the redirection

}
?>