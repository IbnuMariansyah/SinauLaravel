<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Siswa;

class siswacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();

        return view('siswa', ['siswa' => $siswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswa = Siswa::all();

        // return $siswa;

        return view('siswatambah', compact(['siswa']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $messages = [
            'required' => 'Field tidak boleh kosong!',
            'min' => 'Masukkan setidaknya 3 karakter',
            'max' => 'Maksimal 25 karakter'
        ];

        $this->validate($request, [
            'nama' => 'required|min:3|max:25',
            'umur' => 'required|numeric'
        ],$messages);

        //eloquent
        Siswa::create([
            'nama' => $request->nama,
            'umur' => $request->umur
        ]);

        return redirect()->route('siswa.view')->with('success', 'Data berhasil ditambahkan!');
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
        $siswa = Siswa::findOrFail($id);

        // return $siswa;

        return view('siswaedit',compact(['siswa']));
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
        //validasi
        $messages = [
            'required' => 'Field tidak boleh kosong!',
            'min' => 'Masukkan setidaknya 3 karakter',
            'max' => 'Maksimal 3 karakter'
        ];

        $this->validate($request, [
            'nama' => 'required|min:3|max:25',
            'umur' => 'required|numeric'
        ],$messages);

        $input = $request->all();
        $siswa = Siswa::findOrFail($id);
        $siswa->update($input);

        return redirect()->route('siswa.view')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapus($id)
    {
        Siswa::findOrFail($id)->delete();

        return redirect()->route('siswa.view')->with('success', 'Data berhasil dihapus!');

    }
}
