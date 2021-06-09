@extends('layouts.home')
@section('title','Update fruit')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12"><h1>Update fruit</h1></div>
            <div class="col-12">
                <form action="{{route('fruits.update',$fruit->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>
                            Fruit Name
                            <input type="text" class="form-control" name="name" value="{{$fruit->name}}" required>
                        </label>
                    </div>
                    <div class="form-group">
                        <label>
                            Price
                            <input type="number" class="form-control" name="price" value="{{$fruit->price}}" required>
                        </label>
                    </div>
                    <div class="form-group">
                        <label>
                            Description
                            <input type="text" class="form-control" name="description" value="{{$fruit->description}}"
                                   required>
                        </label>
                    </div>
                    <div class="form-group">
                        <label>
                            Image
                            <input type="file" class="form-control-file" name="image"
                                   value="{{asset('storage/'. $fruit->image)}}">
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Return</button>
                </form>
            </div>
        </div>
    </div>
@endsection
