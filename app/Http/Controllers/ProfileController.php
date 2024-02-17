<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    /**
     * @param UpdateRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(UpdateRequest $request, int $id): RedirectResponse
    {
        $name = Str::uuid() . '.' . $request->file('avatar')->extension();

        Storage::putFileAs( 'public/avatars/', $request->file('avatar'), $name);

        User::query()->where('id','=', $id)->update([
            'email' => $request->string('email'),
            'password' => Hash::make($request->string('password')),
            'avatar_url' => 'avatars/' . $name,
        ]);

        return redirect()->back()->with('success', 'Профиль успешно обновлён');
    }
}
