<?php

namespace App\Http\Controllers;

//import Model
use App\Models\Member;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $members = Member::latest()->paginate(10);

        //render view with posts
        return view('members.index', compact('members'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('members.create');
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
        Member::create([
            'id_member'     => $request->id_member,
            'nm_member'         => $request->nm_member,
            'no_hp'       => $request->no_hp,
            'password'          => $request->password,
        ]);

        //redirect to index
        return redirect()->route('members.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $member = Member::findOrFail($id);

        //render view with post
        return view('members.edit', compact('member'));
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
        
        $member = Member::findOrFail($id);

        $member->update([
                'id_member'     => $request->id_member,
                'nm_member'         => $request->nm_member,
                'no_hp'       => $request->no_hp,
                'password'          => $request->password,
            ]);


        //redirect to index
        return redirect()->route('members.index')->with(['success' => 'Data Berhasil Diubah!']);
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
        $member = Member::findOrFail($id);

        //delete
        $member->delete();

        //redirect to index
        return redirect()->route('members.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}