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
        <img src="images/idli.jpg" alt="upma" class="image-responsive" />
    </div>

    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <h1>Idli</h1>
                <p></p>
                <h5><span class="label label-primary"> Method : </span></h5>
                <p class="description">1.Wash rice and urad dal separately until the water runs clean and add fenugreek seeds to the rice. Soak it in water for 4-6 hours. Soak the urad dal too for the same amount of time. Drain all the water from the urad dal and grind it to a fine paste. Add water accordingly.</p>
                <p class="description">2.Grind the rice to a coarse paste (add water as needed) and then mix both the pastes together in a large bowl and whisk them well. Make sure that the consistency is thick.</p>
                <p class="description">3. Now, the idli batter needs to be well-fermented. This step is very important to get soft and fluffy idlis. Keep the batter in a warm place to ferment. Once the batter has risen, add salt to it and whisk to mix it well</p>
                <p class="description">4. Grease the idli stand with oil and take a ladleful of batter and fill the idli mould. Add ½ cup of water in the idli steamer and let it boil. Put the idli stand inside and close the lid. Let the steam build for 8-10 minutes before switching off the gas.</p>
                <p class="description">5.If you are using a cooker, use it without a vent and steam it for 10 minutes and then switch the gas off. In both cases, wait till the steam is released before you take the idli stand out. Wait for another 5 minutes and then use a sharp knife to scoop the idlis out. Serve warm with coconut chutney.</p>
                
    
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
            <h5 style="margin-top:20px">Idli</h5>
            <p>Idli is a very popular South Indian recipe which is made with a batter of basmati rice, urad dal and fenugreek seeds.</p>
        </div>
        <div id="menu1" class="tab-pane fade col-lg-12">
            <h4 style="margin-top:10px">Ingredient</h4>
            <div class="col-lg-6">
                <p>2 1/2 cup basmati rice</p>
                 <p>   1/2 tablespoon fenugreek seeds</p>
                 <p>    5 tablespoon sesame oil</p>
                 <p>    1 1/2 cup urad dal</p>
                 <p>    1 1/2 teaspoon salt</p>
                 <p>    water as required </p>
            
            </div>
        </div>
        <div id="menu2" class="tab-pane fade">
            <p style="margin-top:20px;"> Enter the number of Member : <input type="text" id="number" class="form-control"> <p>
                <table>
                    <tr> 
                        <td> Rice:</td>
                        <td id="potato"> <td> 
                    <tr>
                    <tr> 
                        <td> urad dal :</td>
                        <td id="onion"> <td> 
                    <tr>
                    <tr> 
                        <td> salt :</td>
                        <td id="green_peas"> <td> 
                    <tr>
                    <tr> 
                        <td> water :</td>
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