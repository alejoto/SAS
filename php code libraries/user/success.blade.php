@extends('templates.base')

@section('sidebar')
@stop
@section('content')
	Succesfully logged in
	<br>
	<a href="{{ url('logout')}}">Log out</a>

@stop


