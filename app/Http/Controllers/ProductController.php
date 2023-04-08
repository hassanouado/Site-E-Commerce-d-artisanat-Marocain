<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Ordre;
use App\Models\Livraison;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //     $products = Product::all();
        //     dd($products->category->name_cat);
        $products = Product::with('category')->get();
        //dd( $products);
        //$products = Product::all();
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();

        //return $request->file('image');

        $product = new Product();
        $product->libelle = $request->input('libelle');
        $product->categorie_id = $request->input('categorie_id');
        $product->Q_produit = $request->input('Q_produit');
        $product->image = $request->input('image');
        $product->description = $request->input('description');
        $product->prix = $request->input('prix');
        $product->save();
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::find($id);
        return view('product.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->libelle = $request->input('libelle');
        $product->categorie_id = $request->input('categorie_id');
        $product->description = $request->input('description');
        $product->prix = $request->input('prix');
        $product->update();
        return redirect()->route('product');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product');
    }
    public function addToCart(Request $req)
    {
          
        $cart = new Cart;
        $cart->user_id = Auth::id();
        $cart->product_id = $req->product_id;
        $cart->save();
       return redirect('/home');
    }
    public function CartItem()
    {
        $userId = Auth::id();
        return Cart::where('user_id', $userId)->count();
    }
    public function cartList()
    {
        $userId = Auth::id();
        $total = DB::table('cart')
            ->join('product', 'cart.product_id', '=', 'product.id')
            ->where('cart.user_id', $userId)
            ->sum('product.prix');
        $categories = Category::all();
        $products = DB::table('cart')
            ->join('product', 'cart.product_id', '=', 'product.id')
            ->where('cart.user_id', $userId)
            ->select('product.*', 'cart.id as cart_id')
            ->get();

        return view('cart.cartList', compact('products', 'categories', 'total'));
    }

    public function removeCart($id)
    {
        $cart = Cart::find($id);
        $cart->delete();
        return redirect('cartList');
    }
    public function OrderNow()
    {

        if (empty(Cart::where('user_id', auth()->user()->id)->first())) {
            request()->session()->flash('error', 'Cart is Empty !');
            return back()->with('success', 'votre est vide');
        }
        $userId = Auth::id();
        $categories = Category::all();
        $total = DB::table('cart')
            ->join('product', 'cart.product_id', '=', 'product.id')
            ->where('cart.user_id', $userId)
            ->sum('product.prix');

        $products = DB::table('cart')
            ->join('product', 'cart.product_id', '=', 'product.id')
            ->where('cart.user_id', $userId)
            ->select('product.*', 'cart.id as cart_id')
            ->get();
        return view('cart.Ordre', compact('total', 'products', 'categories'));
    }

    public function OrdrePlace(Request $req)
    {

        if (empty(Cart::where('user_id', auth()->user()->id)->first())) {
            request()->session()->flash('error', 'Cart is Empty !');
            return back();
        }




        $userId = Auth::id();
        $allCart = Cart::where('user_id', $userId)->get();
        $live = new Livraison;
        $live->mode_livraison = $req->mode_livraison;
        $live->date_livraison = $req->date_livraison;
        $live->save();
        $ordre = new Ordre;
        $ordre->user_id = Auth::id();
        $ordre->status_cmd = 'pending';
        $ordre->livraison_id = $live->id;
        $ordre->payment_method = $req->payment;
        $ordre->payment_status = 'pending';
        $ordre->desc_cmd = $req->desc_cmd;
        $ordre->address = $req->address;
        $ordre->date_cmd = $req->date_cmd;

        $ordre->save();
        foreach ($allCart as $cart) {
            $ordre->products()->attach($cart->product_id);
            $cart->delete();
        }
        return view('votre commande est bien enregistrer');
    }

    public function search(Request $req)
    {

        // $products = Product::where('libelle', 'like', '%' . $req->input('query') . '%')->get();
        // return view('product.index', compact('products'));
    }
    public function viewByCat(Request $req)
    {

        // dd($products);
        $products = Product::where('categorie_id', $req->id)->get();
        $categories = Category::all();
        return view('welcome', compact('products', 'categories'));
    }
    // public function addToCart(Product $product)
    // {
    //     if (session()->has('cart')) {
    //         $cart = new Cart(session()->get('cart'));
    //     } else {
    //         $cart = new Cart;
    //     }
    //     $cart->add($product);
    //     session()->put('cart', $cart);
    //     return redirect()->route('product')->with('success', 'product added avec success');
    // }
    // public function  ShowCart(Product $product)
    // {
    //     if (session()->has('cart')) {
    //         $cart = new Cart(session()->get('cart'));
    //     } else {
    //         $cart = null;
    //     }

    //     return view('cart.show', compact('cart'));

    // }
    // public function checkout($amount)
    // {
    //     return view('cart.checkout', compact('amount'));
    // }
}
