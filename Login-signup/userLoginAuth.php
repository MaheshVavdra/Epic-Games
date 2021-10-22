
<?php      
    include('DBConnect.php');      
    session_start();
    $username = $_POST['username'];  
    $password = $_POST['password'];          
    $username = stripcslashes($username);  
    $password = stripcslashes($password);  
    $username = mysqli_real_escape_string($con, $username);  
    $password = mysqli_real_escape_string($con, $password);  
    
    $sql = "select * from login where username = '$username' and password = '$password'";         
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
          
    if($count == 1){  
        $_SESSION["userid"] =  $row['user_id'];
        // echo $_SESSION["userid"];
        if($row['Admin'] == 0){            
            header("Location: ../Product Dashboard/");
        }
        else{            
            header("Location: ../Admin Dashboard/");
        }
    }  
    else{  
        echo '<script>alert("Invelid Credentials !!!\nPlease Login with your Username and Password.");
        window.location.href = "Login.html"
        </script>';   
    }     
?>  