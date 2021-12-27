<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\User;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('public.index');
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

    public function in()
    {
        return view('public.in');
    }
    public function checkin($id)
    {
        date_default_timezone_set('Asia/Jakarta');
        $nip = $_GET['id'];
        $user = User::where('nip', $nip)->first();

        $time_in    = "08:00:00";
        $time_out   = "17:00:00";
        $today      = date("Y/m/d");

        $attendance = Attendance::where('user_id', $user->id)->where('date', $today)->first();

        if ($attendance) {
            return response()->json([
                'message' => 'Anda sudah melakukan absen masuk hari ini'
            ]);
        } else {
            $time_now   = date("G:i:s");

            if ($time_now > $time_in) {
                $status = 'Terlambat';
            } else {
                $status = 'Tepat Waktu';
            }

            $data                   = new Attendance;
            $data->user_id          = $user->id;
            $data->date             = $today;
            $data->time_in          = $time_now;
            $data->status_timein    = $status;
            $data->save();

            return response()->json($data);
        }
    }
    public function checkout($id)
    {
        date_default_timezone_set('Asia/Jakarta');
        $nip = $_GET['id'];
        $user = User::where('nip', $nip)->first();

        $time_in    = "08:00:00";
        $time_out   = "17:00:00";
        $today      = date("Y/m/d");

        $attendance = Attendance::where('user_id', $user->id)->where('date', $today)->first();

        if ($attendance->time_out == null) {
            $time_now   = date("G:i:s");

            if ($time_now > $time_out) {
                $status = 'Terlambat';
            } else {
                $status = 'Tepat Waktu';
            }

            $attendance->time_out          = $time_now;
            $attendance->status_timeout    = $status;
            $attendance->status            = 'Hadir';
            $attendance->update();

            return response()->json($attendance);
        } else {
            return response()->json([
                'message' => 'Anda sudah melakukan absen pulang hari ini'
            ]);
        }
    }

    public function out()
    {
        return view('public.out');
    }
}
