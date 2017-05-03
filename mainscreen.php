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
    
    <body>
        <?php 
        ob_start();
        session_start();

        if (!isset($_SESSION['username'])){
            header("Location: index.php");
            }
    

        
        
        ?>
    <!-- Navigation bar definition -->
        <nav class = "navbar navbar-default">
        <div class ="container-fluid"> <!-- Allows the width of the navigation bar to fill the width of the screen -->
        
        <!-- lOGO -->
            <div class="navbar-header">
                <a href ="mainscreen.php" class="navbar-brand">Stick Code</a>
                
            
            </div>
        <!-- Menu iTEMS -->
            
            <div>
                <ul  class="nav navbar-nav navbar-right">
                    <li class="active"><a href="">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    
                    
                    <!-- Dropdown menu -->
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo ('<strong>Hey '.$_SESSION['username'].'</strong>') ?> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="">Settings</a></li>
                            <li><a href="logout.php">Logout</a></li>
                            
                        </ul>
                    </li>
                
                </ul>
            </div>
        </div>
    </nav>
        
        
        <!-- Page Content -->
        <div class="container">
               
           <div class="row"> <!-- First Row where the image is held -->
                <div class="col-xs-8 offset-xs-3">
                    <img id="viewport" src="wEBgIFS/real_animation1.gif" class="img-responsive">
                </div>
            </div>    
            
            <div class="row">
                <div class="col-xs-6">
    
                    <div class="btn-group" style="width: 100%">
                        <button type="button" class="btn btn-info btn-block" onClick="resetGif('viewport')" > Reset Animation</button>
                    </div>
                </div>
                    
                    <div class="col-xs-6">
                        <div class="btn-group" style="width: 100%">
                            <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal" > Get Coding!</button>
                            
                        </div>
                    </div>
                </div>
            
            <div class="row" id="instructions">
                <div class="col-xs-12">
                
                    <p>
                        <strong> Instructions:</strong>
                        
                        <ul>
                            <li>Watch the animation above to get to grips with the story</li>
                            
                            <li> If you missed anything, just press the reset animation button </li>
                            
                            <li>When asked, click the "Get Coding" button to start the adventure</li>
                    
                    
                    
                        </ul>
                    </p>
                
                
                
                </div>
            
            </div>
              
            <!-- Modal defintion -->
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Let's code</h4>
                </div>
            <div class="modal-body">
                <pre>Type the following:</pre>
                        <pre id="code_display">Say ('Yes')</pre>
                <textarea id="user_entry" class="form-control" placeholder="Type here...">
                </textarea>
                <button id="sub-button" onClick="check_text('user_entry')" type="button" class="btn btn-primary btn-block" > Submit</button>
                
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            </div>

  </div>
</div>
            
            
                
                    
        <script type="text/javascript">
                    // reset an animated gif to start at first image without reloading it from server.
        function resetGif(id) {
            var img = document.getElementById(id);
            var imageUrl = img.src;
            img.src = "";
            img.src = imageUrl;
                        };
          
            

        </script>
         <script src="text_storage.js"></script>   
    </div>
            
    
        
</body>
</html>