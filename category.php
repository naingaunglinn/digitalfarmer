<?php
error_reporting(E_ALL);
include ("config.php");
session_start();
?>
<?php 
	include 'header.php';
?>
<link rel="stylesheet" href='https://mmwebfonts.comquas.com/fonts/?font=myanmar3' />
	<link rel="stylesheet" href='https://mmwebfonts.comquas.com/fonts/?font=zawgyi' />
<main class="container clearfix mt-5 mb-5">
	<?php
		$res = "SELECT * FROM farmer_dat";
		$result = $conn->query($res);
		if ($result->num_rows > 0) { ?>
	<table class="table table-striped table-bordered jambo_table">
    	<thead>
        	<tr>
        	<th>Id</th>
        	<th>Name</th>
        	<th>Age</th>
        	<th>Info</th>
        	<th>Invest</th>
        	</tr>
        </thead>
	<tbody>
	<?php
	$i = 1;
    while($row = $result->fetch_assoc()) {
    	echo "<tr>";
    	echo "<td>" . $i . "</td>";
    	echo "<td>" . $row['f_name'] . "</td>";
    	echo "<td>" . $row['age'] . "</td>";
    	echo "<td>" . $row['info'] . "</td>"; ?>
    	<td class="text-center">
	    	<a <?php if (empty($_SESSION["name"]) && empty($_SESSION["password"])) { ?> href="login.php" <?php } else {?> href="invest.php?id=<?php echo $row['id']; ?>" <?php }?> class="btn btn-primary">Invest Now</a>
		</td>
    	<?php
    	echo "</tr>";
    	$i++;
        }	
    ?>
    </tbody>
	</table>
	<?php } ?>
</main>
<?php 
	include 'footer.php';
?>