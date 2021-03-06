<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta name="Driving website" contents="affordableand efficient driving instructor located in the Greater Manchester area">
        <meta name="author" content="Omar Faruk">
        <title>Abul Basher Driving | Services</title>
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <header>
            <div class="container">
                <nav class="navbar">
                  <a class="site-brand" href="index.html"><i id="abulLogo">Abul's</i></a>
                  <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="areas.html">Areas</a></li>
                    <li><a href="prices.html">Prices</a></li>
                   <li><a href="contact.php">Contact</a></li>
                    <li><a href="about.html">About</a></li>
                  </ul>
                </nav>
          
                <nav class="navbar-mob">
                  <div class="hamburger-btn">
                    <i class="fas fa-bars" id="bar" onclick="showMenu()"></i>
                    <i class="fas fa-times" id="times" onclick="closeMenu()"></i>
                  </div>
          
                  <ul id="mob-menu">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="areas.html">Areas</a></li>
                    <li><a href="prices.html">Prices</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="about.html">About</a></li>
                  </ul>
                </nav>
                <div style="width:200px;">
                  
                </div>
              </div>

        

        </header>

        <div class="container" id="sell">
            <!-- <h1>Reshma and Shamim</h1> 
            <p class="convince">With years of experience and a high pass rate Abul driving school has been reccomended by countless students in the 
                Oldham/Tameside area.</p>
          <p class="convince">I gaurentee you excellent one to one coaching at a competitive price. My passion is driving and I want to pass it onto you!</p> -->
          <img src="images/banner.png" width="920" height="240" alt="Computer Hope" id="bannerAbul">     
          </div>



        

          <div class="wrapper">
            <h2>Contact for Enquiries & Bookings</h2>
            <div id="error_message"></div>
            <form id="myform" action="" onsubmit="return validate();">
              <div class="input_field">
                  <input type="text" placeholder="Name" id="name" name="name">
              </div>
              <div class="input_field">
                  <input type="text" placeholder="Subject" id="subject" name="subject">
              </div>
              <div class="input_field">
                  <input type="text" placeholder="Phone" id="phone">
              </div>
              <div class="input_field">
                  <input type="text" placeholder="Email" id="email" name="mail">
              </div>
              <div class="input_field">
                  <textarea placeholder="Message" id="message" name="message"></textarea>
              </div>
              <div class="btn">
                  <input class="btnInput" type="submit" name="submit">
              </div>
            </form>
          </div>

          <?php 
            if(isset($_POST['submit'])) {
              $name = $_POST['name'];
              $subject = $_POST['subject'];
              $mailFrom = $_POST['mail'];
              $message = $_POST['message'];

              $mailTo = "abuldrivingschool@abuldriving.site";
              $headers = "From: ".mailFrom;
              $txt = "You have recieved an email from ".$name.".\n\n".$message;

              mail($mailTo, $subject, $txt, $headers);
            }


          ?>

         

          <footer id="footerContact">
            <div class="footer__text container">
       
              <p>
                  &copy; Copyright 2019 Your Website
              </p>
              <hr class="footer__hr">
          </div>
          <div class="footer__sections container">
              <div class="footer__section">
                  <span class="footer__title">Find Out More</span>
                  <a href="index.html" class="footer__link">Home</a>
                  <a href="prices.html" class="footer__link">Driving Lesson Prices</a>
                  <a href="areas.html" class="footer__link">Driving Areas</a>
              </div>
              <div class="footer__section">
                  <span class="footer__title">Course Information</span>
                  <a href="prices.html" class="footer__link">Driving Lessons</a>
                  <a href="prices.html" class="footer__link">Block Bookings</a>
                  <a href="prices.html" class="footer__link">Intensive Courses</a>
                  <a href="prices.html" class="footer__link">Under 17 Lessons</a>
                  <a href="prices.html" class="footer__link">Pass Plus Course</a>
                  <a href="prices.html" class="footer__link">Refresher Lessons</a>
              </div>
              <div class="footer__section">
                  <span class="footer__title">More Information</span>
                  <a href="contact.html" class="footer__link">Bookings/Enquiries</a>
                  <a href="about.html" class="footer__link">About Abul</a>
                 
              </div>
      
              <div class="footer__section">
                <span class="footer__title">Contact</span>
                <a href="contact.html" class="footer__link">text/call: 07542616771</a>
                <a href="contact.html" class="footer__link">email: abul.sheff@gmail.com</a>
               
            </div>
            
          </div>
        </footer>
          <script src="js/active.js">  </script>

    </body>



</html>