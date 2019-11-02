<?php


namespace App;


class Leave
{
    protected $table = 'leave';

    protected $fillable = [
        'employee_id', 'leave_begin', 'leave_end', 'leave_no', 'reason',
    ];

    public function saveLeave($request)
    {
        $this->employee_id = auth()->user()->id;
        $this->leave_begin = $request->input('leave_begin');
        $this->leave_end = $request->input('leave_end');
        $this->leave_no = '';
        $this->reason = $request->input('reason');
        $this->save();
        return 1;
    }

}
