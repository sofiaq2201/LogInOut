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
                </div>
                <div class="form-group">
                    <label for="pass-label"> Password </label>
                    <input  class="form-control" type="password" name="password" id="pass-label">
                </div>
                <small  class="form-text">Don't have any account? <a href="#">Sing up</a></small>
                <input class="mybtn btn-login btn-block" type="submit" name="login" value="Log in" >
            </form><!-- cierra form-->
        </div><!-- cierra card del form-->
    </div><!-- cierro contenedor -->
</body>
</html>