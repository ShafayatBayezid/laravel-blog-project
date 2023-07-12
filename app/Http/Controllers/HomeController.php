<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function page(Request $request) {
        return view('pages.home');
    }
    public function featuredArticle(Request $request) {
        return Article::join('users', 'users.id', '=', 'articles.user_id')
        ->select('articles.*', 'users.name')
        ->get();
    }
}
