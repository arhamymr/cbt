<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">
    <!-- HTML 5 -->
    <title>.: Computerized Based Testing :.</title>
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <link href="../css/bjqs.css" rel="stylesheet" />
    <!-- css disini -->
    <style>
    a {
        color: #fff;
    }

  
    </style>
</head>

<body>
	
	<div class="row">
	<div class="col-md-4"></div>
    <div class="col-md-4">
    	<form action="" method="post">
    	<h1> Login </h1>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="username">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="password">
        </div>
        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary" value="login">
        </div>
        <?php
		if (isset($_POST['submit'])){
			$user = $_POST['username'];
			$pass = $_POST['password'];

			if ($user == "admin" && $pass == "cbt123"){
				header("location: home.php");
			} else {
				 echo "<div class='text-center' style='width:100%' ><div class='alert alert-danger' role='alert'>
        		  username dan password salah 
          		</div></div>";
			}
		}
	?>
    </form>
    </div>
	<div class="col-md-4"></div>
	</div>

    <footer>
        <center>
            <p>&copy; CBT - 2018 - Versi 7.3 </p>
    </footer>
</body>

</html>
<!-- Bootstrap core JavaScript
================================================== -->
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/action.js"></script>