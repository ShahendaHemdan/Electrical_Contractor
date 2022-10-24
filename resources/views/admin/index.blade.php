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
<div class="container">
    <div class="row justify-content-center">
        <table class="table table-hover" style="margin: 100px;background-color: #dcdcdc24; border-radius: 10px;">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>CreatedAt</th>
                <th>Options</th>
                <th>Remove</th>
            </tr>
            @foreach($users as $user)
            <tr>
                <td>{{$user->username}}</td>
                <td>{{$user->useremail}}</td>
                <td>{{$user->userrole}}</td>
                <td>{{Carbon\Carbon::parse($user->usercat)->format('Y-m-d')}}</td>
                <td>
                    <a href="{{route('admin.edit',['user_id'=>$user->userid])}}" class="btn btn-warning"><i
                            class="fas fa-edit"></i></a>

                    <a href="{{route('admin.show',['user_id'=>$user->userid])}}" class="btn btn-primary"><i
                            class="fas fa-info"></i></a>
                </td>
                @if(Auth::user()->id !== $user->userid)
                <td>
                    <form action="{{route('admin.destroy',['user_id'=>$user->userid])}}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="delete" />
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
                @else
                <td>
                    <div class="btn btn-secondary disabled" disabled><i class="fas fa-ban"></i></div>
                </td>
                @endif
            </tr>
            @endforeach
            <tr>
                <td colspan="6" style="text-align: center">
                    <a href="{{route('admin.create')}}" style="width:25%;" class="btn btn-outline-secondary"><i
                            class="fa fa-plus-circle" aria-hidden="true"></i></a>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection
