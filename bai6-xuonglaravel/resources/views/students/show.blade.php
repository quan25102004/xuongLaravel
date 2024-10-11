@extends('master')
@section('content')
    <h2>Thông tin của {{$student->name}}</h2>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Trường</th>
                    <th scope="col">Giá trị</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($student->toArray() as $key => $value)
                <tr class="">
                    <td>{{$key}}</td>
                    <td>
                        @if ($key === 'passport')
                            @if ($student->passport)
                                {{ $student->passport->passport_number }}
                            @else
                                Chưa có hộ chiếu
                            @endif
                        @elseif ($key === 'classroom')
                            @if ($student->classroom)
                                {{ $student->classroom->name }} - ({{ $student->classroom->teacher_name }})
                            @else
                                Không có lớp học
                            @endif
                        @elseif ($key === 'subjects')
                            @if ($student->subjects->isNotEmpty()) 
                            {{-- isNotEmpty check xem có giá trị hay không --}}
                                @foreach ($student->subjects as $sb)
                                    <span class="badge bg-danger">{{ $sb->name }}</span>
                                @endforeach
                            @else
                            Chưa đăng ký môn học
                            @endif
                        @else
                            {{ $value }}
                        @endif
                    </td>
                </tr>
                @endforeach
 
            </tbody>
        </table>
    </div>
@endsection
