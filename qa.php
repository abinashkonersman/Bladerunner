<?php 
include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Question And Answer</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	

	<?php 
	$error_message = "";$success_message = "";

	// Qustion And Answer Page
	if(isset($_POST['btnsignup'])){
		$rfid = trim($_POST['rfid']);
		$isValid = true;

		// Check fields are empty or not
		if($tname == '' || $rfid == ''){
			$isValid = false;
			$error_message = "Please fill all fields.";
		}
        
    


		// Insert records
		if($isValid){
			$insertSQL = "UPDATE tutorials_tbl
      SET tutorial_title="Learning JAVA"
      WHERE tutorial_id=3'";
			$stmt = $con->prepare($insertSQL);
			$stmt->bind_param("ss",$rfid,$answer);
			$stmt->execute();
			$stmt->close();

			$success_message = "Thanks!";
		}
    }
	
	?>
</head>
<body>
	<div class='container'>
		<div class='row'>
			<div class='col-md-12'>
				<h2></h2>
			</div>

			<div class='col-md-6' >
					
				<form method='post' action=''>

					<h1>Please Answer The Following Question</h1>
					<?php 
					// Display Error message
					if(!empty($error_message)){
					?>
						<div class="alert alert-danger">
						  	<strong>Error!</strong> <?= $error_message ?>
						</div>

					<?php
					}
					?>

					<?php 
					// Display Success message
					if(!empty($success_message)){
					?>
						<div class="alert alert-success">
						  	<strong>Success!</strong> <?= $success_message ?>
						</div>

					<?php
					}
					?>
				
					<div class="form-group">
                        <h3>Question Here</h3>
					    <label for="answer"></label>
					    <input type="radio" name="answer" value="yes" />Yes
                        <input type="radio" name="answer" value="no" />No
                        
</form>
					</div>
                    
					<div class="form-group">
					    <label for="rfid">Please Scan your Tag:</label>
					    <input type="text" class="form-control" name="rfid" id="rfid" required="required" maxlength="80">
					</div>
					
					
					<button type="submit" name="btnsignup" class="btn btn-default">Submit</button>
				</form>
			</div>
			
			
		</div>
	</div>
</body>
</html>