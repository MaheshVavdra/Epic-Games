
<?php      
    include('DBConnect.php');      
    $email = $_POST['email'];
    $username = $_POST['username'];  
    $mainPassword = $_POST['mainPassword'];          
    $cnfPassword = $_POST["cnfPassword"];

    $email = stripslashes($email);
    $username = stripcslashes($username);  
    $mainPassword = stripcslashes($mainPassword);  
    $cnfPassword = stripcslashes($cnfPassword);  

    $email = mysqli_real_escape_string($con,$email);
    $username = mysqli_real_escape_string($con, $username);  
    $mainPassword = mysqli_real_escape_string($con, $mainPassword);  
    $cnfPassword = mysqli_real_escape_string($con, $cnfPassword);  
    
    if($mainPassword === $cnfPassword){

        $sql = "select * from login where username = '$username' and password = '$password'";         
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
            
        if($count == 1){  
            echo '<script>alert("Username Already Exist.\nPlease Try a different Username.");
            window.location.href = "Login.html"
            </script>';   
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }  

        $sql = "INSERT INTO `login`( `email`, `username`, `password`) 
        VALUES ('$email','$username','$mainPassword')";                                       
        if ($con->query($sql) === TRUE) {
        echo '<script>alert("Congratulations !!!\nNow you are a new Member of Epic Games.");
        window.location.href = "Login.html"
        </script>';       

        // echo "<script>
        // alert('Congratulations !!!\nNow you are a new Member of Epic Games.');
        // window.location.href = 'Login.html'
        // </script>";
        } else {
        echo "Error: " . $sql . "<br>" . $con->error;
        }

        $con->close();
    }
    else{
        echo '<script>alert("Account Creation Failed.\nPassword and Confirm Password does not match!!");
        window.location.href = "signup.html"
        </script>';        

    }
?>  