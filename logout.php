<?php
session_start();
session_destroy();
sleep(1);
echo "<script>location.href='index.php';</script>"; 
?>