@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex">
                  <span class='ml-3'><button class="btn btn-success">Project Create</button></span>
                  <button class="btn btn-danger" style="margin-left:30px"><a class="text-decoration-none text-white" href="{{ route('project.list') }}">Project list</a></button>
                </div>
                
                <div class="container mt-5">
                    <form action="{{ route('insert.project') }}" method="POST">
                        @csrf
                      <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                      </div>
                      <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                      </div>
                      <div class="form-group">
                        <label for="start_date">Start Date:</label>
                        <input type="date" class="form-control" id="start_date" name="start_date" required>
                      </div>
                      <div class="form-group">
                        <label for="end_date">End Date:</label>
                        <input type="date" class="form-control" id="end_date" name="end_date" required>
                      </div>
                      <div class="form-group">
                        <label for="status">Status:</label>
                        <select class="form-control" id="status" name="status" required>
                          <option value="" disabled selected>Select Status</option>
                          <option value="Active">Active</option>
                          <option value="Inactive">Inactive</option>
                          <!-- Add more options as needed -->
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
