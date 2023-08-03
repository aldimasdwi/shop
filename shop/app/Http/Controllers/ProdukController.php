<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\CloudinaryStorage;
use Illuminate\Support\Facades\Validator;

class ProdukController extends Controller
{
    public function tambah(Request $request) {

        $validator = Validator::make($request->all(),[
            'produk' => 'required|string|max:255',
            'jumlah' => 'required|numeric|max:255',
            'body' => 'required|string',
            'image' => 'required',
            'harga' => 'required'
        ]);

        if($validator->fails()){
            return back()->withError('gagal menambah produk');
        }

        $image  = $request->image;
        $result = CloudinaryStorage::upload($image->getRealPath(), $image->getClientOriginalName());

        Produk::create([
            'produk'=>$request->produk,
            'jumlah'=>$request->jumlah,
            'harga'=>$request->harga,
            'body'=>$request->body,
            'image'=>$result
        ]);

        return redirect('/dashboard')->withSuccess('berhasil upload');
    }



}
