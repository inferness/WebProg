@extends('base')

@section('content')
@if ($errors->any())
    <div class="text-white">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif    

<form class="max-w-md mx-auto" action="{{url('/formProcess')}}" method="post">
    @csrf
    <div class="">
        <div>
            <label for="name">name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="email">email</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="nim">nim</label>
            <input type="text" name="nim">
        </div>
        <input type="submit" name="register">
    </div>
</form>
@endsection