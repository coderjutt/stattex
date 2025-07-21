<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
public function index(){
    $user=User::all();
    return view('dashboard.user.index',compact('user'));
}
public function create(){
    return view('dashboard.user.create');
}
public function store(Request $request)
{
       
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:100',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:6|confirmed',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

      
    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    return redirect()->route('admin_users')->with('success', 'User created successfully.');
}
public function destroy($id)
{
    $user = User::findOrFail($id);

    // Optional: Prevent deletion of currently logged-in user or admin
    // if (auth()->id() == $user->id) {
    //     return back()->with('error', 'You cannot delete your own account.');
    // }

    $user->delete();

    return redirect()->back()->with('success', 'User deleted successfully.');
}
}
