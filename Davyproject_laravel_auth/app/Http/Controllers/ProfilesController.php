<?php

namespace App\Http\Controllers;

use App\Models\Profiles;

class ProfilesController extends Controller
{
    public function index()
    {
        $profiles = Profiles::all();
        return view('profiles', compact('profiles'));
    }
}
