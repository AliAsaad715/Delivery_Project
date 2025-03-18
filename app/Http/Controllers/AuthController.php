<?php

namespace app\Http\Controllers\User;

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

    public function register(Request $request): \Illuminate\Foundation\Application|\Illuminate\Http\Response|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory
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


    public function login(Request $request): \Illuminate\Foundation\Application|\Illuminate\Http\Response|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory
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

        $user->generateCode();
        $token = $user->createToken('myappToken')->plainTextToken;
        $response = [
            'user' => new AuthResource($user),
            'token' => $token,
            'verification_code' => $user->code
        ];
        return $this->apiResponse($response, 'Logged in', 200);
    }


    public function logout(): \Illuminate\Foundation\Application|\Illuminate\Http\Response|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory
    {
        Auth::user()->currentAccessToken()->delete();
        return $this->apiResponse(null, 'Logged out', 200);
    }

}
