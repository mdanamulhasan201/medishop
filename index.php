<?php
include "includes/head.php"
  ?>
<style>
  .cad1 {
    width: 200px;
    height: 300px;
    border: 2px solid DarkSlateGray;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s;

    /* Add a smooth transition for the box-shadow */
  }

  .TileBanner {
    font-size: 70px;

  }

  .titleSm {
    font-size: 40px;
    font-weight: bold;
  }

  .cad1:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    background-color: beige;

  }

  .cad11:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);


  }

  .pres {
    margin-left: 500px;
  }
</style>

<body>

  <?php

  include "includes/header.php";
  ?>

  <!-- carousel -->
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <!-- 1 -->
      <div class="carousel-item active" style="position: relative; text-align: center;">
        <img src="https://i.ibb.co/yBjKdNK/slideshow2-h3.jpg" class="d-block w-100" style="height: 570px;">

        <div
          style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: left; color: #fff;">
          <h3 class='titleSm' style="text-transform: uppercase;">health supplements</h3>
          <p class='TileBanner'> For a better <span class='TileBanner font-weight-bold'>healthier</span>
            lifestyle</p>
          <button class="btn btn-primary px-4 py-2">Explore now</button>
        </div>
      </div>

      <!-- 2 -->
      <div class="carousel-item" style="position: relative; text-align: center;">
        <img src="https://i.ibb.co/D4BCkVs/slideshow2-h2.jpg" class="d-block w-100" style="height: 570px;">

        <div
          style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: left; color: #fff;">
          <h3 class='TileBanner'>Precise and dependable Pharmacist with</h3>
          <p class='titleSm'>15 years of experience</p>
          <button class="btn btn-primary px-4 py-2">Explore now</button>
        </div>
      </div>
      <!-- 3 -->
      <div class="carousel-item" style="position: relative;">
        <img src="https://i.ibb.co/m9mWJf5/slideshow1-h3.jpg" class="d-block w-100" style="height: 570px;">

        <div
          style="position: absolute; top: 50%; left: 20%; transform: translate(-10%, -50%); text-align: left; color: #fff;">
          <h3 class='TileBanner'>Restore your health</h3>
          <p class='titleSm'>naturally</p>
          <button class="btn btn-primary px-4 py-2">Explore now</button>
        </div>
      </div>
      <!-- 4 -->
      <div class="carousel-item">
        <img src="images/carousel5.jpg" class="d-block w-100" style="height: 570px;">
      </div>

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!----------------       end of carousel                     --------->


  <div class="container ">

    <!-- categories-->
    <h1 class='text-center my-5'>Products Category</h1>
    <div class="row" id="cards">

      <div class="col-sm-3 cad1" id="cards ">
        <div class="card-body px-2">
          <strong style="background-color: LightSteelBlue; color: white;">&nbsp;UPTO 50% OFF&nbsp;</strong>
          <a href="search.php?cat=medicine">
            <img src="images/midicin.jpg" style="max-width: 100%; max-height: 100%; width: 150.4px; height: 180px;"
              class="d-block" alt="...">
          </a>
          <h5 class="font-weight-bold text-nowrap mt-2" style="color: rgb(104, 97, 97);">Medicine Products
          </h5>
        </div>
      </div>


      <div class="col-sm-3 cad1 ms-5" id="cards ">
        <div class="card-body px-2">
          <strong style="background-color: LightSteelBlue; color: white;">&nbsp;UPTO 35% OFF&nbsp;</strong>
          <a href="search.php?cat=self-care">
            <img src="images/self-care.jpg" style="max-width: 100%; max-height: 100%; width: 150.4px; height: 180px;"
              class="d-block" alt="...">
          </a>
          <h5 class="font-weight-bold text-nowrap mt-2" style="color: rgb(104, 97, 97);">Self care Products
          </h5>
        </div>
      </div>


      <div class="col-sm-3 cad1 ms-5" id="cards ">
        <div class="card-body px-2">
          <strong style="background-color: LightSteelBlue; color: white;">&nbsp;UPTO 70% OFF&nbsp;</strong>
          <a href="search.php?cat=machine">
            <img src="images/machine.png" style="max-width: 100%; max-height: 100%; width: 150.4px; height: 180px;"
              class="d-block" alt="...">
          </a>
          <h5 class="font-weight-bold text-nowrap text-center mt-2" style="color: rgb(104, 97, 97);">Machines
          </h5>
        </div>
      </div>


      <div class="col-sm-3 cad1 ms-5" id="cards ">
        <div class="card-body px-2">
          <!-- <strong style="background-color: LightSteelBlue; color: white;">&nbsp;UPTO 70%  OFF&nbsp;</strong> -->
          <a href="search.php?cat=medicine">
            <img src="images/Medicine.png" style="max-width: 100%; max-height: 100%; width: 150.4px; height: 180px;"
              class="d-block" alt="...">
          </a>
          <h5 class="font-weight-bold text-nowrap text-center mt-2" style="color: rgb(104, 97, 97);">Medicine
          </h5>
        </div>
      </div>

      <div class="col-sm-3 cad1 ms-5" id="cards ">
        <div class="card-body px-2">
          <!-- <strong style="background-color: LightSteelBlue; color: white;">&nbsp;UPTO 70%  OFF&nbsp;</strong> -->
          <a href="search.php?cat=self-care">
            <img src="images/self-care.png" style="max-width: 100%; max-height: 100%; width: 150.4px; height: 180px;"
              class="d-block" alt="...">
          </a>
          <h5 class="font-weight-bold text-nowrap text-center mt-2" style="color: rgb(104, 97, 97);">self care
          </h5>
        </div>
      </div>




    </div>

    <!-- end of categories-->


    <!----------------         products might you like                     --------->

    <h2 class="my-5 text-center">Products </h2>

    <div class="row ">
      <?php
      $data = all_products();
      $num = sizeof($data);
      for ($i = 0; $i < $num; $i++) {

        ?>
      <div class="col-sm-2 cad11" id="cards" style="width: 20.45rem;">
        <div class="card border border-warning">
          <img src="images/<?php echo $data[$i]['item_image'] ?>" class="card-img-top"
            style="width:300px ; height:200px ;">
          <div class="card-body">
            <?php
            if (strlen($data[$i]['item_title']) <= 20) {
              ?>
            <h5 class="card-title">
              <?php echo $data[$i]['item_title'] ?>
            </h5>

            <?php
            } else {
              ?>
            <h5 class="card-title">
              <?php echo substr($data[$i]['item_title'], 0, 20) . "..." ?>
            </h5>
            <?php
            }
            ?>
            <br> <br>
            <strong>
              <h3 style="color :#82E0AA;" class="card-text"> ৳
                <?php echo $data[$i]['item_price'] ?>
              </h3>
            </strong>
            <br>
            <small class="text-muted" style="font-weight: bold;">Brand Name:
              <?php echo $data[$i]['item_brand'] ?>
            </small><br><br>
            <a href="product.php?product_id=<?php echo $data[$i]['item_id'] ?>" class="btn btn-outline-info">More
              details</a>

          </div>
        </div>
      </div>
      <?php
      if ($i == 7) {
        break;
      }
      }
      ?>
    </div>

    <!----------------        end of products might you like                     --------->
    <br>
    <br>
    <br>
    <br>
    <div class="container">
      <div class="row">
        <div class="col-sm-4 text-center">
          <img src="https://assets.pharmeasy.in/web-assets/dist/4d2f7c48.svg" class="img-fluid">
          <h3 class="">1.2MILLION</h3>
          <h5 class="text-muted">Registered Users As Of December 31, 2023</h5>
        </div>

        <div class="col-sm-4 text-center border-bottom rounded-bottom">
          <img src="https://assets.pharmeasy.in/web-assets/dist/92c372bb.svg" class="img-fluid">
          <h3 class="">1.1 MILLION</h3>
          <h5 class="text-muted">Medi Shop Orders</h5>
        </div>

        <div class="col-sm-4 text-center">
          <img src="https://assets.pharmeasy.in/web-assets/dist/773ae9c5.svg" class="img-fluid">
          <h3 class="font-weight-bold">50k+</h3>
          <h5 class="text-muted">SKUs Sold in Q1FY21</h5>
        </div>
      </div>
    </div>

    <h1 class="border border-2" style="width: 100%;"> </h1>
  </div>
  <!-- FOOTER -->
  <?php
  include "includes/footer.php"
    ?>
</body>

</html>