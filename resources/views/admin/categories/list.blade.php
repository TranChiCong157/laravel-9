@extends('layouts.main')

@section('title')
    
@endsection

@section('content')

@if (session('msg'))
<div class="alert alert-success">{{session('msg')}}</div>
@endif

<a href="{{route('categories.add')}}" class="btn btn-primary ">ADD Categories</a>

    <hr>

<table class="table table-bordered">
    <thead >
        <tr>
            <th width="5%">STT</th>
            <th>Tên danh mục</th>
          
            <th width = "5%">Sửa</th>
            <th width = "5%">Xoá</th>
        </tr>
    </thead>
    <tbody>
        @if(! empty($categories))
            @foreach ($categories as $item)
                
            
        
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->cate_name}}</td>
            <td><a href="" class="btn btn-warning btn-sm">Sửa</a></td>
            <td><a onclick="return confirm('Bạn có chắc chắn muốn xoá ?')" href="" class="btn btn-danger btn-sm">Xoá</a></td>
        </tr>
        @endforeach
        @else
        <tr>
            <td colspan="6">Không có danh mục </td>
        </tr>
        @endif
    </tbody>
</table>


    
@endsection