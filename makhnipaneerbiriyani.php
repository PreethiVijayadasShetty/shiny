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
        <img src="images/makhnipaneerbiriyani.jpg" alt="Dosa" class="image-responsive" />
    </div>

    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <h1>Makhni Paneer Biriyani</h1>
                <p></p>
                <h5><span class="label label-primary"> Method : </span></h5>
                <p class="description">1.To begin making the Paneer Malai Makhani Biryani recipe, the first step is to wash the rice and soak for 10 minutes..</p>
                <p class="description">2.Heat a heavy bottomed pot with enough boiling water and add rice for cooking. Strain the rice just before the grain is fully cooked..</p>
                <p class="description">3.Spread on a platter and cool it. .</p>
                <p class="description">4.Cut the paneer in barfi shape. Take a wide glass bowl and mix together red chilli powder, turmeric powder, tomato puree, curd, lime juice and salt. Add the paneer to the mix and coat well. Leave it for 5 minutes. </p>
                
                <p class="description">5.Heat a frying pan with oil and fry the marinated paneer for 5 to 8 minutes. Cook till paneer turn brown from both the sides. Remove the cubes from the pan and keep it aside.  </p>
                <p class="description">6.Sprinkle lime juice and salt on rice then carefully run the fork through the rice to mix it up without breaking the grains. </p>
                <p class="description">7.Heat a big wok with ghee on low flame, add onion and fry till golden brownish and remove..</p>
                <p class="description">8.In the same wok, add the rice, 3/4 fried onions and the biryani masala. Cook for about a minute or two. .</p>
                <p class="description">9.Now, to layer the biryani, add the rice in a platter, then put the paneer mixture on it and garnish it with the remaining fried onions..</p>
                
                <p class="description">10.Serve Paneer Malai Makhani Biryani along with Boondi Raita and Kachumber Salad for a weekday dinner..</p>

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
            <h5 style="margin-top:20px">Makhni Paneer Biriyani</h5>
            <p> The Malai Paneer with its tangy, spicy, buttery taste enriches the spoonful of Biryani bite and makes everyone very happy to the stomach.  </p>
        </div>
        <div id="menu1" class="tab-pane fade col-lg-12">
            <h4 style="margin-top:10px">Ingredient</h4>
            <div class="col-lg-6">
                <p>1 cup Basmati rice</p>
                <p>4 teaspoon Ghee</p>
                <p>2 teaspoon Ginger Garlic Paste</p>
                <p>2 Onion , sliced</p>
                <p>2 teaspoon Biryani Masala</p>
                <p>3 teaspoon Lemon juice</p>
                <p>Salt    , to taste</p>
                </div>
            <div class="col-lg-6">
                <p>200 gram Paneer (Homemade Cottage Cheese)   , cubed</p>
                <p>1 teaspoon Turmeric powder (Haldi)</p>
                <p>1 teaspoon Red chilli powder</p>
                <p>2 teaspoon Homemade tomato puree</p>
                <p>4 teaspoon Hung Curd (Greek Yogurt)</p>
                <p>1 teaspoon Lemon juice</p>
                <p>1/2 teaspoon Ginger Garlic Paste</p>
                <p>2 teaspoon Cooking oil</p>
                <p>Salt    , to taste</p>
               
        </div>
    </div>
        <div id="menu2" class="tab-pane fade">
            <p style="margin-top:20px;"> Enter the number of Member : <input type="text" id="number" class="form-control"> <p>
                <table>
                    <tr> 
                        <td> basmati rice:</td>
                        <td id="potato"> <td> 
                    <tr>
                    <tr> 
                        <td> 200 gram  paneer:</td>
                        <td id="onion"> <td> 
                    <tr>
                    <tr> 
                        <td> red chilli:</td>
                        <td id="green_peas"> <td> 
                    <tr>
                    <tr> 
                        <td>ginger garlic paste:</td>
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