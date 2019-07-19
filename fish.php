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
        <img src="images/fish.jpg" alt="upma" class="image-responsive" />
    </div>

    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <h1>Fish gassi</h1>
                <p></p>
                <h5><span class="label label-primary"> Method : </span></h5>
                <p class="description">1. Heat oil in pan. Add coriander powder, fenugreek seeds, fennel seeds, pepper corn, mustard seeds, cumin seeds and red chillies and dry roast them.</p>
                <p class="description">2.Now add grated coconut, onions and garlic.</p>
                <p class="description">3. Saute till the onion turns light brown. </p>
                <p class="description">4. Then add water and grind them together.</p>
                <p class="description">5. Heat oil in pan. Add sliced onions, curry leaves and sauté the onions till it loses colour.</p>
                <p class="description">6. Then add chopped tomatoes and prepared masala, and stir-fry till fat separates. </p>
                <p class="description">7.  Add fish and stir fry.</p>
                <p class="description">8. Add salt, tamarind paste and coconut milk. Mix it well. </p>
                <p class="description">9. Garnish with curry leaves and coriander leaves. Serve hot. </p>
    
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
            <h5 style="margin-top:20px">Fish gassi</h5>
            <p>A Manglorean classic this delicious fish curry is ideal for anyone who loves seafood, spice and creamy coconut milk. Soothing combination of rich flavours that compliment any fish, this curry is not only tasty but is fairly simple to put together.</p>
        </div>
        <div id="menu1" class="tab-pane fade col-lg-12">
            <h4 style="margin-top:10px">Ingredient</h4>
            <div class="col-lg-6">
                <p>1 tsp coconut oil</p>
                <p> 3 tsp coriander powder</p>
                <p>  Pinch of fenugreek seeds (methi daana)</p>
                <p> 1 tsp fennel seeds (saunf)</p>
                <p> 8 pieces of pepper corn</p>
                <p> 1 tsp mustard seeds</p>
                <p> 2 tsp cumin seeds</p>
                <p> 15 red chillies</p>
                <p> 1 grated coconut</p>
                <p> 2 sliced onions</p>
                <p> 8 pods of garlic</p>
                <p> 100 ml water</p>
            </div>
            <div class="col-lg-6">
                <p>2 Tbsp coconut oil</p>
                <p>  2 sliced onions</p>
                <p> 2 sliced onions</p>
                <p> 10 curry leaves</p>
                <p> 2 chopped tomatoes</p>
                <p> 500 gm filleted fish</p>
                <p> Prepared masala</p>
                <p> 1 tsp salt</p>
                <p> 2 Tbsp tamarind paste</p>
                <p> 100 ml coconut milk</p>
            
            </div>
        </div>
        <div id="menu2" class="tab-pane fade">
            <p style="margin-top:20px;"> Enter the number of Member : <input type="text" id="number" class="form-control"> <p>
                <table>
                    <tr> 
                        <td> fish:</td>
                        <td id="potato"> <td> 
                    <tr>
                    <tr> 
                        <td> coconut :</td>
                        <td id="onion"> <td> 
                    <tr>
                    <tr> 
                        <td> onions :</td>
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