<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\UserModel;
class LogInController extends Controller
{
    public function formLogIn()
    {
    	return view('LogIn');
    }


    public function formLogInPost(Request $request)
    {
		$newuser = new UserModel();
		$result = $newuser->where('firstname', $request->firstname)->where('password', $request->password)->first();
		
if(!empty($result) && isset($_REQUEST["LogIn"])){
    session()->put("firstname",$request->firstname);
   

		return view('/profile')->with("firstname",$request->firstname)->with("password",$request->password);
		}
        else{
            
            $output1="wrong info";
            return $output1;
        }
		
    }

    function logout(Request $request)
	{
		
        session()->forget('firstname');
		if(session()->forget('firstname'))
		{
            session()->flash('status', 'Task was successful!');
			return redirect('/Home');
		}
	}
}
