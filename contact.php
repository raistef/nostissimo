<!doctype html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Quicksand|Signika|Barrio" rel="stylesheet"> <!-- add google fonts-->

        <link rel="stylesheet" type="text/css" href="css.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!-- add bootstrap library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>             <!-- add jQuery library -->
       	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />	<!-- add a favicon-->	
        <title>
            Nostissimo
        </title>
        
        <script>
            
            function checkForm() { 
                var name = document.ContactForm.name.value;
                var email = document.ContactForm.email.value;
                var comment = document.ContactForm.comment.value;

                if (!(name.includes(" "))) {
                
                    window.alert("Please enter your full name.");
                    return false;
                }
    
                if (!(email.includes("@")) || !(email.includes(".")))
                {
                    window.alert("Please enter a valid e-mail address.");
                    return false;
                }  
                return true;
            }
                
                
            
        
        </script>
     
        
    </head>
    
    <body id="body_gallery"> 
        
        <header>
        
        <nav id="nav_bar">
            <ul id="website_menu">
                 <li><a href="index.html">Home</a></li>
                 <li><a href="gallery.html">Gallery</a></li>
                 <li><a href="menu.html">Menu</a></li>
                 <li><a href="offers.html">Offers</a></li>
            </ul>
            
        </nav>
        </header>
        <div id="cover_gallery">
            
						<?php
				// if form not yet submitted
				// display form
				if (!isset($_POST['submit']))
				{
						?>

            <form id="contact_form" name="ContactForm" action="contact.php" method="post" >
                <h2 class="text-center">Send us a message:</h2>
                <p>Full Name:</p>
                <input type="text" name="name" placeholder="Your full name..." required><br>
                <p>E-mail:</p>
                <input type="text" name="email" placeholder="Your e-mail..." required><br>
                <p>Your message:</p><br>
                <textarea id="comment" name="comment" placeholder="Your comment..." required></textarea><br><br>
                <input class="btn-primary" id="submit" type="submit" value="Submit" name="submit">
                <input class="btn-primary" type="reset" value="Reset" >
            </form>
			
			
				<?php
					// if form submitted
					// process form input
					}
					else
					{
						$name = $_POST['name'];
						$email = $_POST['email'];
						$comment = $_POST['comment'];
						$file="comments.txt";
						
						
							 $handle = fopen("comments.txt", "a" ); 
							 fwrite($handle, "\r\nName: $name\r\nEmail: $email\r\nComments: $comment\r\n================================\r\n");
							 
							 echo '<h1 style="color:white;padding-top:30px;" class="text-center">Thank you for your message.</h1>';
							 fclose( $handle );
	 


						
					}	
					
				?>
							
            
                <footer class="container-fluid" >
                 
                <div class="row">
                     <div class="col-lg-3 col-md-3 col-sm-3"></div>
                     <a class="col-lg-3 col-md-3 col-sm-3" href="map.html">Where to find us</a>
                     <a class="col-lg-3 col-md-3 col-sm-3" href="book.php">Book a table</a>
                     <div class="col-lg-3 col-md-3 col-sm-3"></div>
               
                 </div>
                  
                 <div class="row">
                     <div class="col-lg-3 col-md-3 col-sm-3"></div>
                     <a class="col-lg-3 col-md-3 col-sm-3" href="press.html">Press page</a>
                     <a class="col-lg-3 col-md-3 col-sm-3" href="contact.php">Contact us</a>
                     <div class="col-lg-3 col-md-3 col-sm-3"></div>
               
                 </div>
                
                 <div class="row">
                     <div class="col-lg-3 col-md-3 col-sm-3"></div>
                     <a class="col-lg-3 col-md-3 col-sm-3" href="special.html">Special events</a>
                     <a class="col-lg-3 col-md-3 col-sm-3" href="review.html">Customers reviews</a>
                     <div class="col-lg-3 col-md-3 col-sm-3"></div>
               
                 </div>
                <div class="row">
                     <div class="col-lg-3 col-md-3 col-sm-4"></div>
                    <div class="col-lg-3 col-md-3">Us on Facebook<a href="https://el-gr.facebook.com/nostissimo/" target="_blank"> <img src="images/facebook.png" alt="Facebook logo."> </a></div>
                    <div class="col-lg-3 col-md-3 col-sm-2"></div>
                     <div class="col-lg-3 col-md-3 col-sm-3"></div>
                     
                 </div>
                
                <div class="row" id="copyright_home">
                     <div class="col-lg-3"></div>
                    <div class="col-lg-6 text-center">Copyright © 2015 Nostissimo EPE - All rights reserved.</div>
                     <div class="col-lg-3"></div>
                     
                 </div>
                
            </footer>
        </div>
        
        
        
    </body>
</html>


