<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class FavoriteController extends Controller
{
    //
    public function index()
    {
        // to get all data
        $favorites = Favorite::all();
        // load view and pass favorites
        return View::make('favorites.index')->with(['favorites' => $favorites]);
    }
}