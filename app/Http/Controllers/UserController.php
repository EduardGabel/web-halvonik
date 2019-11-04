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

    public function showAction($id)
    {
        $user = User::find($id);

        echo $user->email. '<br>';
        echo $user->meno . " " . $user->priezvisko . '<br>';
        echo $user->vek. '<br>';
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

    public function updateAction($id, Request $request)
    {
        $user = User::where("id", "=", $id)->first();
        $user->update([
            'vek' => $request->input('age'),
            'meno' => $request->input('firstname'),
            'priezvisko' => $request->input('lastname'),
            'email' => $request->input('Email')]);

        return redirect()->action('UserController@showAllAction');
    }

    public function deleteAction($id)
    {
        $user = User::find($id);
        $user->delete();
    }

    public function showAllAction()
    {
        $users = User::all();
        return view("users", ['users' => $users]);
    }
}