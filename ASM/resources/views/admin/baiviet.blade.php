@extends('admin.layout.master')
@section('title')
    Bài Viết
@endsection
@section('content')
<div class="container">
  @if (session()->has('succes') && !session()->get('succes'))
<div class="alert alert-danger">
    {{session()->get('error')}}
</div>
@endif
    @if (session()->has('succes') && session()->get('succes'))
        <div class="alert alert-success">
          Thao tác thành công
        </div>
    @endif
    <div>
      <div class="text-end d-flex justify-content-between">
        <a href="{{route('posts.trash')}}" class="btn btn-danger">Thùng giác</a>
        <a href="{{route('posts.create')}}" class="btn btn-success">Add</a>
      </div>
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
                  @foreach ($data as $post)
                  {{-- @dd($post->tag->toArray()); --}}
                  <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td>{{$post->title}} </td>
                    <td><img src="{{Storage::url($post->image)}}" width="100px" height="100px" alt=""></td>
                    <td ><div style=" display: -webkit-box; 
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden">{{$post->content}}</div></td>
                    <td>{{$post->category->name}}</td>
                      <td>
                        @foreach ($post->tag as $tag)
                            <span class="btn btn-info">{{$tag->name}}</span>
                        @endforeach
                      </td>
                    <td class="text-nowrap" style="width: 1px">
                        <a href="{{route('posts.show',$post)}}" class="btn btn-primary">Show</a>
                        <a href="{{route('posts.edit',$post)}}" class="btn btn-warning">Edit</a>
                        <form action="{{route('posts.destroy',$post)}}" method="post">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger" onclick="return confirm('Xác nhận xóa?')" type="submit">Xóa mềm</button>
                        </form>
                        <form action="{{route('posts.forceDestroy',$post)}}" method="post">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-warning" onclick="return confirm('Xác nhận xóa?')" type="submit">Xóa cứng</button>
                        </form>
                    </td>    
                  </tr>           
                  @endforeach
                </tbody>
          </table>
</div>
<div class="d-flex justify-content-center">
  <nav aria-label="Page navigation example" class="">
    {{$data->links()}}
  </nav>
</div>
@endsection