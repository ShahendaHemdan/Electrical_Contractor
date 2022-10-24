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
@section('header-content')
<div class="Content-tobe-mutated">
    <!-- banner -->
    <section class="banner_main">
        <div id="banner1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="carousel-caption">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="text-bg">
                                        <h1> <span class="yellow"> Electrical </span> <br>Contractor</h1>
                                        <p>It is a long established fact that a reader will be distracted by the
                                            readablecontent
                                            of a page when looking at its layout. The point of using Lorem </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
<!-- end banner -->
@endsection
@section('content')
<div style="padding: 5px;">
    @foreach ($products as $product)
    <div class="card" style="float: left;width: 21%;margin: 15px;">
        <a href="{{route('product.show',['product_id'=>$product->id])}}"><img src="{{asset('images/'.$product->image)}}"
                style="height: 250px;" class="card-img-top" alt="..."></a>
        <div class="card-body" style="height: 170px;">
            <h5 class="card-title">{{$product->name}}</h5>
            <p class="card-text">{{$product->details}}</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">Last updated {{$product->updated_at->format('Y-m-d')}}</small>
            @if(in_array( Auth::user()->id,$users_id))
            <form action="{{route('product.destroy',['product_id'=>$product->id])}}" method="post" class="text-right">
                @csrf
                <input type="hidden" name="_method" value="delete" />
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
            </form>
            @endif
        </div>
    </div>
    @endforeach
    @if(in_array( Auth::user()->id,$users_id))
    <div class="card" style="float: left;width: 21%;margin: 15px;">
        <a href="{{route('product.create')}}" style="width:25%;margin: 5%;" class="btn btn-outline-secondary mx-auto"><i
                class="fa fa-plus-circle" aria-hidden="true"></i></a>
    </div>
    @endif
</div>
@endsection
