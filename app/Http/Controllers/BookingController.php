<?php

namespace App\Http\Controllers;

//import Model
use App\Models\Booking;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $bookings = Booking::latest()->paginate(10);

        //render view with posts
        return view('bookings.index', compact('bookings'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('bookings.create');
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
        Booking::create([
            'kd_booking'       => $request->kd_booking,
            'no_pc'    => $request->no_pc,
            'id_member'       => $request->id_member,
            'tgl_booking'   => $request->tgl_booking,
        ]);

        //redirect to index
        return redirect()->route('bookings.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $booking = Booking::findOrFail($id);

        //render view with post
        return view('bookings.edit', compact('booking'));
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
        
        $booking = Booking::findOrFail($id);

        $booking->update([
                'kd_booking'    => $request->kd_booking,
                'no_pc'         => $request->no_pc,
                'id_member'     => $request->id_member,
                'tgl_booking'   => $request->tgl_booking,
            ]);


        //redirect to index
        return redirect()->route('bookings.index')->with(['success' => 'Data Berhasil Diubah!']);
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
        $booking = Booking::findOrFail($id);

        //delete
        $booking->delete();

        //redirect to index
        return redirect()->route('bookings.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}