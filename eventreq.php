<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $etitle = $_POST["etitle"];
    $description = $_POST["description"];


    // Establish a database connection (mysqli example)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "rcw";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO eventreq (name, email, phone, etitle, description) VALUES (?, ?, ?, ?, ?)");

    // Check if the statement was prepared successfully
    if ($stmt === false) {
        die("Error: " . $conn->error);
    }

    // Bind parameters
    $stmt->bind_param("sssss", $name, $email, $phone, $etitle, $description);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Your response has been noted!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
