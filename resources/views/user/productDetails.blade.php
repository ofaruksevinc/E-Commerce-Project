<!DOCTYPE html>
<html lang="en">

<head>
  <base href="/public">
  <meta charset="utf-8">
  <meta name="author" content="templatemo">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

  <title>Arif&Hali Kilim, Travel</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-liberty-market.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <!--

TemplateMo 577 Liberty Market

https://templatemo.com/tm-577-liberty-market

-->
</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="{{url('/')}}" class="logo">
              <img src="assets/images/logo.png" alt="">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="#">Home</a></li>
              <li><a href="#">Tüm Ürünler</a></li>
              <li class="nav-item"><a href="{{url('showcart')}}"><i class="fas fa-shopping-cart "></i> Sepet[{{$count}}]</a></li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
  <div class="item-details-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2>Ürünlerin <em>Tüm Detayları</em> Burada.</h2>
          </div>
        </div>

        <div class="col-lg-7">
          <div class="left-image">
            <img src="/productimage/{{$product->image}}" alt="" style="border-radius: 20px;">
          </div>
        </div>
        <div class="col-lg-5 align-self-center p-2">
          <h3>Ürün Adı:</h3>
          <h4>{{$product->title}}</h4>
          <span class="author">
            <img src="assets/images/author-02.jpg" alt="" style="max-width: 50px; border-radius: 50%;">
            <h6>Arif Işık<br><a href="#">@arifisik</a></h6>
          </span>
          <h3>Açıklama:</h3>
          <p>{{$product->description}}</p>
          <h3>Fiyat:</h3>
          <p>{{$product->price}} TL</p>
          <form action="{{url('addcart',$product->id)}}" method="post">
            @csrf
            <input type="number" value="1" min="1" class="form-control" name="quantity" style="width:42%; border:1pt solid #4443435d">
            <br>
            <input class="btn" style="background-color: #ed563b!important; color:white; width:42%;" type="submit" value="Sepete Ekle">
          </form>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2022 Arif & Hali, Kilim Co., Ltd. All rights reserved.
            &nbsp;&nbsp;
            Designed by <a title="" rel="sponsored" href="https://github.com/ofaruksevinc" target="_blank">ofaruksevinc</a></p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>

  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>
</body>

</html>