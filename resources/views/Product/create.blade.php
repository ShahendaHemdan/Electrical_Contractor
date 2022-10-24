@extends('layouts.app')
@section('title'){{__('EOC - Products')}}@endsection
@section('nav-items')
<li class="nav-item"></li>
<a class="nav-link" href="{{route('admin.index')}}">Home</a>
</li>
<li class="nav-item">
    <a class="nav-link active" href="{{route('product.index')}}">Products</a>
</li>
@endsection
@section('content')
<form action="{{route('product.store')}}" enctype="multipart/form-data" method="post" class="row g-3"
    style="margin: 20px;padding: 15px;background-color: #efefef;border-radius: 10px;">
    @csrf
    <div class="col-md-12">
        <label class="form-label">Name</label>
        <input type="text" required name="name" class="form-control">
    </div>
    <div class="col-md-12">
        <label class="form-label">Details</label>
        <input type="text" required name="details" class="form-control">
    </div>
    <div class="col-md-12">
        <label class="form-label">Image</label>
        <input type="file" id="details" class="form-control" aria-describedby="passwordHelpBlock" name="image">
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Publish</button>
        <a href="{{route('product.index')}}" class="btn btn-warning">Return</a>
    </div>
</form>
@endsection
