@extends('master.master')
@section('title', 'Laravel')

@section('content')
<div class="container">
    <div class="card mt-5">
        <div class="card-header text-center">
            <h4>Form Login</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('postLogin') }}" method="POST">
            @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group form-check"></div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection