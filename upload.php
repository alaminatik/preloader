
<?php
$temp_location = "tmp/";

if(isset($_FILES["myfile"]))
{    
  if ($_FILES["myfile"]["error"] > 0)
  {
     echo "File loading error! ";
  }
  else
  {        
    move_uploaded_file($_FILES["myfile"]["tmp_name"],
    $temp_location. $_FILES["myfile"]["name"]);

    //read myfile and insert data into database

    echo "File uploaded into database";
   } 
  }
?>