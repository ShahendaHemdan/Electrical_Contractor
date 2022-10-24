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
<div style="margin: 30px;border-radius: 10px;background-color: #efefef;padding: 20px;">
    <div class="card-body">
        <h5 class="card-title">{{$user->get(0)->username}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{$user->get(0)->useremail}}</h6>
        <p class="card-text">Role '{{$user->get(0)->userrole}}'
            <br>Created at {{$user->get(0)->usercat}}
            <br>Updated at {{$user->get(0)->useruat}}
        </p>
        <a href="{{route('admin.index')}}" class="card-link"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
    </div>
</div>
@endsection
