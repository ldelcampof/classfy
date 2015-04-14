<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\User;

use Hash;
use Input;
use Mail;
use Redirect;
use Validator;

class UserController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function login()
	{
		return view('forms.user.login');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('forms.user.register');
	}

	public function insert()
	{
		$data = Input::all();
		$validate = Validator::make($data,[
			'name'=>'required',
			'email'=>'required|email|unique:users,email']);

		if($validate->fails()){
			return Redirect::back()->withErrors($validate);
		}
		$user = new User();
		$user->fill($data);
		$password = str_random(15);
		$user->password = Hash::make($password);
		if($user->save()){

			Mail::send('emails.register',['name'=>$user->name, 'email'=>$user->name, 'password'=>$password], function($message) use($data)
			{
			    $message->to($data['email'], $data['name'])->subject('Bienvenido a ClassfyMe!');
			});
		}

		return Redirect::to('/');
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
