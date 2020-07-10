<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $user = User::find($user->id);

        return view('users.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $user = User::find($user->id);

        return view('users.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $userUpdate = User::where('id', $user->id)->update([
            'surname'=> $request->input('surname'),
            'name'=> $request->input('name'),
            'departement'=> $request->input('departement'),
            'function'=> $request->input('function'),
            'id_number'=> $request->input('id_number'),
            'phone'=> $request->input('phone'),
            'email'=> $request->input('email'),
            'password'=> $request->input('password'),
            'gender'=> $request->input('gender'),
            
            
        ]);

        // $user = Auth::user();

        //     $avatarName = $user->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();

        //     $request->avatar->storeAs('avatars',$avatarName);

        //     $user->avatar = $avatarName;
        //     $user->save();


        if ($userUpdate) {
            return redirect() -> route('users.show', ['user' => $user->id])
            ->with('success' , 'User information successfully updated');
        }

        // Redirect
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
