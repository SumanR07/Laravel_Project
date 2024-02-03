<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; 
use Illuminate\Support\Facades\Auth;
class My_Controller extends Controller
{
    public function index()
    { 
        $user = User::all();
       return view('user.index',compact('user'));
    } 

    public function user_form()
    { 
        return view('user.form');
    } 
    public function insert(Request $re)
    { 
        $re->validate([ 
            'name'=>'required',
            "email"=>"required|email",
            "contact"=>"required",
            "age"=>"required",
            "city"=>"required",
            "address"=>"required",
            "zip"=>"required",
        ]); 
          User::create($re->all()); 
          return redirect()->route('index');
    } 

    public function edit($id)
    { 
        $user = User::findorfail($id); 
        return view('user.edit',compact('user'));
    } 

    public function update(Request $re,$id)
    { 
        $re->validate([ 
            'name'=>'required',
            "email"=>"required|email",
            "contact"=>"required",
            "age"=>"required",
            "city"=>"required",
            "address"=>"required",
            "zip"=>"required",
        ]);  
        $user = User::findorfail($id); 
        $user->update($re->all()); 
        return redirect()->route('index');
    } 

    public function destroy($id)
    { 
        $user = User::findorfail($id); 
        $user->delete($id); 
        return redirect()->route('index');
    } 

    
    



    public function loginForm()
    {
        return view('auth.login');
    }

   

   

    public function login(Request $request)
{
    $credentials = $request->only('name', 'email');

    // Retrieve the user based on 'name' and 'email'
    $user = User::where('name', $credentials['name'])
                 ->where('email', $credentials['email'])
                 ->first();

    if ($user) {
        // Manually log in the user
        Auth::login($user);

        // Regenerate session
        $request->session()->regenerate();

        // Check if the user is authenticated
        if (Auth::check()) {
            return redirect()->intended('index');
        } else {
            // Handle if user authentication fails
            return back()->withErrors([
                'email' => 'User authentication failed.',
            ]);
        }
    }

    // If no user is found, return back with an error message
    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
}

}
