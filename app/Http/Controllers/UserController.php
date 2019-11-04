<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function showUserForm()
    {
        return view('adduser');
    }

    public function showUser($id)
    {
        $user = User::find($id);

        echo $user->email . '<br>';
        echo $user->meno . " " . $user->priezvisko . '<br>';
        echo $user->vek . '<br>';
        echo $user->updated_at;
    }

    public function insertUser(Request $request)
    {
        $firstName = $request->input('firstname');
        $lastName = $request->input('lastname');
        $email = $request->input('email');
        $age = $request->input('age');


        $user = new User();
        $user->meno = $firstName;
        $user->priezvisko = $lastName;
        $user->heslo = '';
        $user->email = $email;
        $user->vek = $age;
        $user->save();

        return redirect()->back()->with('message', 'IT WORKS!');
    }

    public function editUser($id, Request $request)
    {
        $user = User::where("id", "=", $id)->first();
        $user->update([
            'meno' => $request->input('firstname'),
            'priezvisko' => $request->input('lastname'),
            'email' => $request->input('email'),
            'heslo' => $request->input('pass'),
            'vek' => $request->input('age')]);

        return redirect()->action('UserController@showAllAction');
    }

    public function deleteUser($id)
    {
        User::where('id', '=', $id)->delete();
        return redirect()->action('UserController@showAllAction');
    }

    public function showAllAction()
    {
        $users = User::all();
        return view("showAllUsers", ['users' => $users]);
    }

    public function edit_page($id)
    {
        $user = User::find($id);
        return view("update", ['user' => $user]);
    }

}