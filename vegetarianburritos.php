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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</head> 
<body>
<!-- Include Header Nav bar -->
<?php include 'Source/navbar.php'; ?>

<div class="container" id="product-section">
  <div class="row">

    <div class="col-md-6">
        <img src="images/vegetarianburritos.jpg" alt="Dosa" class="image-responsive" />
    </div>

    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <h1>Vegetarian Burritos</h1>
                <p></p>
                <h5><span class="label label-pTorimary"> Method : </span></h5>
                <p class="description">1.Gather the ingredients..</p>
                <p class="description">2.In a large bowl, toss together the fresh chopped cilantro with the leftover cooked rice and drizzle with a bit of fresh lime juice. Heat in the microwave or on the stove just until hot, and give it a quick stir. .</p>
                <p class="description">3.In a separate large skillet, sauté the onion and garlic in vegetable oil or olive oil for 2 to 3 minutes, or until the onion is soft..</p>
                <p class="description">4.Reduce the heat to medium-low and add the black beans or pinto beans and season with the chili powder, cumin, and hot sauce, stirring to combine. You can add a bit of salt if you'd like, but you shouldn't need too much with all the other seasonings. Allow the beans to cook until heated through, about 5 minutes.. </p>
                
                <p class="description">5.Spoon the cilantro lime rice and the black beans onto lightly warmed flour tortillas, and add any additional toppings you want, such as vegan cheese, salsa, avocado slices or guacamole, black olives or non-dairy sour cream..  </p>
                <p class="description">6.Wrap your bean and rice burritos and serve hot.. </p>
                

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
            <h5 style="margin-top:20px">Vegetarian Burritos</h5>
            <p> If you like vegetarian burritos and vegan bean burritos (and who doesn't?), try making this easy vegan bean and rice burrito using leftover rice and plenty of Mexican spices. This is a quick and easy basic recipe for a vegetarian and vegan bean burrito. A simple vegetarian burrito is a perfect vegetarian dinner idea.   </p>
        </div>
        <div id="menu1" class="tab-pane fade col-lg-12">
            <h4 style="margin-top:10px">Ingredient</h4>
            <div class="col-lg-6">
                <p>2 cups cooked rice (pre-cooked or leftover)</p>
                <p>2 limes (juiced)</p>
                <p>2 tablespoons fresh cilantro (chopped)</p>
                <p>1/2 onion (diced)</p>
                div>
            <div class="col-lg-6">
                <p>3 to 4 cloves garlic (minced)</p>
                <p>2 tablespoons vegetable oil (or olive oil)</p>
                <p>1 (15-ounce) can black beans (or pinto beans, drained)</p>
                <p>1 tablespoon chili powder</p>
                <p>1/2 teaspoon cumin</p>
                <p>1 tablespoon hot sauce (or to taste)</p>
                <p>Optional: salt (to taste)</p>
                 
        </div>
    </div>
        <div id="menu2" class="tab-pane fade">
            <p style="margin-top:20px;"> Enter the number of Member : <input type="text" id="number" class="form-control"> <p>
                <table>
                    <tr> 
                        <td> potatoes:</td>
                        <td id="potato"> <td> 
                    <tr>
                    <tr> 
                        <td>cup of cream:</td>
                        <td id="onion"> <td> 
                    <tr>
                    <tr> 
                        <td> pepper,salt:</td>
                        <td id="green_peas"> <td> 
                    <tr>
                    <tr> 
                        <td>cheese:</td>
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