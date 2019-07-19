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
        <img src="images/malabar.jpg" alt="Dosa" class="image-responsive" />
    </div>

    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <h1>Onion Rava Dosa</h1>
                <p></p>
                <h5><span class="label label-primary"> Method : </span></h5>
                <p class="description">1.Take 250 gm onions and cut them into thin slices. Heat oil and 1/2 cup ghee in a pan, and fry the onion till golden brown. Fry cashew nuts and raisins and keep aside.</p>
                <p class="description">2. Apply turmeric powder with enough salt and little water on the fish.</p>
                <p class="description">3. Heat 2 tablespoons oil in a frying pan. Lightly fry the fish till half done and keep aside.</p>
                <p class="description">4. In a heavy-bottomed vessel, heat 3 tablespoons of oil. Grind the remaining onion in a blender with 1/2 cup water. Add this onion mixture to the hot oil.</p>
                <p class="description">5. Meanwhile crush ginger, garlic and chillies. Add this paste to the onion mixture. Stir well for 3-4 minutes.</p>
                <p class="description">6.Add tomatoes, yoghurt and salt. Cook for some time till the water evaporates. Add the fried fish pieces, coriander leaves and the juice from the lemons. Keep aside.</p>
                
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
        <li class="nav-item"><a data-toggle="tab" href="#menu3" class="nav-link">Reviews</a>
        </li>
    </ul>
    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <h5 style="margin-top:20px">Malabar Fish Biriyani</h5>
            <p>In Malabar this dish is made with "kaima rice" a short grain mildly flavored rice. It is also known as the biryani rice of Kerala. This classic Malabar Fish Biryani can be devoured at all times.</p>
        </div>
        <div id="menu1" class="tab-pane fade col-lg-12">
            <h4 style="margin-top:10px">Ingredient</h4>
            <div class="col-lg-6">
                <p>1 kg seer fish</p>
                <p>   1 kg onions</p>
                <p>    100 gm green chillies</p>
                <p> 70 gm garlic</p>
                <p>    70 gm ginger</p>
                 <p>   Juice of 2 lemons</p>
                 <p>   1 cup coriander </p>
                <p>    1 cup yoghurt</p>
                <p>    Salt to taste</p>
                <p>    1 kg rice (kaima rice is best)</p>
                <p>    3 Tbsp ghee</p>
            </div>
            <div class="col-lg-6">
                <p>    1 cup cooking oil</p>
                <p>    ½ kg tomatoes</p>
                <p>    1 tsp turmeric powder</p>
                <p>    2 Tbsp cashew nuts broken</p>
                <p>    2 Tbsp cashew nuts broken</p>
                <p>    2 Tbsp cashew nuts broken</p>
                <p>    2 Tbsp cashew nuts broken</p>
                <p>    2 Tbsp raisins</p>
                <p>    4 glasses water (in proportion to the number of cups of rice)</p>
                <p>    3 pods cardamom</p>
                <p>    3 cinnamon sticks</p>
                <p>    A pinch of garam masala</p>
            
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
                        <td> tamarind:</td>
                        <td id="onion"> <td> 
                    <tr>
                    <tr> 
                        <td> chillies :</td>
                        <td id="green_peas"> <td> 
                    <tr>
                    <tr> 
                        <td>methi seeds :</td>
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