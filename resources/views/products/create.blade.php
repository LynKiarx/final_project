@extends('products.layout')
  
@section('content')
<style>
    .btn-primary{
        background-color: #5c91f0;
        color: pink;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    h2{
        text-align: center;
        justify-self: center;
        background-color: #5c91f0;
        color: pink;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    .form{
        text-align: center;
        justify-self: center;
        color: #5c91f0;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    .form-control{
        border: 2px solid  pink;
        justify-self: center;
        color: #5c91f0;
        margin-top: 20px;
        margin-bottom: 20px;
    }
</style>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="form">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name of Product:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image of Product:</strong>
                <input type="file" name="image" class="form-control" placeholder="image">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail:</strong>
                <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>  
</form>
@endsection