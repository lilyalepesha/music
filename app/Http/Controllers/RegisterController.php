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

        $name = Auth::user()->email . '.' . 'jpg';

        if (Storage::exists('public/avatar/' . Auth::id())) {
            Storage::deleteDirectory('public/avatar/' . Auth::id());
        }

        Storage::putFileAs('public/avatar/' . Auth::id(), $request->file('avatar'), $name);

        return redirect()->back()->with('success', 'Вы успешно зарегистрированы');
    }
}
