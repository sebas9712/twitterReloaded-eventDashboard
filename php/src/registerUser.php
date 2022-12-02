<?php
    session_start();
    require ("conexion_bd.php");

    $name = $_POST["name_register"];
    $username = $_POST["email_register"];
    $password = $_POST["pass_register"];
    $query = "SELECT * FROM Users WHERE username = \"$username\"";
    $result = consultaBaseDatos($query);

    if (mysqli_num_rows($result) == 0) {
    if(isset($_POST['btn-register'])){
   
      

        if(isset($name) && isset($username) && isset($password)){
            $query2 = "INSERT INTO Users (name, username,password) VALUES (\"$name\",\"$username\", \"$password\")";
            $result2 = consultaBaseDatos($query2);
            if($result2){
                echo "<script>
                alert('The user has been registered. Please login');
                window.location.href='../front/index.html';
                </script>";
            }
        }
    }
}else{
    echo "<script>
    alert('The user already exist. Please Login');
    window.location.href='../front/index.html';
    </script>";
}
?>
