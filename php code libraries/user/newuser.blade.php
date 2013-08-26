@extends('templates.base')	
        @section('sidebar')
        	{{HTML::script('assets/js/userauth.js');}}
        @stop	
        @section('content')
                @if (isset($message))
                <div class="row">
                        <div class="offset2 span3">
                                <div class="alert alert-error alert-block" >
                                <button class="close " data-dismiss="alert">&times;</button>
                                <strong>{{$message}}</strong>
                                
                        </div>
                        </div>
                </div>
                @endif
        {{ Form::open(array('url' => 'subscribe')) }}
                <div class="row">
                        <div class="span12">
                                <h1>Subscribe</h1>
                        </div>
                </div>
                <div class="row">
                        <div class="span2 text-right">Email</div>
                        <div class="span3">
                                <input 
                                type="text" 
                                class="span3" 
                                name='new_email' 
                                id='new_email'>
                        </div>
                        <div class="span5 text-error" id="subscribe_email_msg"></div>
                </div>
                <div class="row">
                        <div class="span2 text-right">password</div>
                        <div class="span3">
                                <input class="span3" type="password" name='new_password' id='new_password'>
                        </div>
                        <div class="span4" id="error_msg_pwd"></div>
                </div>
                <div class="row">
                        <div class="span2 text-right">confirm  password</div>
                        <div class="span10">
                                <input class="span3" type="password" name='' id='confirm_new_password'>
                        </div>
                </div>
                <div class="row">
                        <div class="offset2 span10">
                                <input type='submit' id='subscribe' value='subscribe' class='btn'/>
                        </div>
                </div>
                <hr>
                <div class="row">
                        <div class="offset2 span10">
                                Already a member? go to
                                <a href="{{ url('/')}}">login</a> site
                        </div>
                </div>
        {{ Form::close() }}

        @stop	



			