<?php
error_reporting(E_ALL);
include ("config.php");
session_start();
	if (empty($_SESSION["name"]) && empty($_SESSION["password"]) || $_SESSION['status'] == '0') {
		session_destroy();
		header("Location: login.php");
	}
?>
<?php
	include 'header.php';
?>
<main class="container" style="height:450px">
    <?php 
        if(isset($_GET['id'])){
            $id = $_GET['id'];
	        $res = "SELECT * FROM farmer_dat WHERE id = '$id'";
		    $result = $conn->query($res);
		    if ($result->num_rows > 0) {?>
		    <div class="col-12 p-0">
		    <?php
		        while($row = $result->fetch_assoc()) {?>
		      <h3 class="text-secondary">Investment ways for <?php echo $row['f_name'] ?></h3> 
		      <div class="col-4 mt-5 float-left">
		          <h4 class="text-dark">Donation</h4>
		          <p class="text-dark">Farmer require a donation to improve their life. You can donate the farmer from following link</p>
		          <a href="#" class="p-2 text-light bg-success" onclick='alert("Not available in beta version")'>Donate</a>
		      </div>
		      <div class="col-4 mt-5 float-left">
		          <h4 class="text-dark">Share Invest Of Crop</h4>
		          <p class="text-dark">Farmer require a donation to improve their life. You can donate the farmer from following link</p>
		          <a href="#" class="p-2 text-light bg-primary" onclick='alert("Not available in beta version")'>Invest</a>
		      </div>
		      <div class="col-4 mt-5 float-left">
		          <h4 class="text-dark">Credit/Loan</h4>
		          <p class="text-dark">Farmer require a donation to improve their life. You can donate the farmer from following link</p>
		          <a href="#" class="p-2 text-light bg-warning" onclick='alert("Not available in beta version")'>Loan</a>
		      </div>
		        <?php } ?>
		    </div>
		   <?php }
	    }
    ?>
</main>
<?php 
	include 'footer.php';
?>