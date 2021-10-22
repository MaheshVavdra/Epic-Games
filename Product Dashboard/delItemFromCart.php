<?php
include('DBConnect.php');
$prod = $_GET["item_id"];  
$userid = $_GET["userid"];
$sql = "DELETE FROM `cart` WHERE item_id =".$prod." and user_id = ".$userid;
$result = mysqli_query($con, $sql);
if($result == 1){
    echo '<script>
    window.location.href = "./cart.php"
    </script>'; 
}
else{
    echo "failed";
}
?>