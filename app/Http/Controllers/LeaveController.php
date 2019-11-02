<?php

namespace App\Http\Controllers;

use DB;
use App\Leave;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$leaves = DB::table('leave')
            ->where('employee_id', Auth::user()->id)
            ->get();
        return view('leave.index')->with('leaves', $leaves);*/
        return view('leave.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('leave.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $this->validate($request, [
            //
        ]);

        $leave = new Leave;
        $leave->employee_id = auth()->user()->id;
        $leave->leave_begin = $request->input('leave_begin');
        $leave->leave_end = $request->input('leave_end');
        //$leave->leave_begin->diffInDays();
        $leave->leave_no = 1;
        $leave->reason = $request->input('reason');

        dd($leave);
        $leave->save();
        //$leave->saveLeave($request);

        return redirect('/leave')->with('success', 'Leave created, awaiting approval');
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
