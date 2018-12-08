<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use DB;
//use Excel;
//use Mail;

use App\User;
use App\Sticker;
//use App\License;

//use App\Xlsx\Xlsx;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    { 
        $this->middleware('auth');
    }

//==============================================

public function dashboard(){
    $user = Auth::user();
    return view('admin.dashboard')->with('user',$user);
}


public function add_sticker(Request $request){
  $user = Auth::user();
  if($request->input()){

     $this->validate($request, [
         // organization validation
         'price' => 'required|numeric',
         'sticker_name' => 'required|min:2',
         'sticker_img' => 'required',
     ]); 

     $data=$request->input();
     
     $save_data= array();
     if(isset($request->sticker_img)){
        $file=$request->sticker_img;
        $fileName = rand(5,15).time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('upload'), $fileName);
        $save_data['sticker_img']= $fileName;
     }

     $save_data['sticker_name']= $data['sticker_name'];
     $save_data['price']= $data['price'];

     if(Sticker::create($save_data)){
        return redirect('admin/add_sticker')->with('success','Sticker is successfully added');
     }else{
        return redirect('admin/add_sticker')->with('error','Error please try again');
     }
  }

  return view('admin.add_sticker')->with('user',$user);
}


public function list_sticker(){
   $user = Auth::user();
   $stickers = Sticker::all(); 
   //echo "<pre>"; print_r($stickers); exit;
   return view('admin.list_sticker')->with('user',$user)
                                   ->with('stickers',$stickers);
}

public function delete_sticker($id=NULL){
   if($id){
      Sticker::destroy($id); 
      return redirect('admin/list_sticker')->with('success','Sticker is successfully deleted');
   }
}

//===============================================      
}?>