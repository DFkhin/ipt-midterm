@extends('base')

@section('content')
    <div class="">
        <div class="col-md-4 offset-md-4 mt-5">

            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <div class="card mt-3">
                <div class="card shadow mb-5 rounded border border-light ">
                    <div class="card-header" style=" background-color:rgb(53, 204, 166); rgb(255,255,255)">
                        <h3 class="text-center mt-2 ">LOG IN</h3>
                    </div>
                <div class="card-body">
                    <form action="{{ url('/login') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                            <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                            </div>
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mb-5 mt-1 col-sm-10 offset-sm-1">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                            <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                            <span class="input-group-text" id="basic-addon1" type="show" style="width: 40px; cursor: pointer;" onclick="myFunction()"><i class="fa fa-eye"></i></span>
                            </div>
                            @error('password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="d-flex">
                            <div class="flex-grow-1" style="font-size: 1.2em">
                                <a href="{{ '/register' }}">Sign up for an account</a>
                            </div>
                            <button class="btn btn-primary px-5" type="submit">Login</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
