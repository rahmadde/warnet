<?php

namespace App\Http\Controllers;

//import Model
use App\Models\Makanan;

//return type View
use Illuminate\View\View;

use Illuminate\Http\Request;

class MakananController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $makanans = Makanan::latest()->paginate(10);

        //render view with posts
        return view('makanans.index', compact('makanans'));
    }
}