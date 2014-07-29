<?php

class UsersController extends \BaseController {
	
	protected $user;
	
	public function __construct(User $user)
	{
		$this->user = $user;
	}
	
	public function index() 
	{
		$users = $this->user->all();
		
		return View::make('users/index', ['users' => $users]);
	}
	
	public function show($username)
	{
		//data is second route in video 6/7
	  $user = $this->user->whereUsername($username)->first(); // select * from users where username = USERNAME LIMIT 1
	  
	  return View::make('users/show', ['user' => $user]);
	}
	
	public function create()
	{
		return View::make('users.create');
	}
	
	public function store()
	{	
		$input = Input::all();
		
		if (!$this->user->fill($input)->isValid()) {
			// injecting user model instead
			return Redirect::back()->withInput()->withErrors($this->user->errors);
		}
		else {
			$this->user->save();
			
			return Redirect::route('users.index');
		}
	}
}
