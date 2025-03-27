<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    // Admin Authentication Functions Start ==========================
    public function AdminLogin() {
        if (Auth::user()) {
            return redirect()->to('/admin-dashboard');
         }
        return view('Admin.page_login');
      }
   
      public function AdminSignUp() {
        if (Auth::user()) {
            return redirect()->to('/admin-dashboard');
         }
        return view('Admin.page_register');
      }

      
    //   Admin Register Function Start ===========
      public function AdminRegister(Request $request) { 

        
        $password = $request->input('password');
    

        if ($request->email == null || $request->password == null || $request->c_password == null || $request->name == null  ) {
            $response['error'] = true;
            $response['geterror'] = '';
            $response['message'] = 'All Fields Are Required!';
            return response()->json($response);
         } 

         if ($request->password !=  $request->c_password ) {
            $response['error'] = true;
            $response['geterror'] = 'c_password';
            $response['message'] = 'Password did not Matched';
            return response()->json($response);
          }

        $user = User::where(['email'=>$request->email])->first();

        if (!empty($user)) {
            $response['error'] = true;
            $response['geterror'] = 'email';
            $response['message'] = 'This Email is Already Registered';
            return response()->json($response);
         }
        
        if (strlen($password) < 8) {
            $response['error'] = true;
            $response['geterror'] = 'password';
            $response['message'] = 'The password must be at least 8 characters long.';
            return response()->json($response);
        }
    
       if (!preg_match('/[A-Z]/', $password)) {
        $response['error'] = true;
            $response['geterror'] = 'password';
            $response['message'] = 'The password must contain at least one uppercase letter.';
            return response()->json($response);
        }
        if (!preg_match('/[0-9]/', $password)) {
            $response['error'] = true;
            $response['geterror'] = 'password';
            $response['message'] = 'The password must contain at least one number.';
            return response()->json($response);
        }
    
        if (!preg_match('/[\W_]/', $password)) {
            $response['error'] = true;
            $response['geterror'] = 'password';
            $response['message'] = 'The password must contain at least one special character.';
            return response()->json($response);
        }
    

  

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email, 
            'password' => Hash::make($request->password), 
            'role' => 1, 
        ]);

        if ($user) {
          

             
           
            $response['success'] = true; 
            $response['message'] = 'Registered Successfully, Login to Your Account!';
            return response()->json($response);
          
        }else{
            $response['error'] = true;
            $response['geterror'] = 'email';
            $response['message'] = 'Something Error Please Try again Later!';
            return response()->json($response);
         }

    }

  //   Admin Register Function END ===========


  //   Admin Log IN Function Start ===========
  
  public function AdminSignIn(Request $request)   {

    if ($request->email == null || $request->password == null   ) {
        $response['error'] = true;
        $response['geterror'] = '';
        $response['message'] = 'All Fields Are Required!';
        return response()->json($response);
     } 

    $user = User::where(['email'=>$request->email])->first();

    if (empty($user)) {
        $response['error'] = true;
        $response['geterror'] = 'email';
        $response['message'] = 'This Email is not Registered Please Create an Account!';
        return response()->json($response);
     } 
   
    
     if (!Hash::check($request->password, $user->password)) {
        return response()->json([
            'error' => true,
            'geterror' => 'password',
            'message' => 'You Entered Incorrect Password!',
        ]);
    }
    if ($user->role != 1) {
        $response['error'] = true;
        $response['geterror'] = '';
        $response['message'] = 'Admin Not Detected!';
        return response()->json($response);
    }
    
    
     Auth::login($user);

     if (isset($request->remember) && !empty($request->remember)) {
        setcookie("email",$request->email,time()+86400);
        setcookie("password",$request->password,time()+86400);
     }else{
        setcookie("email","");
        setcookie("password","");
     }


     return response()->json(['success'=> true,
     'message' => 'Logged In Successfully!',
    ]);
        // return redirect('/');
    
   


}

//   Admin Log IN Function END ===========

//   Admin Log Out Function Start ===========
public function LogOut(){
       
    // Session::Flush();
    Auth::logout();
     return redirect()->to('/admin-login');
}
//   Admin Log Out Function END ===========





  // Admin Authentication Functions END ==========================
  
  
  
  // User Authentication Functions Start ==========================


       
    //   Admin Register Function Start ===========
    public function UserRegister(Request $request) { 

        
        $password = $request->input('password');
    

        if ($request->email == null || $request->password == null || $request->c_password == null || $request->name == null  ) {
            
            return redirect()->back()->with('error','All Fields Are Required!');
        } 

         if ($request->password !=  $request->c_password ) {
         
            return redirect()->back()->with('error','Password did not Matched!');
             }

        $user = User::where(['email'=>$request->email])->first();

        if (!empty($user)) {
            return redirect()->back()->with('error','This Email is Already Registered!');
        }
        
        if (strlen($password) < 8) {
             return redirect()->back()->with('error','The password must be at least 8 characters long!');
        }
    
       if (!preg_match('/[A-Z]/', $password)) { 
            return redirect()->back()->with('error','The password must contain at least one uppercase letter!');
        }
        if (!preg_match('/[0-9]/', $password)) { 
            return redirect()->back()->with('error','The password must contain at least one number!');
         }
    
        if (!preg_match('/[\W_]/', $password)) {
        
            return redirect()->back()->with('error','The password must contain at least one special character!');
        }
    

  

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email, 
            'password' => Hash::make($request->password),  
        ]);

        if ($user) {
           
            return redirect()->back()->with('success','Registered Successfully, Login to Your Account!');
        
        }else{ 
            return redirect()->back()->with('error','Something Error Please Try again Later!');
        }

    }

  //   Admin Register Function END ===========


  //   Admin Log IN Function Start ===========
  
  public function UserSignIn(Request $request)   {

    if ($request->email == null || $request->password == null   ) {
        
        return redirect()->back()->with('error','All Fields Are Required!');
    } 

    $user = User::where(['email'=>$request->email])->first();

    if (empty($user)) { 
        return redirect()->back()->with('error','This Email is not Registered Please Create an Account!');
    } 
   
    
     if (!Hash::check($request->password, $user->password)) {
 
        return redirect()->back()->with('error','You Entered Incorrect Password!');
    }
    if ($user->role != 0) { 
        return redirect()->back()->with('error','User Not Detected!');
    }

    if ($user->status == 1) { 
        return redirect()->back()->with('error','User Blocked from Admin!');
    }
    
    
     Auth::login($user);

     if (isset($request->remember) && !empty($request->remember)) {
        setcookie("email",$request->email,time()+86400);
        setcookie("password",$request->password,time()+86400);
     }else{
        setcookie("email","");
        setcookie("password","");
     }

 
    return redirect()->back()->with('success','User Logged In Successfully!');
   
 
    
   


}

//   Admin Log IN Function END ===========

//   Admin Log Out Function Start ===========
public function UserLogOut(){
       
    // Session::Flush();
    Auth::logout();
     return redirect()->to('/');
}
//   Admin Log Out Function END ===========




  // User Authentication Functions END ==========================

   
}
