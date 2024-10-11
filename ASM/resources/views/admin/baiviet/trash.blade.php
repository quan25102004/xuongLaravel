@extends('admin.layout.master')
@section('title')
    Thùng giác
@endsection
@section('content')
<table class="table table-striped table-bordered mt-2">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Image</th>
        <th scope="col">Content</th>
        <th scope="col">Category_Name</th>
        <th>Tags</th>
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>
      @foreach ($trashs as $trash)
      {{-- @dd($post->tag->toArray()); --}}
      <tr>
        <th scope="row">{{$trash->id}}</th>
        <td>{{$trash->title}} </td>
        <td><img src="{{Storage::url($trash->image)}}" width="100px" height="100px" alt=""></td>
        <td ><div style=" display: -webkit-box; 
-webkit-line-clamp: 2;
-webkit-box-orient: vertical;
overflow: hidden">{{$trash->content}}</div></td>
        <td>{{$trash->category->name}}</td>
          <td>
            @foreach ($trash->tag as $tag)
                <span class="btn btn-info">{{$tag->name}}</span>
            @endforeach
          </td>
        <td class="text-nowrap" style="width: 1px">
            <a href="{{route('posts.restore',['id'=>$trash->id])}}" class="btn btn-primary">Khôi phục</a>
            <a href="{{route('posts.edit',$trash)}}" class="btn btn-warning">Xóa</a>
          
        </td>    
      </tr>           
      @endforeach
    </tbody>
</table>
{{$trashs->links()}}
@endsection
