<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class Users extends Controller
{
    // 
    function list()
    {
        $users = User::all();
        $link = 'All Users';
        return view('all', [
            'users' => $users,
            'link' => $link,
        ]);
    }

    //
    function loginSubmit(Request $request)
    {
        return User::select('*')->where(
            [
                ['email', '=', $request->email],
                ['password', '=', $request->password]
            ]
        )->get();
        // return $request->input();
    }

    // 
    function createSubmit(Request $request)
    {
        $user = new User;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = $request->password;

        $result = $user->save();
        if ($result) {
            return redirect('/all');
        }
    }
}
