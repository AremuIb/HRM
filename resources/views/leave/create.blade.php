@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ action('LeaveController@store') }}" enctype="multipart/form-data">
    @csrf
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            LEAVE DURATION
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="leave_begin" class="col-sm-2 col-form-label">Start Date</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="leave_begin" name="leave_begin">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="leave_end" class="col-sm-2 col-form-label">End Date</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="leave_end" name="leave_end">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="leave_reason" class="col-sm-2 col-form-label">Reason</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="leave_reason" name="reason">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-sm btn-success float-right">Apply</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
