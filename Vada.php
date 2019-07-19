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
        <img src="images/vada.jpg" alt="Dosa" class="image-responsive" />
    </div>

    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <h1>vada</h1>
                <p></p>
                <h5><span class="label label-primary"> Method : </span></h5>
                <p class="description">1. wash and soak dal in about 3 cups of water for about 2-3 hours.</p>
                <p class="description">2.drain all the water from soaked dal. grind urad dal and channa dal together to smooth paste using very little water. i have used authentic grinding stone, but wet grinder or even mixer grinder can be used.</p>
                <p class="description">3.the batter should be thick and use very little water. the right consistency is very important or otherwise, you will not be able to get the vada shape.</p>
                <p class="description">4.add coriander, green chilli, ginger and chopped dry coconut to the batter. mix it very well .</p>
                <p class="description">5.add 2-3 tsp of rice flour. rice flour is added to make it crispy .</p>
                <p class="description">6.add pinch of hing to make it more digestible.  </p>
                <p class="description">7.heat the oil in a frying pan in medium flame. wet your palms and take a lemon size batter.  </p>
                <p class="description">8.make hole in the center and slide it into the hot oil. </p>
                <p class="description">9.the vada should float on top of oil </p>
                <p class="description">10.make sure your oil is not too hot. otherwise the vadas would not cook evenly.  </p>
                <p class="description">11.make sure your oil is not too hot. otherwise the vadas would not cook evenly. </p>
                <p class="description">12.serve medu vada immediately with chutney collections or sambar collections.  </p>

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
                <p>1 cups of urad dal or uddina bele</p>
                <p>¼ cup of channa dal or kadle bele</p>
                <p>2 tsp of rice flour</p>
                <p>2 green chillies</p>
                <p>3 tbsp of dry chopped coconut</p>
                <p>few curry leaves</p>
                
            </div>
            <div class="col-lg-6">
                <p>1 inch ginger, finely chopped)</p>
                <p>pinch of hing</p>
                <p>salt to taste</p>
                <p>oil to fry</p>
                <p>1 tbsp coriander leaves, chopped</p>
                
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