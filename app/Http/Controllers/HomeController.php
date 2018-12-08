<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use DB;
use Excel;
use Mail;
use App\Xlsx\Xlsx;

use App\User;
use App\Usersticker;
use App\Sticker;


class HomeController extends Controller
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


//==============================================

public function index(){
   $data= array(); 
   $user= array();
   $user = Auth::user();
   return view('home.index')->with('data',$data)
                            ->with('user',$user);
}


public function star_detail(){
   $data= array(); 
   $user= array();
   $user = Auth::user();

   // get user's sticker
   $userStickers = Usersticker::where('userstickers.user_id' ,'=', $user['id'])
                    ->leftJoin('stickers','stickers.id', '=', 'userstickers.sticker_id')
                    ->select('userstickers.id as user_sticker_id','userstickers.*','stickers.*');
   $user_stickers= $userStickers->get();
   
   $user_sticker_arr= array();
   foreach ($user_stickers as $sticker) {
       $user_sticker_arr['user_sticker_id']= $sticker['user_sticker_id'];
   }

   return view('home.star_detail')->with('data',$data)
                                  ->with('user',$user)
                                  ->with('user_stickers',$user_sticker_arr);
}


public function buy_sticker(){
   $data= array();
   $user= array();
   $user = Auth::user();
   if(empty($user)){
      return redirect('/');
   }

   $stickers = Sticker::all();
   
   return view('home.buy_sticker')->with('user',$user)
                                  ->with('stickers',$stickers);
                                  
}

//===============================================  
}?>