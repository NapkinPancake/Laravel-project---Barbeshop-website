@extends('layouts/app')

@section('content')
<body class="show-product-page">
        <main class='custom-container clearfix'>
            <div class="nav-block clearfix">
                <h2 class='page-name'>Complect "Baxter of California"</h2>
                <ul class='nav-line'>
                    <li>
                        <a href="/">Main</a>
                    </li>
                    <li>
                        <a href="store/">Store</a>
                    </li>
                    <li>
                        <span>Complect "Baxter of California"</span>
                    </li>
                </ul>
            </div>
            <div class="product-page-content-left">
                <img src="{{asset('assets/img/Store/Baxter of California/main.jpg')}}" alt="">
                <img src="{{asset('assets/img/Store/Baxter of California/Layer 45.png')}}" alt="">
                <img src="{{asset('assets/img/Store/Baxter of California/Layer 46.png')}}" alt="">
                <img src="{{asset('assets/img/Store/Baxter of California/Layer 47.png')}}" alt="">
            </div>
            <div class="product-page-content-right">
                <b>Available</b>
                <p>This kit is realy cool thing, but I'll better tell some joke, listen: The absent-minded maestro was racing up New York’s Seventh Avenue to a rehearsal, when a stranger stopped him. “Pardon me,” he said, “can you tell me how to get to Carnegie
                    Hall?” “Yes,” answered the maestro breathlessly. “Practice , practise, practise!”</p>
                <button class='custom-btn btn-price'>30$</button>
                <button class='custom-btn btn-buy'>Buy</button>
                <h2>Kit:</h2>
                <ul>
                    <li>Soap 50ml</li>
                    <li>Cream 50ml</li>
                    <li>Razor</li>
                    <li>Hair Brush</li>
                    <li>Lazer box</li>
                </ul>
            </div>
        </main>
    </body>
@endsection