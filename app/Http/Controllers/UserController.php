<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserController extends Controller
{
    use ApiResponseTrait;
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'image' => ['required', 'image', 'mimes:jpg,png,bmp,jpeg,gif,svg'],
            'position' => ['required']
        ]);

        if ($validator->fails()) {
            return $this->apiResponse(null, $validator->errors()->toJson(), 400);
        }

        $user = User::find(Auth::user()['id']);

        //$imageName = Str::random(32).".".$request->image->getClientOriginalExtension();
        // Storage::disk('public')->put($imageName, file_get_contents($request->image));

        // if ($request->hasFile('image')) {

        $file = $request['image'];
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move(public_path() . '/uploads/', $filename);

        // }

        $user->update([
            'first_name' => $request['first_name'],
            'last_name'  => $request['last_name'],
            'image'  => $filename, //$request['image'],
            'position'  => $request['position']
        ]);
        $user->save();
        $response = [
            'user' => new UserResource($user),
            'path_image' => url('/uploads/' . $filename)
        ];
        return $this->apiResponse($response, 'Success', 200);
    }

}
