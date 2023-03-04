<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Menampilkan Halaman Utama
        return view('Lp.landingPage');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Menampilkan Halaman Form
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Menuliskan data pada Database
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Menampilkan data satu persatu
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Menampilkan tampilan untuk Edit / Update
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Menginput data yang kita Edit
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Menghapus Data
    }
}
