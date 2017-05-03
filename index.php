

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

        if (isset($_SESSION['username'])){
            header("Location: mainscreen.php");
            }
    
        ob_end_flush();
    ?>
    
    <div class ="container-fluid"> <!-- allows the width of the page container to take up the full width of the screen -->
    
        <div id="bg" width = "100%">
            <a href="login_form.php"><img class= "img-responsive" width = "100%" src="landing_page.png" /> </a> <!-- makes sure that as the dimensions of the page change, so does the image -->
        </div>
        
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> <!-- allows us to use jQuery --> 
     
        <script>
      $(document).ready(function() {
        $("body").hide();
        $("body").delay(2000).fadeIn(2000);
      });
     </script> <!-- allows the contents of the pages body to dade in with a delay of -->
 </div>

</body>
</html>