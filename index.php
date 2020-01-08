<?php  
include('conexion.php');
session_start();
$inicio_sesion = 1;
if(isset($_POST['submit']))
{
    
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
   
    $sql="SELECT email, password FROM usuarios WHERE email = '$email' ";
    $result=mysqli_query($conexion,$sql);

     while ($row=mysqli_fetch_array($result)) 
    {
        $user_email = $row['email'];
        $contra = $row['password'];
    }
   
    if ($email == $user_email && $password == $contra) 
    {
        $_SESSION['email'] = $email;
        //echo "inicio??sii";
        sleep(1);
       echo "<script>location.href='home.php';</script>"; 
    }else{
        $inicio_sesion = 0;
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
    <!--<script src='main.js'></script> --> 
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

    <div class="contenedor"> 
        <div class="card">
            <form method="post" action="index.php">   
                <div class="form-group">
                    <label for="email-label"> Email </label>
                    <input class="form-control" type="input" name="email" id="email-label">
                    <?php 
                    if ($inicio_sesion == 0) {
                        echo "<small class='alert-danger'> Email or password incorrect </small>";
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label for="pass-label"> Password </label>
                    <input  class="form-control" type="password" name="password" id="pass-label">
                </div>
                <small  class="form-text">Don't have any account? <a href="signup.php">Register</a></small>
                <input class="mybtn btn-login btn-block" type="submit" name="submit" value="Login" >
            </form><!-- cierra form-->
        </div><!-- cierra card del form-->
    </div><!-- cierro contenedor -->

</body>
</html>