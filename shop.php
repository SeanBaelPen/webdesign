<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
<link rel="icon" href="Pictures/logo.png">  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Louis-Shop</title>
  <?php
    include 'include/navbar_default.html';
  ?>
</head>

<body>
<div class="container-fluid"> <img src="Pictures\Header_Image\Shops_CC9200BG.jpg" style="width: 100%"></div>
<div class="container-fluid d-flex ">
    
    <div class="col-sm-3">
        <ul class="prod_specs" >
            <form method="post">
            <li>
            <button  type= "submit" name ="all" >All</button>
            </li>
            <li>
            <button type= "submit" name ="Equipments">Equipments</button>
            </li>
            <li>
            <button type= "submit" name ="Tees">Tees</button>
            </li>
            <li>
            <button type= "submit" name ="Cups">Cups</button>
            </li>
            <li>
            <button type= "submit" name ="Others">Others</button>
            </li>
            </form>
        </ul>
   
    </div>
    <div class="col-sm-9 bg-light products">
        <?php
            $con = new mysqli("localhost:3307","root","d14nof4m","louis");
            if($con->connect_error){
                die("Failed To Connect: ".$con->connect_error);
            }
            else{
              
                if(array_key_exists('all', $_POST)){
                    $query = "select * from product where Product_Desc ='Merchandise'";
                    $result = $con->query($query);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                        $img=$row["Image_Url"];
                        $price=$row["Product_Price"];
                        $name=$row["Product_Name"];
                        $id=$row["Product_Id"];
                        $desc=$row["Product_Desc"];
                        $type=$row["Product_Type"];
                        
                        include 'include/items.html';
                        }
                    }
                }
                else if (array_key_exists('Equipments', $_POST)){
                    $query = "select * from product where Product_Type='Equipment'";
                    $result = $con->query($query);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                        $img=$row["Image_Url"];
                        $price=$row["Product_Price"];
                        $name=$row["Product_Name"];
                        $id=$row["Product_Id"];
                        $desc=$row["Product_Desc"];
                        $type=$row["Product_Type"];
                        
                        include 'include/items.html';
                        }
                    }
                }
                else if (array_key_exists('Tees', $_POST)){
                    $query = "select * from product where Product_Type='Tee'";
                    $result = $con->query($query);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                        $id=$row["Product_Id"];
                        $img=$row["Image_Url"];
                        $price=$row["Product_Price"];
                        $name=$row["Product_Name"];
                        $desc=$row["Product_Desc"];
                        $type=$row["Product_Type"];
                        
                        include 'include/items.html';
                        }
                    }
                }
                else if (array_key_exists('Cups', $_POST)){
                    $query = "select * from product where Product_Type='Cups'";
                    $result = $con->query($query);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                        $id=$row["Product_Id"];
                        $img=$row["Image_Url"];
                        $price=$row["Product_Price"];
                        $name=$row["Product_Name"];
                        $desc=$row["Product_Desc"];
                        $type=$row["Product_Type"];
                        
                        include 'include/items.html';
                        
                        }
                    }
                }
                else if (array_key_exists('Others', $_POST)){
                    $query = "select * from product where Product_Type='Membership Card' OR Product_Type='Gift Card'";
                    $result = $con->query($query);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                        $id=$row["Product_Id"];
                        $img=$row["Image_Url"];
                        $price=$row["Product_Price"];
                        $name=$row["Product_Name"];
                        $desc=$row["Product_Desc"];
                        $type=$row["Product_Type"];
                        
                        
                        include 'include/items.html';
                        }
                    }
                }
            }
            
        
        ?>
        
    </div>
</div>
<style>
     ul{
        list-style: none;
    }
    li button{
        position:sticky;
        width:100%;
        height:25%;
        padding: 20px;
        margin:10px;
        border:none;
        background-color:transparent;
        box-shadow:20px 10px 10px grey;
        
        font-size:17pt;
    }
    li button:hover{
        color:red;
    }
    .products{
        background-color:transparent;
        box-shadow:20px 10px 10px grey;
    }
</style>
 
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
<footer>
<?php
    include 'include/footer.html';
  ?>
</footer>

</html>
