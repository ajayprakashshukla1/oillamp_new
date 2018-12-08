<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use DB;

use App\User;
class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    //====================================================

    public function login(Request $request){
        $data=$request->input();
        if(count($data)){
           if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){ 
              return redirect('/dashboard');
            }else{
              return view('auth.login')->with('error' , 'These credentials do not match our records');
            }
        }else{
           return view('auth.login');
        }
    }


    public function registration(Request $request){
      if($request->input()){

         $this->validate($request, [
               // user validation
               'nickname' => 'required|min:2',
               'email' => 'required|email|unique:users,email|max:255',
               'password'=>'required|min:6',
               
           ]); 

         $data=$request->input();
         
          $user_data= array();
          $user_data['email']= $data['email'];
          $user_data['password']= $data['password'];
          $user_data['nickname']= $data['nickname'];
          $user_data['role']= 'user';
          $user_data['status']= 1;
          $user = User::create($user_data);

          return redirect('registration')->with('success','Registration Successfull');
      }


      $data= array();
      return view('users.registration')->with('data', $data);
    }

        
    /*public function profile(){
        $user = Auth::user();
       if($user->role==3){
          return view('user.profile')->with('user',$user);
      }
    }*/        


    
}