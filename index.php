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
            <img class="d-block w-100 " src="https://images.pexels.com/photos/302899/pexels-photo-302899.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style ="width:auto; height:250px" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://images.pexels.com/photos/324028/pexels-photo-324028.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"  style ="width:auto; height:250px"alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://images.pexels.com/photos/683039/pexels-photo-683039.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style ="width:auto; height:250px"alt="Third slide">
          </div>
        </div>
      </div>
    </div>
    <!--End of First Carousel-->
  </section>

  <section>
    <div class="caption">
      <p>Our Products</p>
    </div>

    <!--Table Links for the Product Carousel-->
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
    <!--Table Links for the Product Carousel-->

    <!--Start of Product Carousel-->
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
    <!--End of Product Carousel-->
  </section>
  <?php
    include 'include\modal.html';
  ?>

  <section>
    <div class="container-fluid">
      <div class="caption">
        <p>Lorem Ipsum</p>
      </div>

      <div class="row">
        <div class="col">
          <p class="titleForInfos">Our story</p>
          <p class="tinyDetails">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>
            Quisque ligula tortor, aliquam a euismod vitae, lacinia eu <br>
            purus. Suspendisse a
          </p>
          <button type="button" class="btn btn-outline-dark btn-lg">Learn More</button>
        </div>

        <div class="col">
          <img id="firstImage" src="https://images.pexels.com/photos/4790059/pexels-photo-4790059.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
        </div>
      </div>

      <div class="row mt-5">
        <div class="col">
          <img id="firstImage" src="outdoorshop.jpg" alt="">
        </div>

        <div class="col">
          <p class="titleForInfos">Our story</p>
          <p class="tinyDetails">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>
            Quisque ligula tortor, aliquam a euismod vitae, lacinia eu <br>
            purus. Suspendisse a
          </p>
          <button type="button" class="btn btn-outline-dark btn-lg text-center">Learn More</button>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col">
          <p class="titleForInfos">Our story</p>
          <p class="tinyDetails">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>
            Quisque ligula tortor, aliquam a euismod vitae, lacinia eu <br>
            purus. Suspendisse a
          </p>
          <button type="button" class="btn btn-outline-dark btn-lg">Learn More</button>
        </div>

        <div class="col">
          <img id="firstImage" src="https://images.pexels.com/photos/4790059/pexels-photo-4790059.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
        </div>
      </div>
    </div>
  </section>

  <div class="footer">
    <div class="container-fluid">
      <div class="socialMedia">
        <img src="https://cdn3.iconfinder.com/data/icons/capsocial-round/500/facebook-512.png" alt="">
        <img src="https://cdn.icon-icons.com/icons2/1109/PNG/512/1486053611-twitter_79195.png" alt="">
        <img src="https://cdn3.iconfinder.com/data/icons/popular-services-brands/512/instagram-512.png" alt="">
      </div>
    </div>

    <div class="container-fluid m-0 p-0">
      <div class="footerFlex">
        <div class="box-1">
          <img src="pictures/logo.png" alt="logo.png" height="100px" class="footerLogo">
        </div>
        <div class="box-2">
          <span>About</span>
          <div class="aboutInfos">
            <span>FAQ</span>
            <span>Locations</span>
            <span>Our Story</span>
            <span>Join Us</span>
          </div>
        </div>
        <div class="box-3">
          <span>Shop Online</span>
          <div class="shopInfos">
            <span>Menu</span>
            <span>Equpiment</span>
          </div>
        </div>
        <div class="box-4">
          <span>Contacts</span>
          <div class="contactsInfo">
            <span>info@louis.com.ph</span>
            <span>801-####</span>
          </div>
        </div>
      </div>

      <div class="newsletter">
        <p>Subscribe to our newsletter</p>
        <input type="text" placeholder="Enter Email" name="email" required>
      </div>
    </div>
  </div>
  </div>

  <script src="script.js" charset="utf-8"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
