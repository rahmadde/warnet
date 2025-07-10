<?php

namespace App\Http\Controllers;

//import Model
use App\Models\Makanan;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

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

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('makanans.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {

        //create post
        Makanan::create([
            'id_pemesanan'     => $request->id_pemesanan,
            'nm_makanan'         => $request->nm_makanan,
            'id_member'       => $request->id_member,
            'jumlah'          => $request->jumlah,
            'tgl_pemesanan'   => $request->tgl_pemesanan,
        ]);

        //redirect to index
        return redirect()->route('makanans.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get post by ID
        $makanan = Makanan::findOrFail($id);

        //render view with post
        return view('makanans.edit', compact('makanan'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        
        $makanan = Makanan::findOrFail($id);

        $makanan->update([
                'id_pemesanan'     => $request->id_pemesanan,
                'nm_makanan'   => $request->nm_makanan,
                'id_member'   => $request->id_member,
                'jumlah'   => $request->jumlah,
                'tgl_pemesanan'   => $request->tgl_pemesanan,
            ]);


        //redirect to index
        return redirect()->route('makanans.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
}