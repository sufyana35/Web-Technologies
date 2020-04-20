<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin</title>
<link href="Style2.css" rel="stylesheet" type="text/css">
<link href="CSS/admin.css" rel="stylesheet" type="text/css">
</head>
<body>

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
      <h2>Credits</h2>
    </div>
  </div>
  <div class="content_text">
    <div class="center">
      <?php
        include 'database_conn.php';	  // make db connection
      
        $sql = "SELECT expressInterestID, forename, surname, postalAddress, landLineTelNo, mobileTelNo, email, sendMethod FROM PCH_expressedInterest";
      
        $queryresult = mysqli_query($conn, $sql) or die(mysqli_error($conn));
  
        while ($row = mysqli_fetch_assoc($queryresult)) {
			$expressInterestID = $row['expressInterestID'];
            $forename = $row['forename'];
            $surname = $row['surname'];
            $postalAddress = $row['postalAddress'];
            $landLineTelNo = $row['landLineTelNo'];
            $mobileTelNo = $row['mobileTelNo'];
            $email = $row['email'];
            $sendMethod = $row['sendMethod']; 	
      ?>
      <div class="resultBox"> <?php
        echo "ID:$expressInterestID";
      ?>
      </div>
      
       <?php
        echo "<div>Forename:$forename</div>";
      ?>
     
      
      <?php
        echo "<div>Surname:$surname</div>";
      ?>
     
      
     <?php
        echo "<div>Postal Address:$postalAddress</div>";
      ?>
     
      
       <?php
        echo "<div>Landline Number:$landLineTelNo</div>";
      ?>
      
      
       <?php
        echo "<div>Mobile Number:$mobileTelNo</div>";
      ?>
    
      
      <?php
        echo "<div>Email Address:$email</div>";
      ?>
     
         
       <?php
        echo "<div>SendMethod:$sendMethod</div>";
     }?>
      
    </div>
  </div>
      <?php
        mysqli_free_result($queryresult); 
        mysqli_close($conn);
      ?>
  
    
  
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

