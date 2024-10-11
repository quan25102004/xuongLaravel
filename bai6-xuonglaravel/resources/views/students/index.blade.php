@extends('master')
@section('content')
    <h2>Danh Sách</h2>
    <div class="d-flex justify-content-between">
        <div>
        <a href="{{route('students.create')}}" class="btn btn-success">Thêm mới</a>
    </div>
    <div>
        <form action="{{ route('students.index') }}" method="GET">
            <input type="text" name="search">
            <button type="submit" class="btn btn-success">Tìm kiếm</button>
        </form>
    </div>
    </div>
    
    @if (session()->has('succes') && session()->get('succes'))
    <div class="alert alert-success">Thao tác thành công</div>
    @endif
    @if (session()->has('succes') && !session()->get('succes'))
    <div class="alert alert-danger">Bạn cần xóa Passport của sinh viên này trước</div>
    @endif
    
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Passport number</th>
                    <th scope="col">Class Room</th>
                    <th scope="col">Teacher name</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($data as $s)
                <tr class="">
                    <td scope="row">{{$s->id}}</td>
                    <td>{{$s->name}}</td>
                    <td>{{$s->email}}</td>
                    <td> @if($s->passport)
                        {{ $s->passport->passport_number }}
                    @else
                        Chưa có hộ chiếu
                    @endif</td>
                    <td>{{$s->classroom->name}}</td>
                    <td>{{$s->classroom->teacher_name}}</td>
                    <td>
                        @if ($s->subjects->isNotEmpty()) 
                            {{-- isNotEmpty check xem có giá trị hay không --}}
                                @foreach ($s->subjects as $sb)
                                    <span class="badge bg-danger">{{ $sb->name }}</span>
                                @endforeach
                            @else
                                Chưa đăng ký môn học
                            @endif
                    </td>
                    <td style="width: 1px" class="text-nowrap">
                        <a href="{{route('students.show',$s->id)}}" class="btn btn-primary">Show</a>
                        <a href="{{route('students.edit',$s->id)}}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('students.destroy',$s) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Xác nhận xóa?')" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
          
            </tbody>
        </table>
        {{$data->links()}}
    </div>
@endsection
