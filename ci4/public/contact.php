<?php
// Set up database connection parameters
$servername = "192.168.150.213";
$username = "webprogss211";
$password = "fancyR!ce36";
$dbname = "webprogss211";

// Connect to the database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check for errors
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// If the form has been submitted, insert the data into the database
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO pgjauod_myguests (Aname, email, Asubject, Amessage) VALUES ('$name', '$email', '$subject', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "Message sent successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
