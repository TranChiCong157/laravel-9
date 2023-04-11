@extends('layouts.main ')
@section('title') 
    {{$title}}
@endsection

@section('content')
    <h1>Thêm Sản Phẩm</h1>

    <form action="" method="POST">
        @if ($errors->any())
        <div class="alert alert-danger text-center">
            Vui lòng kiểm tra lại dữ liệu bạn vừa nhập
        </div>
        @endif   

        <div class="mb-3">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Nhập tên sản phẩm..." value="{{old('name') ?? $productId->name}}">
            @error('name')
                <span style="color :red"> {{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Giá</label>
            <input type="text" class="form-control" name="price" placeholder="Nhập giá sản phẩm..." value="{{old('price') ?? $productId->price}}">
            @error('name')
                <span style="color :red"> {{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Số lượng</label>
            <input type="text" class="form-control" name="quantity" placeholder="Nhập số lượng sản phẩm..." value="{{old('quantity') ?? $productId->quantity}}">
            @error('name')
                <span style="color :red"> {{$message}}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Cập nhật sản phẩm</button>
        <a href="{{route('product.list')}}" class="btn btn-warning">Quay lại</a>
        @csrf 


    </form>

    
@endsection