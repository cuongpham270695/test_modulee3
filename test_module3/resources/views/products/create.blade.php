@extends('layouts.home')
@section('title','Thêm mới sản phẩm')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm sản phẩm</h1>
            </div>
            <div class="col-12 form-custom-validation" >
                <form method="post" action="{{route('products.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="inputName">
                            Tên sản phẩm
                            <input type="text" class="form-control" id="inputName" name="name" placeholder="Enter fruit name" >
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="inputPrice">
                            Giá
                            <input type="number" class="form-control" id="inputPrice" name="price" placeholder="Enter price" >
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="inputFile">
                            Image
                            <input type="file" class="form-control-file" id="inputFile" name="image">
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="inputDescription">
                            Loại sản phẩm
                            <select name="" id="">
                                <option value="">Cà phê</option>
                                <option value="">Sinh tố</option>
                            </select>
                        </label>
                    </div>
                    <div class="error-message">
                        @if($errors->any())
                            @foreach($errors->all() as $nameError)
                                <p style="color: red">{{$nameError}}</p>
                            @endforeach
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a type="submit" href="{{route('products.index')}}" class="btn btn-secondary">Return</a>
                </form>
                <a href="{{route('products.index')}}"></a>
            </div>
        </div>
    </div>
@endsection
