<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
// use Illuminate\Support\Facades\DB;
use Spatie\Multitenancy\Models\Tenant;

use App\Models\Article;

class ArticleController extends Controller
{

    /**
     * Show the profile for a given user.
     */
    public function list(): View
    {

        // dd(DB::connection()->getDatabaseName());

        return view('articles', [
            'articles' => Article::all(),
            'tenants' => Tenant::all(),
        ]);
    }

}
