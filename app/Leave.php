<?php


namespace App;


class Leave
{
    protected $table = 'leave';

    protected $fillable = [
        'employee_id', 'leave_begin', 'leave_end', 'leave_no', 'reason',
    ];
}
