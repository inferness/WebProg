@extends('base')

@section('content') 
<ul>
    <li><a href="{{url('/home')}}">Home</a></li>
    <li><a href="{{url('/create')}}">Create</a></li>
    <li><a href="{{url('/access')}}">Access</a></li>
    <li><a href="{{url('/delete')}}">Delete</a></li>
    <li><a href="{{url('/flash')}}">Flash</a></li>
</ul>
<div>
    create view
</div>
@endsection