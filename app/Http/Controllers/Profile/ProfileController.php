<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\UpdateProfileRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function show()
    {
        $userInfo = Auth::user();

        return view('profile.show-profile', compact('userInfo'));
    }

    public function edit()
    {
        $userInfo = Auth::user();

        return view('profile.edit-profile', ['userInfo' => $userInfo]);
    }

    public function update(UpdateProfileRequest $request)
    {
        $userId = Auth::user()->id;
        $validatedData = $request->validated();
        $data['fname'] = $validatedData['first_name'];
        $data['lname'] = $validatedData['last_name'];
        $data['email'] = $validatedData['email'];

        if (isset($validatedData['password'])) {
            $data['password'] = Hash::make($validatedData['password']);
        }

        if (isset($validatedData['bio'])) {
            $data['bio'] = $validatedData['bio'];
        }
        
        $status = DB::table('users')->where('id', $userId)->update($data);

        if ($status) {
            return to_route('profile.show');
        } else {
            return back()->withErrors([
                'first_name' => 'Can\'t update! Something went wrong!'
            ]);
        }
    }
}
