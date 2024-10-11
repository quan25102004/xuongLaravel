@extends('layouts.app')
@section('content')
<h2>Danh Sách</h2>
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
<a href="{{route('product.create')}}">Thêm</a>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">description</th>
                    <th scope="col">price</th>
                    <th scope="col">quantity</th>
                    <th scope="col">is_active</th>
                    <th scope="col">image</th>
                    <th scope="col">created_at</th>
                    <th scope="col">updated_at</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($data as $prd)
                <tr class="">
                    <td scope="row">{{$prd->id}}</td>
                    <td>{{$prd->name}}</td>
                    <td>{{$prd->description}}</td>
                    <td>{{$prd->price}}</td>
                    <td>{{$prd->quantity}}</td>
                    <td>@if ($prd->is_active)
                        <span class="badge bg-primary">Yes</span>
                    @else
                    <span class="badge bg-danger">No</span>
                    @endif</td>
                    <td>
                        <img src="{{Storage::url($prd->image)}}" alt="" width="100px"></td>
                    <td>{{$prd->created_at}}</td>
                    <td>{{$prd->updated_at}}</td>
                    <td>
<a href="{{route('product.show',$prd)}}">show</a>
<a href="{{route('product.edit',$prd)}}">sua</a>
                        <form action="{{route('product.destroy',$prd)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">xm</button>
                        </form>
                        <form action="{{route('product.forceDestroy',$prd)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">xc</button>
                        </form>


                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{$data->links()}}
@endsection
