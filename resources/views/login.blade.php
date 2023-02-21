@extends('master')
@section('content')

<div class="container offset-sm-4" style="height: 500px; padding:100px">
    <div class="row">
        <div class="col-sm-4">
            <form  action="login" method="POST">
                <div class="form-group p-3">
                @csrf
                  <label>Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group p-3">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary m-2">Login</button>
              </form>
        </div>
    </div>
</div>

@endsection
