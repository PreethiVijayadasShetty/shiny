<!DOCTYPE html>
<html>

<style>
	fieldset {
    	float:left;
  		border-left: none;
        border-right: none;
        border-bottom: none;
        width: 30%;
        border-radius :10px;
        padding-left: 40px;
    	padding-right: 40px;
        margin-left:5%;
        margin-right:5%
    }
    
    legend {
        padding: 3px 6px;
        text-align:center;
    }
   
    .signupbtn {
        color: #fff;
        background-color: #1997c6;
        border-radius: 4px;
        outline: none;
        border: #1997c6;
        text-align: center;
        height:45px;
        width:70%;
    }
   
    .input-type-text {
        width: 90%;
        height: 34px;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    
</style>

<body>

	<fieldset style ="margin-left:10%">
        <legend> <h1>Login</h1> </legend>
        <form action="process.php" method="POST">
            <p>If you have account please login here.</p>
            <hr><br>
            <input type="text" class="input-type-text" placeholder="Enter Email" id="email" name="email" required><br><br>
            <input type="password" class="input-type-text" placeholder="Enter Password" id="psw" name="psw" required><br><br>
            <center><button type="submit" class="signupbtn" style="cursor: pointer;">Log In</button></center>
        </form>
    </fieldset>
     <hr width=1 size=400 style="float:left"> 
	<fieldset>
        <legend> <h1>Sign Up</h1> </legend>
        <form action="registration.php" method="POST">
             <p>Please fill in this form to create an account.</p>
             <hr><br>
             <input type="text" class="input-type-text" placeholder="Enter First name" id ="firstname" name="firstname" required><br><br>
             <input type="text" class="input-type-text" placeholder="Enter last name" id="lastname" name="lastname" required><br><br>
             <input type="text" class="input-type-text" placeholder="Enter Email" id="email" name="email" required><br><br>
             <input type="password" class="input-type-text" placeholder="Enter Pas sword" id="psw"name="psw" required><br><br>
             <input type="password" class="input-type-text" placeholder="Repeat Password" id="psw" name="psw-repeat" required><br><br>
             <center><button type="submit" class="signupbtn">Sign Up</button></center>
         </form>

	</fieldset>
</body>
</html>
