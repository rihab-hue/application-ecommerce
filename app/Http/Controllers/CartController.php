<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('front.cart');
    }

    public function addToCart($id,Request $request)
    {
        $article = Article::find($id);
        $cart = session()->get('cart');
        if(!$cart) {
            $cart = [
                    $id => []
            ];
            
        }
        $cart[$id] = array_merge([
            "titre" => $article->titre,
            "imagePath" => $article->getImagePath()
        ],
        ($request->post())['cardData']);
        session()->put('cart', $cart);
        session()->save();
        return response()->json([
            'message' => 'Article Addedd to session'
        ]);
    }


    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
}
}