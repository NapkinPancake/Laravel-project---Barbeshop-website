@extends('layouts/app')

@section('content')
<body class="pages-store-body">
        <main class="custom-container clearfix">
            <div class="nav-block">
                <h2 class='page-name'>Shampoo</h2>
                <ul class='nav-line'>
                    <li>
                        <a href="/">Main</a>
                    </li>
                    <li>
                        <span>Store</span>
                    </li>
                </ul>
            </div>
            <div class="store-content clearfix">
                <div class="store-left-panel clearfix">
                    <div class="filter">
                        <h2>Company</h2>
                        <label for="filter-elem-1">Baxter of California</label>
                        <input type="checkbox" name="filter-elem-1">
                        <span class="checkbox-indicator"></span>
                        <br>
                        <label for="filter-elem-1">Mr Natty</label>
                        <input type="checkbox" name="filter-elem-2">
                        <span class="checkbox-indicator"> </span>
                        <br>
                        <label for="filter-elem-1">Suavetto</label>
                        <input type="checkbox" name="filter-elem-3">
                        <span class="checkbox-indicator"> </span>
                        <br>
                        <label for="filter-elem-1">Malin Goletz</label>
                        <input type="checkbox" name="filter-elem-4">
                        <span class="checkbox-indicator"> </span>
                        <br>
                        <label for="filter-elem-1">Murraw</label>
                        <input type="checkbox" name="filter-elem-5">
                        <span class="checkbox-indicator"> </span>
                        <br>
                        <label for="filter-elem-1">American Crew</label>
                        <input type="checkbox" name="filter-elem-6">
                        <span class="checkbox-indicator"> </span>
                        <br>
                    </div>
                    <div class="groups">
                        <h2>Groups</h2>
                        <button class="custom-btn groups-button ">Show</button>
                    </div>
                </div>
    
                <div class="products-list clearfix">
                    @foreach ($products as $product)
                    <div class="products-list-elem">
                        <a href="store/{{$product->id}}">
                            <img src="/storage/product_images/{{$product->product_major_img}}" alt="">
                            <br>
                            <b>{{$product->product_name}}</b>
                            <br>
                        </a>
                            <button class='custom-btn btn-price' disabled>{{$product->product_price}} $</button>
                            @if($product->product_qnt > 0)
                            <button class='custom-btn btn-buy'>Buy</button>
                            @else
                            <button class='custom-btn btn-buy disabled-btn' disabled>Sold out</button>
                            @endif
                        </div>
                    @endforeach

                                         {{-- GROUP OF TEST ITEMS --}}
                    <br>
                    <h1 class='text-center'><b>Test Items<b></h1>
                     <div class="products-list-elem test-item">
                        <a href="/test-item">
                        <img src="{{asset('assets/img/Store/product 1.jpg')}}" alt="">
                        <br>
                        <b>Complect "BAXTER OF CALIFORNIA"</b>
                        <br>
                        </a>
                        <button class='custom-btn btn-price' disabled>24 $</button>
                        <button class='custom-btn btn-buy '>Buy</button>
                    </div>
                    <div class="products-list-elem test-item">
                        <a href="/test-item">
                        <img src="{{asset('assets/img/Store/product 2.jpg')}}" alt="">
                        <br>
                        <b>This Item is "MARVELOUS"</b>
                        <br>
                        </a>
                        <button class='custom-btn btn-price' disabled>12 $</button>
                        <button class='custom-btn btn-buy '>Buy</button>
                    </div>
                    <div class="products-list-elem test-item">
                            <a href="/test-item">
                        <img src="{{asset('assets/img/Store/product 3.jpg')}}" alt="">       
                        <br>
                        <b>This one is "EVEN BETTER"</b>
                        <br>
                        </a>
                        <button class='custom-btn btn-price' disabled>15 $</button>
                        <button class='custom-btn btn-buy '>Buy</button>
                    </div>
                    <div class="products-list-elem test-item">
                            <a href="/test-item">
                        <img src="{{asset('assets/img/Store/product 4.jpg')}}" alt="">
                        <br>
                        <b>Even don't say about "THIS ONE"</b>
                        <br>
                        </a>
                        <button class='custom-btn btn-price' disabled>9$</button>
                        <button class='custom-btn btn-buy '>Buy</button>
                    </div>
                    <div class="products-list-elem test-item">
                            <a href="/test-item">
                        <img src="{{asset('assets/img/Store/product 5.jpg')}}" alt="">
                        <br>
                        <b>And also about "THIS"</b>
                        <br>
                        </a>
                        <button class='custom-btn btn-price' disabled>7$</button>
                        <button class='custom-btn btn-buy '>Buy</button>
                    </div>
                    <div class="products-list-elem test-item">
                        <a href="/test-item">
                        <img src="{{asset('assets/img/Store/product 6.jpg')}}" alt="">
                        <br>
                        <b>Okay, maybe I lied a little bit, but this one "REALY WORTH IT"</b>
                        <br>
                        </a>
                        <button class='custom-btn btn-price' disabled>14 $</button>
                        <button class='custom-btn btn-buy '>Buy</button> 
                    </div>
                </div>
            </div>
            </div>
            <div class="store-pages-list">
                {{-- <ul>
                    <li>
                        <a href="#" class="custom-btn">1</a>
                    </li>
                    <li>
                        <a href="#" class="custom-btn active">2</a>
                    </li>
                    <li>
                        <a href="#" class="custom-btn">3</a>
                    </li>
                    <li>
                        <a href="#" class="custom-btn">4</a>
                    </li>
                    <li>
                        <a href="#" class="custom-btn">5</a>
                    </li>
                </ul> --}}
            </div>
        </main>
    </body>

@endsection