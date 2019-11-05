<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

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
        $user = new User();
        $user->meno = $request->input('firstname');
        $user->priezvisko = $request->input('lastname');
        $user->heslo = $request->input('pass');
        $user->email = $request->input('email');
        $user->vek = $request->input('age');
        $user->save();

        return redirect()->action('UserController@showAllAction');
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

    public function showUserForm()
    {
        return view('adduser');
    }

    public function edit_page($id)
    {
        $user = User::find($id);
        return view("update", ['user' => $user]);
    }

    public function home_page()
    {
        return view("welcome");
    }



}