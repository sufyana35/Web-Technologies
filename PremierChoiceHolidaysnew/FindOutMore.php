<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Find Out More</title>
<link href="Style2.css" rel="stylesheet" type="text/css">
<link href="CSS/form.css" rel="stylesheet" type="text/css">

</head>
<body>

<?php  
session_start();
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
      <h2>Expressing Interest</h2>
    </div> 
  </div>


  <div class="formlayout">
    <!--Content one-->
    <table border="1">
      <tr>
        <td>
          <form id = "userDetails" action="getExpenses.php" method="POST">
            <fieldset>
              <legend>Personal Details</legend>
              <label for="forename">Forename*</label>
              <div class="error">* <?php if(isset($_SESSION["forenameError"])) echo $_SESSION["forenameError"];?></div>
              <input type="text" name="forename" id="forename" maxlength="20" accesskey="f" required/><p></p> 
               
              <label for="surname">Surname</label>
              <input type="text" name="surname" id="surname" maxlength="20" accesskey="s"/><p></p>
              
              <label for="landLineTelNo">Telephone</label>
              <input type="tel" name="landLineTelNo" id="landLineTelNo" maxlength="12" accesskey="t"/><p></p>
              
              <label for="mobileTelNo">Mobile Number*</label>
              <div class="error">* <?php if(isset($_SESSION["mobileTelNoError"])) echo $_SESSION["mobileTelNoError"];?></div>
              <input type="tel" name="mobileTelNo" id="mobileTelNo" maxlength="12" accesskey="m" required/><p></p>
              
              <label for="email">Email</label>
              <div class="error">Mandatory if chosen <?php if(isset($_SESSION["emailError"])) echo $_SESSION["emailError"];?></div>
              <input type="email" name="email" id="email" maxlength="99" accesskey="e"/><p></p>
              
              <label for="postalAddress">Postal Address</label>
              <div class="error">Mandatory if chosen <?php if(isset($_SESSION["postalAddressError"])) echo $_SESSION["postalAddressError"];?></div>
              <input type="text" name="postalAddress" id="postalAddress" maxlength="100" accesskey="p"/><p></p>
            </fieldset>
            
            <fieldset>
              <legend>Recieve Holiday Offers</legend>
              <p>How would you like to recive your expressed interest?</p>
              SMS <input type="radio" name="sendMethod" value="SMS" accesskey="1"/><p></p>
               Post <input type="radio" name="sendMethod" value="post" accesskey="2"/><p></p>
              Email <input type="radio" name="sendMethod" value="email" accesskey="3"/><p></p>
              <div class="error">* <?php if(isset($_SESSION["sendMethodError"])) echo $_SESSION["sendMethodError"];?></div>
            </fieldset>
            
            <fieldset>
              <legend>Terms & Conditions</legend>
              <p>Welcome to our website. If you continue to browse and use this website, you are agreeing to comply with and be bound by the following terms and conditions of use. If you disagree with any part of these terms and conditions, please do not use our website.</p>
              
              <!--Terms & conditions-->
              <input type="checkbox" name="condition" value="accept" accesskey="t" required/>
              <p>I hereby accept the following terms and conitions as stated to my full knowlege</p>
              <div class="error">* <?php if(isset($_SESSION["acceptError"])) echo $_SESSION["acceptError"];?></div>
            </fieldset>
            
            <input name="Submit" type="submit" class="button" accesskey="s" value="Submit"/>
            <input name="reset" type="reset" class="button" accesskey="c" value="Clear the form"/>
          
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
