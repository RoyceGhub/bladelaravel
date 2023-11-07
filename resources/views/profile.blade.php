@extends('layout.layout')

@section('content')

<div class="d-flex justify-content-center">
    <h1> My Profile</h1>
</div>



@for($i=0; $i<5 ;$i++) <div class="d-flex justify-content-center py-1">
    <h1>{{$i}}</h1>
    </div>
    @endfor

    @foreach ($data as $record)
    <div class="d-flex justify-content-center py-1">
        <h1>Name: {{ $record->name }}</h1>
        <h1>Age: {{ $record->age }}</h1>
        <h1>Address: {{ $record->address }}</h1>
    </div>
    @endforeach


    @endsection