<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CartController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::all();
      
        return view('pages.cart', [
            'categories' => $categories
        ]);
    }

    public function success()
    {
        return view('pages.success');
    }
}
