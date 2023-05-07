<!DOCTYPE html>
<html lang="en">

<head>

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
                        <a href="{{url('')}}" class="logo">
                            <img src="assets/images/logo.png" alt="">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="{{url('')}}">Ana Sayfa</a></li>
                            <li><a href="{{url('/orders')}}">Siparişlerim</a></li>

                        </ul>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="discover-items">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-heading">
                        <div class="line-dec"></div>
                        <h2>Satış <em>Ekranı</em>.</h2>
                    </div>
                </div>
                <div class="col-lg-7">
                    <form id="search-form" name="gs" method="submit" role="search" action="#">
                        <div class="row">
                            <div class="col-lg-4">
                            </div>
                            <div class="col-lg-3">
                            </div>
                            <div class="col-lg-3">
                            </div>
                            <div class="col-lg-2">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="">
                    <div class="item">
                        <div class="row">
                            <div class="col-75">
                                <div class="container m-3">
                                    <form action="">
                                        <div class="row">
                                            <div class="col-50 text-white">
                                                <h3>Adres</h3>
                                                <label for="fname"><i class="fa fa-user"></i>İsim Soyisim</label>
                                                <input type="text" id="fname" name="firstname" placeholder="Arif Işık">
                                                <label for="email"><i class="fa fa-envelope"></i> Mail</label>
                                                <input type="text" id="email" name="email" placeholder="arif@example.com">
                                                <label for="adr"><i class="fa fa-address-card-o"></i> Adres</label>
                                                <input type="text" id="adr" name="address" placeholder="İstanbul">
                                                <label for="city"><i class="fa fa-institution"></i> Şehir</label>
                                                <input type="text" id="city" name="city" placeholder="Mecidiyeköy">

                                                <div class="row">
                                                    <div class="col-50">
                                                        <label for="state">State</label>
                                                        <input type="text" id="state" name="state" placeholder="İst">
                                                    </div>
                                                    <div class="col-50">
                                                        <label for="zip">Zip</label>
                                                        <input type="text" id="zip" name="zip" placeholder="34000">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-50 text-white">
                                                <h3>Kart Ödemesi</h3>
                                                <label for="cname">Kart İsmi</label>
                                                <input type="text" id="cname" name="cardname" placeholder="Arif Işık">
                                                <label for="ccnum">Kart Numarası</label>
                                                <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                                                <label for="expmonth">Kart Bitiş Ayı</label>
                                                <input type="text" id="expmonth" name="expmonth" placeholder="Eylül">

                                                <div class="row">
                                                    <div class="col-50">
                                                        <label for="expyear">Kart Bitiş Yılı</label>
                                                        <input type="text" id="expyear" name="expyear" placeholder="2018">
                                                    </div>
                                                    <div class="col-50">
                                                        <label for="cvv">CVV</label>
                                                        <input type="text" id="cvv" name="cvv" placeholder="352">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <label class="text-white">
                                            <input class="text-white" type="checkbox" checked="checked" name="sameadr"> Fatura aynı adrese gitsin.
                                        </label>
                                    </form>
                                </div>
                            </div>

                            <div class="col-25">
                                <div class="container" style="border: 1px solid lightgrey;border-radius: 3px">
                                    <form action="{{url('confirmorder')}}" method="get">
                                        <h4>Cart
                                            <span class="price" style="color:white">
                                            <input type="text" name="quantity[]" value="{{$count}}" hidden>
                                                <b>{{$count}}</b>
                                            </span>
                                        </h4>
                                        @foreach($cart as $item)
                                        <p>{{$item->product_title}} <input class="text-white" type="text" name="productname[]" value="{{$item->product_title}}" hidden><span class="price">${{$item->price}} <input type="text" name="price[]" value="{{$item->price}}" hidden></span></p>
                                        <input class="text-white" type="text" name="quantity[]" value="{{$item->quantity}}" hidden>
                                        <hr>
                                        @endforeach
                                        <p>Toplam <span class="price" style="color:white"><b>${{$total}}</b></span></p>
                                        <button type="submit" value="Öde" class="btn">Öde</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright © 2022 Arif Hali & Kilim Co., Ltd. All rights reserved.
                            &nbsp;&nbsp;
                            Designed by <a title="HTML CSS Templates" rel="sponsored" href="https://github.com/ofaruksevinc" target="_blank">faruksevinc</a></p>
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

<style>
    .row {
        display: -ms-flexbox;
        /* IE10 */
        display: flex;
        -ms-flex-wrap: wrap;
        /* IE10 */
        flex-wrap: wrap;
        margin: 0 -16px;
    }

    .col-25 {
        -ms-flex: 25%;
        /* IE10 */
        flex: 25%;
    }

    .col-50 {
        -ms-flex: 50%;
        /* IE10 */
        flex: 50%;
    }

    .col-75 {
        -ms-flex: 75%;
        /* IE10 */
        flex: 75%;
    }

    .col-25,
    .col-50,
    .col-75 {
        padding: 0 16px;
    }


    input[type=text] {
        width: 100%;
        margin-bottom: 20px;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    label {
        margin-bottom: 10px;
        display: block;
    }

    .icon-container {
        margin-bottom: 20px;
        padding: 7px 0;
        font-size: 24px;
    }

    .btn {
        background-color: #04AA6D;
        color: white;
        padding: 12px;
        margin: 10px 0;
        border: none;
        width: 100%;
        border-radius: 3px;
        cursor: pointer;
        font-size: 17px;
    }

    .btn:hover {
        background-color: #45a049;
    }

    span.price {
        float: right;
        color: grey;
    }

    /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
    @media (max-width: 800px) {
        .row {
            flex-direction: column-reverse;
        }

        .col-25 {
            margin-bottom: 20px;
        }
    }
</style>