<?php
   // Database connection parameters
   $servername = "localhost";
   $username = "root"; // 
   $password = ""; // 
   $dbname = "doc_track_sys";

   // Create a connection
   $conn = new mysqli($servername, $username, $password, $dbname);

   // Check connection
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }

   // Close the connection (Note: It's often not necessary to manually close the connection)
   $conn->close();
?>
