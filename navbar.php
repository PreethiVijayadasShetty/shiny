<?php 
// Data base connection
$error = '';
include 'Source/config.php';
if(isset($_POST['login'])) {

    $name =  $_POST["email"]; 
    $pass = $_POST["psw"]; 
    $sql = "SELECT * FROM login where FirstName ='$name' and password = '$pass'";
    $results = mysqli_query($conn, $sql);

    if (mysqli_num_rows($results) >0 ) {
        // output data of each row
        while($row = mysqli_fetch_assoc($results)) {
            $first= $row['FirstName'];
            $email= $row['EmailId']; 
            $cookie_value = $first;
            setcookie("email", $email, time() + (86400 * 30), "/");
            setcookie("name", $cookie_value, time() + (86400 * 30), "/");
            $message = "Log In sucessfully";
            $error = true;
        }
    } else {
        $error = false;
        $message = "You entered wrong user name or password";
    }    
}

if(isset($_POST['register'])) {
    
    $name =  $_POST["name"]; 
    $pass = $_POST["psw"]; 
    $email = $_POST["email"]; 

        $sql = "INSERT INTO `login` (`FirstName`,`EmailId`, `password`) VALUES ('$name','$email','$pass')";
        
        if (mysqli_query($conn, $sql)) {
            $first= $name;
            $email= $email; 
            $cookie_value = $first;
            setcookie("email", $email, time() + (86400 * 30), "/");
            setcookie("name", $cookie_value, time() + (86400 * 30), "/");
            $message = "Sign In sucessfully";
            $error = true;
        } else {
            $error = false;
            $message = "You entered wrong user name or password";
        }

    }
?>

<!-- Header Part -->
<nav class="navbar navbar-default navbar-expand-lg navbar-light">
	<div class="navbar-header d-flex col">
		<a class="navbar-brand" href="#">Quick<b>Recipes</b></a>  		
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
			<span class="navbar-toggler-icon"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
		<ul class="nav navbar-nav">
			<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
					
			<li class="nav-item dropdown">
				<a data-toggle="dropdown" class="nav-link dropdown-toggle" href="">Recipes<b class="caret"></b></a>
				<ul class="dropdown-menu">					
					
					<li><a href="catagoryBreak.php" class="dropdown-item">Break Fast</a></li>
					<li><a href="categoryLunch.php" class="dropdown-item">Lunch</a></li>
					<li><a href="catagoryDinner.php" class="dropdown-item">Dinner</a></li>
                    <li><a href="categoryNorth.php">North Indian</a></li>
                    <li><a href="categorySouth.php">South Indian</a></li>
                    <li><a href="categoryEasy.php">Easy Recipes</a></li>
                    <li><a href="categoryHealthy.php">Healthy Food</a></li>
                    <li><a href="categoryVegetarian.php">Vegetarian Food</a></li>
                    <li><a href="categoryNonvegetarian.php">Non Vegetarian Food</a></li>
				</ul>
			</li>
			<li class="nav-item active"><a href="index.php#gallary" class="nav-link">Gallary</a></li>
			<li class="nav-item"><a href="index.php#team" class="nav-link">Our Team</a></li>
			<li class="nav-item"><a href="index.php#contactUs" class="nav-link" data-toggle="modal" class="">Contact</a></li>
		</ul>
		<form class="navbar-form form-inline">
			<div class="input-group search-box">								
				<input type="text" name="search" id="search" class="typeahead form-control" placeholder="Search here...">
                <span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
                <div id="countryList" class="autocomplete-items"></div>  
			</div>
        </form>
        <script>  
        $(document).ready(function(){  
            $('#search').keyup(function(){  
                var query = $(this).val();  
                if(query != '')  
                {  
                        $.ajax({  
                            url:"Source/search.php",  
                            method:"POST",  
                            data:{query:query},  
                            success:function(data)  
                            {  
                                $('#countryList').fadeIn();  
                                $('#countryList').html(data);  
                            }  
                        });  
                }  
            });  
            $(document).on('click', 'li', function(){  
                $('#country').val($(this).text());  
                $('#countryList').fadeOut();  
            });  
        });  
        </script>  
        <?php   
        if(!isset($_COOKIE["email"])) { ?>
            <ul class="nav navbar-nav navbar-right ml-auto">			
                <li class="nav-item">
                    <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Login</a>
                    <ul class="dropdown-menu form-wrapper">					
                        <li>
                            <form action="" method="post">
                                <p class="hint-text">Sign in with your social media account</p>
                                <div class="form-group social-btn clearfix">
                                    <a href="www.facebook.com" class="btn btn-primary pull-left"><i class="fa fa-facebook"></i> Facebook</a>
                                    <a href="www.twitter.com" class="btn btn-info pull-right"><i class="fa fa-twitter"></i> Twitter</a>
                                </div>
                                <div class="or-seperator"><b>or</b></div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Username" required="required" id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" required="required" id="psw" name="psw">
                                </div>
                                <input type="submit" name ="login" id ="login" class="btn btn-primary btn-block" value="Login">
                                <div class="form-footer">
                                    <a href="#">Forgot Your password?</a>
                                </div>
                            </form>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle get-started-btn mt-1 mb-1">Sign up</a>
                    <ul class="dropdown-menu form-wrapper">					
                        <li>
                            <form action="" method="post">
                                <p class="hint-text">Fill in this form to create your account!</p>
                                <div class="form-group">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Username" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="email" name="email" class="form-control" placeholder="Email" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="password" id="psw" name ="psw" class="form-control" placeholder="Password" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password" required="required">
                                </div>
                                <div class="form-group">
                                    <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms &amp; Conditions</a></label>
                                </div>
                                <input type="submit" id="register" name ="register" class="btn btn-primary btn-block" value="Sign up">
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        <?php } else { ?>
            <ul id="user-profile" class="nav navbar-nav navbar-right ml-auto">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="http://placehold.it/18x18" class="profile-image img-circle"> <?php echo $_COOKIE["name"]; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-cog"></i> Account</a></li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out"></i> Sign-out</a></li>
                    </ul>
                </li>
            </ul>
        <?php } ?>
	</div>
</nav>
<!-- End Header Part -->

<?php if(!empty($error)) {
    if($error == false) { ?> 
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">x</a>
        <p><strong><?php echo $message; ?></strong></p>
    </div>
    <?php } else if($error == true) { ?>
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">x</a>
        <p><strong><?php echo $message; ?></strong></p>
    </div>
<?php } 
    } ?>
    <?php $error=""; ?>