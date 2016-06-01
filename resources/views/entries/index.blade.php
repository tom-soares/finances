@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Entry
                </div>

                <div class="panel-body">
                    <form action="/entry" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Entry Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Entry</label>

                            <div class="col-sm-6">
                                <input type="text" name="description" id="entry-description" class="form-control">
                            </div>
                        </div>
                            <div class="form-group">
                                <label for="task-name" class="col-sm-3 control-label">$ Value</label>

                                <div class="col-sm-6">
                                    <input type="number" name="value" id="entry-value" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-offset-3 col-sm-6">
                                <div class="checkbox">
                                    <label><input type="checkbox" value=""
                                        >Receita</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" >Despesa</label>
                                </div>
                            </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-success center-block">
                                    <i class="fa fa-btn fa-plus"></i>Add
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

        </table>










@endsection
