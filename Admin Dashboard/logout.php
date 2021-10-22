<?php
session_start();
session_unset();
session_destroy();
session_write_close();
setcookie(session_name(),'',0,'/');
session_regenerate_id(true);
echo '<script>alert("You have been Loged out !!!\n Thank You, Come again");
        window.location.href = "../index.php"
        </script>'; 
?>