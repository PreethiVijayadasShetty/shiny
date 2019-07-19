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

</head> 
<body>
<!-- Include Header Nav bar -->
<?php include 'Source/navbar.php'; ?>

<div class="container" id="product-section">
  <div class="row">

    <div class="col-md-6">
        <img src="images/Sambar.jpg" alt="Dosa" class="image-responsive" />
    </div>

    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <h1>Sambar</h1>
                <p></p>
                <h5><span class="label label-primary"> Method : </span></h5>
                <p class="description">1. Boil and keep aside tuar dal (one-two bowl).</p>
                <p class="description">2. For the sambar powder you will need 1 tbsp of channa dal, dhaniya seeds, fresh chopped coconut and 5-6 dried lal mirch. Take 3 tbsp of oil and let all of the above mentioned ingredients fry until boil. Remove when done, grind into powder and keep aside.</p>
                <p class="description">3. Take 50gms of tamarind and soak in 2 cups of hot water, leave for 10 minutes. Squeeze out all the water from soaked imli and keep aside.</p>
                <p class="description">4. Boil all vegetables until half cooked and add tamarind water to it.</p>
                <p class="description">5. Cook for 5 minutes, add sambar powder and salt, cook for 5 minutes. Add dal, cover and cook for 10 minutes.</p>
                <p class="description">6. Prepare tempering by using 2-3 tbsp of oil and adding 1 1/2tsp of mustard seeds, half a tsp of methi dana, a crushed dried red chill, few curry leaves and a pinch of asafoetida. Let it splutter and add to the sambar mix.</p> 
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
            <h5 style="margin-top:20px">Sambar</h5>
            <p>Vegetables: You will need shallots, drumsticks, white pumpkin and brinjal.</p>
        </div>
        <div id="menu1" class="tab-pane fade col-lg-12">
            <h4 style="margin-top:10px">Ingredient</h4>
            <div class="col-lg-6">
                <p>200 gm onion, finely chopped</p>
                <p>1 tsp urad dal</p>
            </div>
            <div class="col-lg-6">
                <p>1 tsp channa dal</p>
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