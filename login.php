<?php 
error_reporting(E_ALL);
include 'config.php';
session_start();

if (isset($_POST['login'])) {
	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		
		$usr = $_POST["user"];
		$pass = $_POST["password"];

		if (empty($usr)) {
			$usrErr = "Please fill the user name.";
		} 
		if (empty($pass)) {
			$passErr = "Please fill the password.";
		} 
		if (!empty($usr) && !empty($pass)) {
			$pwd = md5($pass);
            $sql = "SELECT id, email, password, status FROM invest_dat WHERE  email ='$usr' AND password='$pwd'";
			$result = $conn->query($sql);
				if($result->num_rows > 0) {
					   while($row = $result->fetch_assoc()) {
                                $_SESSION["user_id"] = $row["id"];
					        	$_SESSION["name"] = $usr;
								$_SESSION["password"] = $pwd;
								$_SESSION["status"] = $row["status"];

                                if ($_SESSION['status'] == '1') {
                                        header('Location: category.php');
                                } elseif ($_SESSION['status'] == '0') {
                                    session_destroy();
                                    $deactive = "Sorry! your account has been deactivated by admin.";
                                }
					    }
					} else {
						$error = "Your login name or password is invalid.";					 
					}
			}
	}
}
include 'header.php';
?>

<main class="container" style="margin-bottom: 200px;margin-top: 200px;">
	<form class="form-group col-6 m-auto h-100" action="<?php $_SERVER['REQUEST_URI']; ?>" method="POST">
        <h3 class="mb-5">Login To Invest</h3>
        <div class="form-group">
            <input class="form-control" type="email" name="user" id="username" placeholder="E-mail" value="<?php echo isset($_POST["user"]) ? $_POST["user"] : ''; ?>">
            <span class="error"><?php if (isset($usrErr)) echo $usrErr; ?></span>
        </div>
        <div class="form-group">
            <input class="form-control" type="password" name="password" id="password" placeholder="Password">
            <span class="error"><?php if (isset($passErr)) echo $passErr; ?></span>
        </div>
        <div>
            <input class="btn btn-secondary" type="submit" name="login"  style="float:inherit;margin:0 auto 10px;display:block;width:100%;"  value="Login">
        </div>
    </form>
</main>
<?php
	include 'footer.php';
?>