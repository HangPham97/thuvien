<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function show(){
        return view('auth.detail');
    }
    public function edit($id)
    {
        $user = User::find($id);

        return view('auth.edit')->with('user',$user);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update([
            'name' => $request->get('name'),
            'email'=> $request->get('email'),
        ]);
        return view('auth.detail');
    }
    //
}
