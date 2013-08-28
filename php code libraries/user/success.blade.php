@extends('templates.base')

@section('sidebar')
@stop
@section('content')
<div class="row">
	<div class="span12">
		<h1>Succesfully logged in</h1>
	</div>
</div>
<div class="row">
	<div class="span12">
		This page and its navbar link (success) are visible only to logged users
	</div>
</div>
	
	<br>

	<a href="{{ url('logged/logout')}}">Log out</a>

@stop


