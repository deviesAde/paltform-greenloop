<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Product;

class HomeController extends Controller
{
  public function index()
  {
    return view('landing.home.index', [
      'title' => 'Green Loop',
      'products' => Product::orderBy('created_at', 'desc')
        ->where('is_published', true)
        ->get(),
    ]);
  }
}
