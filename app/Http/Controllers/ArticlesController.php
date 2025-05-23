<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
// use Illuminate\Support\Facades\DB;
use Spatie\Multitenancy\Models\Tenant;

use App\Models\Articles;

class ArticlesController extends Controller
{

    /**
     * Show the profile for a given user.
     */
    public function list(): View
    {

        // dd(DB::connection()->getDatabaseName());

        return view('articles', [
            'articles' => Articles::all(),
            'tenants' => Tenant::all(),
        ]);
    }

}
