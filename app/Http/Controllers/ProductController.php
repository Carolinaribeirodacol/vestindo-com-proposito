<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return Inertia::render('Home', [
            'products' => Product::with('sizes')->get()
        ]);
    }
}
