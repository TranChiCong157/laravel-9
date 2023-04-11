@extends('layouts.main ')
@section('title') 
    {{$title}}
@endsection



@section('content')
    
            <h1>Thêm danh mục</h1>
            <form action="" method="POST">
                @if ($errors->any())
                <div class="alert alert-danger text-center">
                    Vui lòng kiểm tra lại dữ liệu bạn vừa nhập
                </div>
               
                @endif   
               <div class="mb-3">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Nhập tên danh mục..." value="{{old('name')}}">
                @error('name')
                    <span style="color :red"> {{$message}}</span>
                @enderror
               </div>
                 {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> cach 2 --}}
                
                <button type="submit" class="btn btn-primary">Thêm danh mục</button>
                <a href="{{route('categories.list')}}" class="btn btn-warning">Quay lại</a>
                @csrf 
            </form>
          
   
@endsection

@section('css')
    
@endsection

@section('js')
    
@endsection