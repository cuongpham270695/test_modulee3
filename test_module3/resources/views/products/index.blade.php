@extends('layouts.home')
@section('title','Danh sách sản phẩm')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12"><h1>Danh sách sản phẩm</h1></div>
            <div class="col-12">
                @if(\Illuminate\Support\Facades\Session::has('success'))
                    <p class="text-success">
                        <i class="fa fa-check"
                           aria-hidden="true"></i>{{ \Illuminate\Support\Facades\Session::get('success') }}
                    </p>
                @endif
            </div>
            <a href="{{route('fruits.create')}}" class="btn btn-primary">Add new fruit</a>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Loại sản phẩm</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($fruits)==0)
                    <tr>
                        <td colspan="5">Do not have data</td>
                    </tr>
                @else
                    @foreach($fruits as $key => $fruit)
                        <tr>
                            <th scope="row">{{++$key}}</th>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>
                                @if($product->image)
                                    <img src="{{asset('storage/'. $fruit->image)}}" alt=""
                                         style="width: 150px; height: 108px">
                                @else
                                    {{"Don't have image!"}}
                                @endif
                            </td>
                            <td>{{$product->type_id}}</td>
                            <td><a href="{{route('fruits.edit',$fruit->id)}}" class="btn btn-success">Edit</a></td>
                            <td><a href="{{route('fruits.destroy',$fruit->id)}}" class="btn btn-danger"
                                   onclick="return confirm('Are you sure to delete this fruit?')">Delete</a></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
