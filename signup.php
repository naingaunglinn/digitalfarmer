<?php
error_reporting(E_ALL);
include 'config.php';

if (isset($_POST['register'])) {
	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		
		$name = $_POST["uname"];
		$mail = $_POST["email"];
		$number = $_POST["phone"];
		$tvest = $_POST["tinvest"];
		$pass = $_POST["passwd"];
		$cpwd = $_POST["cpasswd"];
		$company_name = $_POST["cname"];
		$c_id = $_POST["cid"];

		
 		$hashed = md5($pass);

		if (empty($name)) {
			$nameErr = "Please fill the user name.";
		} 
		if (empty($number)) {
			$numberErr = "Please fill the phone number.";
		}
		if (empty($tvest)) {
			$tvestErr = "Please Choose the Investors type.";
		}  
		if (empty($pass)) {
			$passErr = "Please fill the password.";
		} 
		if ($pass != $cpwd ) {
			$cpwdErr = "Please fill the correct password.";
 		} 
 		if (empty($company_name)) {
			$company_nameErr = "Please fill your company name in required field.";
		}
		if (empty($mail)) {
			$mailErr = "Please fill your email address.";
		}
		if (empty($c_id)) {
			$c_idErr = "Please fill your company Id.";
		}
		if(!empty($tvest) && $tvest == '1'){
	 		if (!empty($name) && !empty($number) && !empty($pass) && !empty($mail) && !empty($number) && $pass == $cpwd ) {
	 			$sql = "INSERT INTO invest_dat (name, email, phone, type_invest, password, company_name, company_id, status) VALUES ('$name', '$mail', '$number', '$tvest','$hashed','0', '0', '1')";
	 			if ($conn->query($sql) === TRUE) {
	 				header("Location: login.php");
	 		} else {
	 			echo "Error: " . $sql . "<br>" . $conn->error;
	 		}
		}
	} else if(!empty($tvest) && $tvest == '2'){
		if (!empty($name) && !empty($number) && !empty($pass) && !empty($mail) && !empty($number) && $pass == $cpwd ) {
	 			$sql = "INSERT INTO invest_dat (name, email, phone, type_invest, password, company_name, company_id, status) VALUES ('$name', '$mail', '$number', '$tvest','$hashed','$company_name', '$c_id', '1')";
	 			if ($conn->query($sql) === TRUE) {
	 				header("Location: login.php");
	 		} else {
	 			echo "Error: " . $sql . "<br>" . $conn->error;
	 		}
		}
	}
}
}
?>

<?php 
	include 'header.php';
?>
<main class="container">
	<form class="form-group col-6 m-auto" action="<?php $_SERVER['REQUEST_URI']; ?>" method="POST" enctype="multipart/form-data">
		<h3 class="text-secondary">Register to invest</h3>
		<div class="form-group">
			<label for="uname">Username</label>
			<input type="text" id="uname" name="uname" class="form-control" value="<?php echo isset($_POST["uname"]) ? $_POST["uname"] : ''; ?>">
			<span class="error"><?php if(isset($nameErr)) echo $nameErr; ?></span>
		</div>
		<div class="form-group">
			<label for="mail">E-mail</label>
			<input type="email" id="mail" name="email" class="form-control" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>">
			<span class="error"><?php if(isset($mailErr)) echo $mailErr; ?></span>
		</div>
		<div class="form-group">
			<label for="phone">Phone Number</label>
			<input type="text" id="phone" name="phone" class="form-control" value="<?php echo isset($_POST["phone"]) ? $_POST["phone"] : ''; ?>">
			<span class="error"><?php if(isset($numberErr)) echo $numberErr; ?></span>
		</div>
		<div class="form-group">
			<label for="tinvest">Type Of Investor</label>
			<select class="form-control" name="tinvest" id="tinvest">
				<option value="">Please Select</option>
				<option value="1">Public Investors</option>
				<option value="2">Company Investors</option>
			</select>
			<span class="error"><?php if(isset($tvestErr)) echo $tvestErr; ?></span>
		</div>
		<div class="form-group">
			<label for="passwd">Passoword</label>
			<input type="password" id="passwd" name="passwd" class="form-control">
			<span class="error"><?php if(isset($passErr)) echo $passErr; ?></span>
		</div>
		<div class="form-group">
			<label for="cpasswd">Confirm Password</label>
			<input type="password" id="cpasswd" name="cpasswd" class="form-control">
			<span class="error"><?php if(isset($cpwdErr)) echo $cpwdErr; ?></span>
		</div>
		<div class="form-group" id="cname">
			<label for="cname">Company Name</label>
			<input type="text"  name="cname" class="form-control" value="<?php echo isset($_POST["cname"]) ? $_POST["cname"] : ''; ?>">
			<span class="error"><?php if(isset($company_nameErr)) echo $company_nameErr; ?></span>
		</div>
		<div class="form-group" id="cid">
			<label for="cid">Company Id</label>
			<input type="text" name="cid" class="form-control" value="<?php echo isset($_POST["cid"]) ? $_POST["cid"] : ''; ?>">
			<span class="error"><?php if(isset($c_idErr)) echo $c_idErr; ?></span>
		</div>
		<div class="form-group">
			<input type="submit" name="register" class="bg-primary border-0 rounded text-light col-2 m-auto" value="Submit">
		</div>
	</form>
</main>

<?php
	include 'footer.php';
?>
<style type="text/css">
	.error{
		color: red;
		font-size: 12px;
	}
</style>
<script type="text/javascript">
	$('document').ready(function() {
			$('#cname').hide();
			$('#cid').hide();

		if ($('#tinvest').val() == '1') {
			$('#cname').hide();
			$('#cid').hide();
		} else if ($('#tinvest').val() == '2') {
			$('#cname').show();
			$('#cid').show();
		}	

		$('#tinvest').change(function(){
			if ($(this).val() == '1') {
				$('#cname').hide();
				$('#cid').hide();
			} else if ($('#tinvest').val() == '2'){
				$('#cname').show();
				$('#cid').show();
			}
		})
	})
</script>