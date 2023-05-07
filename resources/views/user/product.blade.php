<div class="currently-market">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <div class="line-dec"></div>
                    <h2><em>Satışta</em> Olan Ürünler.</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row grid">
                    @foreach($data as $product)
                    <div class="col-lg-6 currently-market-item all msc">
                        <div class="item">
                            <div class="left-image">
                                <img src="/productimage/{{$product->image}}" alt="" style="border-radius: 20px; min-width: 195px;">
                            </div>
                            <div class="text-center m-1">
                                <h4>{{$product->title}}</h4>
                                <span class="author m-1">
                                    <img src="assets/images/author.jpg" alt="" style="max-width: 50px; border-radius: 50%;">
                                    <h6>Arif Işık<br><a href="#">@arifisik</a></h6>
                                </span>
                                <div class="line-dec"></div>
                                <div class="m-3">
                                    <h6>
                                        Fiyatı: {{$product->price}} TL
                                    </h6>
                                    <form action="{{url('addcart',$product->id)}}" method="post">
                                        @csrf
                                        <br>
                                        <input type="number" value="1" min="1" class="m-2" name="quantity" style="width:42%; border:1pt solid #4443435d">
                                        <br>
                                        <input class="btn btn-primary" type="submit" value="Sepete Ekle">
                                        <a href="{{url('productdetail',$product->id)}}" class="btn btn-success">Detay</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="main-button text-center">
                    <a href="{{url('allproduct')}}">Tüm Ürünler</a>
                </div>
            </div>
        </div>
    </div>
</div>