<?php

class UserController extends BaseController {

public function getIndex() {
	Return View::make('user.login')	
		->with('title','Log in');
}

public function postVerify() {
	if (Auth::attempt(array( 'email' => Input::get('email'), 
		'password' => Input::get('password') )))
		{ return Redirect::to('logged'); }
	else {
		return View::make('user.login')	
		->with('title','login')	
		->with('message','Wrong email or password');
	}
}

public function getVisible() {
	Return View::make('user.visible')
		->with('title','Visible');
}

public function getSubscribe() {
	Return View::make('user.newuser')
		->with('title','subscribe');
}

public function postSubscription() {	
//find if user exists. Give option to reset password	
	$count = User::where('email', '=', Input::get('new_email'))->count();	
	if ($count==0) {	
		$user=new User;
		$user->email=input::get('new_email');
		$user->password=Hash::make(input::get('new_password'));
		$user->save();
		if (Auth::attempt(array( 'email' => Input::get('new_email'), 
			'password' => input::get('new_password') )))
			{ return Redirect::to('logged'); }
		else { return View::make('user.login'); }
	}	
	Return View::make('user.newuser')	
	->with('title','subscribe')	
	->with('message','User already exists');	
}

public function postReset() {	
	$email=Input::get('email');
	$user=User::where('email','=',$email);
	$count=User::where('email','=',$email)->count();
	if ($count==0) {
		return 'noexist';
	}
	else {
		$now=date('Y-m-d H:i:s');
		$key=md5($now).md5($email);
		$link='<a href="'.URL::to('user/reset').'?key='.$key.
		'">Use this link to reset password</a>';
		$data=array('test'=>'test','link'=>$link);
		Mail::pretend();
		Mail::send('templates.emails',$data,function($message){
			$message->to( Input::get('email'),'Appreciated user')
			->subject('Wellcome!');
		});

		$updateuser=User::where('email','=',Input::get('email'));
		$updateuser->update(array('resetkey'=>$key));
	}
}

public function getReset() {
	Return View::make('user.reset')
	->with('title','reset password');
}

public function postChangepwd() {
	$user=User::where('resetkey','=',Input::get('get_reset_key'))->get();
	if ($user[0]['email']==Input::get('confirm_email')) {
		$user_ud=User::where('resetkey','=',Input::get('get_reset_key'));

		$user_ud->update(array(
			'password'=>Hash::make(Input::get('resetpwd_new_password')),
			'resetkey'=>''));
		return View::make('user.reset')
		->with('title','success reset')
		->with('message','success');
	} else {
		return View::make('user.reset')
		->with('title','Warning')
		->with('message','error');
	}
}


	}