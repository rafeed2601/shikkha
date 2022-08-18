@extends('master')
@section("content")
<div class="container my-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="login" method="POST">
                <div class="form-group">
                    @csrf
                <label for="myEmail">Email address</label>
                <input type="email" name="email" class="form-control" id="myEmail" placeholder="Email">
                </div>
                <div class="form-group">
                <label for="myPassword">Password</label>
                <input type="password" name="password" class="form-control" id="myPassword" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection