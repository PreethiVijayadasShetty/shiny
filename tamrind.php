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
        <img src="images/tamarind.jpg" alt="Dosa" class="image-responsive" />
    </div>

    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <h1>Tamarind rice</h1>
                <p></p>
                <h5><span class="label label-primary"> Method : </span></h5>
                <p class="description">1.Heat oil and roast peanuts along with both the dals.</p>
                <p class="description">2. Saute till the dals splutter and slightly coloured.</p>
                <p class="description">3. Now add curry leaves and whole red chillies.</p>
                <p class="description">4. Now add curry leaves and whole red chillies.</p>
                <p class="description">5. Add salt, hing, red chilli powder and turmeric powder. Saute them well.</p>
                <p class="description">6. Add gur to the cooked mix and saute well. Now add the tamarind pulp to the mix and saute till it becomes a semi thick gravy.</p>
                <p class="description">7.Add cooked rice to the mix.</p>
                <p class="description">8.Saute it well so the rice is completely mixed with the cooked gravy.</p>
                <p class="description">Serve hot, garnished with a tamarind.</p>
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
            <h5 style="margin-top:20px">Tamarind Rice</h5>
            <p>About Tamarind Rice Recipe: A tangy rice dish made with channa and urad dals, infused with the flavor of tamarind pulp. Tamarind rice is actually a north Indian version of Pulihora or Puliyodharayi, where the term 'Puli' means something sour. Tamarind here is the sour ingredient. This is a perfect meal to cook when you want something light, easy and quick</p>
        </div>
        <div id="menu1" class="tab-pane fade col-lg-12">
            <h4 style="margin-top:10px">Ingredient</h4>
            <div class="col-lg-6">
                <p>2 Cups Rice (cooked 'bite-like')</p>
                <p>  1/2 Cup Tamarind (made into pulp)</p>
                <p> 3 Whole red chillies</p>
                <p> 1/4 Cup Curry leaves</p>
                <p> A pinch of Asafoetida</p>
                <p> 1 tsp Mustard seeds</p>
            </div>
            <div class="col-lg-6">
                <p>1 Tbsp Channa daal</p>
                <p>1 tsp Urad daal (dhuli)</p>
                <p> 1/4 tsp Methi seeds</p>
                <p>1/2 tsp Red chillli powder</p>
                <p> 1 Tbsp Peanuts</p>
                <p>1 tsp Salt</p>
                <p>1/4 tsp Turmeric powder</p>
                <p> 1/4 tsp Gur</p>
                 <p>Oil</p>
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