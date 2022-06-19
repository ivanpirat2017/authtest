<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    public function Login(Request $request)
    {
        $messages = [
            'name' => 'имя',
            'surname' => 'фамилия',
        ];
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'surname' => 'required',
        ]);

        $validator->setAttributeNames($messages);
        if ($validator->fails()) {
            return  response()->json([
                'errors' => $validator->errors()
            ], 412);
        }

        $user = User::where('name', '=', $request->name)->where('surname', '=', $request->surname)->first();
        if ($user) {
            return  response()->json([
                'token' => $user->GetToken()
            ], 200);
        }

        return  response()->json([
            'errors' => [
                'error' => 'Неправильный логин или пароль'
            ]
        ], 412);
    }

    public function FC()
    {
        User::factory()->count(100)->create();
        return  response()->json(['data' => User::select('name', 'surname')->limit(10)->get()], 200);
    }

    public function check()
    {
        return  response()->json([], 204);
    }
    public function Get()
    {
        return  response()->json(['data' => User::select('name', 'surname')->limit(250)->get()], 200);
    }
}
