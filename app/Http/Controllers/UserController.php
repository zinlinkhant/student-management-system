<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function destroy(User $user)
    {
        $user->delete();

        return back()->with('message', 'Permission deleted.');
    }
}
