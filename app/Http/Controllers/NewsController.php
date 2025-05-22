<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    
    /**
     * Show the profile for a given user.
     */
    public function list(): View
    {
        return view('news.list', [
            'news' => News::all(),
        ]);
    }
    

}
