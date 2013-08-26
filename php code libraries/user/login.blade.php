@extends('templates.base')	
@section('sidebar')
	{{HTML::script('assets/js/login.js');}}
@stop	
@section('content')	
	
@if(!Auth::check())
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
		<div class="row reset_hide">
			<div class="span2 text-right" id='password_label'>password</div>
			<div class="span3"><input type="password" 
				class="span3" id="password" name='password'></div>
			<div class="span4" id="password_msg"></div>
		</div>
		<div class="row reset_hide">
			<div class="offset2 span10">
				<input class='btn' type="submit" id="login"/>
			</div>
		</div>
	{{ Form::close() }}
	<br>
	<div class="row">
		<div class="offset2 span10 text-error" id="ajax_result"></div>
	</div>
	<div class="row reset_show">
		<div class="offset2 span10">
			<div class="btn-group">
				<button class="btn  span3" id="send_reset">
					Reset old password
				</button>
				<button class="btn btn-link span1" id="cancel_reset">Cancel</button>
			</div>
		</div>
	</div>
	<div class="row reset_hide">
		<div class="offset2 span10">
			First time here? <a href="{{ url('subscribe')}}">Subscribe. </a>
			<br>
			Forgot password? Not to be worried.
			<a href="subscribe" id='reset_request'>Reset your password</a>.
		</div>
	</div>
	
	
	<br>
	
@else
	<div class="row">
		<div class="offset2 span10">
			{{link_to('success','success')}}
		</div>
	</div>
@endif
@stop	

