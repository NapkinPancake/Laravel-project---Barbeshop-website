<div class="custom-container">
@if ($errors->any())
    <div class="alert alert-danger ">
        <ul>
            <h2>Fail</h2>
            @foreach ($errors->all() as $error)
                <b>{{ $error }}<b>
                <br>
            @endforeach
        </ul>
    </div>
@endif

@if(session()->has('message'))
    <div class="alert alert-success">
        <b>{{ session()->get('message') }} </b>
    </div>
@endif
</div>