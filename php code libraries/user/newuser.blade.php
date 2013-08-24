@extends('templates.base')	
        @section('sidebar')
        	{{HTML::script('assets/js/userauth.js');}}
        @stop	
        @section('content')
        {{ Form::open(array('url' => 'subscribe')) }}
                <div class="row">
                        <div class="span12">
                                Subscribe
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
                                <input type="password" name='' id='confirm_new_password'>
                        </div>
                </div>
                <div class="row">
                        <div class="offset2 span10">
                                <input type='submit' id='subscribe' value='subscribe' class='btn'/>
                        </div>
                </div>
        {{ Form::close() }}

        @stop	



			