<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function about() {
        return view('about', [
        'name' => 'SEDC PHP',
        'team' => [
            'john doe',
            'jane doe',
            'john smith'
        ]
        ]);
    }
}
