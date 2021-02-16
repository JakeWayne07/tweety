<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', [
            'user' => $user,
            'tweets' => $user->tweets()->paginate(3)
        ]);
    }


    public function edit(User $user)
    {
        //abort_if($user->isNot(current_user()), 403);
        //$this->authorize('edit', $user); //Second Layer of Authentication

        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        if (request()->get('username')){
            $attributes = request()->validate([
                'username' => ['string', 'required', Rule::unique('users')->ignore($user), 'max:255', 'alpha_dash'],
                'name' =>['string', 'required', 'max:255'],
                'avatar' => ['file']
            ]);

            if (request('avatar')){
                $attributes['avatar'] = request('avatar')->store('avatars');
            }

        }else{
            $attributes = request()->validate([
                'password'=>['string', 'required','min:8', 'max:255', 'confirmed']
            ]);
        }
        $user->update($attributes);

        return redirect($user->path());

    }
}
