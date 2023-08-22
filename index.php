<!DOCTYPE html>
<html>
<head>
    <title>Database Connection Example</title>
</head>
<body>
    <h1>Database Connection Example</h1>

    <?php
    // Database connection parameters
    $servername = "localhost";
    $username = "your_username";
    $password = "your_password";
    $dbname = "doc_track_sys";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    echo "Connected successfully to the database.";

    // Close the connection (Note: It's often not necessary to manually close the connection)
    $conn->close();
    ?>
</body>
</html>
