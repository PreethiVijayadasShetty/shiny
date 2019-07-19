<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Gallery</title>
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="main.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</head> 
<body>
<!-- Include Header Nav bar -->
<?php include 'Source/navbar.php'; ?>

<div class="container" id="product-section">
  <div class="row">

    <div class="col-md-6">
        <img src="images/pongal.jpg" alt="upma" class="image-responsive" />
    </div>

    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <h1>Pongal</h1>
                <p></p>
                <h5><span class="label label-primary"> Method : </span></h5>
                <p class="description">1Here's how you can prepare this delicious recipe at home: Take a pan and add moong dal in it. Dry roast till it turns golden and aromatic. Wash the same under running water and transfer it in a deep pan along with rice and enough water to submerge both. Bring it to a boil and turn off the flame, once well-cooked. Add salt according to your taste and keep aside.</p>
                <p class="description">2.Next, place a pan on medium flame and pour ghee. Once heated, add cashews and fry until they change their color to golden brown. Once done, take out and keep aside and warm. Now, add ginger in the pan and fry for a minute or two. Put cumin seeds, ginger paste, curry leaves and black pepper along with turmeric powder and asafoetida. Add the dal-rice mixture and stir well for about 5 minutes.</p>
                <p class="description">3. Then simmer for about 3-4 minutes on medium flame. Lastly, turn off the flame and transfer to a serving dish. Garnish with cashews. To make it look even more eye-grabbing, you can serve it with some slightly fried coconut slices, dry curry leaves and some roasted red chillies to spice up this traditional South Indian recipe. Serve this easy Pongal Recipe with Vada and Sambhar.</p>
                
                
    
                </p>
            </div>
        </div><!-- end row -->
    </div><!-- end row-->

  </div><!-- end row -->
 </div><!-- end container -->
 
 <!-- Tab Nvigation-->
 <div class="container">
    <ul class="nav nav-tabs">
        <li class="active nav-item"><a data-toggle="tab" href="#home" class="nav-link">Description</a>
        </li>
        <li class="nav-item"><a data-toggle="tab" href="#menu1" class="nav-link">Ingredient</a>
        </li>
        <li class="nav-item"><a data-toggle="tab" href="#menu2" class="nav-link">Help</a>
        </li>
        
    </ul>
    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <h5 style="margin-top:20px">Pongal</h5>
            <p>Pongal Recipe is an easy-to-make South Indian delicacy, which is often prepared on special festivals and occasions in South India</p>
        </div>
        <div id="menu1" class="tab-pane fade col-lg-12">
            <h4 style="margin-top:10px">Ingredient</h4>
            <div class="col-lg-6">
                <p>1 cup rice</p>
                <p>   2 tablespoon ghee</p>
                <p>   2 pinches asafoetida</p>
                <p>  1 1/2 sprigs curry leaves</p>
                <p>    5 cashews</p>
                <p>    water as required</p>
                <p>    3 pinches turmeric</p>
                <p>    1/2 teaspoon black pepper</p>
                <p>    1 teaspoon cumin seeds</p>
                <p>    2 teaspoon ginger paste</p>
                <p>    1 cup moong dal</p>
                                
            </div>
        </div>
        <div id="menu2" class="tab-pane fade">
            <p style="margin-top:20px;"> Enter the number of Member : <input type="text" id="number" class="form-control"> <p>
                <table>
                    <tr> 
                        <td> rice:</td>
                        <td id="potato"> <td> 
                    <tr>
                    <tr> 
                        <td> Ghee :</td>
                        <td id="onion"> <td> 
                    <tr>
                    <tr> 
                        <td> water:</td>
                        <td id="green_peas"> <td> 
                    <tr>
                    <tr> 
                        <td> cumin seeds :</td>
                        <td id="green_chillies"> <td> 
                    <tr>
                </table>
                <script>
                    document.getElementById('potato').innerHTML = 1 ;
                    document.getElementById('onion').innerHTML = 3;
                    document.getElementById('green_peas').innerHTML = 3;
                    document.getElementById('green_chillies').innerHTML = 3;
                    
                    number.addEventListener('input', function () {
                        var number = document.getElementById('number').value;
                        document.getElementById('potato').innerHTML = number * 1 ;
                        document.getElementById('onion').innerHTML = number * 3;
                        document.getElementById('green_peas').innerHTML = number * 3;
                        document.getElementById('green_chillies').innerHTML = number * 3;
                    });
                </script>
        </div>
        <div id="menu3" class="tab-pane fade">
            <?php include 'Source/Review.php'; ?>
        </div>
    </div>
</div>
    <!-- ENd Tab Nvigation-->
</body>
</html>