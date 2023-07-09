<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gadget;

class GadgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Gadget::all(); 
        //
        return view('Table',compact('data'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Gadget;
        return view('FormAdmin',compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Gadget;
        $model->nama_barang = $request->nama_barang;
        $model->detail_barang = $request->detail_barang;
        $model->harga = $request->harga;
        $model->gambar = $request->gambar;
        $model->save();

        return redirect('gadget');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Gadget::find($id);
        return view('Edit',compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Gadget::find($id);
        $model->nama_barang = $request->nama_barang;
        $model->detail_barang = $request->detail_barang;
        $model->harga = $request->harga;
        $model->gambar = $request->gambar;
        $model->save();

        return redirect('gadget');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Gadget::find($id);
        $model->delete();
        return redirect('gadget');
    }
}
