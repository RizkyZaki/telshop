<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // ELSA TASK LENGKAPI CONTROLLERNYA SESUAIKAN DENGAN FORMNYA
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.users.index',[
            'title' => 'Pengguna',
            'heading'=> 'Kelola Pengguna',
            'collection'=> User::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.users.create',[
            'title' => 'Pengguna',
            'heading'=> 'Buat Pengguna',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
