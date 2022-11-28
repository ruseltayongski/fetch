<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementController extends Controller
{
    public function index() {
        $user = auth()->user();
        return view('homepage.index',compact('user'));
    }

    public function request() {
        $user = auth()->user();
        return view('homepage.documents', compact('user'));
    }
}
