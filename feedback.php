<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $mail = $conn->real_escape_string($_POST['mail']);
    $text = $conn->real_escape_string($_POST['text']);

    $sql = "INSERT INTO reply (name, mail, text) VALUES ('$name', '$mail', '$text')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
