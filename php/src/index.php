<?php
//These are the defined authentication environment in the db service

// The MySQL service named in the docker-compose.yml.
$host = 'db';

// Database use name
$user = 'root';

//database user password
$pass = 'root';



// check the MySQL connection status
$conn = new mysqli($host, $user, $pass, 'Twitter_Db');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL server successfully!";
    // $query = "INSERT INTO Users (name, username, password) VALUES ('Genaro', 'GenaroSanudo', 'pass123')";
    $query = "INSERT INTO Tweets (description) VALUES ('blablablala')";
    $resultado = mysqli_query($conn, $query);

    $query = "SELECT * FROM Tweets";
    $result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_array($result)) {
        echo print_r($row);       // Print the entire row data
    }
}
?>