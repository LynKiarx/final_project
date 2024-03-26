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
    .form-group{
        display: flex;
        color: #5c91f0;
        font-size:20px;
        justify-content: center;
    }
</style>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>
     
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $product->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $product->detail }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <img src="/images/{{ $product->image }}" width="500px">
            </div>
        </div>
    </div>
@endsection