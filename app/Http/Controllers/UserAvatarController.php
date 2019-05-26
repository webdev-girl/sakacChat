<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserAvatarController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
}
    /**
     * Update the avatar for the user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function update(Request $request)
    {
        $path = $request->file('avatar')->store('avatars');
            $path = $request->file('avatar')->store(
            'avatars/'.$request->user()->id, 's3'
        );

        return $path;
    }

    public function profile()
{
    $user = Auth::user();

    return view('private',compact('user',$user));
    }

    public function update_avatar(Request $request){

    $request->validate([
        'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $user = Auth::user();

    $avatarName = $user->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();

    $request->avatar->storeAs('avatars',$avatarName);

    $user->avatar = $avatarName;
    $user->save();

    return back()
        ->with('success','You have successfully upload image.');

    }
}
