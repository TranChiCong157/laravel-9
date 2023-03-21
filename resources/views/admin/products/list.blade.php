@extends('layouts.main');
@section('title')
    {{$title}}
@endsection
@section('sidebar')
    @parent
    <h3>Product Sidebar</h3>
@endsection

@section('content')

@if (session('msg'))
<div class="alert alert-success">{{session('msg')}}</div>
@endif

<h1>LIST USER</h1>

    <a href="{{route('product.add')}}" class="btn btn-primary ">ADD PRODUCT</a>

    <hr>

    <table class="table table-bordered">
        <thead >
            <tr>
                <th width="5%">STT</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                {{-- <th>Ảnh</th>
                <th width = "15%">Date</th> --}}
                <th width = "5%">Sửa</th>
                <th width = "5%">Xoá</th>
            </tr>
        </thead>
        <tbody>
            @if(! empty($listProduct))
                @foreach ($listProduct as $item)
                    
                
            
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->quantity}}</td>
                {{-- <td>{{$item->phone}}</td>
                <td>{{$item->creat_at}}</td> --}}
                <td><a href="" class="btn btn-warning btn-sm">Sửa</a></td>
                <td><a onclick="return confirm('Bạn có chắc chắn muốn xoá ?')" href="" class="btn btn-danger btn-sm">Xoá</a></td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="6">Không có người dùng </td>
            </tr>
            @endif
        </tbody>
    </table>

@endsection

@section('css')
    
@endsection

@section('js')
    
@endsection