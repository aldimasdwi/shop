<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class WebController extends Controller
{
    function dashboard() {
        $produk = Produk::all();

        return view('admin.dashboard',compact('produk'));
    }
}
