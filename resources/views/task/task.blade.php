@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex">
                    Add task
                </div>
                <div class="container mt-5">
                    <h2>Create Project</h2>
                    <form action="{{ route('store.task',$projects->id)}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="projectName">Project Name:</label>
                            <input type="text" class="form-control" id="projectName" placeholder="Enter project name"
                                value="{{$projects->name}}" required readonly>
                        </div>
                        <div class="form-group">
                            <label for="projectName">Task Name:</label>
                            <input type="text" class="form-control" id="projectName" name="name"
                                placeholder="Enter project name" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" id="description" name="description" rows="3"
                                placeholder="Enter project description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="dueDate">Due Date:</label>
                            <input type="date" name="due_date" class="form-control" id="dueDate">
                        </div>
                        <div class="form-group">
                            <label for="status">Status:</label>
                            <select class="form-control" name="status" id="status">
                                <option value="Not Started">Not Started</option>
                                <option value="In Progress">In Progress</option>
                                <option value="Completed">Completed</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
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
<script>
    @if(Session::has('message'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.success("{{ session('message') }}");
    @endif

    @if(Session::has('error'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.error("{{ session('error') }}");
    @endif

</script>
@endsection