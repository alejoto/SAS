@extends('templates.base')

@section('sidebar')
@stop
@section('content')
<div class="row">
	<div class="span12">
		<h1>Logged out</h1>
	</div>
</div>
<div class="row">
	<div class="span12">Come back again whenever you want it. Bye!</div>
</div>
	
	<br>
	<a href="{{ url('/')}}">Log in</a>
@stop



