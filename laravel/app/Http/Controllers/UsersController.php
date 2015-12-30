<?php namespace App\Http\Controllers;
 
use App\User;
use App\Code;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Redirect;
 
use Illuminate\Http\Request;
 
class UsersController extends Controller {
 
 
    protected $rules = ['name' => ['required', 'min:3'],'email' => ['required'], 'password' => ['required'],	];
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
			$users = User::all();	
			return view('users.index', compact('users'));
	}
 
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('users.create');
	}
 
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
	$this->validate($request, $this->rules);
	$input = Input::all();
	User::create( $input );
 
	return Redirect::route('users.index')->with('message', 'User created');
	}
 
	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Project $project
	 * @return Response
	 */
	public function show(User $user)
	{
		if($user->role=='coder')
			return view('users.show', compact('user'));
		else
		{
			$user=User::all();
			return Redirect::route('users.index');
		}
	}
 
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Project $project
	 * @return Response
	 */
	public function edit(User $user)
	{
		return view('users.edit', compact('user'));
	}
 
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \App\Project $project
	 * @return Response
	 */
	public function update(User $user)
	{
	$this->validate($request, $this->rules);
	$input = array_except(Input::all(), '_method');
	$user->update($input);
 
	return Redirect::route('users.show', $user->name)->with('message', 'User updated.');
	}
 
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Project $project
	 * @return Response
	 */
	public function destroy(User $user)
	{
	$user->delete();
 
	return Redirect::route('users.index')->with('message', 'User deleted.');
	}
	
	
	
 
}
?>