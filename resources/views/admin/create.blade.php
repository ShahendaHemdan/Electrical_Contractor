@extends('layouts.app')
@section('title'){{__('EOC - Admin')}}@endsection
@section('nav-items')
<li class="nav-item"></li>
    <a class="nav-link active" href="{{route('admin.index')}}">Home</a>
</li>
<li class="nav-item">
    <a class="nav-link " href="{{route('product.index')}}">Products</a>
</li>
@endsection
@section('content')
<form action="{{route('admin.store')}}" method="post" class="row g-3"
    style="margin: 20px;padding: 15px;background-color: #efefef;border-radius: 10px;">
    @csrf
    <div class="col-md-6">
        <label class="form-label">Name</label>
        <input type="text" required name="username" class="form-control" placeholder="johny deep">
    </div>
    <div class="col-6">
        <label class="form-label">E-mail</label>
        <input type="email" required name="useremail" class="form-control" placeholder="example@app.com"
            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$">
    </div>
    <div class="col-md-6">
        <label class="form-label">Password</label>
        <input type="password" required name="userpassword" placeholder="Password" class="form-control">
    </div>
    <div class="col-md-6">
        <label class="form-label">Role</label>
        <select class="form-select" name="roleid">
            @foreach($roles as $role)
            <option value="{{$role->id}}">{{$role->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Create</button>
        <a href="{{route('admin.index')}}" class="btn btn-warning">Return</a>
    </div>
</form>
@endsection
