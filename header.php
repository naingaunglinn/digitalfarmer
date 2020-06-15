<!DOCTYPE html>
<html>
<head>
	<title>Wish Of</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href='https://mmwebfonts.comquas.com/fonts/?font=myanmar3' />
	<link rel="stylesheet" href='https://mmwebfonts.comquas.com/fonts/?font=zawgyi' />
	<style type="text/css">
		/* width */
		::-webkit-scrollbar {
		  width: 0px;
		}

		/* Track */
		::-webkit-scrollbar-track {
		  background: #f1f1f1; 
		}
		 
		/* Handle */
		::-webkit-scrollbar-thumb {
		  background: #888; 
		}

		/* Handle on hover */
		::-webkit-scrollbar-thumb:hover {
		  background: #555; 
		}
	</style>
</head>
<body>
	<header class="col-12 bg-secondary">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="category.php">Farmer</a>
				</li>
			</ul>
			<ul class="navbar-nav">
				<?php if (empty($_SESSION["name"]) && empty($_SESSION["password"])) { ?>	
				<li class="nav-item">
					<a class="nav-link" href="login.php">Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="signup.php">Sign Up</a>
				</li>
			<?php } else { ?>
				<li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          <?php echo $_SESSION["name"]; ?>
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="<?php echo base_url; ?>logout.php">Logout</a>
			        </div>
			    </li>
			<?php } ?>
			</ul>
			</div>
		</nav>
	</header>