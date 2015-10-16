<?php
namespace App\Http\Controllers\Edit;

use App\User;
use Validator;
use Hash;
use Auth;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class EditController extends Controller
{

    public function editName(Request $request)
    {
        $postPassword = $request->password;
        Validator::extend('hashmatch', function($attributes, $value, $parameters)
        {
            $id = substr(strrchr($_SERVER['REQUEST_URI'], "/"), 1);
            $user = User::find($id);
            return Hash::check($value, $user->$parameters[0]);
        });
        $messages = array(
            'hashmatch' => 'The password you have entered didn\'t match edited account password.'
        );
        $rules =  [
            'name' => 'required|max:255|unique:users',
            'password' => 'required|hashmatch:password',
        ];
        $v = Validator::make($request->all(), $rules, $messages );

        if ($v->fails())
        {
            return redirect()->back()->withErrors($v->errors());
        } else {
            $id = substr(strrchr($_SERVER['REQUEST_URI'], "/"), 1);
            $user = User::find($id);
            $user->name = $request['name'];
            $user->save();
            header('Refresh: 0; url=/');
        }
    }
}