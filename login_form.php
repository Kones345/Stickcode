<?php

    ob_start();
    session_start();
        
if (isset($_SESSION['username'])){
            header("Location: mainscreen.php");
            }
    
        ob_end_flush();
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
                    
                        $err_message='<strong>Please Try again<strong>';
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
                    $err_message ='That username is already taken'; 
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

        
    }
?>


<!DOCTYPE html>
<html>
	<head>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <title> Stick Code </title>
		<link rel="icon" href="http://www.chiragkulkarni.com/wp-content/uploads/2014/01/C.png">
        <!-- Latest compiled and minified CSS -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <link rel="stylesheet" type="text/css" href="styling.css">

<!-- Optional theme -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
    </head>
    
    <body id="login_back">

    <div class = "container">
	   <div class="wrapper">
		
        <!--TABS -->
            <ul class="nav nav-tabs" id="tabContent">
            <li class="active"><a href="#login" data-toggle="tab">Login</a></li>
            <li><a href="#register" data-toggle="tab">Register</a></li>

          </ul>
        
          <div class="tab-content offest-md-3">
      
        <!-- LOGIN  -->
            <div class="tab-pane active" id="login">
                <div class="control-group col-md-10 offset-md-2">
        
        
        
                    <form action="login_form.php" method="post" name="Login_Form" class="form-signin">       
		              <h3 class="form-signin-heading">Welcome Back! Please Sign In</h3>
			         <hr class="colorgraph"><br>
                        <p><?php echo($err_message); ?></p>
			  
                      <input type="text" class="form-control input-lg " name="username" placeholder="Username" required="" autofocus="" /><br>
                      <input type="password" class="form-control input-lg" name="password" placeholder="Password" required=""/> <br>    		  

                      <button class="btn btn-lg btn-primary btn-block"  name="login_submit" value="Login" type="Submit">Login</button>  			
                </form>			
	</div>
</div>
              
    <div class="tab-pane" id="register">
        <div class="control-group">
             <h3 class="form-signin-heading">Make an account to join the fun!</h3>
            <form action="login_form.php" method="post">   
            <fieldset>
				<hr class="colorgraph">
				<div class="form-group">
                    <input type="text" name="username" id="username" class="form-control input-lg" placeholder="Enter your username">
				</div>
				<div class="form-group">
                    <input type="password" name="password1" id="password" class="form-control input-lg" placeholder="Enter your Password">
                </div>
                
                <div class="form-group">
                    <input type="password" name="password2" id="password" class="form-control input-lg" placeholder="Confirm your password">
                </div>
					
                <hr class="colorgraph">
				<div class="row">
				
					<div class="col-xs-12 col-sm-12 col-md-12">
						<input type="submit" name="register_submit" class="btn btn-lg btn-primary btn-block" value="Register">
					</div>
				</div>
			</fieldset>       
          </form> 
        </div> 
        
        
        
        
        </div>
        
    </div>
            
    </body>
</html>