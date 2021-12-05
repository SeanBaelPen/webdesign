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
    <!--End of First Carousel-->
  </section>
  <!--
  <section>
    <div class="caption">
      <p>Our Products</p>
    </div>

  
    <div class="container p-0">
      <table class="mx-auto">
        <tr>
          <td onclick="coffeeTab()">
            <span>Coffee</span>
          </td>
          <td onclick="bakedGoodsTab()">
            <span>Baked Goods</span>
          </td>
          <td>
            <span>Coffee Grounds</span>
          </td>
          <td>
            <span>Equipment</span>
          </td>
        </tr>
      </table>
    </div>

    
    <div class="container-fluid p-0 mt-5" id="coffeeTab">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid m-0">
              <div class="row justify-content-center">
                <div class="col-md-3">
                  <div class="card" style="width: 22rem;">
                    <img class="card-img-top" src="products/Hot Coffee/HotButterballPumpkinSpiceLatte.jpg" alt="First slide">
                    <hr class="mt-5">
                    <div class="card-body">
                      <h5 class="card-title">Hot Butterball Pumpkin Spice Latte</h5>
                      <p class="card-text" style="display: inline-block">₱000.00</p>
                      <a href="#" class="btn btn-primary ml-5">Order Now</a>
                    </div>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="card" style="width: 22rem;">
                    <img class="card-img-top" src="products/Hot Coffee/HotButterballPumpkinSpiceLatte.jpg" alt="First slide">
                    <hr class="mt-5">
                    <div class="card-body">
                      <h5 class="card-title">Hot Butterball Pumpkin Spice Latte</h5>
                      <p class="card-text" style="display: inline-block">₱000.00</p>
                      <a href="#" class="btn btn-primary ml-5">Order Now</a>
                    </div>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="card" style="width: 22rem;">
                    <img class="card-img-top" src="products/Hot Coffee/HotButterballPumpkinSpiceLatte.jpg" alt="Second slide">
                    <hr class="mt-5">
                    <div class="card-body">
                      <h5 class="card-title">Hot Butterball Pumpkin Spice Latte</h5>
                      <p class="card-text" style="display: inline-block">₱000.00</p>
                      <a href="#" class="btn btn-primary ml-5">Order Now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="carousel-item">
            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-md-3">
                  <div class="card" style="width: 22rem;">
                    <img class="card-img-top" src="products/Hot Coffee/HotButterballPumpkinSpiceLatte.jpg" alt="First slide">
                    <hr class="mt-5">
                    <div class="card-body">
                      <h5 class="card-title">Hot Butterball Pumpkin Spice Latte</h5>
                      <p class="card-text" style="display: inline-block">₱000.00</p>
                      <a href="#" class="btn btn-primary ml-5">Order Now</a>
                    </div>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="card" style="width: 22rem;">
                    <img class="card-img-top" src="products/Hot Coffee/HotButterballPumpkinSpiceLatte.jpg" alt="First slide">
                    <hr class="mt-5">
                    <div class="card-body">
                      <h5 class="card-title">Hot Butterball Pumpkin Spice Latte</h5>
                      <p class="card-text" style="display: inline-block">₱010.00</p>
                      <a href="#" class="btn btn-primary ml-5">Order Now</a>
                    </div>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="card" style="width: 22rem;">
                    <img class="card-img-top" src="products/Hot Coffee/HotButterballPumpkinSpiceLatte.jpg" alt="Second slide">
                    <hr class="mt-5">
                    <div class="card-body">
                      <h5 class="card-title">Hot Butterball Pumpkin Spice Latte</h5>
                      <p class="card-text" style="display: inline-block">₱000.00</p>
                      <a href="#" class="btn btn-primary ml-5">Order Now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon font-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon font-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <div class="container-fluid p-0 mt-5" id="bakedGoods" style="opacity: 0;">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid m-0">
              <div class="row justify-content-center">
                <div class="col-md-3">
                  <div class="card" style="width: 22rem;">
                    <img class="card-img-top" src="products/Baked Goods/BananaCupcake.jpg" alt="First slide">
                    <hr class="mt-5">
                    <div class="card-body">
                      <h5 class="card-title">Hot Butterball Pumpkin Spice Latte</h5>
                      <p class="card-text" style="display: inline-block">₱000.00</p>
                      <a href="#" class="btn btn-primary ml-5">Order Now</a>
                    </div>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="card" style="width: 22rem;">
                    <img class="card-img-top" src="products/Baked Goods/BananaCupcake.jpg" alt="First slide">
                    <hr class="mt-5">
                    <div class="card-body">
                      <h5 class="card-title">Hot Butterball Pumpkin Spice Latte</h5>
                      <p class="card-text" style="display: inline-block">₱000.00</p>
                      <a href="#" class="btn btn-primary ml-5">Order Now</a>
                    </div>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="card" style="width: 22rem;">
                    <img class="card-img-top" src="products/Baked Goods/BananaCupcake.jpg" alt="Second slide">
                    <hr class="mt-5">
                    <div class="card-body">
                      <h5 class="card-title">Hot Butterball Pumpkin Spice Latte</h5>
                      <p class="card-text" style="display: inline-block">₱000.00</p>
                      <a href="#" class="btn btn-primary ml-5">Order Now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-md-3">
                  <div class="card" style="width: 22rem;">
                    <img class="card-img-top" src="products/Baked Goods/BananaCupcake.jpg" alt="First slide">
                    <hr class="mt-5">
                    <div class="card-body">
                      <h5 class="card-title">Hot Butterball Pumpkin Spice Latte</h5>
                      <p class="card-text" style="display: inline-block">₱000.00</p>
                      <a href="#" class="btn btn-primary ml-5">Order Now</a>
                    </div>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="card" style="width: 22rem;">
                    <img class="card-img-top" src="products/Baked Goods/BananaCupcake.jpg" alt="First slide">
                    <hr class="mt-5">
                    <div class="card-body">
                      <h5 class="card-title">Hot Butterball Pumpkin Spice Latte</h5>
                      <p class="card-text" style="display: inline-block">₱000.00</p>
                      <a href="#" class="btn btn-primary ml-5">Order Now</a>
                    </div>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="card" style="width: 22rem;">
                    <img class="card-img-top" src="products/Baked Goods/BananaCupcake.jpg" alt="Second slide">
                    <hr class="mt-5">
                    <div class="card-body">
                      <h5 class="card-title">Hot Butterball Pumpkin Spice Latte</h5>
                      <p class="card-text" style="display: inline-block">₱000.00</p>
                      <a href="#" class="btn btn-primary ml-5">Order Now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon font-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon font-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>-->


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
          <button type="button" class="btn btn-outline-dark btn-lg">Learn More</button>
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
