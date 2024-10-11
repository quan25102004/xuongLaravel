@extends('master')
@section('content')
    <h2>Them moi</h2>
    @if (session()->has('succes') && !session()->get('succes'))
        <div class="alert alert-danger">
            {{session()->get('error')}}
        </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger" >
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
        
    @endif
    <div class="container">
        <form action="{{route('employees.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 row">
                <label for="firts_name" class="col-4 col-form-label">firts_name</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="firts_name" id="firts_name" value="{{old('firts_name')}}" />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="last_name" class="col-4 col-form-label">last_name</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="last_name" id="last_name" value="{{old('last_name')}}"/>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-4 col-form-label">email</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="email" id="email" value="{{old('email')}}"/>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="date_of_birth" class="col-4 col-form-label">date_of_birth</label>
                <div class="col-8">
                    <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" value="{{old('date_of_birth')}}"/>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="hire_date" class="col-4 col-form-label">hire_date</label>
                <div class="col-8">
                    <input type="date" class="form-control" name="hire_date" id="hire_date" value="{{old('hire_date')}}"/>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="salary" class="col-4 col-form-label">salary</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="salary" id="salary" value="{{old('salary')}}"/>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="is_active" class="col-4 col-form-label">is_active</label>
                <div class="col-8">
                    <input type="checkbox" class="form-checkbox" value="1" name="is_active" id="is_active" />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="deparment_id" class="col-4 col-form-label">deparment_id</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="deparment_id" id="deparment_id" value="{{old('deparment_id')}}"/>
                </div>
            </div>
             <div class="mb-3 row">
                <label for="manager_id" class="col-4 col-form-label">manager_id</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="manager_id" id="manager_id" value="{{old('manager_id')}}"/>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="address" class="col-4 col-form-label">address</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="address" id="address" />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="profile_piture" class="col-4 col-form-label">profile_piture</label>
                <div class="col-8">
                    <input type="file" class="form-control" name="profile_piture" id="profile_piture" />
                </div>
            </div>
            <div class="mb-3 row">
                <div class="offset-sm-4 col-sm-8">
                    <button type="submit" class="btn btn-primary">
                        Them
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
