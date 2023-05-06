<!DOCTYPE html>
<html>

<head>
    <title>Ürün Sayfası</title>
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
</head>

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

                        <label for="photo">Fotoğraf:</label>
                        <input type="file" id="photo" name="image" accept="image/*" required><br><br>

                        <input type="submit" value="Gönder">
                    </form>
                </div>
            </div>
        </div>
    </main>    
</body>    