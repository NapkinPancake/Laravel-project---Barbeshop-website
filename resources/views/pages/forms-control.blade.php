@extends('layouts.app')

@section('content')
<body class="home-body">
    <main class="custom-container clearfix">
        <div class="home-products-list ">
                @foreach ($forms as $form)
                <div class="products-list-elem home-requests-list-elem">
                    <h3>Ordrer № {{$form->id}}</h3>
                    <p>Date:<b>{{$form->date}}</b></p>
                    <p>Time:<b>{{$form->time}}</b></p>
                    <p>Client name:<b>{{$form->client_name}}</b> </p>
                    <p>Client phone:<b>+380{{$form->client_phone}}</b></p>

                    {{!!Form::open(['action' => ['formController@destroy' , $form->id ], 'method'=>'POST'])!!}}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Remove' , ['class'=>'custom-btn btn-remove'])}}
                    {{!!Form::close()!!}}
                </div>
                @endforeach
            </div>
    </main>
</body>
@endsection