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
        <img src="images/MuttonCurry.jpg" alt="Dosa" class="image-responsive" />
    </div>

    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <h1>Balti Meat Recipe</h1>
                <p></p>
                <h5><span class="label label-primary"> Method : </span></h5>
                <p class="description">1. To fry the meat, in a thick bottom pan, heat oil, add black cardamom, green cardamom, mace, cloves, cinnamon stick, black peppercorn and ginger garlic paste.</p>
                <p class="description">2. Add chop ginger, green chillies, mutton curry cut, brown onion paste, chilli powder and salt.</p>
                <p class="description">3. Sauté for 15 minutes and mutton stock, cover the pot and cook on slow fire.</p>
                <p class="description">4. When mutton gets 80% cooked, add tomato puree and powdered spices.</p>
                <p class="description">5. Continue cooking on a slow fire till the mutton is fully cooked and the oil has separated and floating on top.</p>
                <p class="description">6. Serve hot with tandoori bread or steamed rice.</p> 
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
            <p>Key Ingredients: Refined oil, Black cardamoms, Green cardamoms, Mace, Clove, Cinnamon stick, Black pepper corn, Ginger garlic paste, Ginger, Green chilies, Mutton curry cut, Brown onion paste, Salt, Kashmiri red chili powder, Tomato Puree, Garam masala powder, Coriander powder, Cumin powder.</p>
        </div>
        <div id="menu1" class="tab-pane fade col-lg-12">
            <h4 style="margin-top:10px">Ingredient</h4>
            <div class="col-lg-6">
                <p>11-12 Tbsp Refined oil</p>
                <p>2 Gram Black cardamoms</p>
                <p>2 Gram Green cardamoms</p>
                <p>1 Gram Mace</p>
                <p>1 Gram Clove</p>
                <p>1 Gram Cinnamon stick</p>
                <p>1 Gram Black pepper corn</p>
                <p>6-7 Tbsp Ginger garlic paste</p>
                <p>3 Gram Ginger</p>
                <p>2 Gram Green chilies</p>
                <p>1000 Gram Mutton curry cut</p>
                <p>16-17 Tbsp Brown onion paste</p>
                <p>1-2 tsp Salt</p>
               <p> 2-3 tsp Kashmiri red chili powder</p>
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