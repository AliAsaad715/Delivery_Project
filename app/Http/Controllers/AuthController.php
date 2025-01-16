<?php

namespace App\Http\Controllers;

use App\Http\Resources\AuthResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Stichoza\GoogleTranslate\GoogleTranslate;

class AuthController extends Controller
{
    use ApiResponseTrait;

    public function register(Request $request)
    {
        $translator = new GoogleTranslate(app()->getLocale());
        $validator = Validator::make($request->all(), [
            'phone_number' => ['required', 'numeric', 'digits:10', 'unique:users', 'phone:SY'],
            'password' => ['required', Password::min(8), 'confirmed']
        ]);

        if ($validator->fails()) {
            return $this->apiResponse(null, $validator->errors()->toJson(), 400);
        }

        $user = User::create([
            'phone_number' => $request['phone_number'],
            'password' => bcrypt($request['password'])
        ]);

        $token = $user->createToken('myappToken')->plainTextToken;
        $response = [
            'user' => new AuthResource($user),
            'token' => $token
        ];
        return $this->apiResponse($response, 'Register', 201);
    }


    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone_number' => ['required'],
            'password' => ['required']
        ]);

        if ($validator->fails()) {
            return $this->apiResponse(null, $validator->errors()->toJson(), 400);
        }

        $user = User::where('phone_number', request('phone_number'))->first();

        if (!$user || !Hash::check($request['password'], $user->password))
            return $this->apiResponse(null, 'Wrong phone number or password', 404);

        $token = $user->createToken('myappToken')->plainTextToken;
        $response = [
            'user' => new AuthResource($user),
            'token' => $token
        ];
        return $this->apiResponse($response, 'Logged in', 200);
    }


    public function logout()
    {
        Auth::user()->currentAccessToken()->delete();
        return $this->apiResponse(null, 'Logged out', 200);
    }

    public function verification(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'v_code' => ['required', 'numeric', 'digits:4']
        // ]);

        // if ($validator->fails()) {
        //     return $this->apiResponse(null, $validator->errors()->toJson(), 400);
        // }
        if ($request['v_code'] == 1234)
            return $this->apiResponse(null, 'Verified successfully', 200);

        return $this->apiResponse(null, 'The code is wrong.', 404);
    }

}