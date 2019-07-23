<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth; 
use Validator;
use Illuminate\Http\Request;
use DataTables;
use DB;

class UserController extends Controller
{
	public $successStatus = 200;
    public function index()
    {
        $users = User::get();
        return view('users',compact('users'));
    }

    public function changeStatus(Request $request)
    {
        $user = User::find($request->user_id);
        $user->status = $request->status;
        $user->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }

    public function login()
    { 
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('MyApp')-> accessToken; 
            // $user->api_token = $success['token'];
            // $user->save();
            return response()->json(['success' => $success], $this-> successStatus); 
        } 
        else{ 
            return response()->json(['error'=>'Unauthorised'], 401); 
        } 
    }

    public function register(Request $request) 
    { 
        $validator = Validator::make($request->all(), [ 
            'name' => 'required', 
            'email' => 'required|email', 
            'password' => 'required', 
            'c_password' => 'required|same:password', 
        ]);
		if ($validator->fails()) { 
		            return response()->json(['error'=>$validator->errors()], 401);            
		        }
		$input = $request->all(); 
		$input['password'] = bcrypt($input['password']); 
		$user = User::create($input); 
		$success['token'] =  $user->createToken('MyApp')-> accessToken; 
		$success['name'] =  $user->name;
		return response()->json(['success'=>$success], $this-> successStatus);
    }

    public function details() 
    { 
        $user = Auth::user(); 
        return response()->json(['success' => $user], $this-> successStatus); 
    } 

    public function yajraUserList()
    {
        return view('yajra-users');
    }

    public function yajraUsers()
    {
        $users = DB::table('users')->select('*');
        return DataTables::of($users)
            ->make(true);
    }
}
