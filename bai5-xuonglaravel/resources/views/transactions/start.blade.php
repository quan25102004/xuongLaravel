@extends('master')
@section('content')
    <div class="container ">
        <h2>Giao dịch</h2>
        @if (session()->has('succes') && session()->get('succes'))
            <div class="alert alert-primary">
                Thao tác thành công
            </div>
        @endif
        <form action="{{route('transactions.startTransaction')}}" method="post">
            @csrf
            <div class="mb-3 row">
                <label for="amount" class="col-4 col-form-label">Amount</label>
                <div class="col-8">
                    <input type="number" class="form-control" name="amount" id="amount"/>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="account" class="col-4 col-form-label">Account</label>
                <div class="col-8">
                    <input type="number" class="form-control" name="account" id="account"/>
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-8">
                    <input type="hidden" class="form-control" name="status" value="pending" id="status"/>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="account" class="col-4 col-form-label"></label>
                <div class="col-8">
                    <button type="submit">Tiếp tục</button>
                </div>
            </div>
        </form>
    </div>
@endsection
