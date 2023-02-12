@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email">

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword">password</label>
                    <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password">
                    
                </div>
                <button type="submit" class="btn-btn-default">sumbit</button>
            </form>

        </div>
    </div>

</div>

@endsection