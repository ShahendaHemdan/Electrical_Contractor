<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:user');
    }

    public function index()
    {
        $products = Product::all();
        return view('user.index', ['products' => $products]);
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('user.show', ['product' => $product]);
    }
}
