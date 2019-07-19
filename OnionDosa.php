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
        <img src="images/Dosa.jpg" alt="Dosa" class="image-responsive" />
    </div>

    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <h1>Onion Rava Dosa</h1>
                <p></p>
                <h5><span class="label label-primary"> Method : </span></h5>
                <p class="description">1. Boil the potatoes and green peas until tender.</p>
                <p class="description">2. Mash the potatoes to a fine consistency. Add the peas to the mixture, along with turmeric and salt. Keep aside.</p>
                <p class="description">3. Fry (temper) mustard, urad dal and chana dal (one ingredient at a time).</p>
                <p class="description">4. Add cashew nuts, onions and green chillies. Sauté for 2-3 minutes. Add a pinch of salt and chopped coriander and saute on a low flame until the mixture turns golden brown.</p>
                <p class="description">5. Now add mashed potatoes and peas. Sauté for 5 minutes.</p>
                <p class="description">6. Add lime juice, grated carrot and coriander and cover the dish with a lid. </p>
 
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
            <h5 style="margin-top:20px">Dosa Side Dishes</h5>
            <p>While sambar and the conventional (white) coconut chutney are usually the most common accompaniments for the dosa (especially during breakfast), we’ve put together a bunch of recipes from across South India that make the perfect accompaniment for dosa.</p>
        </div>
        <div id="menu1" class="tab-pane fade col-lg-12">
            <h4 style="margin-top:10px">Ingredient</h4>
            <div class="col-lg-6">
                <p>500 gm potatoes</p>
                <p>200 gm onion, finely chopped</p>
                <p>200 gm green peas</p>
                <p>4 green chillies, finely chopped</p>
                <p>1 cup chopped coriander</p>
                <p>1 tsp mustard seeds</p>
                <p>1 tsp urad dal</p>
            </div>
            <div class="col-lg-6">
                <p>1 tsp channa dal</p>
                <p>8 cashew nuts</p>
                <p>2 Tbsp cooking oil</p>
                <p>Juice of one small lemon</p>
                <p>1 carrot, grated</p>
                <p>2 tsp chopped coriander (for garnishing)</p>
            </div>
        </div>
        <div id="menu2" class="tab-pane fade">
            <p style="margin-top:20px;"> Enter the number of Member : <input type="text" id="number" class="form-control"> <p>
                <table>
                    <tr> 
                        <td> Potatoes :</td>
                        <td id="potato"> <td> 
                    <tr>
                    <tr> 
                        <td> Onion :</td>
                        <td id="onion"> <td> 
                    <tr>
                    <tr> 
                        <td> Green peas :</td>
                        <td id="green_peas"> <td> 
                    <tr>
                    <tr> 
                        <td> Green chillies :</td>
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