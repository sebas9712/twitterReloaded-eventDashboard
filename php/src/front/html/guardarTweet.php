<?php
    require("../../conexion_bd.php");

    $description = $_POST["tweet_desc"];
    // $username = $_SESSION['usuario'];

    $query = "INSERT INTO Tweets (description) VALUES (\"$description\")";
    $id = returnID($query);

    echo $id;
    $time = time();

    // $query = "INSERT INTO Events (username, type_interaction, timestamp, id_tweet) VALUES(\"$username\", 1, \"$time\", \"$result\")";

    // header("Location:./crearTweet.php");

    // $query = "SELECT * FROM Tweets";
    // $result = consultaBaseDatos($query);

    // while($row = mysqli_fetch_array($result)) {
    //     echo print_r($row);       // Print the entire row data
    // }
?>