@extends('templates.base')	
@section('sidebar')
	{{HTML::script('assets/js/login.js');}}
@stop	
@section('content')	
<div class="row">
	<div class="span12">
		<h1>Wellcome, please log in</h1>
	</div>
</div>
<div class="row">
	<div class="span5 text-right">
		@if (isset($message))
		<div class="alert alert-error alert-block" >
			<button class="close " data-dismiss="alert">&times;</button>
			<strong>Attention!</strong>
			{{$message}}
		</div>
		@endif
	</div>
</div>

{{ Form::open(array('url' => 'login')) }}
	<div class="row">
		<div class="span2 text-right">Your email</div>
		<div class="span3">
			<input type="text" 
			class="span3" id="email" name='email'>
		</div>
		<div class="span4 text-error" id="email_msg"></div>
	</div>
	<div class="row">
		<div class="span2 text-right">password</div>
		<div class="span3"><input type="password" 
			class="span3" id="password" name='password'></div>
		<div class="span4" id="password_msg"></div>
	</div>
	<div class="row">
		<div class="offset2 span10">
			<input class='btn' type="submit" id="login"/>
		</div>
	</div>
{{ Form::close() }}
<br>
First time here? <a href="{{ url('subscribe')}}">Subscribe. </a>
<br>

@stop	

