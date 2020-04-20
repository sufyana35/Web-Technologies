<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Confirmation Page</title>
<link href="Style2.css" rel="stylesheet" type="text/css">
<link href="CSS/form.css" rel="stylesheet" type="text/css">
<link href="CSS/Confirmation_Page_Style.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php  
session_start();
$forename = ""; $surname = ""; $postalAddress = ""; $landLineTelNo = ""; $mobileTelNo = ""; $email = "";
?>


<!--Wrapper all items are contained inside this wrapper-->
<div class="wrapper">
  <div class="content_text_main">
    <div class="banner">
      
      <!--This is the main  navigation-->
      <nav>
        <div class="navigation">
          <a class="menu" href="index.html" target="_parent">Home</a> 
          <a class="menu" href="FindOutMore.php" tabindex="2" target="_parent">Find Out More</a>  
          <a class="menu" href="offer.html"  tabindex="1" target="_parent">Offer</a>  
          <a class="menu" href="Credits.html" tabindex="2" target="_parent">Credits</a>   
          <a class="menu" href="Admin.php" tabindex="1" target="_parent">Admin</a> 
          <a class="menu" href="wireframe.html" tabindex="1" target="_parent">Wireframe</a>  
        </div>
      </nav>
    </div>

    <div class="row-one-text2">
      <h2>Confirmation Page</h2>
    </div>
  </div> 


  <div class="formlayout">
    <!--Content one-->
    <table border="1">
      <tr>
        <td>
          <form id = "userDetails" action="Submit.php" method="POST">
            <fieldset>
              <legend>Personal Details</legend>
              <div class="labelformat">Forename*</div>
              <div class="output">
				<?php echo "Forename is " . $_SESSION["forename"] . ".";?>
              </div><p></p> 
               
              <div class="labelformat">Surname</div>
              <div class="output">
				<?php echo "Surname is " . $_SESSION["surname"] . ".";?>
              </div><p></p>
              
              <div class="labelformat">Telephone</div>
              <div class="output">
				<?php echo "Phone Number is " . $_SESSION["landLineTelNo"] . ".";?>
              </div><p></p>
              
              <div class="labelformat">Mobile Number*</div>
              <div class="output">
				<?php echo "Mobile Number is " . $_SESSION["mobileTelNo"] . ".";?>
              </div><p></p>
              
              <div class="labelformat">Email</div>
              <div class="output">
				<?php echo "Email Address is " . $_SESSION["email"] . ".";?>
              </div><p></p>
              
              <div class="labelformat">Postal Address</div>
              <div class="output">
				<?php echo "Postal Address is " . $_SESSION["postalAddress"] . ".";?>
              </div><p></p>
            </fieldset>
            
            <fieldset>
              <legend>Recieve Holiday Offers</legend>
              <p>How would you like to recive your expressed interest?</p>
			  <div class="output"><?php echo "Recieving Info By " . $_SESSION["sendMethod"] . ".";?>
              </div>
			  <?php
			  switch ($_SESSION["sendMethod"]) {
				case "post":
					if ($sendMethod = "post") {	  
					?><img src="Images/MailBox.png" width="266" height="221"><?php
					echo "Post Image";
					}
					break;
				case "email":
					if ($sendMethod = "email") {	  
					?><img src="Images/email.png" width="254" height="232"><?php
					echo "email Image";
					}
					break;
				case "SMS":
					if ($sendMethod = "SMS") {	  
					?><img src="Images/sms.png" width="235" height="225"><?php
					echo "SMS Image";
					}
					break;
			  } 		  
              ?>
              
            </fieldset>
            
            <fieldset>
              <legend>Terms & Conditions</legend>
              <p>Welcome to our website. If you continue to browse and use this website, you are agreeing to comply with and be bound by the following terms and conditions of use. If you disagree with any part of these terms and conditions, please do not use our website.</p>
              
              <p>You Have agreed to our Terms And Conditions!, Feel free to use this website. Many thanks for signing up to our exclusive holiday offer reward scheme.</p>
            </fieldset>           
          
          </form>         
        </td>
      </tr>
    </table>

 </div>
   
  <!--Footer-->
  <footer>
    <div class="footer">
      <div id="footer_text">
        <p>Premier Choice Holidays</p>
        <p>Contact Number:(0191) 23567</p>
        <p>Email:offers@
            premierchoiceholidays.co.uk</p>
        <p>Address:62 West road, Fenham, Newcastle Upon Tyne</p>
      </div>
    </div>
  </footer>
  
</div>
<!--Wrapper div ends here-->

</body>
</html>
