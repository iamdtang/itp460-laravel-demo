<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProfileController extends Controller
{
    public function index() {
        $technologies = DB::table('technologies')->orderBy('name')->get();

        return view('profile', [
            'name' => 'David Tang',
            'technologies' => $technologies,
        ]);
    }
}
