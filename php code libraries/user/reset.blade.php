@extends('templates.base')
 @section('sidebar')
 {{HTML::script('assets/js/resetpwd.js');}}
 @stop
 @section('content')
 <div class="row">
 	<div class="span12">
 		<h1>Reset your password!</h1>
 	</div>
 </div>


@if(isset($_GET['key']))


{{ Form::open(array('url' => 'user/changepwd')) }}
    <div class="row">
            <div class="span2 text-right">Confirm your email</div>
            <div class="span3">
                    <input 
                    type="text" 
                    class="span3" 
                    name='confirm_email' 
                    id='confirm_email'>
            </div>
            <div class="span5 text-error" id="resetpwd_email_msg"></div>
    </div>
    <div class="row">
            <div class="span2 text-right">New password</div>
            <div class="span3">
                    <input class="span3" 
                    type="password" 
                    name='resetpwd_new_password' 
                    id='resetpwd_new_password'>
            </div>
            <div class="span4" id="error_msg_resetpwd"></div>
    </div>
    <div class="row">
            <div class="span2 text-right">confirm password</div>
            <div class="span10">
                    <input class="span3" 
                    type="password" 
                    name='' id='resetpwd_new_password_confirm'>
            </div>
    </div>
    <div class="row">
    	<div class="span12 hide">
    		<input type="text"
		    class='hide' 
            name='get_reset_key'
		    id="get_reset_key" 
		    value="{{$_GET['key']}}">
    	</div>
    </div>
		    
    <div class="row">
            <div class="offset2 span10">
                    <input type='submit' 
                    id='do_resetpwd' 
                    value='Save new password' 
                    class='btn'/>
            </div>
    </div>
    <hr>
    <div class="row">
            <div class="offset2 span10">
                    Do not want to change password anyway? go to
                    <a href="{{ url('/')}}">login</a> site
            </div>
    </div>
{{ Form::close() }}



@elseif(isset($message))
    @if($message=='success')
        <div class="row">
            <div class="offset2 span10">Password successfully changed</div>
        </div>
        <div class="row">
            <div class="offset2 span10">Go to 
                {{link_to('/','login')}} page.
            </div>
        </div>
    @elseif($message=='error')
        <div class="row">
            <div class="offset2 span10 text-error">
                You may have entered a different email.
                <br>
                Go back to your email account, choose reset password message and click on the reset password link.
            </div>
        </div>
    
    @endif

@else

<div class="row">
    <div class="offset2 span10">
        This page contains no parameters.
        <br>
        Go back to {{link_to('/','login')}} page.
    </div>
</div>
@endif

@stop
