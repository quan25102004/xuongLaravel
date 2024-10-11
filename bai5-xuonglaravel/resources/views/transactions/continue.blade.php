@extends('master')
@section('content')
    <div class="container ">
        <h2>Xac thực</h2>
        <form action="{{route('transactions.update')}}" method="post">
            @csrf
            <div class="mb-3 row">
                <label for="amount" class="col-4 col-form-label">Amount</label>
                <div class="col-8">
                    <input type="number" disabled class="form-control" name="amount" id="amount" value="{{$transaction['amount']}}"/>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="account" class="col-4 col-form-label">Account</label>
                <div class="col-8">
                    <input type="number" disabled class="form-control" name="account" id="account" value="{{$transaction['account']}}"/>
                </div>
            </div>
     
            <div class="mb-3 row">
                <label for="account" class="col-4 col-form-label"></label>
                <div class="col-8">
                    <button type="submit">Chuyển khoản</button>
                </div>
            </div>
        </form>
        <form action="{{route('transactions.cancel')}}" method="post">
            @csrf
            <button type="submit">Hủy</button>
        </form>
    </div>
@endsection
