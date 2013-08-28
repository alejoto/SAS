<?php

class LoggedController extends BaseController {
	/*
	THIS CONTROLLER CONTAINS ALL PROTECTED PAGES, 
	IN OTHER WORDS, ONLY LOGGED-IN PAGES


	*/

	public function __construct()
    {
        $this->beforeFilter('auth');
        //$this->beforeFilter('csrf', array('on' => 'post'));
        //$this->afterFilter('log', array('only' =>  array('fooAction', 'barAction')));
    }

	public function getIndex()
	{
		Return View::make('user.success')	
			->with('title','test logged in page');
	}

	public function getLogout() {	
		Auth::logout();	
		return View::make('user.logout')	
		->with('title','logged out');	
	}





	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
