<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  // public function __construct()
  // {
  //     $this->middleware('auth');
  // }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
    $products = Product::paginate(8);
    $categories = Category::all();
    return view('welcome', compact('products', 'categories'));
  }
  public function detail($id)
  {
    $products = Product::find($id); //Product::find($id);
    $categories = Category::all();
    return view('FrendEnd.productDetail', compact('products', 'categories'));
  }
  public function Shop(){
    $categories  = Category::all();
    $products = Product::paginate(9);
    return view('Shop', compact('categories','products'));
  }
}
