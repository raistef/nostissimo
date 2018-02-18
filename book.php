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
			//checks the input fields
                var name = document.BookingForm.name.value;
                var email = document.BookingForm.email.value;
                var phone_number = document.BookingForm.phone.value;
                var people = document.BookingForm.people.value;
                
                if (!(name.includes(" "))) {
                
                    window.alert("Please enter your full name.");
                    return false;
                }
    
                if (!(email.includes("@")) || !(email.includes(".")))
                {
                    window.alert("Please enter a valid e-mail address.");
                    return false;
                }  
                
                
                if (isNaN(phone_number))
                {
                    window.alert("Please enter a valid phone number.");
                    return false;
                }
                
                if (isNaN(people))
                {
                    window.alert("Please enter a valid number of people you want to book the table for.");
                    return false;
                }
                
                if (people>20)
                {
                    window.alert("You cannot book a table for more than 20 people :(");
                    return false;
                }
                thanks();   
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
            
            <div id="booking">
			
			<?php
				// if form not yet submitted
				// display form
				if (!isset($_POST['submit']))
				{
						?>
                
            <form id="booking_form" name="BookingForm" action="book.php" method="post">
                <h2 id="switch" class="text-center">Book a table:</h2>
                    <p>Full Name:</p>
                        <input type="text" name="name" placeholder="Your full name..." required><br>
                    <p>E-mail:</p>
                        <input type="text" name="email" placeholder="Your e-mail..." required><br>
                    <p>Your mobile phone number:</p><br>
                        <textarea id="phone_number" name="phone" placeholder="e.g. 69XXXXXXXX" rows="1" cols="20" required></textarea><br>
                    <p>Where would you like to sit at our restaurant?</p><br>
                        <div id="radio">
                        <input  type="radio" name="location" value="inside" required> Inside.
                        <input  type="radio" name="location" value="outside" required> Outside.<br>
                        </div>
                    <p>For how many people would you like to book the table?<br>(Please take notice that you can not book a table for more than 20 people.)</p><br>
                        <textarea id="people_number" name="people" placeholder="Number of people..." rows="1" cols="20" required></textarea><br>
                    <p>When would you like to book the table?</p><br>
                        <input id="dateB" type="date" name="date"  min=
																		 <?php
																		 date_default_timezone_set('Europe/Athens');

																			 echo date('Y-m-d');
																		 ?> required><br>
                   
                    <input class="btn-primary" id="submit" type="submit" value="Send" name="submit">
                    <input class="btn-primary" type="reset" value="Reset">
            </form>
			
			<?php
					// if form submitted
					// process form input
					}
					else
					{
						$name = $_POST['name'];
						$email = $_POST['email'];
						$phone = $_POST['phone'];
						$location = $_POST['location'];
						$people = $_POST['people'];
						$date = $_POST['date'];
						$file="temp.txt";
						$booking= "\r\nName: $name\r\nEmail: $email\r\nPhone: $phone\r\nLocation: $location\r\nPeople: $people\r\nDate: $date\r\n================================\r\n";
						$handle = fopen("temp.txt", "w" ); 
						fwrite($handle, $booking);
						fclose( $handle );
						
							 					 
							 echo '<h1 style="color:white;padding-top:30px;" class="text-center">Please confirm your reservation:</h1>';
							 echo '<p style="padding:30px;margin:20px 180px;color:black;background:rgba(256,256,256,0.6);"><br>Name: '.$name.'<br>Email: '.$email.'<br>Phone: '.$phone.'<br>Location: '.$location.'<br>People: '.$people.'<br>Date: '.$date.'<br></p>';
							 
						if (!isset($_POST['confirm'])) {
							
							?>
								<form id="confirmation" name="confirmation" action="confirm.php" method="post">
								 <input style="margin:auto;display:block;" class="btn-primary" id="submit" type="submit" value="Confirm" name="confirm">
								 
								</form>
								<h1 style="color:white;padding-top:30px;" class="text-center"> Or go back to your form:</h1>
								 <button style="margin:auto;display:block;" class="btn-primary" onclick="window.history.back()">Go back...</button>
								

						
			<?php
						}
					}
			?>
							
							 
			
            </div>
            
            
            
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


