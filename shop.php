<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Louis</title>
</head>

<body>
 
  <?php
    include 'include/navbar_default.html';
  ?>
  <div class="container-fluid bg-dark">
    MENU

  </div>
  <div class="container-fluid d-flex">
    <div class="col-sm-4 bg-dark">
        <ul>
            <form method="post">
            <li>
            <button type= "submit" name ="all" >All</button>
            </li>
            <li>
            <button type= "submit" name ="beans">Coffee Beans</button>
            </li>
            <li>
            <button type= "submit" name ="hcoffee">Hot Coffee</button>>
            </li>
            <li>
            <button type= "submit" name ="icoffee">Iced Coffee</button>
            </li>
            <li>
            <button type= "submit" name ="pastry">Pastry</button>
            </li>
            </form>
        </ul>

    </div>
    <div class="col-sm-8 bg-light">
        
        <?php

            if(array_key_exists('all', $_POST)){
                echo "this is all";
            }
            else if (array_key_exists('beans', $_POST)){
                echo "this is coffee beans";
            }
            else if (array_key_exists('hcoffee', $_POST)){
                echo "this is hot coffee";
            }
            else if (array_key_exists('icoffee', $_POST)){
                echo "this is iced coffee";
            }
            else if (array_key_exists('pastry', $_POST)){
                echo "this is pastry";
            }
        ?>

    </div>

  </div>

  <?php
    include 'include/footer.html';
  ?>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
