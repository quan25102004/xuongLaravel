@extends('admin.layout.master')
@section('title')
    Danh Mục
@endsection
@section('content')
<div class="container">
        <table class="table table-striped table-bordered ">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên Danh Mục</th>
                    <th scope="col">Tương tác</th>
                    
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $category)
                  <tr>
                    <th scope="row">{{$category->id}}</th>
                    <td>{{$category->name}}</td>
                    <td class="text-nowrap" style="width: 1px">
                        <a href="" class="btn btn-primary">Xem</a>
                        <a href="" class="btn btn-warning">Sửa</a>
                        <a href="" class="btn btn-danger">Xóa</a>
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