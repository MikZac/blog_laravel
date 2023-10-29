<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function user_page() {
        return view('admin.user_page');
    }
    public function add_user(Request $request)
    {
        $user= new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->usertype = $request->usertype;

       


        $user->save();
        return redirect()->back()->with('message', 'Użytkownik dodany');
    }
    public function show_user() {
        $users = User::all();
        return view('admin.show_user', compact('users'));
    }
    public function delete_user($id) {
        $user = User::find($id);

        $user->delete();
        return redirect()->back()->with('message', 'Użytkownik został usunięty');
    }
    public function update_user_status(Request $request, $id) {
        $user = User::find($id);
    
        $fieldName = 'usertype_' . $id;
        $user->usertype = $request->$fieldName;
        $user->save();
    
        return redirect()->back()->with('message', 'Status użytkownika został zmieniony poprawnie');
    }
}