@extends('layouts.main ')
@section('title') 
    {{$title}}
@endsection



@section('content')
@if(session('msg'))
<div class="alert alert-success">{{session('msg')}}</div>
@endif
    
            <h1>Cập nhật thành viên</h1>
            <form action="{{route('user.post-edit')}}" method="POST">
                @if ($errors->any())
                <div class="alert alert-danger text-center">
                    Vui lòng kiểm tra lại dữ liệu bạn vừa nhập
                </div>
               
                @endif   
               <div class="mb-3">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Nhập họ và tên của bạn..." value="{{old('name') ?? $userId->name}}">
                @error('name')
                    <span style="color :red"> {{$message}}</span>
                @enderror
               </div>
             
               <div class="mb-3">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Nhập email của bạn...." value="{{old('email') ?? $userId->email}}">
                @error('email')
                    <span style="color :red"> {{$message}}</span>
                @enderror
               </div>

               <div class="mb-3">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Nhập password..." value="{{old('password') ?? $userId->password}}">
                @error('password')
                    <span style="color :red"> {{$message}}</span>
                @enderror
               </div>

               <div class="mb-3">
                <label for="">Address</label>
                <input type="text" class="form-control" name="address" placeholder="Nhập địa chỉ của bạn...." value="{{old('address') ?? $userId->address}}">
                @error('address')
                    <span style="color :red"> {{$message}}</span>
                @enderror
               </div>
               <div class="mb-3">
                <label for="">Phone</label>
                <input type="text" class="form-control" name="phone" placeholder="Nhập số điện thoại của bạn..." value="{{old('phone') ?? $userId->phone}}">
                @error('phone')
                    <span style="color :red"> {{$message}}</span>
                @enderror
               </div>
                 {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> cach 2 --}}
                
                <button type="submit" class="btn btn-primary">Cập nhật</button>
                <a href="{{route('user.list')}}" class="btn btn-warning">Quay lại</a>
                @csrf 
            </form>
          
   
@endsection

@section('css')
    
@endsection

@section('js')
    
@endsection