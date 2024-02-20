@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">{{ __('Project list') }}</div>
                <div class="container">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Status</th>
                                <th>Task</th>
                                <th>Add member</th>
                                <th>Show details</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($project as $projects)
                            <tr>
                                <td>{{$projects->name}}</td>
                                <td>{{$projects->description}}</td>
                                <td>{{$projects->start_date}}</td>
                                <td>{{$projects->end_date}}</td>
                                <td>{{$projects->status}}</td>

                                <td>
                                    <button class="btn btn-success  "><a class="text-decoration-none text-light"
                                            href="{{route('add.task',$projects->id)}}">Add task</a></button>

                                </td>
                                <td>
                                    <button class="btn btn-secondary  "><a class="text-decoration-none text-light"
                                            href="{{ route('add.member', $projects->id) }}">Add member</a></button>

                                </td>
                                <td>
                                    <button class="btn btn-danger  "><a class="text-decoration-none text-light"
                                            href="{{ route('show.details',$projects->id) }}">Show details</a></button>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
