<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>NBootstrap grid</title>
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="main.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<script type="text/javascript">
	// Prevent dropdown menu from closing when click inside the form
	$(document).on("click", ".navbar-right .dropdown-menu", function(e){
		e.stopPropagation();
	});
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>
</head> 
<body>
<?php 
unset($_COOKIE['email']);
unset($_COOKIE['name']);
setcookie('name', null, -1, '/');
setcookie('email', null, -1, '/');
    ?>
<!-- Include Header Nav bar -->
<?php include 'Source/navbar.php'; ?>

<h1> Log out Successfully </h1>
    <p>Click here to redirect to home page </p><a href="index.php" style="cursor:pointer">Home.</a>

</body>
</html>                                                                                    