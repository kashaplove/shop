<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UpdateController extends Controller
{
    public function __invoke(User $user, UpdateRequest $request)
    {
        $data = $request->validated();
        if (isset($data['password']))
        {
            $data['password'] = Hash::make($data['password']);
        }
        $user->update($data);
        return redirect()->route('user.show', compact('user'));
    }
}
