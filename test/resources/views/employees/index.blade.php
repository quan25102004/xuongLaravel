@extends('master')
@section('content')
<h2>Danh Sách</h2>
@if (session()->has('succes') && session()->get('succes'))
<div class="alert alert-success">
    Thao tac thanh cong
</div>
@endif
@if (session()->has('succes') && !session()->get('succes'))
<div class="alert alert-success">
    {{session()->get('error')}}
</div>
@endif
<a href="{{route('employees.create')}}">Thêm</a>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">firts_name</th>
                    <th scope="col">last_name</th>
                    <th scope="col">email</th>
                    <th scope="col">date_of_birth</th>
                    <th scope="col">hire_date</th>
                    <th scope="col">salary</th>
                    <th scope="col">is_active</th>
                    <th scope="col">deparment_id</th>
                    <th scope="col">manager_id</th>
                    <th scope="col">address</th>
                    <th scope="col">profile_piture</th>
                    <th scope="col">created_at</th>
                    <th scope="col">updated_at</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($data as $e)
                <tr class="">
                    <td scope="row">{{$e->id}}</td>
                    <td>{{$e->firts_name}}</td>
                    <td>{{$e->last_name}}</td>
                    <td>{{$e->email}}</td>
                    <td>{{$e->date_of_birth}}</td>
                    <td>{{$e->hire_date}}</td>
                    <td>{{$e->salary}}</td>
                    <td>@if ($e->is_active)
                        <samp class="badge bg-primary">YES</samp>
                    @else
                    <samp class="badge bg-danger">NO</samp>
                        
                    @endif</td>
                    <td>{{$e->deparment_id}}</td>
                    <td>{{$e->manager_id}}</td>
                    <td>{{$e->address}}</td>
                    <td>
                        <img src="data:image/jpeg;base64,{{ $e->profile_piture }}" alt="Profile Picture" width="100px"></td>
                    <td>{{$e->created_at}}</td>
                    <td>{{$e->updated_at}}</td>
                    <td>
                    <a href="{{route('employees.show',$e)}}">xem</a>
                    <a href="{{route('employees.edit',$e)}}">sua</a>
                    <form action="{{route('employees.destroy',$e)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Xac nhan xoa?')" type="submit">xm</button>
                    </form>
                    <form action="{{route('employees.forceDestroy',$e)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Xac nhan xoa?')" type="submit">xc</button>
                    </form>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{$data->links()}}
@endsection
