@extends('layouts/app')

@section('content')
<body class="show-product-page">
        <main class='custom-container clearfix'>
            <div class="nav-block clearfix">
                <h2 class='page-name'>{{$product->product_name}}</h2>
                <ul class='nav-line'>
                    <li>
                        <a href="/">Main</a>
                    </li>
                    <li>
                        <a href="/store">Store</a>
                    </li>
                    <li>
                        <span>{{$product->product_name}}</span>
                    </li>
                </ul>
            </div>
            <div class="product-page-content-left">
                <img src="/storage/product_images/{{$product->product_major_img}}" alt="">
                <img src="/storage/product_images/{{$product->product_minor_img_1}}" alt="">
                <img src="/storage/product_images/{{$product->product_minor_img_2}}" alt="">
                <img src="/storage/product_images/{{$product->product_minor_img_3}}" alt="">
            </div>
            <div class="product-page-content-right">
                @if($product->product_qnt > 0)
                <b>Available ({{$product->product_qnt}} left)</b>
                @else 
                <b>Sold out</b>
                @endif
                <p>{{$product->product_description}}</p>
                <button class='custom-btn btn-price'>{{$product->product_price}}$</button>
                @if($product->product_qnt > 0)
                <button class='custom-btn btn-buy'>Buy</button>
                @else
                <button class='custom-btn btn-buy disabled-btn' disabled>Sold out</button>
                @endif
                <h2>Kit:</h2>
                <ul>
                    <li>Item 1</li>
                    <li>Item 2</li>
                    <li>Item 3</li>
                    <li>Item 4</li>
                    <li>Item 5</li>
                </ul>
            </div>
        </main>
    </body>
    
@endsection