<?php


$message = '';
$display_pay = 'hidden_pay';
$firstnameErr = $lastnameErr = $stateErr = $postalErr = $emailAddressErr = ""; // define var and set to empty values
$firstname = $lastname = $state = $postal = $emailAddress = "";

// amount selection session===============================
$opt1 = '1000';
$opt2 = '5000';
$opt3 = '20000';
$opt4 = '50000';
$opt5 = '100000';
$S_amount = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {	
	if (isset($_POST['give_btn'])) {
		if(!empty($_POST['other'])){
			$S_amount = $_POST['other'];
		}else {
			$S_amount = "";
		}
		if (!empty($S_amount) && !empty($_POST['email']) && !empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['state']) && !empty($_POST['postal'])){
			$display_pay = "";
		}
		if (!isset($_POST["checkbox1"])) {  //if the donate annoymously is not checked then validate
				if (empty($_POST["fname"])) {
					$firstnameErr = "First Name is required";
				} else {
					$firstname = test_input($_POST["fname"]);
		    // check if name only contains letters and whitespace
					if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
						$firstnameErr = "Only letters and white space allowed"; 
					}
				}

				if (empty($_POST["lname"])) {
					$lastnameErr = "Last Name is required";
				} else {
					$lastname = test_input($_POST["lname"]);
		    // check if name only contains letters and whitespace
					if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
						$lastnameErr = "Only letters and white space allowed"; 
					}
				}

				if (empty($_POST["state"])) {
					$stateErr = "State / Country is required";
				} else {
					$state = test_input($_POST["state"]);
				}

				if (empty($_POST["postal"])) {
					$postalErr = "Zip required";
				} else {
					$postal = test_input($_POST["postal"]);
				}

				if (empty($_POST["email"])) {
					$emailAddressErr = "Email is required";
				} else {
					$emailAddress = test_input($_POST["email"]);
		    // check if e-mail address is well-formed
					if (!filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {
						$emailAddressErr = "Invalid email format"; 
					}
				}
			  // ..........form vaildation ends...........................
				if ($firstnameErr == '' and $lastnameErr == '' and $stateErr == '' and $postalErr == '' and $emailAddressErr == '') {

				    require_once ('./component/db.php'); //initializing Database

						// Create connection
					$conn = mysqli_connect($servername, $username, $password, $dbname);
						// Check connection
					if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
					}

					$sql = "INSERT INTO donors (firstname, lastname, state, postal, email, donationAmount)
					VALUES ('$firstname', '$lastname', '$state', '$postal', '$emailAddress', '$S_amount')";

					if (mysqli_query($conn, $sql)) {
						$message = "<strong>Account Successfully Rigistered!</strong> thanks you for supporting.";
					} else {
						$message = "<strong>Error in connection!</strong> check your connection.". $sql . "<br>" . mysqli_error($conn);;
					}

					mysqli_close($conn);
				}

			}else{
				if (!empty($S_amount) && !empty($_POST['email'])){
					$firstnameErr = $lastnameErr = $stateErr = $postalErr = "";
					$display_pay = "";
					if (empty($_POST["email"])) {
						$emailAddressErr = "Email is required";
					} else {
						$emailAddress = test_input($_POST["email"]);
		    // check if e-mail address is well-formed
						if (!filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {
							$emailAddressErr = "Invalid email format"; 
						}else{
							$email = $emailAddress;
		    	// ..........form vaildation ends...........................
							if ($firstnameErr == '' and $lastnameErr == '' and $stateErr == '' and $postalErr == '' and $emailAddressErr == '') {
                                require_once ('./component/db.php'); //initializing Database again

							// Create connection
								$conn = mysqli_connect($servername, $username, $password, $dbname);
							// Check connection
								if (!$conn) {
									die("Connection failed: " . mysqli_connect_error());
								}

								$sql = "INSERT INTO anonymousDonors (email, donationAmount)
								VALUES ('$emailAddress','$S_amount')";

								if (mysqli_query($conn, $sql)) {
									$message = "<strong>Email Successfully Rigistered!</strong> thanks you for supporting.";
								} else {
									$message = "<strong>Error in connection!</strong> check your connection.". $sql . "<br>" . mysqli_error($conn);;
								}

								mysqli_close($conn);
							}
						}
					}		  
				}
			}
		}	
} //end mothod submit ===========================
if (empty($S_amount)){
	if (isset($_POST['btn1'])) {
		$S_amount = $opt1;
	} else if (isset($_POST['btn2'])) {
		$S_amount = $opt2;
	} else if (isset($_POST['btn3'])) {
		$S_amount = $opt3;
	} else if (isset($_POST['btn4'])) {
		$S_amount = $opt4;
	}else if (isset($_POST['btn5'])) {
		$S_amount = $opt5;
	}else {
		$message = "";
	}
}
function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>
