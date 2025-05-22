<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\News;

class NewsController extends Controller
{
    
    // use UsesTenantConnection;

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
