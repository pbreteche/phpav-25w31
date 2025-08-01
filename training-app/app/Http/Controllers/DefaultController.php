<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\View\View;

class DefaultController extends Controller
{
    public function index(): View
    {
        return view('welcome', [
            'message' => 'Hello world !',
        ]);
    }
}
