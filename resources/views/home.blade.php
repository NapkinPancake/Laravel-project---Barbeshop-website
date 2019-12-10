@extends('layouts.app')

@section('content')
<body class="home-body clerfix">
    <main class="custom-container clearfix">
        <div class="home-control-block clearfix">
            <ul>
                <li >
                    <h2>Controls</h2>
                </li>
                <li>
                    <h4>Store controls</h4>
                    <a href="/products-control" class="custom-btn">Controls</a>
                    <hr>
                </li>
                <li>
                    <h4>Customers requests controls</h4>
                    <a href="/forms-control" class="custom-btn">Controls</a>
                    <hr>
                </li>
            </ul>
        </div>
        <div class="home-profile-block clearfix">
            <ul>
                <li>
                    <h2>Profile</h2>
                </li>
                <li>
                    <p>Username:</p>
                    <p> {{Auth::user()->name}}</p>
                </li>
                <li>
                    <p>E-mail address:</p>
                    <p> {{Auth::user()->email}}</p>
                </li>
            </ul>
        </div>
    </main>
</body>
@endsection
