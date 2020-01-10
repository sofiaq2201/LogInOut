<?php 
include('conexion.php');
session_start();

if($_SESSION['email']!==0){
	$inicio=1;
}else{
	$inicio=0;
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
				<?php
				if($inicio){
					echo "<h3>Welcome!</h3>
						  <a href='logout.php'>Log out</a>";
				}else {
					echo "<h3>You didn't <a href='index.php'>log in</a></h3>";
				}
				?>
				
			</div>
		</div>
</body>
</html>