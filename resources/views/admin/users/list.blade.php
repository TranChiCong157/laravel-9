@extends('layouts.main')
@section('title')
    {{$title}}
@endsection

@section('sidebar')
    @parent
    {{-- <h3>Product Sidebar</h3> --}}
@endsection

@section('content')
@if(session('msg'))
<div class="alert alert-success">{{session('msg')}}</div>
@endif
    <h1>LIST USER</h1>

    <a href="{{route('user.add')}}" class="btn btn-primary ">ADD USER</a>

    <hr>

    <table class="table table-bordered">
        <thead >
            <tr>
                <th width="5%">STT</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
                <th width = "15%">Date</th>
                <th width = "5%">Sửa</th>
                <th width = "5%">Xoá</th>
            </tr>
        </thead>
        <tbody>
            @if(! empty($listUser))
                @foreach ($listUser as $item)
                    
                
            
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->address}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->creat_at}}</td>
                <td><a href="{{route('user.edit',['id'=>$item->id])}}" class="btn btn-warning btn-sm">Sửa</a></td>
                <td><a onclick="return confirm('Bạn có chắc chắn muốn xoá ?')" href="{{route('user.delete', ['id'=>$item->id])}}" class="btn btn-danger btn-sm">Xoá</a></td>
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