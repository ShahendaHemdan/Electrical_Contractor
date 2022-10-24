@extends('layouts.app')
@section('title'){{__('EOC - Product')}}@endsection
@section('nav-items')
<li class="nav-item"></li>
<a class="nav-link" href="/user">Home</a>
</li>
@endsection
@section('content')
<div class="card mb-3" style="max-width: 540px;margin: 5%;">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{asset('images/'.$product->image)}}" style="height: 100%;" class="img-fluid rounded-start"
                alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{$product->name}}</h5>
                <p class="card-text">{{$product->details}}</p>
                <p class="card-text"><small class="text-muted">Created at {{$product->created_at}}
                        <br>Updated at {{$product->updated_at}}</small></p>
                <a href="/user" class="card-link"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection
