<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Madison Track</title>
    <link rel="shortcut icon" href="img/favicon.ico" /> 
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Faster+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div id="body">
      <div id="header">
        <header>
          <a href="index.html" id="logo">
            <h1>Madison Track</h1>
            <h2>Common Goal. Uncommon Desire</h2>
          </a>
          <nav>
            <ul>
              <li>
                <a href="index.html">Home</a>
              </li>
              <li>
                <a href="coaches.html">Coaches</a>
              </li>
              <li>
                <a href="schedule.html">Schedule</a>
              </li>
              <li>
                <a href="runners.html">Runners</a>
              </li>
              <li>
                <a href="testimonials.html">Testimonials</a>
              </li>
              <li>
                <a href="contact.html" class="selected">Contact</a>
              </li>
            </ul>
          </nav>
        </header>
      </div>
      
      <body>
        
        

        <h1>Thank you for contacting us!</h1>
       <a><img src="img/img_2112.jpg"  class="houston"></a>
         
</body>  
      
      <div class="clearfooter"><h1 id="thank">Your submition will be reviewed shortly.</h1></div>
      
        <div id="foot">
        <footer>
          <div class="footer_img">
            
            
            <p id="foot">&copy;2017 MAHS Track</p>
          </div>
          <div id="footer_nav">
             
            <div class="contact"> 
              <strong id="email">Email:</strong> <a href="mailto:dgmaxwell@jmcss.org">dgmaxwell@jmcss.org</a>
              <strong id="phone">Phone:</strong> <a href="tel:7312256900">(731)225-6900</a>
            </div>
            
            <ul>
              <li>
                <a href="index.html" >Home</a>
              </li>
              <li>
                <a href="coaches.html">Coaches</a>
              </li>
              <li>
                <a href="schedule.html">Schedule</a>
              </li>
              <li>
                <a href="runners.html">Runners</a>
              </li>
              <li>
                <a href="testimonials.html">Tesimonials</a>
              </li>
              <li>
                <a href="contact.html" class="selected">Contact</a>
              </li>
            </ul>
          </div>
        </footer>
      </div>
   </div>
  </body>
</html> 
      



<?php 
if(isset($_POST['send'])){
    $to = "dgmaxwell@jmcss.org"; //Email address
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $name . " at " . $email . " wrote the following:" . "\n\n" . $_POST['message'];
   
   
    mail($to,$subject,$message);
   
    }
?>