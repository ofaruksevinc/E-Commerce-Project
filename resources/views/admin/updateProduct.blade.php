<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="admin/img/svg/logo.svg" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="admin/css/style.min.css">
</head>

<body>
  <div class="layer"></div>
<!-- ! Body -->
<div class="page-flex">
  <!-- ! Sidebar -->
  <aside class="sidebar">
    <div class="sidebar-start">
        <div class="sidebar-head">
            <a href="/" class="logo-wrapper" title="Home">
                <span class="sr-only">Home</span>
                <span class="icon logo" aria-hidden="true"></span>
                <div class="logo-text">
                    <span class="logo-title">Arif Halı & Kilim</span>
                    <span class="logo-subtitle">Ürün Düzenleme Sayfası</span>
                </div>
            </a>
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle" aria-hidden="true"></span>
            </button>
        </div>
        @include('admin.sidebar')
    </div>
</aside>
  <div class="main-wrapper">
    <!-- ! Main nav -->
    @include('admin.mainNav')
    <!-- ! Main -->
 
    <title>Ürün Düzenleme Sayfası</title>
    <style>
        body {
            font-family: Arial, sans-serif !important;
            margin: 0 !important;
            padding: 0 !important;
        }

        .container {
            max-width: 1200px !important;
            margin: 0 auto !important;
            padding: 20px !important;
        }

        .main-title {
            text-align: center !important;
        }

        form {
            margin-top: 20px !important;
            background-color: #f5f5f5 !important;
            padding: 20px !important;
            border-radius: 5px !important;
        }

        label {
            display: block !important;
            margin-bottom: 5px !important;
            font-weight: bold !important;
        }

        input[type="text"],
        input[type="number"],
        textarea {
            width: 100% !important;
            padding: 8px !important;
            border-radius: 3px !important;
            border: 1px solid #ccc !important;
        }

        textarea {
            resize: vertical !important;
        }

        input[type="submit"] {
            background-color: #4CAF50 !important;
            color: white !important;
            padding: 10px 20px !important;
            border: none !important;
            border-radius: 3px !important;
            cursor: pointer !important;
        }

        input[type="submit"]:hover {
            background-color: #45a049 !important;
        }

        @media screen and (min-width: 768px) {
            .row::after {
                content: "" !important;
                display: table !important;
                clear: both !important;
            }

            .col-md-6 {
                width: 50% !important;
                float: left !important;
            }
        }
    </style>

<body>
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{session()->get('message')}}
            </div>
            @endif
            <h2 class="main-title">Dashboard</h2>
            <div class="">
                <div class="">
                    <h1>Ürün Bilgileri</h1>
                    <form action="{{url('addproduct')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="product-title">Ürün Başlığı:</label>
                        <input type="text" id="product-title" name="title" required><br><br>

                        <label for="price">Fiyatı:</label>
                        <input type="number" id="price" name="price" required><br><br>

                        <label for="description">Açıklama:</label><br>
                        <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>

                        <label for="quantity">Miktar:</label>
                        <input type="number" id="quantity" name="quantity" required><br><br>

                        <label for="oldphoto">Eski Fotoğraf:</label>
                        <img src="/productimage/{{$data->image}}">
                        
                        <label for="photo">Yeni Fotoğraf:</label>
                        <input type="file" id="photo" name="image" accept="image/*" required><br><br>

                        <input type="submit" value="Gönder">
                    </form>
                </div>
            </div>
        </div>
    </main>    
</body>    

    <!-- ! Footer -->
 @include('admin.footer')
  </div>
</div>
<!-- Chart library -->
<script src="admin/plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="admin/plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="admin/js/script.js"></script>
</body>

</html>