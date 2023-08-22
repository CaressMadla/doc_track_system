<?php
 require "connection.php"; 
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

<<<<<<< HEAD
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />

    <title>Hello, world!</title>
  </head>


  <body class="d-flex vw-100 vh-100 align-items-center justify-content-center">

  
    <button class="btn btn-primary">
      <i class="fab fa-accessible-icon me-1"></i>Hello, world!
    </button>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>

  </body>
=======
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
>>>>>>> 6c594a50226f5679048f58637a73dde67f7fdf1a
</html>

