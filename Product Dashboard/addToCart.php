<?php
include('DBConnect.php');
session_start();
$product = $_GET["pr_id"];
$backtopage = $_GET["here"];
// $user = $_GET["userid"];
$userid = $_SESSION['userid'];
$getProductDetails = "select price from epicnames where id = ".$product;
$result = mysqli_query($con, $getProductDetails);
$checkIfProdExist = "select item_id from cart where item_id = ".$product." AND user_id = ".$userid;
$check = mysqli_query($con, $checkIfProdExist);
// echo $checkIfProdExist;
if(mysqli_num_rows($check) == 0 ){
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $insertProduct = "INSERT INTO `cart`( `user_id`, `item_id`, `item_value`) VALUES ($userid,$product,".$row['price'].")";
    $result = mysqli_query($con, $insertProduct);
    // echo mysqli_num_rows($check);
    echo '<script>
        window.location.href = "./'.$backtopage.'"
        </script>'; 
}
else{
    echo '<script>alert("Product is already in your Cart!!!\n Thank You, Keep  Shopping !!");
        window.location.href = "./'.$backtopage.'"
        </script>'; 
    // echo mysqli_num_rows($check);
}
?>