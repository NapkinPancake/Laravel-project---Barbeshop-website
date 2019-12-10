@extends('layouts.app')

@section('content')
<body class="home-body">
    <main class="custom-container clearfix">
        <a class='custom-btn' href="/store/create">+Add</a>
        <div class="home-products-list clearfix">
            @foreach ($products as $product)
                <div class="products-list-elem home-products-list-elem">
                    <a href="store/{{$product->id}}">
                        <img src="/storage/product_images/{{$product->product_major_img}}" alt="">
                        <br>
                        <b>{{$product->product_name}}</b>
                        <br>
                    </a>
                    <a class='custom-btn btn-edit' href="/store/{{$product->id}}/edit">Edit</a>
                    {{!!Form::open(['action' => ['productController@destroy' , $product->id ], 'method'=>'POST'])!!}}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Remove' , ['class'=>'custom-btn btn-remove'])}}
                    {{!!Form::close()!!}}
                </div>
            @endforeach
    </main>
</body>
@endsection