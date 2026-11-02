<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    // GET /about
    public function about(): View
    {
        return view('about', [
            'name'  => 'Alfred Joseph T',
            'roll'  => 11,
            'regNo' => 'NSS23CS011',
        ]);
    }
}
