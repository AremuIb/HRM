@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        LEAVE
                        <a class="button btn-success btn-sm float-right" href="/leave/create"> Apply </a>
                    </div>
                    <div class="card-body">
                        <h3>
                            You have a total leave of 20 working days left.
                        </h3>
                    </div>
                </div>

                <br>

                <div class="card">
                    <div class="card-header"> LEAVE HISTORY </div>
                    <div class="card-body">
                        <table class="table-responsive center-aligned-table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Start Date</th>
                                <th scope="col">End Date</th>
                                <th scope="col">No. of days</th>
                                <th scope="col">Reason</th>
                                <th scope="col">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($leaves as $leave)
                                <tr>
                                    <th scope="row">{{ $leave->id }}</th>
                                    <td>{{ $leave->leave_begin }}</td>
                                    <td>{{ $leave->leave_end }}</td>
                                    <td>{{ $leave->leave_no }}</td>
                                    <td>{{ $leave->reason }}</td>
                                    <td>{{ $leave->status }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
