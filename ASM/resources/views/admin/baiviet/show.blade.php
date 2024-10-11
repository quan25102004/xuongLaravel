@extends('admin.layout.master')
@section('title')
    Chi tiết sản phẩm {{ $post->title }}
@endsection
@section('content')
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Trường</th>
                    <th scope="col">Giá trị</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($post->toArray() as $key => $value)
                    
                <tr class="">
                    <td scope="row">{{$key}}</td>
                    <td>@php
                        switch ($key) {
                            case 'image':
                                if($value){
                                    $url = Storage::url($value);
                                    echo "<img src='$url' width='100px' height='100px'>";
                                }
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
