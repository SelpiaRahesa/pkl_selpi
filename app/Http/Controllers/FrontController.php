<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function shop()
    {
        return view('shop');
    }
    public function pages()
    {
        return view('pages');
    }
    public function blogs()
    {
        return view('blogs');
    }
    public function blogs_detail()
    {
        return view('blogs_detail');
    }
    public function user()
    {
        return view('user');
    }
    public function privacy()
    {
        return view('privacy');
    }
    public function terms()
    {
        return view('terms');
    }
    public function faq()
    {
        return view('faq');
    }
    public function become()
    {
        return view('become');
    }
    public function cart()
    {
        return view('cart');
    }
    public function whislist()
    {
        return view('whislist');
    }
    public function compaire()
    {
        return view('compaire');
    }
    public function order()
    {
        return view('order');
    }
    public function flash()
    {
        return view('flash');
    }
    //method selanjutnya untuk bagian front
}
