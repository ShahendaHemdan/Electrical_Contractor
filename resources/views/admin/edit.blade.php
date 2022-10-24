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
<form action="{{route('admin.update',['user_id'=>$user->get(0)->userid])}}" method="post" class="row g-3"
    style="margin: 100px;padding: 15px;background-color: #efefef;border-radius: 10px;">
    @csrf
    <div class="col-md-6">
        <label class="form-label">Name</label>
        <input type="text" name="username" class="form-control" value="{{$user->get(0)->username}}">
    </div>
    @if(Auth::user()->id !== $user->get(0)->userid)
    <div class="col-md-6">
        <label class="form-label">Role</label>
        <select class="form-select" name="roleid">
            <option value="{{$user->get(0)->roleid}}" selected>{{$user->get(0)->userrole}}</option>
            @foreach($roles as $role)
            @if($role->id === $user->get(0)->roleid)
            @continue
            @endif
            <option value="{{$role->id}}">{{$role->name}}</option>
            @endforeach
        </select>
    </div>
    @endif
    <div class="col-6">
        <label class="form-label">E-mail</label>
        <input type="email" name="useremail" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$"
            value="{{$user->get(0)->useremail}}">
    </div>
    <div class="col-md-6">
        <label class="form-label">Password</label>
        <input type="password" name="userpassword" class="form-control">
    </div>
    <div class="col-12">
        <input type="hidden" name="_method" value="PATCH" />
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{route('admin.index')}}" class="btn btn-warning">Return</a>
    </div>
</form>
@endsection
