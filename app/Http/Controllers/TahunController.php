<?php

namespace App\Http\Controllers;

use App\Models\Tahun;
use Illuminate\Http\Request;

class TahunController extends Controller
{
    public function index()
    {
        $tahuns = Tahun::all();

        return view('admin.tahun.index', compact('tahuns'));
    }

    public function create()
    {
        return view('admin.tahun.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tahun' => 'required'
        ]);

        Tahun::create([
            'tahun' => $request->tahun
        ]);

        return redirect('/tahun')
                ->with('success','Data tahun berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}