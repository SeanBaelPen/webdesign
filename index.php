<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
<link rel="icon" href="Pictures/logo.png">  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Louis</title>
</head>

<body>
  <!--Start of Nav Bar-->
  <?php
  include 'include/navbar_default.html';
    ?>
  <!--End of Nav Bar-->

  <section>
    <!--Start of First Carousel-->
    <div class="container-fluid p-0 m-0">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators carouselStyle">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active mr-5"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1" class="mr-5"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2">text</li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 " src="CarouselPhoto/1.png"  alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="CarouselPhoto/2.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="CarouselPhoto/3.png" alt="Third slide">
          </div>
        </div>
      </div>
    </div>

    
  </section>
  <div class="container-fluid">
    <div class="caption">
    <p>Our Best Sellers</p>
    </div>
    <div class="row justify-content-center">
      <?php
         $con = new mysqli("localhost:3307","root","d14nof4m","louis");
         if($con->connect_error){
             die("Failed To Connect: ".$con->connect_error);
         }
         else{
                            $query = "select * from product where Best_Seller='Yes'";
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
      ?>
    </div>
  </div>

  <section>
    <div class="container-fluid">
      <div class="caption">
        <p>More about Louis</p>
      </div>

      <div class="row">
        <div class="col text-center">
          <p class="titleForInfos">Our story</p>
          <p class="tinyDetails">
            Louis is create by a band of 7 people that got together to serve <br>
            you like a royal and noble in 17th Century France. <br>
            Learn more about our story and history.
          </p>
          <button href="about.php"type="button" class="btn btn-outline-dark btn-lg">Learn More</button>
        </div>

        <div class="col">
          <img id="firstImage" src="https://images.pexels.com/photos/4790059/pexels-photo-4790059.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
        </div>
      </div>

      <div class="row mt-5">
        <div class="col">
          <img id="firstImage" src="Pictures/outdoorshop.jpg" alt="">
        </div>

        <div class="col text-center">
          <p class="titleForInfos">Locations</p>
          <p class="tinyDetails">
            Want to sip coffee like royalty and nobility? Come visit us. <br>
            Take a look at our locations and find a branch near you.
          </p>
          <button type="button" class="btn btn-outline-dark btn-lg justify-content-center">Branch Locations</button>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col text-center">
          <p class="titleForInfos">Membership Application</p>
          <p class="tinyDetails">
            Earn a status of Royalty or Nobility by applying for a membership. <br>
            Get exclusive deals and products when you <br>
            apply for a membership.
          </p>
          <button type="button" class="btn btn-outline-dark btn-lg">Apply Now</button>
        </div>

        <div class="col">
          <img id="firstImage" src="https://images.pexels.com/photos/4790059/pexels-photo-4790059.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
        </div>
      </div>
    </div>
  </section>
    <footer>
  <?php
    include 'include\footer.html';
  ?>
</div>
</footer>
  <script src="script.js" charset="utf-8"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
  
</html>
