<?php 
    
     $org = $_POST['org'];
     $des = $_POST['des'];

     if (isset($_POST['org'])&& isset($_POST['des']))
     {

     }
   ?>


   <iframe  style="width:100%;height:628px;"
      frameborder="0" style="border:0"
      src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyCJ2J4FtnHZLisJgmRRKL6QKeEwg70jjes
        &origin=<?php echo $org;?>&destination=<?php echo $des; ?>" allowfullscreen>

        </iframe>
