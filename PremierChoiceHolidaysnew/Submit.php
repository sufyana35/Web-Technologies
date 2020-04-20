<?php

$host="localhost"; // Host name 
$username="unn_w14025337"; // Mysql username 
$password="sufyan733"; // Mysql password 
$db_name="unn_w14025337"; // Database name 
$tbl_name="PCH_expressedInterest"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");


// define variables and set to empty values
$forename = $surname = $postalAddress = $landLineTelNo = $mobileTelNo =$email = $sendMethod;
$forenameError = $surnameError = $postalAddressError = $landLineTelNoError = $mobileTelNoError =$emailError = $sendMethodError;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["forename"])) {
    $forenameError = "Forename is required";
  } else {
    $forename = test_input($_POST["forename"]);
  }
  
    if (empty($_POST["surname"])) {
    $surnameError = "Forename is required";
  } else {
    $surname = test_input($_POST["surname"]);
  }
  
    if (empty($_POST["postalAddress"])) {
    $postalAddressError = "postalAddress is required";
  } else {
    $postalAddress = test_input($_POST["postalAddress"]);
  }
  
    if (empty($_POST["landLineTelNo"])) {
    $landLineTelNoError = "landLineTelNo is required";
  } else {
    $landLineTelNo = test_input($_POST["landLineTelNo"]);
  }
  
    if (empty($_POST["mobileTelNo"])) {
    $mobileTelNoError = "Mobile Number is required";
  } else {
    $mobileTelNo = test_input($_POST["mobileTelNo"]);
  }
  
    if (empty($_POST["email"])) {
    $emailError = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
  
    if (empty($_POST["sendMethod"])) {
    $sendMethodError = "sendMethod is required";
  } else {
    $sendMethod = test_input($_POST["sendMethod"]);
  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php

session_start();
$_SESSION["forename"] = $forename;
$_SESSION["surname"] = $surname;
$_SESSION["landLineTelNo"] = $landLineTelNo;
$_SESSION["mobileTelNo"] = $mobileTelNo;
$_SESSION["email"] = $email;
$_SESSION["postalAddress"] = $postalAddress;
$_SESSION["sendMethod"] = $sendMethod;

if (empty($_POST["forename"])) {
			// If Empty Error".     
			$forenameError = "Forename Required";
			$_SESSION["forenameError"] = $forenameError;
			header("Location: FindOutMore.php?Error=Forename_Required"); // Go back to Form with url error".  
		} else {
			
			}

	switch ($sendMethod) {
    case "SMS":
        echo "SMS opted!";
		
		  if (empty($_POST["mobileTelNo"])) {
			 // Sets other error messages to null". 
			$postalAddressError = "";
			$_SESSION["postalAddressError"] = $postalAddressError;
			 
			 // Send error message to user on form".  
			$mobileTelNoError = "Mobile Number Required";
			$_SESSION["mobileTelNoError"] = $mobileTelNoError;
			header("Location: FindOutMore.php?Error=Mobile_Number_Required"); // Go back to Form with url error". 
		} else {
			// insert data into database". 
			$sql="INSERT INTO PCH_expressedInterest (forename,surname,postalAddress,landLineTelNo,MobileTelNo,email,sendMethod)
				 VALUES ('$forename','$surname','$postalAddress','$landLineTelNo','$mobileTelNo','$email','$sendMethod')";
			$result=mysql_query($sql);

			// if successfully insert data into database, displays message "Successful". 
			if($result){
			echo "Successful";
			}
			
			if($forename){
				header("Location: Confirmation_Page.php"); // Final Step go to confirmation page". 

				}
		}
		
        break;
		
    case "post":
        echo "post opted!";
		
		  if (empty($_POST["postalAddress"])) {
			// Sets other error messages to null". 
			$emailError = "";
			$_SESSION["emailError"] = $emailError;
			
			// Send error message to user on form". 
			$postalAddressError = "Postal Address Required";
			$_SESSION["postalAddressError"] = $postalAddressError;
			header("Location: FindOutMore.php?Error=Postal_Address_Required"); // Go back to Form with url error". 
		} else {
			// insert data into database". 
			$sql="INSERT INTO PCH_expressedInterest (forename,surname,postalAddress,landLineTelNo,MobileTelNo,email,sendMethod)
				 VALUES ('$forename','$surname','$postalAddress','$landLineTelNo','$mobileTelNo','$email','$sendMethod')";
			$result=mysql_query($sql);

	
			// if successfully insert data into database, displays message "Successful". 
			if($result){
			echo "Successful";
			}
			
			if($forename){
				header("Location: Confirmation_Page.php"); // Final Step go to confirmation page". 

				}
		}
		
        break;
		
    case "email":
        echo "email opted!";
		
		 if (empty($_POST["email"])) {
			// Sets other error messages to null". 
			$postalAddressError = "";
			$_SESSION["postalAddressError"] = $postalAddressError;
			 
			 // Send error message to user on form". 
			$_SESSION["emailError"] = $emailError;
			$emailError = "Email Required";	
			header("Location: FindOutMore.php?Error=Email_Required");
		} else {
			// insert data into database". 
			$sql="INSERT INTO PCH_expressedInterest (forename,surname,postalAddress,landLineTelNo,MobileTelNo,email,sendMethod)
				 VALUES ('$forename','$surname','$postalAddress','$landLineTelNo','$mobileTelNo','$email','$sendMethod')";
			$result=mysql_query($sql);
			
	
			// if successfully insert data into database, displays message "Successful". 
			if($result){
			echo "Successful";
			}
			
			if($forename){
				header("Location: Confirmation_Page.php"); // Final Step go to confirmation page". 

				}	
		}
		
        break;
		
    default:
		// Go back to Form where the user can then select the option". 
		$sendMethodError = "Please Select An Option To Recieve Info";
        $_SESSION["sendMethodError"] = $sendMethodError;
		header("Location: FindOutMore.php?Error=Please_Select_Option");
		
		// Sets other error messages to null". 
		$postalAddressError = ""; 
		$_SESSION["postalAddressError"] = $postalAddressError;
		$emailError = "";	
		$_SESSION["emailError"] = $emailError;
	}
	
	

	
	// if successfully insert data into database, displays message "Successful". 
	if($result){
	echo "Successful";
} else {
	// if any other error go back to form". 
	header("Location: FindOutMore.php?errors=Error2");	
}
// final resort if all else fails display a link". 
echo "<BR>";
echo "<a href='index.html'>Back to main page</a>";

?> 

<?php 
// close connection 
mysql_close();
?>