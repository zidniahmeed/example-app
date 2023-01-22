@extends('main')
@section('title', 'baru')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">


                <form action="/store" method="post">
                    @csrf
                    <div class="mb-3">
                        <label>Email address</label>
                        <input type="email" class="form-control" name="email">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label >Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
