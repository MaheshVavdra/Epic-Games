<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "epic_games";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL now do whatever you want: ". mysqli_connect_error());  
    }  
?> 