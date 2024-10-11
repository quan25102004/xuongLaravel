@extends('admin.layout.master')
@section('title')
    Sửa sản phẩm {{$post->title}}
@endsection
@section('content')
@if (session()->has('succes') && !session()->get('succes'))
<div class="alert alert-danger">
    {{session()->get('error')}}
</div>
@endif
@if (session()->has('succes')&& session()->get('succes'))
<div class="alert alert-success">
  Thao tác thành công
</div>
@endif   
@if ($errors->any())
<div class="alert alert-danger mt-3 mb-3">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
    <form action="{{route('posts.update', $post)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="" class="form-label">Title</label>
        <input type="text" name="title" class="form-control" value="{{$post->title}}">
        <label for="content" class="form-label">Content</label>
        <input type="text" name='content' class="form-control" value="{{$post->content}}">
        <label for="" class="form-label">Image</label>
        <input type="file" name="image" class="form-control" value=""> 
        @if ($post->image)
        <img src="{{Storage::url($post->image)}}"  width="100px" height="100px" alt=""> <br>
        @endif
        <label for="" class="form-label">Category</label>
        <select name="category_id" id="category_id" class="form-control">
            @foreach ($category as $id =>$name)
            <option @selected($post->category_id == $id) value="{{$id}}">{{$name}}</option>
            @endforeach
        </select> <br>
        <label for="" class="form-label">Tags</label>
        <select name="tags[]" multiple id="tags" class="form-control">
            @foreach ($tag as $id=>$name)
            <option @selected(in_array($id,$postTags)) value="{{$id}}">{{$name}}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary mt-3">Sửa</button>
    </form>
@endsection