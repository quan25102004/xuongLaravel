@extends('master')
@section('content')
<h2>Thêm mới</h2>
@if (session()->has('succes') && !session()->get('succes'))
<div class="alert alert-danger">
    {{session()->get('error')}}
</div>
@endif
@if (session()->has('succes') && session()->get('succes'))
<div class="alert alert-success">
   thao tac thanh cong
</div>
@endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul> @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach</ul>
           
        </div>
    @endif
    <div class="container">
        <form action="{{route('product.update',$product)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3 row">
                <label for="name" class="form-lable" class="col-4 col-form-label">Name</label>
                <div class="col-8">
                    <input type="text" class="form-control"  name="name" id="name" value="{{$product->name}}"/>
                </div>

                <label for="description" class="form-lable" class="col-4 col-form-label">description</label>
                <div class="col-8">
                    <input type="text" class="form-control"  name="description" id="description" value="{{$product->description}}" />
                </div>

                <label for="price" class="form-lable" class="col-4 col-form-label">price</label>
                <div class="col-8">
                    <input type="text" class="form-control"  name="price" id="price"  value="{{$product->price}}"/>
                </div>
                <label for="quantity" class="form-lable" class="col-4 col-form-label">quantity</label>
                <div class="col-8">
                    <input type="text" class="form-control"  name="quantity" id="quantity" value="{{$product->quantity}}" />
                </div>
                <label for="is_active" class="form-lable"  class="col-4 col-form-label">is_active</label>
                <div class="col-8">
                    <input type="checkbox" class="form-checkbox" value="1" @checked($product->is_active)  name="is_active" id="is_active" />
                </div>
                <label for="image" class="form-lable" class="col-4 col-form-label">image</label>
                <div class="col-8">
                    <input type="file" class="form-control"  name="image" id="image" />
                    @if ($product->image)
                    <img src="{{Storage::url($product->image)}}" alt="" width="100px"></td>
                    @endif
                </div>

            </div>
            <button type="submit">Sua</button>
        </form>
    </div>
@endsection
