<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function index() 
    {
        $data = DB::table('tbincome')->get();

        return view('income.index', [
            'title' => 'Income',
            'data' => $data,
        ]);
    }

    public function add()
    {
        return view('form-product.add', [
            'title' => 'Add Income',
        ]);
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'user_id' => 'required|max:255',
            'nama' => 'required|max:255',
            'amount' => 'required|max:255',
            'category' => 'required',
        ]);
        
        // dd($validatedData);
        Product::create($validatedData);

        return redirect('/income');
    }

    public function edit($id)
    {
        $data = DB::table('products')->where('id', $id) -> get();
        // $data = Profile::findOrFail($id);

        return view('form-product.edit', [
            'title' => 'Edit Product',
            'data' => $data,
        ]);
    }

    public function update(Request $request)
    {
        $data = Product::findOrFail($request->id);
        // dd($data);

        if($request->file('foto')) {
            Storage::delete($data->foto);

            $data->foto = $request->file('foto')->store('product-foto');
        }

        if($request->promo){
            $data->harga_akhir = $request->harga - $request->harga * $request->promo / 100;
        } else {
            $data->harga_akhir = $request->harga;
        }

        $data->nama = $request->nama;
        $data->harga = $request->harga;
        $data->promo = $request->promo;
        $data->deskripsi = $request->deskripsi;
        $data->category = $request->category;

        // $itung = 10000 - 10000 * 0/100;
        // dd($data->harga_akhir);

        $data->save();


        return redirect('/product');
    }

    public function destroy($id)
    {
        $data = Product::findOrFail($id);
        // dd($data);

        if ($data->foto) {
            Storage::delete($data->foto);
        }   
        $data->delete();

        return redirect('/product');
    }
}
