@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Create New Stock</h3>
        <form action="{{ route('addStock') }}" method="POST" enctype="multipart/form-data" >
           @CSRF
            <div class="form-group">
                <label for="stockName">stock Name</label>
                <input type="text" class="form-control" id="stockName" name="stockName">                
            </div>
        
            <div class="form-group">
                <label for="stockQuantity">stock Quantity</label>
                <input type="number" class="form-control" id="stockQuantity" name="stockQuantity" min="0">                
            </div>

            <div class="form-group">
                <label for="rackNo">Rack No</label>
                <input type="text" class="form-control" id="stockNo" name="stockNo" >                
            </div>

            <div class="form-group">
                <label for="stockInDate">Stock In Date</label>
                <input type="date" class="form-control" id="stockInDate" name="stockInDate" min="0">                
            </div>

            <div class="form-group">
                <label for="stockOutDate">Stock Out Date</label>
                <input type="date" class="form-control" id="stockOutDate" name="stockOutDate" min="0">                
            </div>

            <div class="form-group">
                <label for="RackID">Rack</label>
                <select name="RackID" id="RackID" class="form-control">
                    @foreach($rackID as $rack)
                        <option value="{{$rack->id}}">{{$rack->name}}</option>
                    @endforeach
                </select>                
            </div>
            <button type="submit" class="btn btn-primary">Add New</button>
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection