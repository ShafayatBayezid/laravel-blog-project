<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Page View Routes
Route::get( '/', [HomeController::class, 'page'] );
Route::get( '/post/{id}', [ArticleController::class, 'page'] );

//Data Receiveing Routes

// Route::get('/article/{id}', [ArticleController::class, 'articleData']);
// Route::get('/allcomments/{id}', [ArticleController::class, 'allComments']);
Route::get( '/featuredarticle', [HomeController::class, 'featuredArticle'] );
Route::post( '/addcomment/{id}', [ArticleController::class, 'addComment'] );