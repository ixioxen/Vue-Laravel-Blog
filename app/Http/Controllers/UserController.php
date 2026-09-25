<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Inertia\Inertia;


class UserController extends Controller
{
    public function User(User $user){
        // dd($user -> blogs());
        return Inertia::render('Blogs',[
            'blogs' => $user->blogs->load('user'),
            'user' =>  $user,
            'nrc' => $user->nrcs
        ]);
    }
}
