<?php

namespace App\Http\Controllers;

use App\Models\Kritik;
use App\Http\Requests\StoreKritikRequest;
use App\Http\Requests\UpdateKritikRequest;

class KritikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKritikRequest $request)
    {
      $data = $request->all();
      $data['film_id'] = $request->input('film_id');
      Kritik::create($data);
      return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Kritik $kritik)
    {
        //
    }

    /**`
     * Show the form for editing the specified resource.
     */
    public function edit(Kritik $kritik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKritikRequest $request, Kritik $kritik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kritik $kritik)
    {
        if (!$kritik) {
            return redirect()->route('comments.index')->with('error', 'Komentar tidak ditemukan!');
        }
    
        // Hapus komentar
        $kritik->delete();
    
        // Redirect setelah penghapusan
        return redirect()->route('comments.index')->with('success', 'Komentar berhasil dihapus!');
    }
}
