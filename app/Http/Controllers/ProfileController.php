<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = FacadesAuth::user();
        return view("profile");
    }
}
