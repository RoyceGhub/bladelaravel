@extends('layout.layout')

@section('content')

<div class="container vh-100">
    <div class="d-flex justify-content-center align-items-center h-100">
        <form action="{{route('create')}}" method="POST">
            @csrf
            <label for="Name">Name</label>
            <input class="d-flex justify-content-center" type="text" placeholder="Type your name" id="name" class="name"
                name='name'>
            <label for="Age">Age</label>
            <input class="d-flex justify-content-center" type="text" placeholder="Type your age" id="age" class="age"
                name='age'>
            <label for="Age">Address</label>
            <input class="d-flex justify-content-center" type="text" placeholder="Type your address" id="address"
                class="address" name='address'>
            <button class="py-1 my-2 bg-primary" type="submit">Submit</button>
        </form>
    </div>
    <div>
        {{ session('success') }}
    </div>

</div>


@endsection