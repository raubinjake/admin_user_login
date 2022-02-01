<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Users;
use App\UsersRole;

class HomeController extends Controller
{
    //
    public function index(){
        return view('users.users');
    }

    public function signup(){
        return view('users.register');
    }
public function user_register(Request $request){
    $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $imageName = time().'.'.$request->image->extension();  
   
        $request->image->move(public_path('images'), $imageName);
    $insert_arr = [
        'first_name' => $request->input('first_name') ?? '',
        'last_name' => $request->input('last_name') ?? '',
        'user_role_id' => 2,
        'date_of_birth' => $request->input('date_of_birth') ?? '',
        'phone' => $request->input('phone') ?? '',
        'email' => $request->input('email') ?? '',
        'password' => Hash::make($request->input('password')) ?? '',
        'profile_image' => $imageName ?? '',
        'status' => 1,
        'hobbies' => $request->input('hobbies') ?? ''
    ];
    // echo"<pre>";
    // print_r($insert_arr);
    // die;
    
    $user = Users::create($insert_arr);
if($user){
    $user_arr=[
        'role_id'=>$user->user_role_id,
        'user_id'=>$user->id
    ];
    UsersRole::create($user_arr);
    return redirect('/');
}
}

public function get_user_data(){
    $user = Users::get();
    return view('Admin.index', [
        'users' => $user
    ]);
}
 public function login(Request $request){
    $email = $request->input('email');
    $check = Users::where(['email'=>$email])->where(['status'=>1])->first();
    if (!Hash::check($request->input('password'), $check->password)) {
        return redirect('/');
    }else{
    echo"<pre>";
    print_r($check);
    die;
    if($check){
        $check_admin = UsersRole::where('user_id',$check->id)->where(['role_id'=>1])->first();
        $check_user = UsersRole::where('user_id',$check->id)->where(['role_id'=>2])->first();
        if($check_admin){
            return redirect('get_user_data');
        }else if($check_user){
            return redirect('/');
        }else{
            return redirect('/');
        }

    }
    else{
        return redirect('/');
    }

 }
 }

}
