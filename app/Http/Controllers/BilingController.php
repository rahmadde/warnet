<?php

namespace App\Http\Controllers;

//import Model
use App\Models\Biling;

use App\Models\Member;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;

class BilingController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $bilings = Biling::with('member')->latest()->paginate(10);

        //render view with posts
        return view('bilings.index', compact('bilings'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        $members = Member::all();
        return view('bilings.create', compact('members'));
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
        Biling::create([
            'kd_biling'       => $request->kd_biling,
            'waktu_biling'    => $request->waktu_biling,
            'id_member'       => $request->id_member,
            'tgl_pembelian'   => $request->tgl_pembelian,
        ]);

        //redirect to index
        return redirect()->route('bilings.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $biling = Biling::findOrFail($id);
        $members = Member::all();

        //render view with post
        return view('bilings.edit', compact('biling', 'members'));
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
        
        $biling = Biling::findOrFail($id);

        $biling->update([
                'kd_biling'       => $request->kd_biling,
                'waktu_biling'    => $request->waktu_biling,
                'id_member'       => $request->id_member,
                'tgl_pembelian'   => $request->tgl_pembelian,
            ]);


        //redirect to index
        return redirect()->route('bilings.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get by ID
        $biling = Biling::findOrFail($id);

        //delete
        $biling->delete();

        //redirect to index
        return redirect()->route('bilings.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}