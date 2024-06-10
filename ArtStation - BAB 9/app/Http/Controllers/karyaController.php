<?php

namespace App\Http\Controllers;


use App\Models\Karya;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class karyaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $karya = Karya::all();
        return view('karya.karya', compact('karya'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('karya.add-karya');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_karya' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'seniman' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->gambar->extension();
        $request->gambar->move(public_path('img_karya'), $imageName);

        Karya::create([
            'nama_karya' => $request->nama_karya,
            'harga' => $request->harga,
            'seniman' => $request->seniman,
            'gambar' => $imageName,
        ]);

        return redirect()->route('karya.index')->with('success', 'Karya berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id_karya)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_karya)
    {
        $karya = Karya::find($id_karya);
        return view('karya.karya-edit', compact('karya'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_karya)
    {
        $request->validate([
            'nama_karya' => 'required',
            'harga' => 'required',
            'seniman' => 'required',
            'gambar' => 'file|mimes:png,jpg,jpeg|max:2048',
        ]);

        $karya = Karya::find($id_karya);

        if($request->hasFile('gambar')){

            File::delete('img_karya/'.$karya->gambar);
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
            $tujuan_upload = 'img_karya';
            $gambar->move($tujuan_upload, $nama_gambar);
            $karya->gambar = $nama_gambar;
        }

        $karya->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'seniman' => $request->seniman,
        ]);

        return redirect('/karya');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id_karya)
    {
        $karya = Karya::find($id_karya);
        return view('karya.karya-hapus', compact('karya'));
    }

    public function destroy($id_karya)
    {
        $karya = Karya::find($id_karya);
        File::delete('img_karya/'.$karya->gambar);
        $karya->delete();
        return redirect('/karya')->with('success', 'Data berhasil dihapus.');
    }

    public function downloadPdf()
    {
        $karya = Karya::all();
        $pdf = PDF::loadView('karya.pdf', compact('karya'));
        return $pdf->download('laporan_penjualan_karya.pdf');
    }


}
