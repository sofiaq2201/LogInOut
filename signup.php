<?php 
include('conexion.php');
//echo $_REQUEST['email'];
$repeated_email = 0;
//supongo   que contraseñas iguales
$passwords_iguales = 1;
$cuenta_creada = 0;
if(isset($_POST['submit']))
{
          
    //chequea que el email no este en uso
    $consulta = "SELECT email FROM usuarios";
    $resultado = mysqli_query($conexion, $consulta);

    while($myrow = mysqli_fetch_array($resultado))
    {
        $email = $myrow['email'];
       
        if ($email == $_REQUEST['email']) 
        {
            $repeated_email = 1 ;
        }
    } //cierra el while

    //comparar ambas contraseñas
    //recibo las contraseñas
    $pass = $_REQUEST['password'];
    $repeat_pass = $_REQUEST['repeat_password'];

   
    if ($pass !== $repeat_pass) 
    {
        //echo "contras diferentes";
        //falso, no son iguales = 0
        $passwords_iguales = 0 ;
    }

    //si no se repite email, procede registro
    if (!$repeated_email && $passwords_iguales) {
        $registro = "INSERT into usuarios values('',
        '$_REQUEST[email]',
        '$_REQUEST[password]')";
        mysqli_query($conexion, $registro);
        $cuenta_creada = 1;
    }

   
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Log  In</title>
    <meta name='viewport' content='width=device-width, initial-scale=1,  shrink-to-fit=no'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

    <div class="contenedor"> 
        <div class="card shadow">
            <form method="post" action="signup.php">   
                <div class="form-group">
                    <label  for="email-label" > Email </label>
                    <input class="form-control" type="input" name="email" id="email-label">

                    <?php
                    if ($repeated_email == 1) 
                        {
                        echo "<small class='alert-danger'>El email está en uso</small>";
                        }
                    $repeated_email = 0;
                    ?>
                </div>
                <div class="form-group">
                    <label for="pass-label"> Password </label>
                    <input  class="form-control" type="password" name="password" id="pass-label">
                </div>
                <div class="form-group">
                    <label for="pass-confirm-label">Confirm password </label>
                    <input  class="form-control" type="password" name="repeat_password" id="pass-confirm-label-label">
                    <?php
                    if ($passwords_iguales == 0) {
                        echo "<small class='alert-danger' > Contraseñas no coinciden </small>";
                    }

                    ?>
                </div>
                <small  class="form-text">Do you already have an account? <a href="index.php">Login</a></small>
                <input class="mybtn btn-login btn-block" type="submit" name="submit" value="Create Account" >
                <?php 
                if ($cuenta_creada) {
                    echo "<p class='alert-success cuenta_creada'> Your account has been successfully created </p>";
                }
                ?>
            </form><!-- cierra form-->
        </div><!-- cierra card del form-->
    </div><!-- cierro contenedor -->
</body>
</html>