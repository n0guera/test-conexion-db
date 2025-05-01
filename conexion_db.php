<?php
function conexion_db(string $dbname, string $query)
{
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }
    $sql = $query;
    $res = $conn->query($sql);
    $conn->close();
    return $res;
}
