@extends('layouts.master')

@section('content')
<h1>{{$titre}}</h1>
<ul class="list-group">
    @foreach ($services as $service)
<li class="list-group-item">{{$service}}</li>
    @endforeach
</ul>
@endsection