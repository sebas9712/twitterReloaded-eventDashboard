<?php
    session_start();
    require ("conexion_bd.php");


    if(isset($_POST['btn-register'])){
        if(isset($name) && isset($username) && isset($password)){
            $name = $_POST["name_register"];
            $username = $_POST["email_register"];
            $password = $_POST["pass_register"];
            
            $query = "INSERT INTO Users (name, `username`,password) VALUES ($username)";
            $result = consultaBaseDatos($query);
            if($result){
                echo "<script>
                alert('The user has been registered. Please Login.
                location.href='../front/index.html';
                </script>"; 
            }
        }
    }

    


        /*/if($result){
            echo "<script>
            alert('The user has been registered. Please Login.
            location.href='../front/index.html';
            </script>"; 
        }else{
            echo "<script>
        alert('Please make sure that all fields all complete.');
        window.location.href='../front/RegistrarCuenta.html';
        </script>";
        }
    
    }
}else{
    echo "<script>
alert('Please make sure that all fields all complete.');
window.location.href='../front/RegistrarCuenta.html';
</script>";
}

   */
    
?>
