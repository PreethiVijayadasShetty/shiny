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
</head> 
<body>
<!-- Include Header Nav bar -->
<?php include 'Source/navbar.php'; ?>

<div class="container" id="product-section">
  <div class="row">

    <div class="col-md-6">
        <img src="images/masalabhindi.jpg" alt="Dosa" class="image-responsive" />
    </div>

    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <h1>Masala Bhindi</h1>
                <p></p>
                <h5><span class="label label-primary"> Method : </span></h5>
                <p class="description">1. Wash and pat dry the okra before chopping. If you try to cut the okra without pat drying it will be very slimy.</p>

                                                                                                                                
                <p class="description">2. Fry the okra in little oil before adding it to the curry/masala. That’s what I have done in this recipe, fried the okra till all the sliminess disappeared. This takes around 15 minutes on medium-low flame.</p>
                <p class="description">3. Do not cook on high flame else the okra will get brown quickly, even before the sliminess can go away.</p>
                <p class="description">4.3- Add chopped onion and saute for 2 to 3 minutes until soft. Then add the ginger and green chili and cook for 1 more minute.</p>
                <p class="description">5- Then add the spices – coriander powder, turmeric, amchur, red chili powder and salt. Mix the spices well with the masala.</p>

                <p class="description">6- I added a tablespoon of water at this point so that the spices do not burn. Stir well.</p>

                <p class="description">7- Add the cooked bhindi to the pan and mix well.</p>

                <p class="description">8- Set heat to low-medium and cook for 5 minutes without covering the pan.</p> 

                
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
            <h5 style="margin-top:20px">Masala Bhindi</h5>
            <p>1.Bhindi Masala is a popular Indian dish made with okra, onion, tomatoes & spices! This stir fry is best enjoyed with warm rotis.</p>
        </div>
        <div id="menu1" class="tab-pane fade col-lg-12">
            <h4 style="margin-top:10px">Ingredient</h4>
            <div class="col-lg-6">
                <p>2.5 tablespoon oil, divided</p>
                <p>500 grams bhindi, okra, chopped into rounds</p>
                <p>1 teaspoon cumin seeds</p>
                <p>1 medium red onion, chopped</p>
                <p>1 inch ginger, chopped</p>
                <p>1 green chili, chopped, or more to taste</p>
            </div>
            <div class="col-lg-6">
                <p>2 medium tomatoes, chopped</p>
                <p>1.5 teaspoon coriander powder</p>
                <p>1/2 teaspoon turmeric powder</p>
                <p>1 teaspoon amchur, dried mango powder</p>
                <p>1/4 teaspoon red chili powder, or to taste</p>
                <p>3/4 teaspoon salt, or to taste</p>
                <p>garam masala, to sprinkle</p>
                <p>ginger julienne, to garnish</p>
            </div>
        </div>
        <div id="menu2" class="tab-pane fade">
            <p style="margin-top:20px;"> Enter the number of Member : <input type="text" id="number" class="form-control"> <p>
                <table>
                    <tr> 
                        <td> bhindi:</td>
                        <td id="potato"> <td> 
                    <tr>
                    <tr> 
                        <td> chopped bhindi,oil:</td>
                        <td id="onion"> <td> 
                    <tr>
                    <tr> 
                        <td> green chillies :</td>
                        <td id="green_peas"> <td> 
                    <tr>
                    <tr> 
                        <td>garlic :</td>
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
</html>s