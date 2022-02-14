@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Create New Rack</h3>
        <form action="{{route('addRack')}}" method="POST">
            @CSRF
            <div class="form-group">
                <label for="rackName">Rack Name</label>
                <input type="text" class="form-control" id="rackName" name="rackName">
            </div>
            <button type="submit" class="btn btn-primary">Add New Rack</button>
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>

</div>
@endsection