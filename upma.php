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
        <img src="images/upma.jpg" alt="upma" class="image-responsive" />
    </div>

    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <h1>Upma</h1>
                <p></p>
                <h5><span class="label label-primary"> Method : </span></h5>
                <p class="description">1.Heat 1 tsp ghee in a pan..</p>
                <p class="description">2.Add rava and fry until turns slightly brown. Remove the roasted rava on a plate and keep aside. Make sure to fry the rava on low medium heat otherwise it will burn.</p>
                <p class="description">3. Heat the remaining ghee in same pan. </p>
                <p class="description">4. Once the ghee is hot, add mustard seeds, curry leaves, urad dal, chana dal and cashew nuts and fry until they turn slightly browned.</p>
                <p class="description">5. Add chopped onion, green chillies and ginger and fry until onion turns pinkish in colour.</p>
                <p class="description">6. Add carrots and peas and cook on high heat for 3-4 minutes </p>
                <p class="description">7. Add hot water, salt, sugar and lemon juice and bring it to a boil. Add the roasted rava and mix well.</p>
                <p class="description">8. Cover the pan and simmer the heat to low. </p>
                <p class="description">9. Cook for 3-4 minutes on low heat until rava absorbed the water and is cooked. Remove the pan from heat and let the upma rest for 4-5 minutes. Fluff it with a spoon and serve hot.. </p>
    
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
            <h5 style="margin-top:20px">Upma</h5>
            <p>Upma is a delectable South Indian breakfast dish. Rava Upma is made by continuously stirring roasted semolina (Sooji) with veggies, green chillies and curry leaves on a medium flame with hot water. Sprinkle lemon juice on it and enjoy it hot. It makes for a great lunch box option as well. Here is how to make Upma Recipe</p>
        </div>
        <div id="menu1" class="tab-pane fade col-lg-12">
            <h4 style="margin-top:10px">Ingredient</h4>
            <div class="col-lg-6">
                <p>3 tbsp Ghee</p>
                <p>1 cup Fine Rava</p>
                <p>1 tsp Mustard Seeds</p>
                <p>10-15 Curry Leaves</p>
                <p>1 tsp Urad Dal</p>
                <p>1 tsp Chana dal</p>
                <p>8-10 Cashew Nuts Halved</p>
                <p>1/2 cup Onion Chopped</p>
            </div>
            <div class="col-lg-6">
                <p>2 tsp Green Chilli Chopped</p>
                <p>1 tsp Ginger Grated</p>
                <p>1/4 cup carrot Chopped</p>
                <p>1/4 cup Peas</p>
                <p>2.5 cup Hot water</p>
                <p>1 tsp Sugar</p>
                <p>Salt to taste</p>
                <p>1 tbsp Lemon Juice</p>
                <p>2 tbsp Fresh Coriander Chopped</p>
            
            </div>
        </div>
        <div id="menu2" class="tab-pane fade">
            <p style="margin-top:20px;"> Enter the number of Member : <input type="text" id="number" class="form-control"> <p>
                <table>
                    <tr> 
                        <td> Rava:</td>
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