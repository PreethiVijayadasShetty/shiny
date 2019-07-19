<?php  
include 'config.php';
 if(isset($_POST["query"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM search WHERE 	catagory_name LIKE '%".$_POST["query"]."%'";  
      $result = mysqli_query($conn, $query);  
      $output = '<ul class="list-unstyled">';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<li class="list-gpfrm-list"><a href="'.$row["url"].'">'.$row["catagory_name"].'</a></li>';  
           }  
      }  
      else  
      {  
           $output .= '<li class="list-gpfrm-list"> Search Not Found </li>';  
      }  
      $output .= '</ul>';  
      echo $output;  
 }  
 ?>  