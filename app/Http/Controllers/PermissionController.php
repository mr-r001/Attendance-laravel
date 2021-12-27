<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.attendance.permission');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $izin       = request()->post('izin');
        $catatan    = request()->post('catatan');
        $today      = date("Y/m/d");

        $attendance = Attendance::where('date', $today)->where('user_id', auth()->user()->id)->first();

        if ($attendance) {
            return redirect()->route('admin.permission.index')->with('success', "Anda sudah melakukan izin hari ini");
        } else {
            $data           = new Attendance();
            $data->user_id  = auth()->user()->id;
            $data->date     = $today;
            $data->status   = $izin;
            $data->catatan  = $catatan;
            $data->save();

            return redirect()->route('admin.permission.index')->with('success', "Data berhasil disimpan");
        }
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
        //
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
    }
}
