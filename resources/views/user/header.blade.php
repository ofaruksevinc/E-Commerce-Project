<header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a style="margin: 17px !IMPORTANT;" href="{{url('')}}" class="logo">
                            <img src="assets/images/logo.png" alt="">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="{{url('/')}}" class="active">Ana Sayfa</a></li>
                            <li><a href="{{url('/allproduct')}}">Ürünler</a></li>
                            <li> @if (Route::has('login'))
                                    @auth
                                    <li class="nav-item"><a href="{{url('orders')}}">Siparişlerim</a></li>
                            <li class="nav-item"><a href="{{url('showcart')}}"><i class="fas fa-shopping-cart "></i> Sepet[{{$count}}]</a></li>
                                    <x-app-layout>

                                    </x-app-layout>
                            @else
                            <li>
                                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                            </li>
                            @if (Route::has('register'))
                            <li>
                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            </li>
                            @endif
                            @endauth
                </div>
                @endif
                </li>
                </ul>
                <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
        </div>
    </header>