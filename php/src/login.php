<?php
    session_start();
    require ("conexion_bd.php");

    $username = $_POST["user"];
    $password = $_POST["pass"];

    $query = "SELECT * FROM Users WHERE username = \"$username\" AND password = \"$password\"";
    $result = consultaBaseDatos($query);

    if (mysqli_num_rows($result) == 0) {
        echo "<script>
        alert('The user or password are incorrect');
        window.location.href='../front/index.html';
        </script>";
        } else {
        $_SESSION['user'] = $username;
        $_SESSION['pass'] = $password;
        
        $queryE = "INSERT INTO `Events`(`id_event`, `username`, `type_interaction`, `timestamp`, `id_tweet`, `id_reply`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')";
        $result = consultaBaseDatos($queryE);
        
        header("Location:../front/html/principal.html");
    }

?>
