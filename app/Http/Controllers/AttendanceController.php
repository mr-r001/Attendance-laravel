<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\User;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            return datatables()->of(User::with('role', 'attendance')->whereNotIn('id', [1])->orderBy('updated_at', 'DESC')->get())
                ->addColumn('action', 'admin.attendance.action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('admin.tracking-bpkb.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $attendance = Attendance::where('user_id', $id)->get();
        $data   = [];
        foreach ($attendance as $row) {
            $time = date("G:i", strtotime($row['time_in']));
            $data[] = (object) array(
                'title'                 => $row['status'],
                'start'                 => $row['date'],
                'backgroundColor'       => ($row['status'] === 'Hadir') ? ('#007bff') : ('#E95F22'),
                'borderColor'           => ($row['status'] === 'Hadir') ? ('#007bff') : ('#E95F22'),
                'textColor'             => '#fff'
            );
        }
        $x = json_encode($data);
        return view('admin.attendance.show', compact('x'));
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
