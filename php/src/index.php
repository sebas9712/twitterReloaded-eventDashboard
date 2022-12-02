<?php
    require("./conexion_bd.php");

    // $query = "INSERT INTO Users (name, username, password) VALUES ('Genaro', 'GenaroSanudo', 'pass123')";
    $query = "INSERT INTO Tweets (description) VALUES ('blablablala')";
    $resultado = consultaBaseDatos($query);

    $query = "SELECT * FROM Tweets";
    $result = consultaBaseDatos($query);

    while($row = mysqli_fetch_array($result)) {
        echo print_r($row);       // Print the entire row data
    }
?>