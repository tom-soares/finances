@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Entry
                </div>

                <form action="/entry" method="POST" class="form-horizontal">
                    {{ csrf_field() }}

                    <!-- Entry Name -->
                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Entry</label>

                        <div class="col-sm-6">
                            <input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
                        </div>
                    </div>

                    <!-- Add Task Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-btn fa-plus"></i>Add
                            </button>
                        </div>
                    </div>
                </form>
@endsection
