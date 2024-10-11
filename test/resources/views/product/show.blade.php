@extends('master')
@section('content')
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">ten truong</th>
                    <th scope="col">gia tri</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($product->toArray() as $key=>$value)
                <tr class="">
                    <td scope="row">{{$key}}</td>
                    <td>@php
                        switch ($key) {
                            case 'image':
                                if($value){
                                    $url = Storage::url($value);
                                    echo "<img src='$url' width='100px'>";
                                    
                                }
                                break;
                            case 'is_active':
                                echo $product->is_active ? '<span class="badge bg-primary">Yes</span">':'<span class="badge bg-danger">NO</span>';
                                break;
                            default:
                                echo $value;
                                break;
                        }
                    @endphp</td>
                </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
