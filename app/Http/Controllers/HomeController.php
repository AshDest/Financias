<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function caissier()
    {
        return view('pages.caissiers.list');
    }
    public function addcaissier()
    {
        return view('pages.caissiers.add');
    }
    public function editcaissier($ids)
    {
        return view('pages.caissiers.edit', compact('ids'));
    }

    public function changesmenus()
    {
        return view('pages.changes.menus');
    }
    public function users()
    {
        return view('pages.users.user');
    }
}