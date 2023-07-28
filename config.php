<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tasks_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    function sanitize($conn, $data) {
        return mysqli_real_escape_string($conn, htmlspecialchars($data));
    }
?>