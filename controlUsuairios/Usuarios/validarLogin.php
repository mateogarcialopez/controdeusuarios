<?php
session_start();
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Check Login and create session</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script>
            function prueba(var ) {
            mateo = var
                    console.log(var );
                    alert(mateo);
            }
        </script>
    </head>
    <body>
        <div class="container">

            <?php
            // Connection info. file

            $dbhost = "localhost";    // localhost or IP
            $dbuser = "root";    // database username
            $dbpass = "";       // database password
            $dbname = "modeloventas";    // database name
            // Connection variables
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // data sent from form login.html 
            $email = $_POST['email'];
            $password = md5($_POST['password']);

            // Query sent to database
            $result = mysqli_query($conn, "SELECT Email, Password, Name, tipo_usr FROM users WHERE Email = '$email'");

            // Variable $row hold the result of the query
            $row = mysqli_fetch_assoc($result);
            $str = $row['tipo_usr'];
            // Variable $hash hold the password hash on database
            $hash = $row['Password'];

            /*
              password_Verify() function verify if the password entered by the user
              match the password hash on the database. If everything is OK the session
              is created for one minute. Change 1 on $_SESSION[start] to 5 for a 5 minutes session.
             */
            if ($password==$hash) {
            
                $_SESSION['loggedin'] = true;
                $_SESSION['name'] = $row['Name'];
                $_SESSION['start'] = time();
                $_SESSION['tipo_usr'] = $row['tipo_usr'];
                $_SESSION['expire'] = $_SESSION['start'] + (1 * 60);

                echo "<div class='alert alert-success mt-4' role='alert'><strong>Welcome!</strong> $row[Name] ($row[tipo_usr])			
				<p><a onclick=\"prueba($row[tipo_usr])\" href='../Articulos/listarArticulos.php'>ARTICULOS</a></p>
                                <p><a href='../Factura/listarFacturas.php'>FACTURAS</a></p>
                                <p><a href='../Sucursales/listarSucursales.php'>SUCURSALES</a></p>
                                <p><a href='edit-profile.php'></a></p>
				<p><a href='logout.php'>Logout</a></p>       
                               
                    </div>";
            } else {
                echo "<div class='alert alert-danger mt-4' role='alert'>Email or Password are incorrects!
				<p><a href='login.html'><strong>Please try again!</strong></a></p></div>";
            }
            ?>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    </body>
</html>