<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class loginController extends Controller
{
    //
    public function __construct()
    {
    }
    public function Login(Request $req)
    {
        $validator = Validator::make($req->input(), [
            "email" => "required|email:rfc,dns",
            "password" => ["required",Password::defaults()]
        ]);
        if($validator->fails())
        {
            return response()->json($validator->getMessageBag(),500);
        }
        $user = User::select('*')->where('email', '=', $req->email)->first();
        if (!$user) {
            return response()->json('user Not Found', 500);
        }
        if (!Hash::check($req->password, $user->password)) {
            return response()->json('invalid password', 500);
        }
        return $user->createToken('Api', ['*'])->plainTextToken;
    }
    public function Register(Request $req)
    {
        $validator = Validator::make($req->input(), [
            "email" => "required|email:rfc,dns|unique:App\Models\User,email",
            "name" => "required|string|unique:App\Models\User,name",
            "password" => ["required",Password::defaults()],
            "confirm_password" => ["required",Password::defaults(),"same:password"],
        ]);
        if($validator->fails())
        {
            return response()->json($validator->getMessageBag(),500);
        }
        $user = new User();
        $user->email = $req->email;
        $user->name = $req->name;
        $user->password = Hash::make($req->password);
        $user->save();

        return $user->createToken('Api', ['*'])->plainTextToken;
    }
}
