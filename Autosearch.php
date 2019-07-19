<!--Search start-->
<div class="col-xl-12">
    <div class="container" style="margin-left:107px;">
        <div class="row">
            <div class="col-6 offset-1">
                 <h2>Search</h2> 
                <hr>
                <div class="input-group">
                    <div class="input-group-btn search-panel">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"> <span id="search_concept">Filter by</span>  <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li class="dropdown-item"><a href="#contains">Basic</a>
                            </li>
                            <li class="dropdown-item"><a href="#its_equal">Break Fast</a>
                            </li>
                            <li class="dropdown-item"><a href="#greather_than">Lunch</a>
                            </li>
                            <li class="dropdown-item"><a href="#less_than">Dinner</a>
                            </li>
                            <li class="divider dropdown-item"></li>
                            <li class="dropdown-item"><a href="#all">All Category</a>
                            </li>
                        </ul>
                    </div>
                    <input type="hidden" name="search_param" value="all" id="search_param">
                    <input type="text" name="search" id="search" class="form-control" name="x" placeholder="Search term..."
                    style="width:300px; margin-right: 20px"> <span class="input-group-btn">

                        <button class="btn btn-secondary" type="button"><span class="glyphicon glyphicon-search">Search</span>
                    </button>
                    </span>
                    <div id="countryList" class="autocomplete-items"></div>  
                </div>
            </div>
        </div>
    </div>
</div>
<script>  
        $(document).ready(function(){  
            $('#search').keyup(function(){  
                var query = $(this).val();  
                if(query != '')  
                {  
                        $.ajax({  
                            url:"Source/search.php",  
                            method:"POST",  
                            data:{query:query},  
                            success:function(data)  
                            {  
                                $('#countryList').fadeIn();  
                                $('#countryList').html(data);  
                            }  
                        });  
                }  
            });  
            $(document).on('click', 'li', function(){  
                $('#country').val($(this).text());  
                $('#countryList').fadeOut();  
            });  
        });  
        </script>  
<!--Search start end-->