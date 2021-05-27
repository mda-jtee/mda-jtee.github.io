<?php
  $name = $_POST['name'];
  $number = $_POST['number'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];

	$email_subject = "Inquiry from $name";

	$email_body = " Name: $name\n Number: $number\n Email: $visitor_email\n Message: $message\n".

  $to = "jonietee88@gmail.com";

  $headers = "From: $visitor_email \r\n";


  mail($to,$email_subject,$email_body,$headers);

 ?>

 <html lang="en">
 <head>
     <title>Jonie Tee - Real Estate</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/style.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script src="js/myscript.js"></script>
     <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="index.css">
     <link rel="icon" href="favicon.ico" type="image/x-icon">
     <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

 </head>
 <body>
     <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Jonie Tee - Real Estate</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="contact.html">Contact</a></li>

                </ul>
            </div>
        </div>
    </nav>

     <div class ="parallax">
       <img id="pp" src="images/logo.png" ></img>

       <div class="jumbotron test">
           <a name="about"></a>
           <div class="container text-center">
               <div class="col-lg-4"></div>
               <div class="col-lg-4">
                 <img onload="loadMyImage()" id="myImage" border="0" alt="picture" class="image-responsive" src="images/pp1.png" width="100%">
               </div>
               <div class="col-lg-4"></div>
             <br></br>
             <div class="col-lg-12">
               <h3 class="name">
                   <span style="color:	#222222">Thanks for your inquiry. I will get back to you within 24 hours.</span>
               </h3>

             </div>
           </div>
       </div>
     </div>




 </body>
 </html>
