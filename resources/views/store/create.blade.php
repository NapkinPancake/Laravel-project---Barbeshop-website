@extends('layouts/app')

@section('content')
{!! Form::open(['action' => 'productController@store' , 'method' => 'POST' , 'enctype' => 'multipart/form-data']) !!}
<div class="custom-container">
    <div class="add-product-form">
<ul>
    <li>
        {{Form::label('product_name', 'Product name') }}
        {{Form::text('product_name', '', ['placeholder'=>'']) }}
    </li>
    <li>
        {{Form::label('product_price', 'Product price') }}
        {{Form::text('product_price', '') }}
    </li>
    <li>
        {{Form::label('product_qnt', 'Product quantity') }}
        {{Form::text('product_qnt', '', ['placeholder'=>'']) }}
    </li>
    <li>
        {{Form::label('product_img', 'Major image') }}
        {{Form::file('product_major_img')}}
    </li>
    <li>
        {{Form::label('product_img', 'Minor image 1') }}
        {{Form::file('product_minor_img_1')}}
    </li>
    <li>
        {{Form::label('product_img', 'Minor image 2') }}
        {{Form::file('product_minor_img_2')}}
    </li>
    <li>
        {{Form::label('product_img', 'Minor image 3') }}
        {{Form::file('product_minor_img_3')}}
    </li>
    <li>
        {{Form::label('product_description', 'Product description') }}
        {{Form::textarea('product_description', '', ['placeholder'=>'']) }}
    </li>
    <li>
        {{Form::submit('Add' , ['class'=>'custom-btn'])}}
    </li>
</ul>
</div>
</div>
{!! Form::close() !!}
@endsection 