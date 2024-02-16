<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /**
     * @param RegisterRequest $request
     * @return RedirectResponse
     */
    public function store(RegisterRequest $request): RedirectResponse
    {
        $user = User::query()->create($request->only(['email', 'password']));

        Auth::login($user);

        $name = Str::uuid() . '.' . $request->file('avatar')->extension();

        Storage::putFileAs( 'public/avatars/', $request->file('avatar'), $name);

        $user->update([
            'avatar_url' => 'avatars/' . $name,
        ]);

        return redirect()->back()->with('success', 'Вы успешно зарегистрированы');
    }
}
