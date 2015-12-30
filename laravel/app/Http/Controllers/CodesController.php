<?php namespace App\Http\Controllers;
 
use App\User;
use App\Code;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Redirect;
 
use Illuminate\Http\Request;
 
class CodesController extends Controller {
 
	protected $rules = ['user_id' => ['required', 'min:3'],		'code' => ['required'],	];
	/**
	 * Display a listing of the resource.
	 *
	 * @param  \App\Project $project
	 * @return Response
	 */
	public function index(User $user)
	{
		return view('codes.index', compact('user'));
	}
 
	/**
	 * Show the form for creating a new resource.
	 *
	 * @param  \App\Project $project
	 * @return Response
	 */
	public function create(User $user)
	{
		return view('codes.create', compact('user'));
	}
 
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \App\Project $project
	 * @return Response
	 */
	public function store(User $user)
	{
	//$this->validate($user, $this->rules);
	$input = Input::all();
	$input['user_id'] = $user->id;
	$position = strstr($input['code'],'assign');
	if($position ==false){
	Code::create( $input );	
	$myfile = fopen("testfile.php", "w");
	fwrite($myfile, $input['code']);
	fclose($myfile); 		
 
	return Redirect::to("testfile.php");
	}
	
	else{
		return Redirect::route('users.codes.create', $user->name)->with('message', 'Access Denied. Cannot use the term \'assign\'');
	}
	}
 
	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Project $project
	 * @param  \App\Task    $task
	 * @return Response
	 */
	public function show(User $user, Code $code)
	{
		return view('codes.show', compact('user', 'code'));
	}
 
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Project $project
	 * @param  \App\Task    $task
	 * @return Response
	 */
	public function edit(User $user, Code $code)
	{
		return view('codes.edit', compact('user', 'code'));
	}
 
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \App\Project $project
	 * @param  \App\Task    $task
	 * @return Response
	 */
	public function update(User $user, Code $code)
	{
	//$this->validate($user, $this->rules);
	$input = array_except(Input::all(), '_method');
	$position = strstr($input['code'],'assign');
	if($position ==false){
		
	$code->update($input);	
	$myfile = fopen("testfile.php", "w");
	fwrite($myfile, $input['code']);
	fclose($myfile);
	return Redirect::to("testfile.php");
}
	
	else{
		return Redirect::route('users.codes.edit', [$user->name, $code->id])->with('message', 'Access Denied.Cannot use the term \'assign\'');
	}	
	}
 
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Project $project
	 * @param  \App\Task    $task
	 * @return Response
	 */
	public function destroy(User $user, Code $code)
	{
	$code->delete();
 
	return Redirect::route('users.show', $user->name)->with('message', 'Code deleted.');
	}
 
}
?>