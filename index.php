<!DOCTYPE html>
<html>
<head>
    <title>Database Connection Example</title>
</head>
<body>
    <h1>Database Connection Example</h1>

    <?php
    // Include the database connection
    include 'connection.php';

    // Query to retrieve data from the database
    $sql = "SELECT id, name, email FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>ID: " . $row["id"] . " - Name: " . $row["name"] . " - Email: " . $row["email"] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "No records found.";
    }

    // Close the connection (Note: It's often not necessary to manually close the connection)
    $conn->close();
    ?>
</body>
</html>
