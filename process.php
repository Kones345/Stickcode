<?php

    ob_start();
    session_start();
    
        include ('connect.php');
   //CHECKS FOR LOGGGING A USER IN     
        if(isset($_POST['login_submit'])){
            if(!empty($_POST['username']) && !empty($_POST['password'])){
            
                $username = mysqli_real_escape_string($conn, $_POST['username']);
                $password = mysqli_real_escape_string($conn,$_POST['password']);
                
                $sql = "SELECT id, first_name FROM users WHERE username = '$username' AND password ='$password'";
                
                $result = mysqli_query($conn, $sql);
                
                if (!$result) {
    die(mysqli_error($conn));
}
            
                
                if (mysqli_num_rows($result) > 0) { 
                    
    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        $firstname= $row["first_name"];
                        $id= $row['id'];
                        $_SESSION['username']=$username;
                        header('Location: mainscreen.php');
                        }
                    header('mainscreen.php');
                    } 
                    else {
                        include('index.php');
                        echo ('Please Try again');
                        }

mysqli_close($conn);
            }
            
        }

//CHECKS FOR REGISTERING A USER

    if(isset($_POST['register_submit'])){
            if(!empty($_POST['username']) && !empty($_POST['password1'])){  // checks that the user entered something
                
                $username = mysqli_real_escape_string($conn,$_POST['username']);
                $sql="SELECT username FROM users WHERE username = '$username'";
                $result = mysqli_query($conn, $sql);
                
                if (mysqli_num_rows($result) > 0) { // queries the database with the username to see if we find a match for that login
                    echo ('That username is already taken'); 
                        }
        
                else if($_POST['password1']!=$_POST['password2']){  //chacks that the passwords match
                    echo ("Please make sure the two passwords match");
                    
                    
                }
                
                else{
                    
                    $password=mysqli_real_escape_string($conn,$_POST['password1']);
                    
                    $sql="INSERT INTO users (id, username, password) VALUES (NULL,'$username', '$password')";
                     if (mysqli_query($conn, $sql)){
                        echo ('successfuly ');
                        $_SESSION['username']=$username;
                        header('Location: mainscreen.php');
                        
                     }
                    
                    else{
                        echo (mysqli_error($conn));
                        
                    }
                    
                }
              
            }
    }

    else{
        echo 'Sorry those details already exist';
        
    }
?>