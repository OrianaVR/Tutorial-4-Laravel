<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Home - Online Store';

        return view('home.index')->with('viewData', $viewData);
    }

    public function about(): View
    {
        $viewData = [];
        $viewData['title'] = 'About us - Online Store';
        $viewData['subtitle'] = 'About us';
        $viewData['description'] = 'This is an about page ...';
        $viewData['author'] = 'Developed by: Oriana Renteria';

        return view('home.about')->with('viewData', $viewData);
    }

    public function contact(): View
    {
        $viewData = [];
        $viewData['title'] = 'Contact - Online Store';
        $viewData['subtitle'] = 'Contact Page';
        $viewData['name'] = 'Oriana Renteria';
        $viewData['email'] = 'infostore@example.com';
        $viewData['phone'] = '+1 (123) 456-7890';
        $viewData['address'] = '123 Main Street, City, Country';

        return view('home.contact')->with('viewData', $viewData);
    }
}
