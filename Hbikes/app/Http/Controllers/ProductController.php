<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Review;
use Session;

class ProductController extends Controller
{

    /**Cuando se inicia la tienda, se buscan los 8 primeros elementos, 
     * y se añade un elemento para navegar entre los elementos que 
     * se muestran al principio y los restantes */
    public function getStore(){

        $products = Product::paginate(8);

        return view('store.store', compact('products'));

    }

    public function getItem(Request $request, $id){

        $product = Product::find($id);
        $reviews = Review::where('product',$id)->get();

        return view('store.item', ['product' => $product, 'reviews' => $reviews]);

    }

    public function getAddToCart(Request $request, $id){

        $product = Product::find($id);
        /**Si existe un carro lo almacena, sino no */
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        /**Se añade el carro a la sesion */
        $request->session()->put('cart',$cart);
        return redirect()->route('product.shoppingCart');

    }

    public function getCart(){
        if(!Session::has('cart')){
            return view('store.shoppingCart', ['products' => null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('store.shoppingCart',['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getDeleteCart(Request $request){

            $request->session()->pull('cart');

        return view('store.shoppingCart', ['products' => null]);
    }

    public function getCheckout(){
        if(!Session::has('cart')){
            return view('store.shoppingCart', ['products' => null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('store.checkout',['total'=> $total]);
    }

}
