@extends('master')
@section('content')
    <div class="container">
        <h2>Thêm mới</h2>
        @if (session()->has('succes') && !session()->get('succes'))
        <div class="alert alert-danger">{{session()->get('error')}}</div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('students.store') }}" method="post">
            @csrf
            <div class="mb-3 row">
                <label for="name" class="col-4 col-form-label">Name</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}" />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="email" id="email" value="{{old('email')}}" />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="passport_number" class="col-4 col-form-label">Passport</label>
                <div class="col-8">
                    <input type="number" min="0" class="form-control" name="passport_number" id="passport_number" value="{{old('passport_number')}}" />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="issued_date" class="col-4 col-form-label">Issued date</label>
                <div class="col-8">
                    <input type="date" class="form-control" name="issued_date" id="issued_date" value="{{old('issued_date')}}" />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="expiry_date" class="col-4 col-form-label">Expirydate</label>
                <div class="col-8">
                    <input type="date" class="form-control" name="expiry_date" id="expiry_date" value="{{old('expiry_date')}}" />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="classroom_id" class="col-4 col-form-label">Class Room</label>
                <div class="col-8">
                    <select name="classroom_id" class="form-control" id="classroom_id">
                        @foreach ($classrooms as $id => $name)
                            <option value="{{$id}}">{{ $name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="subjects" class="col-4 col-form-label">Subject</label>
                <div class="col-8">
                    <select name="subjects[]" class="form-control" multiple id="subjects">
                        @foreach ($subjects as $id => $name)
                            <option value="{{ $id }}">{{ $name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-4 col-form-label"></label>
                <div class="col-8">
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                </div>

            </div>

        </form>
    </div>
@endsection
