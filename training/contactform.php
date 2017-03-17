<?php

        if ($_POST('submit')) {
            
            $result='<div class="alert alert-success">Form submitted</div>';
            
            if ($_POST('name')) {
                
                $error.="<br />Please enter your name";
                
            }
            
            if ($_POST('email')) {
                
                $error.="<br />Please enter your email";
                
            }
            
            if ($_POST('email')!="" AND !filter_var($_POST('email'), FILTER_VALIDATE_EMAIL)) { 
                $error.="<br />Please enter a valid email address"
            }
            
            if ($_POST('error')) {
                
                $result='<div class="alert alert-danger"><strong>There was error(s) in your form:'.$error.'</strong></div>';
                
            } else {
                
                mail("nina@kaosempire.org.uk")
                
            }
            
        }

  ?>

<!doctype html>
<html>
<head>
    <title>My first Webpage</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <script type="text/javascript" src="jquery.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="jquery-ui.css"/>
    
    <script type="text/javascript" src="jquery-ui.min.js"></script>
    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">


    
    
    <style type="text/css">
    
    .emailForm {
        border: 1px solid grey;
        border-radius: 10px;
        margin-top: 20px;
    }
    
    form {
        padding-bottom: 20px;
    }
    
    
    
    </style>
    
</head>  

<body>

    <?php
    
    /*
    
        $emailTo="";
        $subject="I hope this works";
        $body="I think you're great";
        $headers="From: boardsforbureh.info"
        
        if (mail($emailTo, $subject, $body, $headers)) {
                echo "Mail sent successfully!"           
        
        } else {
                echo "Mail not sent!"
        }
    
  */

  
  
    ?>
    
    <div class="container">
        
        <div class="row">
            
            <div class="col-md-6 col-md-offset-3 emailForm">
        
        <h1> My email form</h1>
        
        <?php echo $result ?>
        
        <p class="lead"> </p>
        
        <form method="post">
            
            <div class="form-group">
                <label for="name">Your name:</label>
                <input type="text" name="name" class="form-control" placeholder="Your Name"/>
            </div>
            
            <div class="form-group">
                <label for="email">Your email:</label>
                <input type="email" name="email" class="form-control" placeholder="Your Email"/>
            </div>
            
            <div class="form-group">
                <label for="email">Your email:</label>
                <input type="email" name="email" class="form-control" placeholder="Your Email"/>
            </div>
            
            <div class="form-group">
                <label for="email">Your email:</label>
                <input type="email" name="email" class="form-control" placeholder="Your Email"/>
            </div>
        
        <input type="submit" name="submit" class="btn btn-success btn-lg" value="Submit" />
        
        </form>
       
              </div>
        </div>
    </div>
        
    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
</body>
</html>
