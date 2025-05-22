<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
// use Illuminate\Support\Facades\DB;

use App\Models\News;

class NewsController extends Controller
{

    /**
     * Show the profile for a given user.
     */
    public function list(): View
    {

        // dd(DB::connection()->getDatabaseName());

        return view('news', [
            'news' => News::all(),
        ]);
    }

}
