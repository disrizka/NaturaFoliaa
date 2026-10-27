<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home', ['products' => config('company.products')]);
    }

    public function products()
    {
        return view('pages.products', ['products' => config('company.products')]);
    }

    public function cooperation()
    {
        return view('pages.cooperation');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
