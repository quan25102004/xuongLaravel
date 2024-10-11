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
                @foreach ($employee->toArray() as $key=>$value)
                <tr class="">
                    <td scope="row">{{$key}}</td>
                    <td>
                        @php
                            switch ($key) {
                                case 'profile_piture':
                                if($value){
                                    echo "<img src='data:image/jpeg;base64,". $value ."' width='100px'>";
                                    break;
                                }
                                case 'is_active':
                                echo $employee->is_active ?'<span class="badge bg-primary">Yes</span">':'<span class="badge bg-danger">NO</span>';
                                break;

                                default:
                                    echo $value;
                                    break;
                            }
                        @endphp
                    </td>
                </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
