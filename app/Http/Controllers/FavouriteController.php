<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FavouriteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }
    public function index()
    {
        return auth()->user()->favourites()->paginate(20);
    }
}
