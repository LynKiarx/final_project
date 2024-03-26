@extends('products.layout')
@section('content')
<style>
    h2{
        border-radius: 20px;
        background-color: #5c91f0;
        color: pink;
    }
    .btn-success{
        background-color: #5c91f0;
        color: pink;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    .btn-success:hover {
        background-color:black;
    }
    .table-bordered{
        width: 80%;
        margin: auto;
        border-radius: 8px;
        padding: 30px;
        border: 5px solid pink;
        
    }
    .table-primary{
        background-color: pink;
        color: pink;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    .mainrow{
        border-radius: 8px;
        padding: 30px;
        border: 5px solid pink;
        box-shadow: 4px 
        background-color: #5c91f0;
        color: #fb6f92;
        font-size: 20px;
    }
    .btn-info{
        background-color: #5c91f0;
        color: pink;
    }
    .btn-primary{
        background-color: #5c91f0;
        color: pink;
    }
    .btn-danger{
        background-color: #5c91f0;
        color: pink;
    }
</style>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2><center>Skincare Product</center></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}">Create New Product</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
    <table class="table table-bordered">
        <tr class="table-primary">
            <th class="mainrow">No</th>
            <th class="mainrow">Image</th>
            <th class="mainrow">Name</th>
            <th class="mainrow">Details</th>
            <th class="mainrow">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr class="table-primary" >
            <td class="mainrow">{{ ++$i }}</td>
            <td class="mainrow"><img src="/images/{{ $product->image }}" width="100px"></td>
            <td class="mainrow">{{ $product->name }}</td>
            <td class="mainrow">{{ $product->detail }}</td>
            
            <td class="mainrow">
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $products->links() !!}
        
@endsection