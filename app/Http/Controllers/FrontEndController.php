<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Cart; 

class FrontEndController extends Controller
{
    public function homePage(Request $request){
        $data = [
            'pageTitle'=>'GearGamers | Online Shopping Website'
        ];
        return view('front.pages.home',$data);
    }

    public function products() {
        $data = [
            'pageTitle' => 'Our Products'
        ];
        return view('front.pages.products', $data);
    }
    
    public function categories() {
        $data = [
            'pageTitle' => 'Product Categories',
            'categories' => Category::with('subcategories')->get()
        ];
        return view('front.pages.categories', $data);
    }
    
    public function profile() {
        $data = [
            'pageTitle' => 'My Profile'
        ];
        return view('front.pages.profile', $data);
    }
    
    public function cart()
    {
        $cartItems = Cart::getContent();
        $subtotal = Cart::getSubTotal();
        $shipping = 0; // Calculate based on your logic
        $discount = session('discount', 0);
        $total = $subtotal + $shipping - $discount;
        
        $pageTitle = 'Shopping Cart'; // Tambahkan ini

        return view('front.pages.cart', compact(
            'pageTitle',
            'cartItems',
            'subtotal',
            'shipping',
            'discount',
            'total'
        ));
    }
    
    public function wishlist() {
        $data = [
            'pageTitle' => 'My Wishlist'
        ];
        return view('front.pages.wishlist', $data);
    }
    
    public function compare() {
        $data = [
            'pageTitle' => 'Compare Products'
        ];
        return view('front.pages.compare', $data);
    }
    
    public function checkout() {
        $data = [
            'pageTitle' => 'Checkout'
        ];
        return view('front.pages.checkout', $data);
    }
}
