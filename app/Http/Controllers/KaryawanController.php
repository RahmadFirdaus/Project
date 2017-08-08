<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\karyawan;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $karyawan = karyawan::with('transaksi')->get();
        return view('karyawan.index', compact('karyawan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('karyawans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $karyawan = new karyawan;
        $karyawan ->nama_karyawan = $request->a;
        $karyawan ->jk = $request->b;
        $karyawan ->alamat = $request->c;
        $karyawan ->email = $request->d;
        $karyawan->save();
        return redirect('karyawan');
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
        $karyawan = karyawan::findOrfail($id);
        return view('karyawans.show', compact('karyawan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $karyawan = karyawan::findOrfail($id);
        return view('karyawans.edit', compact('karyawan'));
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
        //
        $karyawan = karyawan::findOrFail($id);
        $karyawan ->nama_karyawan = $request->a;
        $karyawan ->jk = $request->b;
        $karyawan ->alamat = $request->c;
        $karyawan ->email = $request->d;
        $karyawan->save();
        return redirect('karyawan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $karyawan = karyawan::findOrfail($id);
        $karyawan->delete();
        return redirect('karyawan');
    }
}
